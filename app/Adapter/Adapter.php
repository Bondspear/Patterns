<?php

namespace App\Adapter;
# это адаптер - умный переходник
# он наследуется от приложения и получает структуру  приложения
# и внедряет зависимость сервиса и обробатывает данные с сервиса и допустим
# передаёт его в клиентский код
class Adapter extends Application
{
    public $servise;
    
    public function __construct(Servise $servise)
    {
        $this->servise = $servise;
    }
    
    
    
    public function appFunction()
    {
        return " Adapter translate" . strrev($this->servise->serviseFunction());
    }
}