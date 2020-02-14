<?php

namespace App\Builder;

class TextBuilder implements Builder
{
    public $product;
    
    
    public function reset(): void
    {
        $this->product = new Product1;
        
    }
    
    
  
    
    public function producePartA(): void
    {
        $this->product->parts[] = 'partA';

    }
    public function producePartB(): void
    {
        $this->product->parts[] = 'partB';
        
    }
    public function producePartC(): void
    {
        $this->product->parts[] = 'partC';  
     
    }
    
    
    
    public function getProduct(): Product1
    {   
        return $this->product;          
    }
}