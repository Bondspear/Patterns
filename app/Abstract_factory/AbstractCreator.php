<?php

namespace App\Abstract_factory;
# это абстрактная фабрика
interface AbstractCreator
{
    public function createAbsPhonesApple(): AbsApple; 

    public function createAbsPhonesAndroid(): AbsAndroid;
}







