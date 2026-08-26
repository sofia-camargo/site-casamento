document.addEventListener('DOMContentLoaded', () => {
  // Target date: October 8, 2027 at 16:30:00
  const targetDate = new Date('2027-10-08T16:30:00').getTime();

  function updateCountdown() {
    const now = new Date().getTime();
    const difference = targetDate - now;

    if (difference < 0) {
      document.querySelectorAll('.countdown-number, .landing-countdown-num, .cd-number').forEach(el => {
        el.innerText = '0';
      });
      return;
    }

    const days    = Math.floor(difference / (1000 * 60 * 60 * 24));
    const hours   = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((difference % (1000 * 60)) / 1000);

    // Landing page
    const lDias    = document.getElementById('landing-dias');
    const lHoras   = document.getElementById('landing-horas');
    const lMinutos = document.getElementById('landing-minutos');
    const lSeg     = document.getElementById('landing-segundos');
    if (lDias)    lDias.innerText    = days;
    if (lHoras)   lHoras.innerText   = String(hours).padStart(2, '0');
    if (lMinutos) lMinutos.innerText = String(minutes).padStart(2, '0');
    if (lSeg)     lSeg.innerText     = String(seconds).padStart(2, '0');

    // Home page
    const hDias    = document.getElementById('home-dias');
    const hHoras   = document.getElementById('home-horas');
    const hMinutos = document.getElementById('home-minutos');
    const hSeg     = document.getElementById('home-segundos');
    if (hDias)    hDias.innerText    = days;
    if (hHoras)   hHoras.innerText   = String(hours).padStart(2, '0');
    if (hMinutos) hMinutos.innerText = String(minutes).padStart(2, '0');
    if (hSeg)     hSeg.innerText     = String(seconds).padStart(2, '0');
  }

  updateCountdown();
  setInterval(updateCountdown, 1000);

  // RSVP
  const googleScriptUrl = 'https://script.google.com/macros/s/AKfycbzHluN51yfHZfh4esp4VN1Zws97uK3kKd5sBdrXSNnLD48La8kUFyECdPawJV3kTRvX/exec';
  const rsvpForm = document.getElementById('form-rsvp');
  if (rsvpForm) {
    rsvpForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      const formData = new FormData(rsvpForm);
      const submitBtn = rsvpForm.querySelector('button[type="submit"]');
      const originalText = submitBtn.innerText;
      submitBtn.innerText = 'ENVIANDO...';
      submitBtn.disabled = true;

      const payload = {
        nome:           formData.get('nome') || '',
        telefone:       formData.get('telefone') || '',
        presenca:       formData.get('presenca') || 'Confirmada',
        data_registro:  new Date().toLocaleString('pt-BR')
      };

      try {
        if (googleScriptUrl) {
          fetch(googleScriptUrl, {
            method: 'POST',
            mode: 'no-cors',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(payload)
          }).catch(() => {});
        }
        fetch('api/rsvp.php', { method: 'POST', body: formData }).catch(() => {});
        const msg = payload.presenca === 'Confirmada'
          ? 'Presença confirmada com sucesso! Aguardamos você com muito carinho. 💜'
          : 'Sua resposta foi registrada. Sentiremos sua falta!';
        showToast(msg);
        rsvpForm.reset();
      } catch (err) {
        showToast('Presença registrada com sucesso! 💜');
        rsvpForm.reset();
      } finally {
        submitBtn.innerText = originalText;
        submitBtn.disabled = false;
      }
    });
  }

  // Scroll reveal
  revealElements();
});

// Toast
function showToast(message) {
  const existing = document.querySelector('.toast-msg');
  if (existing) existing.remove();
  const toast = document.createElement('div');
  toast.className = 'toast-msg';
  toast.innerText = message;
  document.body.appendChild(toast);
  setTimeout(() => {
    toast.style.opacity = '0';
    toast.style.transition = 'opacity 0.5s ease';
    setTimeout(() => toast.remove(), 500);
  }, 4000);
}

// Copy PIX Key
function copyPixKey(key, title) {
  if (navigator.clipboard && navigator.clipboard.writeText) {
    navigator.clipboard.writeText(key).then(() => showPixModal(key, title)).catch(() => fallbackCopy(key, title));
  } else {
    fallbackCopy(key, title);
  }
}

function showPixModal(key, title) {
  const modal = document.getElementById('pix-modal');
  const modalTitle = document.getElementById('pix-modal-title');
  const modalKey = document.getElementById('pix-modal-key');
  if (modal) {
    if (modalTitle) modalTitle.textContent = title;
    if (modalKey) modalKey.textContent = key;
    modal.style.display = 'flex';
  } else {
    showToast(`Chave PIX de "${title}" copiada: ${key}`);
  }
}

function fallbackCopy(text, title) {
  const tmp = document.createElement('input');
  tmp.value = text;
  document.body.appendChild(tmp);
  tmp.select();
  document.execCommand('copy');
  document.body.removeChild(tmp);
  showPixModal(text, title);
}

// Scroll Reveal
function revealElements() {
  const reveals = document.querySelectorAll('.reveal');
  const windowHeight = window.innerHeight;
  reveals.forEach(el => {
    const top = el.getBoundingClientRect().top;
    if (top < windowHeight - 50) el.classList.add('active');
  });
}

window.addEventListener('scroll', revealElements);
window.addEventListener('load', revealElements);
