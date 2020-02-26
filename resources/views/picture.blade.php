<?php
use App\Picture\SupportSaveState;
use App\Picture\SaverState;
use App\Picture\LookingForState;

$sup = new SupportSaveState;
$looking = new LookingForState();


 $sup->setState("on");

$looking->setSaverState($sup->CreateSaverState() );


$sup->setState("off");



$sup->SetSaverState($looking->getSaverState() );

echo $sup->getState();