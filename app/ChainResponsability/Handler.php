<?php


namespace App\ChainResponsability;
# это интерфейс (обработчик)
interface Handler
{
    #это метод "выбирите следующий" он принимает обьект оброботчик(себя же)
    #и возвращает обьект типа оброботчик (тоесть себя или класс
    #который реализует контракт с (обработчиком)
    public function setNext(Handler $handler):Handler;
    #это метод "обработчик" он роботает с входящими данными
    public function handle($request);
}