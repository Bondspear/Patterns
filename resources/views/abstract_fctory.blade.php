@extends('master')
@section('content')

<?php 

use App\Abstract_factory\Provider;
use App\Abstract_factory\Provider2;

$x =  new Provider;
$y =  new Provider2;


?>

<ul>
  <li> {{$x->createManufacturer()->description()}} </li>
</ul>
<hr>
<ul>
  <li> {{$y->createManufacturer()->description()}} </li>
</ul>



@endsection