<?php

namespace App\Abstract_factory;
# это продукт 2 на прилавке (еды)
class SomeFood2 implements Manufacturer
{
    public function description(){echo "provider2-apple";}
}
