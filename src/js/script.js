
const template = document.getElementById('projeto-template');
const container = document.getElementById('container-projetos');
const botaoAdicionar = document.getElementById('adicionar-projeto');



function adicionarNovoProjeto() {

    const novoProjeto = template.cloneNode(true);

    novoProjeto.style.display = 'flex';
    novoProjeto.removeAttribute('id');

    const inputs = novoProjeto.querySelectorAll('[name^="projetos"]');



    inputs.forEach(input => {


        input.value = '';
    });

    const botaoRemover = novoProjeto.querySelector('.remover-projeto');
    botaoRemover.addEventListener('click', function () {
        novoProjeto.remove();
    });

    console.log(novoProjeto)
    container.append(novoProjeto);

    projetoIndex++;
}


botaoAdicionar.addEventListener('click', adicionarNovoProjeto);

