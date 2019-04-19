<?php


var_dump(a(4,3));

function a($n,$m)
{
    $list=range(1,$n);
    //var_dump($list);die();
    $sum=1;
    while (count($list)>1)
    {
        foreach ($list as $k=>$v)
        {
            if($sum==$m)
            {
                unset($list[$k]);
                $sum=1;
                continue;
            }
        }
        $sum++;
    }
    return $list;
}



?>