<?php

  private $id_usuario;
  private $nome;
  private $logado;
  private $login;

  function getid_usuario() {
    return $this->id_usuario;
  }

  function getNome() {
    return $this->nome;
  }

  function getLogin() {
    return $this->login;
  }

  function getLogado() {
    return $this->logado;
  }

  function setid_usuario($id_usuario) {
    $this->id_usuario = $id_usuario;
  }

  function setNome($nome) {
    $this->nome = $nome;
  }

  function setLogin($login) {
    $this->login = $login;
  }

  function setLogado($logado) {
    $this->logado = $logado;
  }
