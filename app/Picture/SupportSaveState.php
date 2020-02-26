<?php

namespace App\Picture;

class SupportSaveState
{
    private $state;
    
    # в меня можно положить разную дату
    public function setState(string $state):void
    {
        $this->state = $state;
        echo 'state setted ' . $this->state . "\n";
    }
    
    # я геттер из меня можно получить дату
    public function getState():string
    {
        return $this->state;
    }
    
    
    
    
    
    # я возвращаю новый обьект снимка с состоянием
    public function CreateSaverState():object
    {
        return new SaverState($this->state);
    }
    
    
    # я осстанавливаю из сохранённого состояния
    public function SetSaverState(SaverState $saverState):void
    {
        $this->state = $saverState->getState();
        echo 'restiring state' . "\n";
    }
    
}