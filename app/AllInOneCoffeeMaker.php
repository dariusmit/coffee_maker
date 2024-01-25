<?php

namespace App;

class AllInOneCoffeeMaker extends CoffeeMaker implements LatteInterface, CappuccinoInterface{

   public function makeLatte() {

      echo static::class . ' is making Latte Coffee' . '<br />';

   }

   public function makeCappuccino() {

      echo static::class . ' is making Cappuccino Coffee' . '<br />';

   }

}

?>
