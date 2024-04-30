<?php

class Conexao {
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "exemplo_aula_pw";
    private $conexao;

    public function __construct() {
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);

        if ($this->conexao->connect_error) {
            die("Falha na conexão: " . $this->conexao->connect_error);
        }
    }

    public function getConexao() {
        return $this->conexao;
    }
}

?>