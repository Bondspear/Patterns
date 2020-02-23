<?php

namespace App\Proxy;

class ProxyClass implements Total
{
    protected $real;
    
    public function __construct(RealClass $realClass)
    {
        $this->real = $realClass;
    }
    
    public function some1():void{}
    public function some2():void{}
    
    public function fastOperation_AddRealData():array
    {
        array_push($this->real->data,'proxy1','proxy2');
        return $this->real->data;
    }
}