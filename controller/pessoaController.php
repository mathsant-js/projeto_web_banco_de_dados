<?php

// O require_once serve para conectarmos os arquivos do projeto entre si, no caso está sendo conectada com pessoa.php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_web_banco_de_dados/model/pessoa.php';

// Classe que irá controlar os dados da classe pessoa que está no diretório model
class PessoaController {
    // A varíavel pessoa irá servir depois para setarmos os dados nela
    private $pessoa;
    
    // Método construtor
    public function __construct() {
        // pessoa se torna objeto recebe a classe Pessoa, que tem a estrutura de dados para receber o que o usuário digitar
        $this->pessoa = new Pessoa();
        // if para verificar a url do site para ver se é possível realizar a ação de inserir os dados
        if ($_GET['acao'] == 'inserir') {
            // Irá executar a função inserir
            $this->inserir();
        } else if ($_GET['acao'] == "atualizar") {
            $this->atualizar($_GET['id']);
        } else if($_GET['acao'] == 'excluir') {
            $this->excluir($_GET['id']);
        }
    }
    // Função para setarmos os valores do formulário que o usuário irá digitar
    public function inserir() {
        // Setando os dados recebidos do usuário
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);

        // pessoa recebendo o método inserir que possui os dados
        $this->pessoa->inserir();

    }

    // Esta função serve para mostrar os dados de pessoa
    public function listar() {
        return $this->pessoa->listar();
    }

    // Busca a id do usuário
    public function buscarPorId($id) {
        return $this->pessoa->buscarPorId($id);
    }

    // Função para setar as atualizações de informação
    public function atualizar($id) {
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);

        $this->pessoa->atualizar($id);
    }

    public function excluir($id) {
        $this->pessoa->excluir($id);
    }
    
}

// Serve para executar a própria classe PessoaController
new PessoaController();
?>