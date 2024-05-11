<?php

require_once 'model/pessoa.php';

class PessoaController {
    private $pessoa;
    
    public function __construct() {
        $this->pessoa = new Pessoa();
    }
    
    public function inserir() {
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);
    }
}


?>