<?php


namespace App\ChainResponsability;

class Handler3 extends AbstractHandler
{
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