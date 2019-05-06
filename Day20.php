<?php


CountSteps(2,2);

$x=2^2-1;
$y=2^2-1;

$sum=$x+$y;
echo $sum;
echo "<br/>";

function CountSteps($x,$y)
{
    $num=0;
    for($i=0;$i<$x;$i++)
    {
        for($j=0;$j<$y;$j++)
        {
            if($x==1 && $y==1)
            {
                return 2;
            }
            else
            {
                $num=$i*$j;
                echo $num;
                echo "<br/>";
            }
        }
    }
}

//echo CountSteps($num);

?>