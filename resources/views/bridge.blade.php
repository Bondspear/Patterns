@extends('master')
@section('content')

<?php 
use App\Bridge\Clothes;
use App\Bridge\LittleThings;

use App\Bridge\Black;
use App\Bridge\Red;

use App\Bridge\Jacket;
use App\Bridge\Short;

use App\Bridge\Snake;
use App\Bridge\Clap;




$clothes = new Clothes(new Black,new Jacket);
$littleThings = new LittleThings(new Snake, new Black);


echo $clothes->color->colorIs();
echo $clothes->type->typeIs();
echo $littleThings->singleProduct->spIs();
echo $littleThings->color->colorIs();



$clothes = new Clothes(new Red,new Short);
$littleThings = new LittleThings(new Clap, new Red);


echo $clothes->color->colorIs();
echo $clothes->type->typeIs();
echo $littleThings->singleProduct->spIs();
echo $littleThings->color->colorIs();
?>



@endsection