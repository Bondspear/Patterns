<?php

namespace App\Composite;

class Leaf extends Component
{
    public function operation():string
    {
        return 'leaf';
    }
}
