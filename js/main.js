/* ============================================
   JIÚLIA & VINÍCIUS — MAIN JAVASCRIPT
   Countdown (Vue.js), RSVP & PIX Modal
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {

  // ========== VUE.JS COUNTDOWN ==========
  if (window.Vue && document.getElementById('countdown-app')) {
    const { createApp, ref, onMounted, onUnmounted } = Vue;

    createApp({
      setup() {
        // Data e horário exato do casamento: 08/10/2027 às 16:30:00
        const targetDate = new Date('2027-10-08T16:30:00').getTime();
        const days = ref(0);
        const hours = ref('00');
        const minutes = ref('00');
        const seconds = ref('00');
        let timer = null;

        const updateCountdown = () => {
          const now = new Date().getTime();
          const difference = targetDate - now;

          if (difference <= 0) {
            days.value = 0;
            hours.value = '00';
            minutes.value = '00';
            seconds.value = '00';
            if (timer) clearInterval(timer);
            return;
          }

          days.value = Math.floor(difference / (1000 * 60 * 60 * 24));
          const h = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          const m = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
          const s = Math.floor((difference % (1000 * 60)) / 1000);

          hours.value = String(h).padStart(2, '0');
          minutes.value = String(m).padStart(2, '0');
          seconds.value = String(s).padStart(2, '0');
        };

        onMounted(() => {
          updateCountdown();
          timer = setInterval(updateCountdown, 1000);
        });

        onUnmounted(() => {
          if (timer) clearInterval(timer);
        });

        return {
          days,
          hours,
          minutes,
          seconds
        };
      }
    }).mount('#countdown-app');
  }

  // ========== RSVP FORM HANDLING ==========
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
        nome: formData.get('nome') || '',
        telefone: formData.get('telefone') || '',
        presenca: formData.get('presenca') || 'Confirmada',
        data_registro: new Date().toLocaleString('pt-BR')
      };

      try {
        // 1. Envio direto para o Google Apps Script (para planilhas)
        if (googleScriptUrl) {
          fetch(googleScriptUrl, {
            method: 'POST',
            mode: 'no-cors',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify(payload)
          }).catch(err => console.log('Google Script fetch note:', err));
        }

        // 2. Envio para o backend PHP
        fetch('api/rsvp.php', {
          method: 'POST',
          body: formData
        }).catch(err => console.log('PHP backend note:', err));

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

  // ========== SCROLL REVEAL ANIMATIONS ==========
  revealElements();
});

// Toast notification
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

// Copy PIX Key & Open Modal
function copyPixKey(key, title) {
  if (navigator.clipboard && navigator.clipboard.writeText) {
    navigator.clipboard.writeText(key).then(() => {
      showPixModal(key, title);
    }).catch(() => {
      fallbackCopy(key, title);
    });
  } else {
    fallbackCopy(key, title);
  }
}

function showPixModal(key, title) {
  const modal = document.getElementById('pix-modal');
  const modalTitle = document.getElementById('pix-modal-title');
  const modalKey = document.getElementById('pix-modal-key');

  if (modal) {
    if (modalTitle) modalTitle.textContent = title ? title.toUpperCase() : 'PRESENTE';
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
    if (top < windowHeight - 40) {
      el.classList.add('active');
    }
  });
}

window.addEventListener('scroll', revealElements);
window.addEventListener('load', revealElements);
