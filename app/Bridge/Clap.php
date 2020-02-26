<?php

namespace App\Bridge;

class Clap implements SingleProduct
{
    public function spIs():string
    {
        return 'some clap' . "\n";
    }
}