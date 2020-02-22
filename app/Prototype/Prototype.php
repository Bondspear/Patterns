<?php

namespace App\Prototype;

class Prototype
{
    public $some1; #поле примитив
    
    
    public $some2; #поле содержащее обьект
    
    
    public $some3; #поле содержашее обьект с обратной ссылкой
    
    
     # метод клон не роботает с примитивами    
    public function __clone()
    {
        $this->some2  = clone $this->some2; 
       
        
        # особый способ клонировать обьект с обратной ссылкой
        $this->some3  = clone $this->some3; 
        $this->some3->prototype = $this;
       
        
    }
}


