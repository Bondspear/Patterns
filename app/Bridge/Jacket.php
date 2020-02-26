<?php

namespace App\Bridge;

class Jacket implements  Type
{
    public function typeIs():string
    {
        return 'Jacket ' . "\n";
    }
}