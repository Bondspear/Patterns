<?php

namespace App\Decorator;

class Decorator implements Component
{
    public $component;
    
    public function __construct(Component $component)
    {
        $this->component = $component;
    }
    
    
    public function operation(){return $this->component->operation();}
}