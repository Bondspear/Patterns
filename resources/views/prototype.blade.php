@extends('master')
@section('content')
<?php 
use App\Prototype\Prototype;
use App\Prototype\SomeClass;


# создаю новый прототип
$p1 = new Prototype;
# задаю значения полю примитива
$p1->some1 = 1;
# задаю значения полю с обьектом
$p1->some2 = new DateTime();
# задаю значения полю с обьектом который содержит обратную ссылку
$p1->some3 = new SomeClass($p1);
# определяю новую переменную как клон прототипа
$p2 = clone $p1;
# юзаю её
echo gettype($p2);

?>












@endsection