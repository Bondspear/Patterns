<?php

namespace App\Singelton;

class Singelton
{
    # массив обьектов одиночки
    private static $instance = [];
    
    protected function __construct(){}
    protected function __clone(){}
    public function __wakeup(){ throw new \Exception('cant unseriallise');}
    
    #  получить новый обьект одиночки
    public static function getInstance(): Singelton
    {
       # подкласс
        $subClass = static::class;
        # если внутри массив обьектов одиночки нет подкласса
        if(!isset(self::$instance[$subClass]))
        {
            # то положить new static  в массив обьектов одиночки
            self::$instance[$subClass] = new static;
        }
         # вернуть екземпляр        
        return self::$instance[$subClass];
    }
    
    
}























