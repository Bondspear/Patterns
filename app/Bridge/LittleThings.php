<?php


namespace App\Bridge;

class LittleThings extends Clothes
{
    public $singleProduct;
    
    public function __construct(SingleProduct $singleProduct, Color $color)
    {
        $this->singleProduct = $singleProduct;
        $this->color = $color;
    }
}