<?php 
use App\ChainResponsability\Handler;
use App\ChainResponsability\Handler1;
use App\ChainResponsability\Handler2;
use App\ChainResponsability\Handler3;




function client(Handler $handler)
{
    foreach(['some1','some2','some3'] as $item)
    {
        $result = $handler->handle($item);
        if($result)
        {
            echo $result . 'true' . '\n';
        }else
        {
            echo $result . 'false' . '\n';
        }
    }
}



$h1 = new Handler1;
$h2 = new Handler2;
$h3 = new Handler3;

$h1->setNext($h2)->setNext($h3);



print_r(client($h1) );

?>