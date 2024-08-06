<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
    <title>Tela de Cadastro</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h2>Excluir</h2>
        <?php
        // cria um objeto e atribui a ele uma instância de pessoaController
        $pessoaController = new PessoaController();
        // variável pessoa que recebe o resgistro corresponente ao id passado para a função buscarPorId
        $pessoa = $pessoaController->buscarPorId($_GET['id']);
        ?>

        <!-- o método do formulário é definido como POST e sua ação (para onde os dados serão enviados) como o arquivo pessoaController.php, com a ação excluir e o id selecionado -->
        <form method="POST" action="controller/pessoaController.php?acao=excluir&id=<?php echo $pessoa['id']; ?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" disabled class="form-control" id="nome" name="nome" value="<?php echo $pessoa['nome']; ?>">
            </div>


            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" disabled class="form-control" id="endereco" name="endereco" value="<?php echo $pessoa['endereco']; ?>">
            </div>


            <div class="form-group">
                <label for="bairro">Bairro:</label>
                <input type="text" disabled class="form-control" id="bairro" name="bairro" value="<?php echo $pessoa['bairro']; ?>">
            </div>


            <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" disabled class="form-control" id="cep" name="cep" value="<?php echo $pessoa['cep']; ?>">
            </div>


            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" disabled class="form-control" id="cidade" name="cidade" value="<?php echo $pessoa['cidade']; ?>">
            </div>


            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" disabled class="form-control" id="estado" name="estado" value="<?php echo $pessoa['estado']; ?>">
            </div>


            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" disabled class="form-control" id="telefone" name="telefone" value="<?php echo $pessoa['telefone']; ?>">
            </div>


            <div class="form-group">
                <label for="celular">Celular:</label>
                <input type="text" disabled class="form-control" id="celular" name="celular" value="<?php echo $pessoa['celular']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Excluir</button>
        </form>
        <br>
    </div>
</body>

</html>