<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_web_banco_de_dados/controller/pessoaController.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tela de Consulta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-black mb-5">
        <div class="container">
            <a class="navbar-brand text-light" href="#">Form MJS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active text-light" href="index.php">Cadastro</a>
                    <a class="nav-link text-light" aria-current="page" href="consulta.php?acao=consultar">Consultar</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <h2 class="text-light mb-5 mt-2">Consulta</h2>
        <table class="table table-dark">
            <thead>
                <tr class="text-light">
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Objeto da classe PessoaController
                $pessoaController = new PessoaController();
                // pessoas recebe a função de listar os dados
                $pessoas = $pessoaController->listar();
                /* pessoa recebe o que está em pessoas, mostra todos os dados registrados 
                         * no banco de dados
                        */
                foreach ($pessoas as $pessoa) {
                ?>
                    <tr>
                        <!-- Mostra os dados cadastrados pelo usuário-->
                        <th><?php echo $pessoa['nome']; ?></th>
                        <th><?php echo $pessoa['telefone']; ?></th>
                        <th><?php echo $pessoa['celular']; ?></th>
                        <th>
                            <!--Coloca a url de editar e puxa a id junto-->
                            <a class="btn btn-outline-primary me-3" href="editar.php?id=<?php echo $pessoa['id']; ?>&acao=editar">Editar</a>
                            <a class="btn btn-outline-danger" href="excluir.php?id=<?php echo $pessoa['id']; ?>&acao=semAcao">Excluir</a>
                        </th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-outline-light my-2">Página de Cadastro</a>
    </div>
</body>
<footer class="mt-5">
    <div class="card bg-black">
        <div class="container">
            <div class="card-header text-white">
                Developer
            </div>
            <div class="card-body text-white">
                <h5 class="card-title pb-3">Redes Sociais</h5>
                <li class="card-text">GitHub:
                    <a href="https://github.com/mathsant-js" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">mathsant-js</a>
                </li>
                <li>Instagram: <a href="https://www.instagram.com/matheus.jorge.deca.10/" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">matheus.jorge.deca.10</a></li>
            </div>
        </div>
    </div>
</footer>

</html>