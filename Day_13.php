<?php

function num($a,$b)
{
    if($b==0)
    {
        return $a;
    }
    $sum=$a^$b;
    $num=($a & $b)<<1;

    return num($sum,$num);
}
echo num(52,48);

?>