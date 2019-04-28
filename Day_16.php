<?php

$target=7;

$array=[
    [1,2,8,9],
    [2,4,9,12],
    [4,7,10,13],
    [6,8,11,15]
];

$res=find($target,$array);

var_dump($res);

function find($target,$array)
{
    foreach ($array as $k=>$v)
    {
        if(in_array($target,$v))
        {
            return true;
        }
    }
    return false;
}


?>