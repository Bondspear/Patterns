@extends('master')
@section('content')

<?php 

use App\Abstract_factory\ConcreteCreator;
use App\Abstract_factory\ConcreteCreator2;

$x =  new ConcreteCreator;
$x->createAbsPhonesApple()->settings();
$x->createAbsPhonesAndroid()->settings();

$y =  new ConcreteCreator2;
$y->createAbsPhonesApple()->settings();
$y->createAbsPhonesAndroid()->settings();


?>




@endsection