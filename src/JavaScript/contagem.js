function contagemRegressiva() {
    // Atenção: No objeto Date do JavaScript, os meses são de 0 (Janeiro) a 11 (Dezembro).
    // Outubro é o mês 9 (o décimo mês).
    const dataFinal = new Date(2027, 9, 8, 16, 0, 0); 
    const dataFinalEmMs = dataFinal.getTime(); // Data final em milissegundos

    // Variável para armazenar o intervalo, definida aqui para que a função atualizarContagem possa acessá-la.
    let intervalo; 

    // Função de atualização
    const atualizarContagem = function() {
        const agora = new Date().getTime();
        let diferenca = dataFinalEmMs - agora;

        // Se o tempo acabou
        if (diferenca < 0) {
            clearInterval(intervalo);
            
            // 1. Ocultar a contagem regressiva
            const elementoContagem = document.getElementById("countdown");
            if (elementoContagem) {
                 elementoContagem.style.display = 'none'; // Oculta a caixa de contagem
            }

            // 2. Mostrar a mensagem final no novo elemento (usando o ID 'mensagem-final' que sugeri no HTML)
            const elementoMensagem = document.getElementById("mensagem-final");
            if (elementoMensagem) {
                elementoMensagem.innerHTML = "🎉 O DIA CHEGOU! (08/10/2027) 🎉";
            }
            
            return;
        }

        // --- Constantes de Milissegundos ---
        const UM_SEGUNDO = 1000;
        const UM_MINUTO = UM_SEGUNDO * 60;
        const UMA_HORA = UM_MINUTO * 60;
        const UM_DIA = UMA_HORA * 24;

        // --- Cálculos ---
        const dias = Math.floor(diferenca / UM_DIA);
        const horas = Math.floor((diferenca % UM_DIA) / UMA_HORA);
        const minutos = Math.floor((diferenca % UMA_HORA) / UM_MINUTO);
        const segundos = Math.floor((diferenca % UM_MINUTO) / UM_SEGUNDO);

        // Função auxiliar para formatar com "0" na frente (05:09)
        const formatarTempo = (tempo) => tempo < 10 ? "0" + tempo : tempo;

        // --- Atualizar o HTML (usando os IDs 'dias', 'horas', 'minutos', 'segundos') ---
        // É importante que o HTML tenha a estrutura correta (com esses IDs) para que isso funcione.
        const elementoDias = document.getElementById("dias");
        const elementoHoras = document.getElementById("horas");
        const elementoMinutos = document.getElementById("minutos");
        const elementoSegundos = document.getElementById("segundos");
        
        if (elementoDias) elementoDias.textContent = formatarTempo(dias);
        if (elementoHoras) elementoHoras.textContent = formatarTempo(horas);
        if (elementoMinutos) elementoMinutos.textContent = formatarTempo(minutos);
        if (elementoSegundos) elementoSegundos.textContent = formatarTempo(segundos);
    };

    intervalo = setInterval(atualizarContagem, 1000);

    atualizarContagem();
}

contagemRegressiva();
