<?php 

interface Car {
  function accelerate();
  function brake();
}

class Lamborghini implements Car {
  public $color;
  public $model;

  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }

  function accelerate() {
    return '<h1>Vrummmmm...</h1> <br />';
  }

  function brake() {
    return "<h1>brake...</h1> <br />";
  }
}

$aventador = new Lamborghini('green', 'Aventador SVJ');
echo '<h1>Color: <span style=' . "color:" . $aventador->color .'>' . $aventador->color . '</span></h1> <br />';
echo '<h1>Model: ' . $aventador->model . '</h1> <br />';

$urus = new Lamborghini('yellow', 'Urus');
echo '<h1>Color: <span style=' . "color:" . $urus->color .'>' . $urus->color . '</span></h1> <br />';
echo '<h1>Model: ' . $urus->model . '</h1> <br />';