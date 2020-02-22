<?php

namespace App\Prototype;

class SomeClass
{
    public $prototype;
    public $proto = 11;
    
    
    public function __construct(Prototype $prototype)
    {
        $this->prototype = $prototype;

    }
    
    
}

