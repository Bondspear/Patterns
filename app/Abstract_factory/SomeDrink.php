<?php

namespace App\Abstract_factory;
# это продукт  на прилавке (напитков)
class SomeDrink implements Manufacturer2
{
    public function description(){echo "provider-beer";}
}
