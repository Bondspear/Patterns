@extends('master')
@section('content')

<?php 

use App\Adapter\Adapter;
use App\Adapter\Application;
use App\Adapter\Servise;

$x = new Application;
$y = new Servise;
$z = new Adapter($y);

?>


<ul>
  <li>{{ $x->appFunction() }} </li>
  <li>{{ $y->serviseFunction() }} </li>
  <li>{{ $z->appFunction() }} </li>
</ul>




@endsection