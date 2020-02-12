<?php

namespace App\Abstract_factory;
# это продукт  на прилавке (напитков)
class SomeDrink implements CounterDrink
{
    public function description(){echo "provider-beer";}
}
