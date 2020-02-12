<?php

namespace App\Adapter;
# это наше приложение,которое хочет роботать с сервисом но не может -потому что (допустим),
# разные интерфейсы
class Application
{
    public function appFunction()
    {
        echo 'some Target behavior';
    }
}


