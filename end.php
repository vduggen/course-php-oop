<?php

abstract class MyClassAbstract {
  abstract public function method1();

  public final function method2() {
    echo "I don't change ! <br />";
  }
}
class MyClass extends MyClassAbstract {
  function __construct() {
    MyClass::method2();
  }

  public function method1() {
    echo "Executing method1 <br />";
  }
}