<?php


namespace App\Picture;

class SaverState
{
    private $state;
    
    public function __construct($state)
    {
        $this->state = $state;
    }
    
    
    
    # я возвращаю эту дату
    public function getState():string
    {
        return $this->state;
    }
    
    
}