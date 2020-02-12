<?php

namespace App\Abstract_factory;
# это наши поставщики

class Provider implements AbstractMagazine
{
    public function createCounterFood(): CounterFood
    {
        return new SomeFood;
    }
       
    public function createCounterDrink(): CounterDrink
    {
        return new SomeDrink;
    }
}









