<?php
namespace App\FactoryMethod;

# ��� �������,����������� ������������ � 
# �������������� ������

class ProductDog implements Product
{
    public function operation(): string
    {
        return "{Result of ProductDog}";
    }
}