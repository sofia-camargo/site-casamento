function contagemRegressiva() {
    const dataFinal = new Date(2027, 9, 8, 16, 0, 0); 
    const dataFinalEmMs = dataFinal.getTime(); // Data final em milissegundos

    let intervalo; 

    // Função de atualização
    const atualizarContagem = function() {
        const agora = new Date().getTime();
        let diferenca = dataFinalEmMs - agora;

        // Se o tempo acabou
        if (diferenca < 0) {
            clearInterval(intervalo);
            
            const elementoContagem = document.getElementById("countdown");
            if (elementoContagem) {
                 elementoContagem.style.display = 'none'; // Oculta a caixa de contagem
            }

            const elementoMensagem = document.getElementById("mensagem-final");
            if (elementoMensagem) {
                elementoMensagem.innerHTML = "🎉 O DIA CHEGOU! (08/10/2027) 🎉";
            }
            
            return;
        }

        const UM_SEGUNDO = 1000;
        const UM_MINUTO = UM_SEGUNDO * 60;
        const UMA_HORA = UM_MINUTO * 60;
        const UM_DIA = UMA_HORA * 24;

        const dias = Math.floor(diferenca / UM_DIA);
        const horas = Math.floor((diferenca % UM_DIA) / UMA_HORA);
        const minutos = Math.floor((diferenca % UMA_HORA) / UM_MINUTO);
        const segundos = Math.floor((diferenca % UM_MINUTO) / UM_SEGUNDO);

        const formatarTempo = (tempo) => tempo < 10 ? "0" + tempo : tempo;

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
