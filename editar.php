<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_web_banco_de_dados/controller/pessoaController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tela de Cadastro</title>
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>
        <!-- O action envia os dados para a pessoaController-->
         <?php
            // Instaciação da classe
            $pessoaControler = new PessoaController();
            // Puxa o id do usuário
            $pessoa = $pessoaControler->buscarPorId($_GET['id']);
         ?>
        <!--Para onde os dados do formulário-->
        <form method="POST" action="controller/pessoaController.php?acao=atualizar&id=<?php echo $pessoa['id'] ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <!--Coloca a informação do banco de dados-->
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $pessoa['nome']; ?>" aria-label="Username">
            </div>
            <br>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <!--Coloca a informação do banco de dados-->
                <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $pessoa['endereco']; ?>" aria-label="Username">
            </div>
            <br>
            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <!--Coloca a informação do banco de dados-->
                <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $pessoa['bairro']; ?>" aria-label="Username">
            </div>
            <br>
            <div class="form-group">
                <label for="cep">CEP:</label>
                <!--Coloca a informação do banco de dados-->
                <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $pessoa['cep']; ?>" aria-label="Username">
            </div>
            <br>
            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <!--Coloca a informação do banco de dados-->
                <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $pessoa['cidade']; ?>" aria-label="Username">
            </div>
            <br>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <!--Coloca a informação do banco de dados-->
                <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $pessoa['estado']; ?>" aria-label="Username">
            </div>
            <br>
            <div class="form-group">
                <label for="tel">Telefone:</label>
                <!--Coloca a informação do banco de dados-->
                <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $pessoa['telefone']; ?>" aria-label="Username">
            </div>
            <br>
            <div class="form-group">
                <label for="cel">Celular:</label>
                <!--Coloca a informação do banco de dados-->
                <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $pessoa['celular']; ?>" aria-label="Username">
            </div>
            <br>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </form>
    </div>
</body>
</html>