<?php

namespace App\Proxy;

class RealClass implements Total
{
    public $data = [];
    
    public function some1():void{}
    public function some2():void{}
    
    public function slowOperation_AddRealData():array
    {
        array_push($this->data,'slow1','slow');
        return $this->data;
    }
}