<?php


NumberOf(100);

function   NumberOf($n)
{
    $sum=decbin($n);

    $num=substr_count($sum,1);

    echo $num;
}



?>