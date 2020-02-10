<?php

namespace App\FactoryMethod;

# это продукт,выполняющий обязательные и
# необязательные методы
class ProductCat implements Product
{
    public function operation(): string
    {
        return "Result of ProductCat";
    }
}