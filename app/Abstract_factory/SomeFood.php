<?php

namespace App\Abstract_factory;
# это продукт на прилавке (еды)
class SomeFood implements CounterFood
{
    public function description(){echo "provider-tomato";}
}
