<?php

namespace App\Singelton;

class Config extends Singelton
{
   private $data = [];
   
   public function getValue(string $key): string
   {
       return $this->data[$key];
   }

   public function setValue(string $key, string $value): void
   {
       $this->data[$key] = $value;
   }
}













