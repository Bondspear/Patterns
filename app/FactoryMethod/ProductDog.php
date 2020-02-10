<?php
namespace App\FactoryMethod;

# это продукт,выполняющий обязательные и 
# необязательные методы

class ProductDog implements Product
{
    public function operation(): string
    {
        return "{Result of ProductDog}";
    }
}