<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jiúlia & Vinícius — 08 de Outubro de 2027</title>
  <meta name="description" content="Site de casamento de Jiúlia e Vinícius. Confirme sua presença e celebre conosco dia 08 de Outubro de 2027.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Arapey:ital@0;1&family=Great+Vibes&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>💍</text></svg>">
  <!-- Vue.js 3 Production CDN -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
</head>
<body id="top">
  <!-- ÁUDIO DE FUNDO (TRANSPARENTE / OCULTO COM AUTOPLAY) -->
  <audio id="bg-audio" loop preload="auto" style="display: none;">
    <source src="assets/audio/audio_CanonInD.mp3" type="audio/mpeg">
  </audio>

  <!-- ========== NAV (RESPONSIVA: NO CELULAR LOGO EM CIMA, MENU EMBAIXO) ========== -->
  <nav class="main-nav" id="main-nav">
    <div class="nav-left">
      <a href="#home" class="nav-link">INÍCIO</a>
      <a href="#info" class="nav-link">INFORMAÇÕES</a>
    </div>
    <div class="nav-monogram">
      <div class="monogram-text">
        <span class="monogram-j">J</span>
        <span class="monogram-sep">|</span>
        <span class="monogram-v">V</span>
      </div>
      <img src="assets/images/divider_garland.jpg" alt="Raminhos de Lavanda" class="monogram-garland-img">
    </div>
    <div class="nav-right">
      <a href="#confirmar-presenca" class="nav-link">CONFIRME SUA PRESENÇA</a>
      <a href="#lista-presentes" class="nav-link">LISTA DE PRESENTES</a>
    </div>
  </nav>

  <!-- ========== HERO SECTION (LARGURA TOTAL 100%) ========== -->
  <section class="hero-section" id="home">
    <!-- Raminhos minimalistas e delicados de lavanda nas laterais -->
    <div class="botanical-left">
      <svg viewBox="0 0 60 220" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M30 220 Q 35 140 28 30" stroke="#9d8eb5" stroke-width="0.8" stroke-linecap="round"/>
        <!-- Hastes finas e pétalas sutis de lavanda -->
        <ellipse cx="28" cy="25" rx="1.8" ry="3.8" fill="#a495bc" opacity="0.8"/>
        <ellipse cx="25" cy="38" rx="1.6" ry="3.2" fill="#b3a5c9" opacity="0.75" transform="rotate(-15 25 38)"/>
        <ellipse cx="32" cy="46" rx="1.6" ry="3.2" fill="#b3a5c9" opacity="0.75" transform="rotate(15 32 46)"/>
        <ellipse cx="24" cy="62" rx="1.8" ry="3.5" fill="#a495bc" opacity="0.8" transform="rotate(-20 24 62)"/>
        <ellipse cx="33" cy="72" rx="1.8" ry="3.5" fill="#a495bc" opacity="0.8" transform="rotate(20 33 72)"/>
        <ellipse cx="23" cy="90" rx="2" ry="4" fill="#8f7fa7" opacity="0.85" transform="rotate(-25 23 90)"/>
        <ellipse cx="34" cy="102" rx="2" ry="4" fill="#8f7fa7" opacity="0.85" transform="rotate(25 34 102)"/>
        <ellipse cx="22" cy="122" rx="2" ry="4.2" fill="#9d8eb5" opacity="0.8" transform="rotate(-30 22 122)"/>
        <ellipse cx="35" cy="135" rx="2" ry="4.2" fill="#9d8eb5" opacity="0.8" transform="rotate(30 35 135)"/>
        <!-- Folhas finas na base -->
        <path d="M31 160 Q 15 150 10 145" stroke="#92a884" stroke-width="0.7" opacity="0.7"/>
        <path d="M30 175 Q 48 165 52 160" stroke="#92a884" stroke-width="0.7" opacity="0.7"/>
      </svg>
    </div>

    <div class="botanical-right">
      <svg viewBox="0 0 60 220" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M30 220 Q 35 140 28 30" stroke="#9d8eb5" stroke-width="0.8" stroke-linecap="round"/>
        <ellipse cx="28" cy="25" rx="1.8" ry="3.8" fill="#a495bc" opacity="0.8"/>
        <ellipse cx="25" cy="38" rx="1.6" ry="3.2" fill="#b3a5c9" opacity="0.75" transform="rotate(-15 25 38)"/>
        <ellipse cx="32" cy="46" rx="1.6" ry="3.2" fill="#b3a5c9" opacity="0.75" transform="rotate(15 32 46)"/>
        <ellipse cx="24" cy="62" rx="1.8" ry="3.5" fill="#a495bc" opacity="0.8" transform="rotate(-20 24 62)"/>
        <ellipse cx="33" cy="72" rx="1.8" ry="3.5" fill="#a495bc" opacity="0.8" transform="rotate(20 33 72)"/>
        <ellipse cx="23" cy="90" rx="2" ry="4" fill="#8f7fa7" opacity="0.85" transform="rotate(-25 23 90)"/>
        <ellipse cx="34" cy="102" rx="2" ry="4" fill="#8f7fa7" opacity="0.85" transform="rotate(25 34 102)"/>
        <ellipse cx="22" cy="122" rx="2" ry="4.2" fill="#9d8eb5" opacity="0.8" transform="rotate(-30 22 122)"/>
        <ellipse cx="35" cy="135" rx="2" ry="4.2" fill="#9d8eb5" opacity="0.8" transform="rotate(30 35 135)"/>
        <path d="M31 160 Q 15 150 10 145" stroke="#92a884" stroke-width="0.7" opacity="0.7"/>
        <path d="M30 175 Q 48 165 52 160" stroke="#92a884" stroke-width="0.7" opacity="0.7"/>
      </svg>
    </div>

    <!-- Imagem de plano de fundo ampliada para pegar toda a largura -->
    <div class="hero-painting-wrapper reveal">
      <img src="assets/images/planodefundo_casal.png" alt="Aquarela do Casamento Jiúlia e Vinícius" class="hero-painting">
    </div>

    <div class="hero-content">
      <!-- Nomes do casal -->
      <h1 class="couple-name reveal">Jiúlia e Vinícius</h1>

      <!-- Data do casamento -->
      <p class="couple-date reveal">08 DE OUTUBRO DE 2027</p>

      <!-- Divisor sutil e elegante -->
      <div class="lavender-divider reveal">
        <svg viewBox="0 0 200 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <line x1="0" y1="10" x2="80" y2="10" stroke="#9d8eb5" stroke-width="0.7" opacity="0.5"/>
          <circle cx="100" cy="10" r="2.5" fill="#9d8eb5" opacity="0.7"/>
          <circle cx="91" cy="10" r="1.8" fill="#9d8eb5" opacity="0.45"/>
          <circle cx="109" cy="10" r="1.8" fill="#9d8eb5" opacity="0.45"/>
          <line x1="120" y1="10" x2="200" y2="10" stroke="#9d8eb5" stroke-width="0.7" opacity="0.5"/>
        </svg>
      </div>
    </div>
  </section>

  <!-- ========== COUNTDOWN (REATIVO COM VUE.JS) ========== -->
  <section class="countdown-section reveal" id="countdown-app">
    <div class="countdown-grid">
      <div class="countdown-item">
        <span class="cd-number">{{ days }}</span>
        <span class="cd-label">DIAS</span>
      </div>
      <div class="cd-dot">◆</div>
      <div class="countdown-item">
        <span class="cd-number">{{ hours }}</span>
        <span class="cd-label">HORAS</span>
      </div>
      <div class="cd-dot">◆</div>
      <div class="countdown-item">
        <span class="cd-number">{{ minutes }}</span>
        <span class="cd-label">MINUTOS</span>
      </div>
      <div class="cd-dot">◆</div>
      <div class="countdown-item">
        <span class="cd-number">{{ seconds }}</span>
        <span class="cd-label">SEGUNDOS</span>
      </div>
    </div>
  </section>

  <!-- ========== CITAÇÃO BÍBLICA (SEM FOTO DO CASAL) ========== -->
  <section class="quote-section reveal" id="info">
    <div class="quote-text-wrapper">
      <p class="bible-quote">
        "O amor é paciente, é bondoso, o amor não procura seus próprios interesses, não se ira. Tudo sofre, tudo crê, tudo espera. O amor jamais acaba."
      </p>
      <p class="bible-ref">1 CORÍNTIOS 13, 4-8.</p>
      <div class="lavender-divider" style="margin-top: 10px;">
        <svg viewBox="0 0 200 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <line x1="0" y1="10" x2="80" y2="10" stroke="#9d8eb5" stroke-width="0.7" opacity="0.5"/>
          <circle cx="100" cy="10" r="2.5" fill="#9d8eb5" opacity="0.7"/>
          <circle cx="91" cy="10" r="1.8" fill="#9d8eb5" opacity="0.45"/>
          <circle cx="109" cy="10" r="1.8" fill="#9d8eb5" opacity="0.45"/>
          <line x1="120" y1="10" x2="200" y2="10" stroke="#9d8eb5" stroke-width="0.7" opacity="0.5"/>
        </svg>
      </div>
    </div>
  </section>

  <!-- ========== INFO CARDS (ÍCONES MINIMALISTAS E REFINADOS) ========== -->
  <section class="info-cards-section reveal">
    <!-- Cerimônia -->
    <div class="info-card">
      <div class="info-icon">
        <svg viewBox="0 0 60 70" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- Capela minimalista delicada -->
          <line x1="30" y1="2" x2="30" y2="10" stroke="#9d8eb5" stroke-width="0.9" stroke-linecap="round"/>
          <line x1="26" y1="5" x2="34" y2="5" stroke="#9d8eb5" stroke-width="0.9" stroke-linecap="round"/>
          <path d="M12 36 L30 18 L48 36" stroke="#9d8eb5" stroke-width="0.9" stroke-linejoin="round"/>
          <rect x="18" y="36" width="24" height="30" stroke="#9d8eb5" stroke-width="0.9"/>
          <path d="M25 66 V 48 C 25 45 35 45 35 48 V 66" stroke="#9d8eb5" stroke-width="0.8"/>
          <circle cx="30" cy="29" r="2.5" stroke="#9d8eb5" stroke-width="0.8"/>
          <!-- Raminhos sutis -->
          <path d="M8 60 Q 6 48 10 40" stroke="#9d8eb5" stroke-width="0.6" opacity="0.6"/>
          <path d="M52 60 Q 54 48 50 40" stroke="#9d8eb5" stroke-width="0.6" opacity="0.6"/>
        </svg>
      </div>
      <h3 class="info-card-title">CERIMÔNIA</h3>
      <p class="info-card-venue">CAPELA MONTE ALEGRE</p>
      <p class="info-card-addr">Av. Comendador Pedro Morganti, s/n<br>Monte Alegre, Piracicaba – SP</p>
      <p class="info-card-time">16h30</p>
      <a href="https://www.google.com.br/maps/place/Av.+Comendador+Pedro+Morganti+-+Piracicaba,+SP/@-22.7042103,-47.6108704,17z/data=!3m1!4b1!4m6!3m5!1s0x94c62e3ce14d5e05:0x295ecf386cfb3835!8m2!3d-22.7042153!4d-47.6082955!16s%2Fg%2F11b6_6jntt?entry=ttu&g_ep=EgoyMDI2MDcyMi4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer" class="btn-map-link">COMO CHEGAR</a>
    </div>

    <!-- Recepção -->
    <div class="info-card">
      <div class="info-icon">
        <svg viewBox="0 0 60 70" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- Fachada arquitetônica Casa Lucca -->
          <path d="M6 32 L30 14 L54 32" stroke="#9d8eb5" stroke-width="0.9" stroke-linejoin="round"/>
          <rect x="10" y="32" width="40" height="34" stroke="#9d8eb5" stroke-width="0.9"/>
          <!-- Colunata frontal -->
          <line x1="16" y1="36" x2="16" y2="66" stroke="#9d8eb5" stroke-width="0.75"/>
          <line x1="24" y1="36" x2="24" y2="66" stroke="#9d8eb5" stroke-width="0.75"/>
          <line x1="36" y1="36" x2="36" y2="66" stroke="#9d8eb5" stroke-width="0.75"/>
          <line x1="44" y1="36" x2="44" y2="66" stroke="#9d8eb5" stroke-width="0.75"/>
          <!-- Porta central -->
          <rect x="27" y="44" width="6" height="22" stroke="#9d8eb5" stroke-width="0.8"/>
        </svg>
      </div>
      <h3 class="info-card-title">RECEPÇÃO</h3>
      <p class="info-card-venue">CASA LUCCA</p>
      <p class="info-card-addr">Praça Antônio Keller, 22<br>Monte Alegre, Piracicaba – SP</p>
      <p class="info-card-time">18h00</p>
      <a href="https://www.google.com.br/maps/place/Praca+Antonio+Keller,+22+-+Monte+Alegre,+Piracicaba+-+SP,+13415-020/@-22.7041203,-47.5940447,17z/data=!3m1!4b1!4m6!3m5!1s0x94c62e3c1ff67615:0xd51f460b9f42432e!8m2!3d-22.7041253!4d-47.5914698!16s%2Fg%2F11f_j07m1q?entry=ttu&g_ep=EgoyMDI2MDcyMi4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer" class="btn-map-link">COMO CHEGAR</a>
    </div>

    <!-- Traje -->
    <div class="info-card">
      <div class="info-icon">
        <svg viewBox="0 0 60 70" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- Cabide minimalista e silhueta elegante -->
          <circle cx="30" cy="12" r="4" stroke="#9d8eb5" stroke-width="0.85"/>
          <path d="M12 28 C 12 28 22 22 30 22 C 38 22 48 28 48 28" stroke="#9d8eb5" stroke-width="0.9" stroke-linecap="round"/>
          <line x1="30" y1="16" x2="30" y2="22" stroke="#9d8eb5" stroke-width="0.85"/>
          <!-- Silhueta estilizada -->
          <path d="M22 28 L 20 64 L 40 64 L 38 28" stroke="#9d8eb5" stroke-width="0.75" stroke-linejoin="round"/>
          <path d="M26 38 L 30 44 L 34 38" stroke="#9d8eb5" stroke-width="0.75"/>
        </svg>
      </div>
      <h3 class="info-card-title">TRAJE</h3>
      <p class="info-card-venue">ESPORTE FINO</p>
      <div class="color-palette">
        <span class="color-dot" style="background:#c8bfb0;"></span>
        <span class="color-dot" style="background:#a89e90;"></span>
        <span class="color-dot" style="background:#7a7060;"></span>
        <span class="color-dot" style="background:#9d8eb5;"></span>
      </div>
      <p class="info-card-addr" style="font-size:0.8rem; margin-top: 8px;">EVITE AS CORES BRANCA<br>E LAVANDA CLARO</p>
    </div>

    <!-- Presentes -->
    <div class="info-card">
      <div class="info-icon">
        <svg viewBox="0 0 60 70" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- Caixa de presente minimalista com laço delicado -->
          <rect x="12" y="28" width="36" height="36" stroke="#9d8eb5" stroke-width="0.9"/>
          <rect x="9" y="21" width="42" height="7" stroke="#9d8eb5" stroke-width="0.9"/>
          <line x1="30" y1="21" x2="30" y2="64" stroke="#9d8eb5" stroke-width="0.8"/>
          <!-- Laço superior -->
          <path d="M30 21 C 28 14 18 10 20 6 C 24 3 28 10 30 21 Z" stroke="#9d8eb5" stroke-width="0.8"/>
          <path d="M30 21 C 32 14 42 10 40 6 C 36 3 32 10 30 21 Z" stroke="#9d8eb5" stroke-width="0.8"/>
        </svg>
      </div>
      <h3 class="info-card-title">PRESENTES</h3>
      <p class="info-card-addr">O melhor presente é<br>sua presença!</p>
      <p class="info-card-addr" style="margin-top: 8px; font-size: 0.82rem;">Lista de presentes virtual<br>disponível abaixo.</p>
    </div>
  </section>

  <!-- ========== CONFIRMAR PRESENÇA ========== -->
  <section class="rsvp-full-section reveal" id="confirmar-presenca">
    <div class="section-lavender-header">
      <div class="lavender-divider">
        <svg viewBox="0 0 300 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <line x1="0" y1="10" x2="120" y2="10" stroke="#9d8eb5" stroke-width="0.7" opacity="0.5"/>
          <circle cx="150" cy="10" r="2.5" fill="#9d8eb5" opacity="0.7"/>
          <circle cx="138" cy="10" r="1.8" fill="#9d8eb5" opacity="0.45"/>
          <circle cx="162" cy="10" r="1.8" fill="#9d8eb5" opacity="0.45"/>
          <line x1="180" y1="10" x2="300" y2="10" stroke="#9d8eb5" stroke-width="0.7" opacity="0.5"/>
        </svg>
      </div>
      <h2 class="section-title-lavender">Confirme sua Presença</h2>
      <p class="section-sub-lavender">Atenção! A confirmação é individual.</p>
    </div>
    <div class="rsvp-form-container">
      <form id="form-rsvp">
        <div class="rsvp-field">
          <label class="rsvp-lbl" for="nome">NOME</label>
          <input type="text" id="nome" name="nome" class="rsvp-inp" placeholder="Seu nome completo" required>
        </div>
        <div class="rsvp-field">
          <label class="rsvp-lbl" for="telefone">TELEFONE</label>
          <input type="tel" id="telefone" name="telefone" class="rsvp-inp" placeholder="(00) 00000-0000" required>
        </div>
        <div class="rsvp-field">
          <label class="rsvp-lbl" for="presenca">PRESENÇA</label>
          <select id="presenca" name="presenca" class="rsvp-inp" required>
            <option value="Confirmada">Sim, confirmarei presença</option>
            <option value="Recusada">Não poderei comparecer</option>
          </select>
        </div>
        <button type="submit" class="btn-rsvp-new">CONFIRMAR</button>
      </form>
    </div>
  </section>

  <!-- ========== LISTA DE PRESENTES (16 ITENS COMPLETOS) ========== -->
  <section class="section-container reveal" id="lista-presentes">
    <div class="section-lavender-header">
      <div class="lavender-divider">
        <svg viewBox="0 0 300 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <line x1="0" y1="10" x2="120" y2="10" stroke="#9d8eb5" stroke-width="0.7" opacity="0.5"/>
          <circle cx="150" cy="10" r="2.5" fill="#9d8eb5" opacity="0.7"/>
          <circle cx="138" cy="10" r="1.8" fill="#9d8eb5" opacity="0.45"/>
          <circle cx="162" cy="10" r="1.8" fill="#9d8eb5" opacity="0.45"/>
          <line x1="180" y1="10" x2="300" y2="10" stroke="#9d8eb5" stroke-width="0.7" opacity="0.5"/>
        </svg>
      </div>
      <h2 class="section-title-lavender">Lista de Presentes</h2>
      <p class="section-sub-lavender">Para nós, a sua presença é o maior presente! Mas se desejar nos presentear, criamos essa lista para ajudar a construir nosso lar.</p>
    </div>

    <div class="presentes-grid">
      <!-- 1: Cafeteira 110v -->
      <div class="presente-card reveal">
        <div class="presente-img-wrapper">
          <img src="assets/images/cafeteira.jpg" alt="Cafeteira 110v">
        </div>
        <h3 class="presente-name">Cafeteira 110v</h3>
        <div class="presente-price">R$ 180,00</div>
        <button class="btn-comprar" onclick="copyPixKey('juh.marrafon@gmail.com', 'Cafeteira 110v')">COMPRAR</button>
      </div>

      <!-- 2: Liquidificador 1,25L -->
      <div class="presente-card reveal">
        <div class="presente-img-wrapper">
          <img src="assets/images/liquidificador.jpeg" alt="Liquidificador 1,25L">
        </div>
        <h3 class="presente-name">Liquidificador 1,25L</h3>
        <div class="presente-price">R$ 200,00</div>
        <button class="btn-comprar" onclick="copyPixKey('juh.marrafon@gmail.com', 'Liquidificador 1,25L')">COMPRAR</button>
      </div>

      <!-- 3: Jogo de Panelas Antiaderente -->
      <div class="presente-card reveal">
        <div class="presente-img-wrapper">
          <img src="assets/images/panelas.jpg" alt="Jogo de Panelas Antiaderente">
        </div>
        <h3 class="presente-name">Jogo de Panelas Antiaderente</h3>
        <div class="presente-price">R$ 800,00</div>
        <button class="btn-comprar" onclick="copyPixKey('juh.marrafon@gmail.com', 'Jogo de Panelas Antiaderente')">COMPRAR</button>
      </div>

      <!-- 4: Jogo de Lençol, 600 fios King Size -->
      <div class="presente-card reveal">
        <div class="presente-img-wrapper">
          <img src="assets/images/lencol.jpg" alt="Jogo de Lençol, 600 fios King Size">
        </div>
        <h3 class="presente-name">Jogo de Lençol, 600 fios King Size</h3>
        <div class="presente-price">R$ 195,00</div>
        <button class="btn-comprar" onclick="copyPixKey('juh.marrafon@gmail.com', 'Jogo de Lençol 600 fios')">COMPRAR</button>
      </div>

      <!-- 5: Jogo de toalhas 100% Algodão Egípcio -->
      <div class="presente-card reveal">
        <div class="presente-img-wrapper">
          <img src="assets/images/toalhas.jpeg" alt="Jogo de toalhas 100% Algodão Egípcio">
        </div>
        <h3 class="presente-name">Jogo de toalhas 100% Algodão Egípcio</h3>
        <div class="presente-price">R$ 325,00</div>
        <button class="btn-comprar" onclick="copyPixKey('juh.marrafon@gmail.com', 'Jogo de toalhas Algodão Egípcio')">COMPRAR</button>
      </div>

      <!-- 6: Geladeira Frost Free Enverse 447L -->
      <div class="presente-card reveal">
        <div class="presente-img-wrapper">
          <img src="assets/images/geladeira.jpeg" alt="Geladeira Frost Free Enverse 447L">
        </div>
        <h3 class="presente-name">Geladeira Frost Free Enverse 447L</h3>
        <div class="presente-price">R$ 4.300,00</div>
        <button class="btn-comprar" onclick="copyPixKey('juh.marrafon@gmail.com', 'Geladeira Frost Free 447L')">COMPRAR</button>
      </div>

      <!-- 7: Cooktop 5 bocas a gás -->
      <div class="presente-card reveal">
        <div class="presente-img-wrapper">
          <img src="assets/images/fogão.jpeg" alt="Cooktop 5 bocas a gás">
        </div>
        <h3 class="presente-name">Cooktop 5 bocas a gás</h3>
        <div class="presente-price">R$ 925,00</div>
        <button class="btn-comprar" onclick="copyPixKey('juh.marrafon@gmail.com', 'Cooktop 5 bocas a gás')">COMPRAR</button>
      </div>

      <!-- 8: Sofá retrátil em linho -->
      <div class="presente-card reveal">
        <div class="presente-img-wrapper">
          <img src="assets/images/sofá.jpeg" alt="Sofá retrátil em linho">
        </div>
        <h3 class="presente-name">Sofá retrátil em linho</h3>
        <div class="presente-price">R$ 6.300,00</div>
        <button class="btn-comprar" onclick="copyPixKey('juh.marrafon@gmail.com', 'Sofá retrátil em linho')">COMPRAR</button>
      </div>

      <!-- 9: Micro-ondas 1200W 110V -->
      <div class="presente-card reveal">
        <div class="presente-img-wrapper">
          <img src="assets/images/microondas.jpeg" alt="Micro-ondas 1200W 110V">
        </div>
        <h3 class="presente-name">Micro-ondas 1200W 110V</h3>
        <div class="presente-price">R$ 620,00</div>
        <button class="btn-comprar" onclick="copyPixKey('juh.marrafon@gmail.com', 'Micro-ondas 1200W 110V')">COMPRAR</button>
      </div>

      <!-- 10: Conjunto de facas profissional -->
      <div class="presente-card reveal">
        <div class="presente-img-wrapper">
          <img src="assets/images/conjuntoFacas.jpeg" alt="Conjunto de facas profissional">
        </div>
        <h3 class="presente-name">Conjunto de facas profissional</h3>
        <div class="presente-price">R$ 210,00</div>
        <button class="btn-comprar" onclick="copyPixKey('juh.marrafon@gmail.com', 'Conjunto de facas profissional')">COMPRAR</button>
      </div>

      <!-- 11: Botijão de gás com casco -->
      <div class="presente-card reveal">
        <div class="presente-img-wrapper">
          <img src="assets/images/botijao.jpeg" alt="Botijão de gás com casco">
        </div>
        <h3 class="presente-name">Botijão de gás com casco</h3>
        <div class="presente-price">R$ 250,00</div>
        <button class="btn-comprar" onclick="copyPixKey('juh.marrafon@gmail.com', 'Botijão de gás com casco')">COMPRAR</button>
      </div>

      <!-- 12: Smart TV 58 polegadas UHD LED -->
      <div class="presente-card reveal">
        <div class="presente-img-wrapper">
          <img src="assets/images/televisao.jpeg" alt="Smart TV 58 polegadas UHD LED">
        </div>
        <h3 class="presente-name">Smart TV 58 polegadas UHD LED</h3>
        <div class="presente-price">R$ 2.850,00</div>
        <button class="btn-comprar" onclick="copyPixKey('juh.marrafon@gmail.com', 'Smart TV 58 polegadas UHD')">COMPRAR</button>
      </div>

      <!-- 13: Caixa de som bluetooth -->
      <div class="presente-card reveal">
        <div class="presente-img-wrapper">
          <img src="assets/images/caixaSom.jpeg" alt="Caixa de som bluetooth">
        </div>
        <h3 class="presente-name">Caixa de som bluetooth</h3>
        <div class="presente-price">R$ 435,00</div>
        <button class="btn-comprar" onclick="copyPixKey('juh.marrafon@gmail.com', 'Caixa de som bluetooth')">COMPRAR</button>
      </div>

      <!-- 14: Kit churrasco 17 peças -->
      <div class="presente-card reveal">
        <div class="presente-img-wrapper">
          <img src="assets/images/kitChurrasco.jpeg" alt="Kit churrasco 17 peças">
        </div>
        <h3 class="presente-name">Kit churrasco 17 peças</h3>
        <div class="presente-price">R$ 1.410,00</div>
        <button class="btn-comprar" onclick="copyPixKey('juh.marrafon@gmail.com', 'Kit churrasco 17 peças')">COMPRAR</button>
      </div>

      <!-- 15: Fritadeira Elétrica sem óleo -->
      <div class="presente-card reveal">
        <div class="presente-img-wrapper">
          <img src="assets/images/fritadeira.jpeg" alt="Fritadeira Elétrica sem óleo">
        </div>
        <h3 class="presente-name">Fritadeira Elétrica sem óleo</h3>
        <div class="presente-price">R$ 265,00</div>
        <button class="btn-comprar" onclick="copyPixKey('juh.marrafon@gmail.com', 'Fritadeira Elétrica sem óleo')">COMPRAR</button>
      </div>

      <!-- 16: Purificador de água com painel digital -->
      <div class="presente-card reveal">
        <div class="presente-img-wrapper">
          <img src="assets/images/purificador.jpeg" alt="Purificador de água com painel digital">
        </div>
        <h3 class="presente-name">Purificador de água com painel digital</h3>
        <div class="presente-price">R$ 780,00</div>
        <button class="btn-comprar" onclick="copyPixKey('juh.marrafon@gmail.com', 'Purificador de água digital')">COMPRAR</button>
      </div>
    </div>
  </section>

  <!-- ========== FOOTER ========== -->
  <footer class="site-footer">
    <div class="footer-botanical">
      <svg viewBox="0 0 200 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <line x1="0" y1="20" x2="200" y2="20" stroke="#9d8eb5" stroke-width="0.6" opacity="0.3"/>
        <ellipse cx="60" cy="14" rx="2" ry="4" fill="#9d8eb5" opacity="0.5" transform="rotate(-20 60 14)"/>
        <ellipse cx="70" cy="10" rx="2" ry="4" fill="#9d8eb5" opacity="0.4" transform="rotate(-15 70 10)"/>
        <ellipse cx="80" cy="7" rx="2" ry="4" fill="#9d8eb5" opacity="0.5" transform="rotate(-5 80 7)"/>
        <ellipse cx="90" cy="10" rx="2" ry="4" fill="#9d8eb5" opacity="0.4" transform="rotate(10 90 10)"/>
        <ellipse cx="100" cy="8" rx="2" ry="4" fill="#9d8eb5" opacity="0.6"/>
        <ellipse cx="110" cy="10" rx="2" ry="4" fill="#9d8eb5" opacity="0.4" transform="rotate(-10 110 10)"/>
        <ellipse cx="120" cy="7" rx="2" ry="4" fill="#9d8eb5" opacity="0.5" transform="rotate(5 120 7)"/>
        <ellipse cx="130" cy="10" rx="2" ry="4" fill="#9d8eb5" opacity="0.4" transform="rotate(15 130 10)"/>
        <ellipse cx="140" cy="14" rx="2" ry="4" fill="#9d8eb5" opacity="0.5" transform="rotate(20 140 14)"/>
      </svg>
    </div>
    <p class="footer-love">COM AMOR</p>
    <p class="footer-names">Jiúlia e Vinícius</p>
    <p class="footer-date">08.10.2027</p>
  </footer>

  <!-- PIX Modal -->
  <div id="pix-modal" class="pix-modal" style="display:none;">
    <div class="pix-modal-box">
      <button class="pix-modal-close" onclick="document.getElementById('pix-modal').style.display='none'">✕</button>
      <h3 class="pix-modal-title" id="pix-modal-title">PRESENTE</h3>
      <p class="pix-modal-key" id="pix-modal-key">juh.marrafon@gmail.com</p>
      <p class="pix-modal-info">Chave PIX copiada para sua área de transferência.<br>Abra o app do seu banco e cole a chave para fazer o pagamento.</p>
    </div>
  </div>

  <!-- Toast -->
  <div id="toast-container"></div>

  <script src="js/main.js"></script>
</body>
</html>
