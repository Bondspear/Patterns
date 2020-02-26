<?php


namespace App\ChainResponsability;

interface Handler
{

    public function setNext(Handler $handler):Handler;

    public function handle($request);
}