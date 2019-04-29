<?php

$a=[1,3,6,9];

$b=[2,4,5,8,20];

print_r(Combine($a,$b));

function Combine($a,$b)
{
    $count1=count($a);
    $count2=count($b);
    //print_r($count1);
    //print_r($count2);
    $arr=[];
    for($i=0;$i<$count1;$i++)
    {
        for($j=0;$j<$count2;$j++)
        {
            if($count1[$i]<$count2[$j])
            {
                $arr=$count1[$i];
            }
            else if($count1[$i]>$count2[$j])
            {
                $arr=$count2[$j];
            }
        }
    }
    return $arr;

}




?>