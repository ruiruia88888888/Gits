<?php

$str="student. a am I";


$a=explode(" ",$str);

//print_r($a);
echo "<br/>";

$b=array_reverse($a);

//print_r($b);die();
echo "<br/>";

$c=implode(" ",$b);

print($c);

?>