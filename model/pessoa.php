<?php

// O require_once serve para conectarmos os arquivos do projeto entre si, no caso está sendo conectada com conexao.php
require_once $_SERVER['DOCUMENT_ROOT'] . '/projeto_web_banco_de_dados/controller/conexao.php';

// Criação da classe Pessoa para a estrutura das funções
class Pessoa{
    // Variáveis que guardam o que o usuário digitar
    private $id;
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;
    private $conexao;

    // Pega a id do usuário
    public function getId() {
        return $this->id;
    }

    // Seta a id
    public function setId($id) {
        $this->id = $id;
    }

    // Pega o nome do usuário
    public function getNome() {
        return $this->nome;
    }

    // Seta o nome
    public function setNome($nome) {
        $this->nome = $nome;
    }

    // Pega o endereço do usuário
    public function getEndereco() {
        return $this->endereco;
    }

    // Seta o endereço
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    // Pega o bairro do usuário
    public function getBairro() {
        return $this->bairro;
    }

    // Seta o bairro
    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    // Pega o CEP do usuário
    public function getCep() {
        return $this->cep;
    }

    // Seta o bairro
    public function setCep($cep) {
        $this->cep = $cep;
    }

    // Pega a cidade do usuário
    public function getCidade() {
        return $this->cidade;
    }

    // Seta a cidade
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    // Pega o estado do usuário
    public function getEstado() {
        return $this->estado;
    }

    // Seta o estado
    public function setEstado($estado) {
        $this->estado = $estado;
    }

    // Pega o telefone do usuário
    public function getTelefone() {
        return $this->telefone;
    }

    // Seta o telefone
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    // Pega o celular do usuário
    public function getCelular() {
        return $this->celular;
    }

    // Seta o celular
    public function setCelular($celular) {
        $this->celular = $celular;
    }

    // Método construtor
    public function __construct() {
        // A variável conexão se torna um objeto que recebe a classe conexão
        $this->conexao = new Conexao();
    }

    // Função para inserir os dados digitados pelo usuário
    public function inserir() {
        // Aqui ocorre a inserção de dados para o banco de dados
        $sql = "INSERT INTO pessoa (`nome`, `endereco`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `celular`) VALUES (?,?,?,?,?,?,?,?)";
        // Aqui preparará a conexão com o banco de dados para executar o comando acima
        $stmt = $this->conexao->getConexao()->prepare($sql);
        // Aqui será prepara os tipos de dados que o banco irá receber
        $stmt->bind_param('ssssssss', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular);
        // Serve para executar a linha acima
        return $stmt->execute();
    }

    // Função que serve para listar os dados da pessoa que estão armazenados no banco de dados
    public function listar(){
        // Chama a tabela com os dados
        $sql = "SELECT * FROM pessoa";
        // Aqui preparará a conexão com o banco de dados para executar o comando acima
        $stmt = $this->conexao->getConexao()->prepare($sql);
        // Executá o comando acima
        $stmt->execute();
        // O result receberá o resultado da coneulta do stmt
        $result = $stmt->get_result();
        // Criação da array pessoas
        $pessoas = [];
            // Este while irá servir para buscar os dados do result
            while($pessoa = $result->fetch_assoc()){
                // A array pessoas recebe o que está em pessoa
                $pessoas[] = $pessoa;
            }
        // Irá retornar a array pessoas
        return $pessoas;
    }
}

?>