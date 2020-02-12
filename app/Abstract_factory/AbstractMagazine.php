<?php

namespace App\Abstract_factory;
# это наш магазин абстрактно
interface AbstractMagazine
{
    # это наши прилавки
    public function createCounterFood(): CounterFood; 

       # это наши прилавки
    public function createCounterDrink(): CounterDrink;
}







