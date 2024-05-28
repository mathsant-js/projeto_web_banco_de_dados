<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_web_banco_de_dados/controller/pessoaController.php'
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tela de Consulta</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Consulta</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $pessoaController = new PessoaController();
                    $pessoas = $pessoaController->listar();
                        foreach ($pessoas as $pessoa) {
                            ?>
                            <tr>
                                <th><?php echo $pessoa['nome']; ?></th>
                                <th><?php echo $pessoa['telefone'];?></th>
                                <th><?php echo $pessoa['celular'];?></th>
                                <th>Ações</th>
                            </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>