<?php

class MemberStatic {
  public static $PI = 3.14;

  public function returnValuePI() {
    return MemberStatic::$PI;
  }

  public static function returnStaticPI() {
    return MemberStatic::$PI;
  }
}

echo "<h1>" . MemberStatic::returnStaticPI() . "</h1>";