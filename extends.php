<?php

class Pessoa {
  public $nome;
  public $idade;
  public $login;
  public $password;

  function __construct($nome, $idade, $login, $password) {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->login = $login;
    $this->password = $password;
  }

  public function apresentar() {
    echo "Login: {$this->login} <br />";
    echo "Senha: {$this->password} <br />";
    echo "Nome: {$this->nome} <br />";
    echo "Idade: {$this->idade}";
  }

}

class Usuario extends Pessoa {
  public $login;
  public $password;

  function __construct($nome, $idade, $login, $password) {
    Pessoa::__construct($nome, $idade, $login, $password);
  }

  public function apresentar() {
    Pessoa::apresentar();
  }
}

$usuario = new Usuario('Vitor Luiz Duggen', 18, 'vduggen', 'vitor1013');
$usuario->apresentar();