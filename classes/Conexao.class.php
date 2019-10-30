<?php

  class Conexao {
    private $usuario = 'root'; //usuario banco de dados
    private $senha = ''; //senha banco de dados
    private $caminho = 'localhost'; //servidor banco de dados
    private $banco = 'petmonitor';  //nome do banco de dados
    private $conexao;

    public function __construct() {
      $this->conexao = mysqli_connect($this->caminho, $this->usuario, $this->senha) or die("Conexão com o banco de dados falhou!" . mysqli_error($this->conexao));

      mysqli_select_db($this->conexao, $this->banco) or die("Conexão com o banco de dados falhou!" . mysqli_error($this->conexao));

    }

    public function getconexao() {
      return $this->conexao;
    }
  }
