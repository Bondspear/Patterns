@extends('master')
@section('content')

<?php 
use App\Fasade\Fasade;

$servise = new Fasade();

echo "answer - " . $servise->getMulti(2, 3) . "\n";

echo "answer - " . $servise->getPlus(3, 3) . "\n";

?>









@endsection