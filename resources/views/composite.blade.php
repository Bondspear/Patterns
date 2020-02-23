@extends('master')
@section('content')
<?php 
use App\Composite\Composite;
use App\Composite\Component;
use App\Composite\Leaf;

$leaf = new Leaf;
$component = new Composite;

function client(Component $component)
{
    echo $component->operation();
}

client($leaf) ;





?>









@endsection