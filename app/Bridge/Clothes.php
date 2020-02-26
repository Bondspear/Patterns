<?php

namespace App\Bridge;

class Clothes
{
    public $color;
    public $type;
    
    public function __construct(Color $color,Type $type)
    {
        $this->color = $color;
        $this->type = $type;
    }
}