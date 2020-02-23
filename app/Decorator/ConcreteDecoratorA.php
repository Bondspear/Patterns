<?php

namespace App\Decorator;

class ConcreteDecoratorA extends Decorator
{
    public function operation()
    {
        return "A" . parent::operation() . "\n";
    }
}