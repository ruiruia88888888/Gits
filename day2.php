<?php

for($i=1;$i<=9;$i++)
{
    for($x=0;$x<=9;$x++)
    {
        for($j=0;$j<=9;$j++)
        {
            if($i*$i*$i+$x*$x*$x+$j*$j*$j==$i*100+$x*10+$j*1)
            {
                echo "$i$x$j ";break;
            }
        }
    }
}
echo "<br/>";


?>