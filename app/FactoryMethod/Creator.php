<?php

namespace App\FactoryMethod;

# ��� ��������� �����,�� ����� �������� �������
# ������ �������
 class Creator
{
    # ��� ��������� ������ ������,��������� �
    # ����� ������� ��������
    
    public function createProduct(): Product
    {
        # ��� ������� � ��� � �������,�����
        # ������ �������� ����������
        return new ProductMouse;
      //return new ProductCat;
      //return new ProductDog;
    }
    
    
   

}



















