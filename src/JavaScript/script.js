const menuToggle = document.getElementById('menu-toggle');
const navigationMenu = document.getElementById('navigation-menu');

// 2. Adiciona um "ouvinte de eventos" (event listener) ao botão
menuToggle.addEventListener('click', () => {
    // Verifica o estado atual do atributo 'data-visible' (true ou false)
    const visibility = navigationMenu.getAttribute('data-visible');

    if (visibility === "false") {
        // Se estiver escondido, mostra o menu
        navigationMenu.setAttribute('data-visible', 'true');
        menuToggle.setAttribute('aria-expanded', 'true'); // Atualiza acessibilidade
    } else {
        // Se estiver visível, esconde o menu
        navigationMenu.setAttribute('data-visible', 'false');
        menuToggle.setAttribute('aria-expanded', 'false'); // Atualiza acessibilidade
    }
});