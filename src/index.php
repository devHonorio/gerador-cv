<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gerador de Currículo</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

  <div
    class="flex flex-col max-w-2xl mx-auto gap-5 py-10 bg-linear-to-tr from-cyan-100 to-emerald-100 bg-no-repeat px-10 my-20 rounded-2xl">
    <header class="text-3xl font-black">Gerador de Currículo</header>

    <form action="gerador.php" method="post" class="flex flex-col gap-5">
      <div class="flex gap-2 flex-col">
        <label class="text-sm font-bold text-black/70" for="nome">Nome completo</label>
        <input id="nome" name="nome" required class="px-8 py-5 rounded-3xl font-semibold bg-white w-full">
      </div>

      <div class="flex gap-5">
        <div class="flex gap-2 flex-col">
          <label class="text-sm font-bold text-black/70" for="idade">Idade</label>
          <input id="idade" name="idade" type="number" typeof="numeric" required
            class="px-8 py-5 rounded-3xl font-semibold bg-white w-full">
        </div>

        <div class="flex gap-2 flex-col">
          <label for="habilitacao" class="text-sm font-bold text-black/70">Habilitação</label>
          <input id="habilitacao" name="habilitacao"
            class="px-8 py-5 rounded-3xl font-semibold bg-white w-full uppercase">
        </div>
      </div>

      <div class="flex gap-2 flex-col">
        <label for="email" class="text-sm font-bold text-black/70">Email</label>
        <input id="email" name="email" type="email" required
          class="px-8 py-5 rounded-3xl font-semibold bg-white w-full">
      </div>

      <div class="flex gap-2 flex-col">
        <label for="telefone" class="text-sm font-bold text-black/70">Telefone/WhatsApp</label>
        <input id="telefone" name="telefone" required min="11"
          class="px-8 py-5 rounded-3xl font-semibold bg-white w-full">
      </div>

      <div class="border-b-2 border-dashed my-5 border-black/50"></div>

      <div class="font-black text-xl">Projetos</div>

      <div id="projeto-template" class="border p-5 gap-5 flex flex-col rounded-xl">
        <button class="self-end remover-projeto" type="button">❌</button>

        <div class="flex gap-2 flex-col">
          <label for="telefone" class="text-sm font-bold text-black/70">Nome do projeto</label>
          <input id="telefone" name="projetos-nome[]" required min="11"
            class="px-8 py-5 rounded-3xl font-semibold bg-white w-full">
        </div>

        <div class="flex gap-2 flex-col">
          <label for="telefone" class="text-sm font-bold text-black/70">Link</label>
          <input id="telefone" name="projetos-link[]" required min="11"
            class="px-8 py-5 rounded-3xl font-semibold bg-white w-full">
        </div>

        <div class="flex gap-2 flex-col">
          <label for="telefone" class="text-sm font-bold text-black/70">Descrição do projeto</label>
          <input id="telefone" name="projetos-descricao[]" required min="11"
            class="px-8 py-5 rounded-3xl font-semibold bg-white w-full">
        </div>

      </div>


      <div id="container-projetos" class="flex flex-col gap-5">
      </div>


      <button id="adicionar-projeto" type="button"
        class="font-bold bg-white border-2 border-emerald-400 border-dashed py-3 rounded-xl">Adicionar
        projeto ➕</button>


      <div class="flex gap-2 flex-col">
        <label for="descricao" class="text-sm font-bold text-black/70">Motivação</label>
        <textarea id="descricao" name="descricao" required min="11"
          class="px-8 py-5 rounded-3xl font-semibold bg-white w-full"></textarea>
      </div>

      <button class="font-bold bg-emerald-700 py-3 rounded-xl text-white">Gerar
        currículo</button>
    </form>
  </div>
  <script src="js/script.js"></script>
</body>

</html>