@extends('master')
@section('content')

<?php 

use App\Singelton\logger;
use App\Singelton\Config;





Logger::log("Started");

$l1 = Logger::getInstance();
$l2 = Logger::getInstance();
if ($l1 === $l2) {
    Logger::log("Logger has a single instance.");
} else {
    Logger::log("Loggers are different.");
}



$config1 = Config::getInstance();
$login = "test_login";
$password = "test_password";
$config1->setValue("login", $login);
$config1->setValue("password", $password);


$config2 = Config::getInstance();
if ($login == $config2->getValue("login") &&
    $password == $config2->getValue("password")
    ) {
        Logger::log("Config singleton also works fine.");
    }
    
    Logger::log("Finished!");
    
    
    
$filename = 'C:\OSPanel\domains\patterns\app\Singelton\file\file.txt';    
echo $x = fopen($filename,'r');
echo "\n";
echo $z = fread($x,filesize($filename));
fclose($x);
?>







@endsection