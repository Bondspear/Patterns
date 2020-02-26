<?php 
use App\ChainResponsability\Handler;
use App\ChainResponsability\Handler1;
use App\ChainResponsability\Handler2;
use App\ChainResponsability\Handler3;

# в меня нужно ложить интерфейс оброботчик
# я розбиваю (в данном случае массив) дату на елементы
# и результату роботы я присваиваю метод из родительского
# класса под иминем "handle" ,который в качестве даты
# принимает елемент даты
# и если я нахожу, хоть один елемент - я пишу сообщение
# и если я не нахожу, елемент - я пишу другое сообщение
function client(Handler $handler)
{
    foreach(['some1','some2','some4'] as $item)
    {
        $result = $handler->handle($item);
        if($result )
        {
            echo $result  . "\n";
        }
    }

}
$h1 = new Handler1;
$h2 = new Handler2;
$h3 = new Handler3;

# вот она  - цепочка ответственности
# её суть такова: аргумент метода setNext() - это сам
# класс,в котором написан метод setNext()  и по этому
# мы начинаем погружатся как то так
# AbstractHandler-->setNext(Handler)->AbstractHandler-->setNext(Handler)->
# AbstractHandler-->setNext(Handler)->AbstractHandler-->setNext(Handler)->
# AbstractHandler-->setNext(Handler)->AbstractHandler-->setNext(Handler)->
# AbstractHandler-->setNext(Handler)->AbstractHandler-->setNext(Handler)->
#
#
# мы погружаемся в метод внутри которого класс,внутри которого метод и т д
# в данном примере 3 оброботчика, а значит 3 погружения





?>
<pre>
{{get_class($h1 )}}
{{client($h1) }}
{{get_class($h2 )}}
{{client($h2) }}
{{get_class($h3 )}}
{{client($h3) }}
</pre>



