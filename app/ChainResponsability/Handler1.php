<?php


namespace App\ChainResponsability;

class Handler1 extends AbstractHandler
{
    # я знаю что в меня нужно ложить дату
    # если дата true, то я обрабатываю её
    # а если false, если не могу оброботать
    # то я зову метод из родительского
    # класса под иминем "handle"
    public function handle($request)
    {
        if($request == 'some1')
        {
            echo 'some1';
        }else
        {
            return parent::handle($request);
        }
    }
}