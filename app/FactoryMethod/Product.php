<?php

namespace App\FactoryMethod;

# это интерфейс,он говорить,какие методы обязанны
# быть у продуктов
interface Product
{
    public function operation(): string;
}
