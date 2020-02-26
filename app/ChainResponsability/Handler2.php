<?php


namespace App\ChainResponsability;

class Handler2 extends AbstractHandler
{
    public function handle($request)
    {
        if($request == 'some2')
        {
            echo 'some2';
        }else
        {
            return parent::handle($request);
        }
    }
}