<?php

class People {
  public $name;
  public $age;

  public function __construct($name, $age) {
    echo 'Construct here <br />';

    $this->name = $name;
    $this->age = $age;
  }

  public function __toString() {
    return "{$this->name} tem {$this->age} anos <br />";
  }

  public function sayHello() {
    echo "{$this->name} tem {$this->age} anos <br />";
  }
}

$people1 = new People('Vitor Luiz Duggen', 18);
echo $people1;
$people1->sayHello();