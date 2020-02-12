<?php

namespace App\Abstract_factory;
# это наш магазин абстрактно
interface AbstractMagazine
{
    # это наш производитель
    public function createManufacturer(): Manufacturer; 

}







