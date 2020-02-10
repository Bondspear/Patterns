<?php

namespace App\FactoryMethod;

# это фабричный класс,он может вызывать обьекты
# разных классов
 class Creator
{
    # тут находится бизнес логика,связанная с
    # любой модэлью продукта
    
    public function createProduct(): Product
    {
        # это триггер и тут я выбираю,какую
        # модэль продукта подключить
        return new ProductMouse;
      //return new ProductCat;
      //return new ProductDog;
    }
    
    
   

}



















