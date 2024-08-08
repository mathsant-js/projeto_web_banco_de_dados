<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_web_banco_de_dados/controller/pessoaController.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>Tela de Cadastro</title>
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg bg-black mb-5">
        <div class="container">
            <a class="navbar-brand text-light" href="index.php">Form MJS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active text-light" href="index.php">Cadastro</a>
                    <a class="nav-link text-light" href="consulta.php?acao=consultar">Consultar</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <h2 class="text-white text-uppercase">Editar dados</h2>
        <!-- O action envia os dados para a pessoaController-->
        <?php
        // Instaciação da classe
        $pessoaControler = new PessoaController();
        // Puxa o id do usuário
        $pessoa = $pessoaControler->buscarPorId($_GET['id']);
        ?>
        <!--Para onde os dados do formulário-->
        <form method="POST" action="controller/pessoaController.php?acao=atualizar&id=<?php echo $pessoa['id'] ?>">
            <div class="form-floating my-5">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o seu nome" aria-label="Username" value="<?php echo $pessoa['nome']; ?>">
                <label for="nome">Nome</label>
            </div>
            <div class="form-floating mb-5">
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o seu endereço" aria-label="Username" value="<?php echo $pessoa['endereco']; ?>">
                <label for="endereco">Endereço</label>
            </div>

            <div class="form-floating mb-5">
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o seu bairro" aria-label="Username" value="<?php echo $pessoa['bairro']; ?>">
                <label for="bairro" class="mb-2">Bairro</label>
            </div>

            <div class="form-floating mb-5">
                <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o seu CEP" aria-label="Username" value="<?php echo $pessoa['cep']; ?>">
                <label for="cep" class="mb-2">CEP</label>
            </div>

            <div class="form-floating mb-5">
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a sua cidade" aria-label="Username" value="<?php echo $pessoa['cidade']; ?>">
                <label for="cidade" class="mb-2">Cidade</label>
            </div>

            <div class="form-floating mb-5">
                <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite o seu estado" aria-label="Username" value="<?php echo $pessoa['estado']; ?>">
                <label for="estado" class="mb-2">Estado</label>
            </div>

            <div class="form-floating mb-5">
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o seu telefone" aria-label="Username" value="<?php echo $pessoa['telefone']; ?>">
                <label for="tel" class="mb-2">Telefone</label>
            </div>

            <div class="form-floating mb-5">
                <input type="text" class="form-control" id="celular" name="celular" placeholder="Digite o seu celular" aria-label="Username" value="<?php echo $pessoa['celular']; ?>">
                <label for="cel" class="mb-2">Celular</label>
            </div>

            <input type="button" class="btn btn-outline-light" value="Editar" data-bs-toggle="modal" data-bs-target="#exampleModal">

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content bg-dark text-white">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-uppercase" id="exampleModalLabel">Editar cadastro</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Você tem certeza que gostaria de editar os dados do seu cadastro?
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-outline-light">Editar</button>
                            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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