<?php

namespace App;

class CappuccinoMaker extends CoffeeMaker implements CappuccinoInterface{

   public function makeCappuccino() {

      echo static::class . ' is making Cappuccino Coffee' . '<br />';

   }

}

?>
