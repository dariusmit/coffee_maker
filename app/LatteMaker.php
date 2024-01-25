<?php

namespace App;

class LatteMaker extends CoffeeMaker implements LatteInterface {

   public function makeLatte() {

      echo static::class . ' is making Latte Coffee' . '<br />';

   }

}

?>
