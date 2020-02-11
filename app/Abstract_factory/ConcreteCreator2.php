<?php

namespace App\Abstract_factory;
# ��� ���������� �������,��� ����� ���������� ���������� ������
# ���� �������
class ConcreteCreator2 implements AbstractCreator
{
    public function createAbsPhonesApple(): AbsApple 
    {
        return new SomeApple1;
    }
    
    public function createAbsPhonesAndroid(): AbsAndroid
    {
        return new SomeAndroid1;
    }
}
