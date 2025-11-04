const botaoImprimir = document.getElementById('imprimir');
const folha = document.querySelector('.folha')
const botaoVoltar = document.getElementById('voltar');

botaoImprimir.addEventListener('click', () => {

    botaoImprimir.classList.add('hidden')
    botaoVoltar.classList.add('hidden')
    folha.classList.remove("shadow-2xl", "p-10")
    setTimeout(() => {
        window.print()
        botaoImprimir.classList.remove('hidden')
        botaoVoltar.classList.remove('hidden')
        folha.classList.add("shadow-2xl", "p-10")
    })
})


botaoVoltar.addEventListener('click', () => {
    history.back()
})