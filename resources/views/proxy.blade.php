<?php

namespace App\Proxy;

use App\Proxy\RealClass;
use App\Proxy\ProxyClass;



$proxy = new ProxyClass(new RealClass);
print_r($proxy->fastOperation_AddRealData() );

$real = new RealClass;
print_r($real->slowOperation_AddRealData());