<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tela de Cadastro</title>
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
                    <a class="nav-link active text-light" aria-current="page" href="#">Cadastro</a>
                    <a class="nav-link text-light" href="#">Consultar</a>
                    <a class="nav-link text-light" href="#">Editar</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <h2 class="text-light mb-5">Cadastro</h2>
        <!-- O action envia os dados para a pessoaController-->
        <form method="POST" action="controller/pessoaController.php?acao=inserir">
            <div class="form-group text-light mb-3">
                <label for="nome" class="mb-2">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o seu nome" aria-label="Username">
            </div>
            <br>
            <div class="form-group text-light mb-3">
                <label for="endereco" class="mb-2">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o seu endereço" aria-label="Username">
            </div>
            <br>
            <div class="form-group text-light mb-3">
                <label for="bairro" class="mb-2">Bairro:</label>
                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o seu bairro" aria-label="Username">
            </div>
            <br>
            <div class="form-group text-light mb-3">
                <label for="cep" class="mb-2">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o seu CEP" aria-label="Username">
            </div>
            <br>
            <div class="form-group text-light mb-3">
                <label for="cidade" class="mb-2">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a sua cidade" aria-label="Username">
            </div>
            <br>
            <div class="form-group text-light mb-3">
                <label for="estado" class="mb-2">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite o seu estado" aria-label="Username">
            </div>
            <br>
            <div class="form-group text-light mb-3">
                <label for="tel" class="mb-2">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o seu telefone" aria-label="Username">
            </div>
            <br>
            <div class="form-group text-light mb-3">
                <label for="cel" class="mb-2">Celular:</label>
                <input type="text" class="form-control" id="celular" name="celular" placeholder="Digite o seu celular" aria-label="Username">
            </div>
            <br>
            <input type="submit" class="btn btn-outline-light my-2 me-3" value="Cadastrar">
            <input type="submit" class="btn btn-outline-light my-2" value="Limpar Campos">
        </form>
    </div>
</body>
<footer class="mt-5">
    <div class="card bg-black">
        <div class="card-header text-white">
            Developer
        </div>
        <div class="card-body text-white">
            <h5 class="card-title">Redes Sociais</h5>
            <li class="card-text">GitHub:
                <a href="https://github.com/mathsant-js" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">mathsant-js</a>
            </li>
            <li>Instagram: <a href="https://www.instagram.com/matheus.jorge.deca.10/" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" target="_blank">matheus.jorge.deca.10</a></li>
        </div>
    </div>
</footer>

</html>