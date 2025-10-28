<?php

$dados_pessoais = [
    'nome' => $_POST['nome'] ?? 'Não informado',
    'idade' => $_POST['idade'] ?? 'Não informada',
    'habilitacao' => $_POST['habilitacao'] ?? 'Nenhuma',
    'email' => $_POST['email'] ?? 'Não informado',
    'telefone' => $_POST['telefone'] ?? 'Não informado',
    'motivacao' => $_POST['descricao'] ?? 'Motivação não fornecida',
];


$nomes_projetos = $_POST['projetos-nome'] ?? [];
$links_projetos = $_POST['projetos-link'] ?? [];
$descricoes_projetos = $_POST['projetos-descricao'] ?? [];

$projetos = [];
$total_projetos = count($nomes_projetos);

for ($i = 0; $i < $total_projetos; $i++) {

    if (isset($nomes_projetos[$i], $links_projetos[$i], $descricoes_projetos[$i])) {
        $projetos[] = [
            'nome' => $nomes_projetos[$i],
            'link' => $links_projetos[$i],
            'descricao' => $descricoes_projetos[$i],
        ];
    }
}


?>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title><?php echo $dados_pessoais['nome']; ?></title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="max-w-2xl mx-auto px-10 py-20">

    <div class="flex flex-col gap-10 font-semibold text-black/70 shadow-2xl rounded-xl p-10 folha">
        <section>
            <p class="text-4xl font-black mb-5 text-black"> <?php echo $dados_pessoais['nome']; ?></p>
            <div class="flex flex-col gap-1">
                <p><?php echo $dados_pessoais['telefone']; ?></p>
                <a href="mailto:<?php echo $dados_pessoais['email']; ?>"
                    class="underline text-blue-600"><?php echo $dados_pessoais['email']; ?></a>
                <p><?php echo $dados_pessoais['idade']; ?> anos</p>
                <p>Habilitação <span class="uppercase"><?php echo $dados_pessoais['habilitacao']; ?></span></p>
            </div>
        </section>
        <section>
            <h2 class="font-black text-xl text-black">Projetos</h2>
            <?php if (!empty($projetos)): ?>
                <?php foreach ($projetos as $projeto): ?>
                    <ul class="pl-5 mt-5">
                        <h3 class="">- <?php echo $projeto['nome']; ?></h3>
                        <ul class="pl-5">
                            <p>
                                Link:
                                <a class="underline text-blue-600" href="<?php echo $projeto['link']; ?>" target="_blank">
                                    <?php echo $projeto['link']; ?>
                                </a>
                            </p>
                            <p>
                                Descrição:
                                <?php echo $projeto['descricao']; ?>
                            </p>
                        </ul>
                    </ul>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Nenhum projeto foi adicionado.</p>
            <?php endif; ?>
        </section>
        <section>
            <h2 class="font-black text-xl text-black mb-5">Motivação</h2>
            <p><?php echo $dados_pessoais['motivacao']; ?></p>
        </section>
    </div>


    <div class="flex gap-5 mt-10 w-full">
        <button id="voltar" class="rounded-xl flex-1 py-2 border">Voltar</button>
        <button id="imprimir"
            class="bg-linear-to-tr from-emerald-500 to-cyan-500 rounded-xl flex-1 py-2 text-white font-black">Imprimir</button>
    </div>
    <script src="js/print.js"></script>

</body>

</html>