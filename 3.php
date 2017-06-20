<?php


$arr=range('a','z');

foreach ($arr as $k=>$v) {
    echo '['.$k.']'.'-->'.$v.'<br>';
}

echo '<br>';
echo  key($arr);
end($arr);
echo '<hr>';
echo  key($arr);
echo '<br>';

echo current($arr);
 echo prev($arr);
 $a=1;
 $b=2;
 $c=3;
$qq= compact('a','b' ,'c');

 print_r($qq);


