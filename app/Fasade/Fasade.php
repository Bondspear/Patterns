<?php

namespace App\Fasade;

class Fasade
{
    protected $subClass1;
    protected $subClass2;
    
    public function __construct()
    {
        $this->subClass1 =  new SubClass1;
        $this->subClass2 =  new SubClass2;
    }
    
    public function getMulti(int $x,int $y):int
    {
       return $this->subClass1->plus($x, $y);
    }
    
    public function getPlus(int $x,int $y):int
    {
      return  $this->subClass2->multiply($x, $y);
    }

}