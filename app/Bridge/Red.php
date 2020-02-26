<?php

namespace App\Bridge;

class Red implements  Color
{
    public function colorIs():string
    {
        return 'Red color'. "\n";
    }
}