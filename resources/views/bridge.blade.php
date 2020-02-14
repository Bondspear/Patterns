@extends('master')
@section('content')

<?php 

use App\Bridge\Sending;

use App\Bridge\ServiseGmailGateway;
use App\Bridge\ServiseMailRuGateway;
use App\Bridge\GmailServise;
use App\Bridge\MailRuServise;

$e = new GmailServise;
$y = new ServiseGmailGateway($e);

$k = new MailRuServise;
$z = new ServiseMailRuGateway($k);

$x = new Sending();
$c = new Sending();

?>

<ul>
  <li> {{$x->sending() }} -  {{ $y->method() }} </li>
  <li> {{$c->sending() }} -  {{ $z->method() }} </li>
</ul>


@endsection