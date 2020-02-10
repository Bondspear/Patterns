<?php

namespace App\FactoryMethod;

# это продукт,выполняющий обязательные и
# необязательные методы
class ProductMouse implements Product
{
    public function operation(): string
    {
        return "{Result of ProductMouse}";
    }
}