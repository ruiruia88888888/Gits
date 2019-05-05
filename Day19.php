<?php

$array=array([1,2,3,4,5,6]);

$num=5;

print(num($array,$num))

function num($array,$num)
{
	$len=count($array);
	//return print_r($len);
	for($i=0;$i<$len;$i++)
	{
		if($len[$i]==$num)
		{
			return $len[$i];
		}
	}

}


?>