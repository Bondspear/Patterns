<?php

namespace App\FactoryMethod;

# ��� �������,����������� ������������ �
# �������������� ������
class ProductMouse implements Product
{
    public function operation(): string
    {
        return "{Result of ProductMouse}";
    }
}