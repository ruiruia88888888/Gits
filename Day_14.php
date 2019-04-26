<?php

print_r(sum([1,2,3,4,5,6,7,8,9],10));

function sum($arr,$num)
{
    $a=[];
    $len=strlen($arr);

    if($len<2)
    {
        return false;
    }
    for($i=0;$i<$len;$i++)
    {
        for($j=0;$j<$len;$j++)
        {
            if($arr[$i]+$arr[$j]==$num)
            {
                $a[]=$arr[$i]*$arr[$j];
            }
        }
    }
    sort($a);
    return $a[0];
}



?>