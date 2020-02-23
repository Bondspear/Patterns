<?php

namespace App\Decorator;

class ConcreteDecoratorB extends Decorator
{
    public function operation()
    {
        return "B" . parent::operation() . "\n";
    }
}