<?php

namespace App\Abstract_factory;
# это конкретная фабрика,что может возвращает конкретные классы
# этой фабрики
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









