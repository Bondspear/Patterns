<?php

namespace App\Picture;

class LookingForState
{
    private $saverState;
    
    public function getSaverState()
    {
        return $this->saverState;
    }
    
    public function setSaverState(SaverState $saverState)
    {
        $this->saverState = $saverState;
    }
}

