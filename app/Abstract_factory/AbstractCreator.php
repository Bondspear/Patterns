<?php

namespace App\Abstract_factory;
# ��� ����������� �������
interface AbstractCreator
{
    public function createAbsPhonesApple(): AbsApple; 

    public function createAbsPhonesAndroid(): AbsAndroid;
}







