@extends('master')
@section('content')

<?php 

use App\Builder\Director;
use App\Builder\TextBuilder;



$x = new TextBuilder;
$director = new Director;




$director->setBuilder($x);





print_r($director->buildMaximumProduct() ) ;

print_r($director->buildMinimalProduct() ) ;








?>



@endsection