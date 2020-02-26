<?php


namespace App\ChainResponsability;

class Handler1 extends AbstractHandler
{
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