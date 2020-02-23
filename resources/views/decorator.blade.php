@extends('master')
@section('content')
<?php 
use App\Decorator\ConcreteComponent;
use App\Decorator\ConcreteDecoratorA;
use App\Decorator\ConcreteDecoratorB;
$comp = new ConcreteComponent();
$decA = new ConcreteDecoratorA($comp);
$decB = new ConcreteDecoratorB($comp);

echo $decA->operation();
echo $decB->operation();
echo $comp->operation();
?>







@endsection