<?php

namespace App\FactoryMethod;

# ��� �������,����������� ������������ �
# �������������� ������
class ProductCat implements Product
{
    public function operation(): string
    {
        return "Result of ProductCat";
    }
}