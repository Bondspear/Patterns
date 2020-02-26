<?php

namespace App\ChainResponsability;
#это абстрактный класс "абстрактный оброботчик" он
# реализует контракт "обработчик" и поэтому он
# является типом "оброботчик" и его подклассы тоже
abstract class AbstractHandler implements Handler
{
    #переменная $nextHandler теперь это любой подкласс (оброботчика)
    private $nextHandler;
   
    
    public function setNext(Handler $handler):Handler
    {
        #когда запускается метод ,то  
        $this->nextHandler = $handler;
        return $handler;
    }
    
    
    public function handle($request)
    {
        if($this->nextHandler)
        {
            return $this->nextHandler->handle($request);
        }
        
        return null;
    }
}