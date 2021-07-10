<?php

abstract class Food {
  public $kg;
}

class Arroz extends Food {
  function __construct() {
    $this->kg = 0.75;
  }
}

class Feijao extends Food {
  function __construct() {
    $this->kg = 1;
  }
}

class Sorvete extends Food {
  function __construct() {
    $this->kg = 2;
  }
}

class People {
  public $kg;

  function __construct($kg) {
    $this->kg = $kg;
  }

  public function eat(Food $food) {
    $this->kg += $food->kg;
  }
}

$food1 = new Arroz();
$people1 = new People(50);
$people1->eat($food1);

echo $people1->kg;