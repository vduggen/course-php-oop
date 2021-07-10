<?php

trait MyTrait1 {
  public function test1() {
    return 'Hello1 <br />';
  }
}

trait MyTrait2 {
  public function test1() {
    return 'Hello2 <br />';
  }
}

class MyClass {
  use MyTrait1, MyTrait2 {
    // Resolve conflict
    MyTrait2::test1 insteadof MyTrait1;

    // or

    // use alias
    MyTrait1::test1 as testFirst;
  }
}

$instanceClass = new MyClass;
echo $instanceClass->test1();
echo $instanceClass->testFirst();