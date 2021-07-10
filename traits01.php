<?php

trait firstName {
  public function getFirstName($name) {
    return explode(' ', $name)[0];
  }
}

class User {
  use firstName;
}

$user = new User();
echo $user->getFirstName('João Luiz Duggen');