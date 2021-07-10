<?php

// This code is not working:

// interface Template {
//   function method1();
//   public function method2($parametro);
// }

// abstract class ClassAbstract extends Template {
//   public function method3() {
//     echo 'Estou funcionando';
//   }
// }

// class MyClass implements ClassAbstract {
//   function __construct($param) {
//     echo $param;
//   }
// }

// $example = MyClass();
// $example.method3();

// Result challenge:

// Resposta:
// 1 - extends em vez de implements na classe "ClassAbstract"
// 2 - usar o implements no lugar de extends na classe "MyClass"
// 3 - faltou implementar o method1 na classe "ClassAbstract"
// 4 - faltou implementar o method2 na classe "MyClass"
// 5 - faltou o new ao criar a instancia do "MyClass"
// 6 - faltou passar o parâmetro na instancia do "MyClass"
// 7 - acessando um método do objeto com o "." em vez de "->"

interface Template {
  function method1();
  public function method2($parametro);
}

abstract class ClassAbstract implements Template {
  public function method3() {
    echo "My Method 3 <br />";
  }
}

class MyClass extends ClassAbstract {
  function __construct($param) {
    
  }

  public function method1() {
    echo "My Method 1 <br />";
  }

  public function method2($param) {
    echo "My Method 2 <br />";
  }

  function method3() {
    ClassAbstract::method2('Param Fake');
  }
}

$example = new MyClass('Hello Param');
$example->method3();