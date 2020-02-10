@extends('master')
@section('content')

<?php 

use App\FactoryMethod\Creator;

# тут я вызываю фабричный метод
$x = new Creator;
# тут я выбираю метод,уже выбранной модэли продукта
echo $x->createProduct()->operation();



?>





@endsection
