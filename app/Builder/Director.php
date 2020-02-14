<?php

namespace App\Builder;

class Director
{
    public $builder;
    
    public function setBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }
    
    
    public function buildMinimalProduct(): Product1
    {
        $this->builder->reset();
        $this->builder->producePartA();
        return $this->builder->getProduct();
        
    }

    public function buildMaximumProduct(): Product1
    {
        $this->builder->reset();
        $this->builder->producePartA();
        $this->builder->producePartB();
        $this->builder->producePartC();
        return $this->builder->getProduct();
    }
}

















