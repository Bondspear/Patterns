<?php

namespace App\Abstract_factory;
# ��� ���������� �������,��� ����� ���������� ���������� ������
# ���� �������
class ConcreteCreator implements AbstractCreator
{
    public function createAbsPhonesApple(): AbsApple 
    {
        return new SomeApple2;
    }
       
    public function createAbsPhonesAndroid(): AbsAndroid
    {
        return new SomeAndroid2;
    }
}









