<?php

class People {
  public $name;
  public $age;

  function __construct($newName, $newAge) {
    echo 'Construct <br />';
    $this->name = $newName;
    $this->age = $newAge;
  }

  function __destruct() {
    echo 'Destroy';
  }

  function showPeople() {
    return "Name: {$this->name} Idade: {$this->age}";
  }
}

$people1 = new People('João Alfredo', 40);
echo $people1->showPeople(), '<br />';