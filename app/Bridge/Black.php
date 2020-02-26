<?php

namespace App\Bridge;

class Black implements  Color
{
    public function colorIs():string
    {
        return 'Black color ' . "\n";
    }
}