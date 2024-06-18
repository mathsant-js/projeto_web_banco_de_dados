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
                                <th><?php echo $pessoa['telefone'];?></th>
                                <th><?php echo $pessoa['celular'];?></th>
                                <th>
                                    <!--Coloca a url de editar e puxa a id junto-->
                                    <a href="editar.php?id=<?php echo $pessoa['id']; ?>">Editar</a>
                                </th>
                            </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>