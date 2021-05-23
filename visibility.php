<?php

class Visibility {
  public $public = 'Public';
  protected $protected = 'Protected';
  private $private = 'Private';

  public function showAttributes() {
    echo "<h1>Class Attribute Father: {$this->public}</h1> <br />";
    echo "<h1>Class Attribute Father: {$this->protected}</h1> <br />";
    echo "<h1>Class Attribute Father: {$this->private}</h1> <br />";

    $this->methodPrivate();
  }

  private function methodPrivate() {
    echo "<h1>This is a method private</h1> <br />";
  }

  private function viewInfosPHP() {
    echo phpinfo();
  }
}

class CallToParent extends Visibility {
  public function callParent() {
    echo "<h1>Class Attribute Child: {$this->public}</h1> <br />";
    echo "<h1>Class Attribute Child: {$this->protected}</h1> <br />";
  }
}

$instanceMyClass = new Visibility;
$instanceMyClass->showAttributes();

$testCall = new CallToParent;
$testCall->callParent();