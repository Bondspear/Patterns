<?php

namespace App\Abstract_factory;
# это наши поставщики

class Provider2 implements AbstractMagazine
{
    public function createManufacturer(): Manufacturer
    {
        return new SomeFood2;
    }


}
