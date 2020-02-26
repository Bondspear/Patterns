<?php

namespace App\Bridge;

class Snake implements SingleProduct
{
    public function spIs():string
    {
        return 'some snake' . "\n";
    }
}