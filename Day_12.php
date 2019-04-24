<?php

class Day_12
{
    public static function sum($n=100)
    {
        $sum=$n;
        $sum&&($sum+=self::sum($sum-1));
        return $sum;
    }

}
print_r($sum);

?>