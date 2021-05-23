<style>
.formatText {
  margin: 0;
  font-family: sans-serif;
}

.formatText:last-child {
  margin-top: .5rem;
}
</style>

<?php

class Cliente {
  // Atributos
  public $nome = 'Anônimo';
  public $idade = 18;

  public function apresentar() {
    return "Nome: {$this->nome} <br /> Idade: {$this->idade} <br />";
  }
}

$c1 = new Cliente;
$c1->nome = 'Vitor Luiz Duggen';
$c1->idade = 23;
echo $c1->apresentar();

$c2 = new Cliente;
$c2->nome = 'João Alfredo';
$c2->idade = 45;
echo $c2->apresentar();

?>
