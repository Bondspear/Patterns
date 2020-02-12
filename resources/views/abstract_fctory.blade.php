@extends('master')
@section('content')

<?php 

use App\Abstract_factory\Provider;
use App\Abstract_factory\Provider2;

$x =  new Provider;
$y =  new Provider2;


?>

<ul>
  <li> {{$x->createCounterFood()->description()}} </li>
  <li> {{$x->createCounterDrink()->description()}} </li>
</ul>
<hr>
<ul>
  <li> {{$y->createCounterFood()->description()}} </li>
  <li> {{$y->createCounterDrink()->description()}} </li>
</ul>



@endsection