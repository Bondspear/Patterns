<?php

namespace App\Abstract_factory;
# это наши поставщики

class Provider2 implements AbstractMagazine
{
    public function createCounterFood(): CounterFood
    {
        return new SomeFood2;
    }
    
    public function createCounterDrink(): CounterDrink
    {
        return new SomeDrink2;
    }

}
