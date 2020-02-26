<?php


namespace App\ChainResponsability;

class Handler3 extends AbstractHandler
{
    # я знаю что в меня нужно ложить дату
    # если дата true, то я обрабатываю её
    # а если false, если не могу оброботать
    # то я зову метод из родительского
    # класса под иминем "handle"
    public function handle($request)
    {
        if($request == 'some3')
        {
            echo 'some3';
        }else
        {
            return parent::handle($request);
        }
    }
}