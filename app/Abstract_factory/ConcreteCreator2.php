<?php

namespace App\Abstract_factory;
# это конкретная фабрика,что может возвращает конкретные классы
# этой фабрики
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
