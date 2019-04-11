<?php

/**
1、编写一个程序，传入n与m两个参数，生成1~n的编号，从1开始数，数到n将对应的元素删除，从下一个元素继续从1开始数数到n就删除，求最后剩下的数字
*/
function yuesefu($n,$m) {  
    $r=1;  
    for($i=2; $i<=$n; $i++) {
        $r=($r+$m)%$i;      	//数学公式
    }
    return $r+1;  
}  
echo yuesefu(14,13);

echo "<hr>";
//2.

/**
 * 2、编写一个程序，给定任意长度的数组，数组内包含n个数字，要求将数组分为三组，每组的和尽量相近
 */

$list = [5,6,7,2,1,3];
echo '<pre>';
print_r(examTwo($list));

//1.先排序
//2.
function examTwo($list){

	 //1，23，5，6，7
    //倒叙排列，最大数字在最前面
    rsort($list);  //7
   
    //[[7],[6],[5]]
    $result = [
        [array_shift($list)],//弹出第一个最大数
        [array_shift($list)],//弹出第二个最大数
        [array_shift($list)]//弹出第三个最大数
    ];

    //剩余数字循环，第四个数字开始 与 第三个最大数结合 list= [3,2,1];
    for ($i=0; $i<count($list);$i++){
        $result[2][] = $list[$i]; //放入$result[2]内 输出：[[7],[6],[5,3]];
        $sum = array_sum($result[2]); //$sum = result[2]内数字和=8,
        if ($sum>array_sum($result[0])){//8与 $result[0]内数字和 7 比较，大于$result[0],则换0位数据
            //输出：[[5,3],[7],[6]]
            $result = [
                $result[2],
                $result[0],
                $result[1]
            ];
        }elseif ($sum>array_sum($result[1])){//2 与 6 结合，
            //输出 [[5,3],[6,2],[7,1]]
            $result = [
                $result[0],
                $result[2],
                $result[1]
            ];
        }
    }
    return $result;
}
echo "<hr>";
//3:冒泡
function PrintMinNumber2($arr){
    $length=count($arr);
    for($i=0;$i<$length;$i++){
        for($j=$i+1;$j<$length;$j++){
            //332  >  323
            if(intval($arr[$i].''.$arr[$j])<intval($arr[$j].''.$arr[$i])){
                $temp=$arr[$i];
                $arr[$i]=$arr[$j];
                $arr[$j]=$temp;
            }   
        }   
    }   
    return intval(implode('',$arr));
}
$arr = [3,32,321];
echo '<pre>';
print_r(PrintMinNumber2($arr));
echo "<hr>";
/**
 * 4、银行有四个柜台，给定两个数组包含客户到达银行的时间与办理业务所需要的时间：
$active_time =  [9.01, 9.10, 9.20, 9.21, 9.22];
$process_time = [0.30, 0.18, 0.22, 0.47, 0.11];
假设银行9点开始办理业务，假设客户不会因为失去耐心走掉
使用算法计算出每一个用户的平均等待时间
 */
$active_time =  [9.01, 9.10, 9.20, 9.21, 9.22];
$process_time = [0.30, 0.18, 0.22, 0.47, 0.11];
$r = examFour($active_time,$process_time);
echo $r;
function examFour($active_time, $process_time){
    $windows = [];//存放每个窗口的离开时间
    $number = count($process_time);//得到人数
    $wait_time = 0;//初始化等待时间=0
    for ($i=0;$i<$number;$i++){//依次来
        if (count($windows)<4){//说明窗口没占用完
            $windows[] = $active_time[$i]+$process_time[$i];
            continue;
        }
        /**
		Array(
		    [0] => 9.31
		    [1] => 9.28
		    [2] => 9.42
		    [3] => 9.68
		)
        */
        sort($windows);//顺序排列得到时间最小值是数组的0个,从小到大
        $bye_user = array_shift($windows);//最小的
        if ($bye_user>$active_time[$i]){ //最小时间 >到达时间 (最小)
            $wait_time += $bye_user-$active_time[$i]; //等待时间
            $windows[] = $bye_user+$process_time[$i];
        } else {
            $windows[] = $active_time[$i]+$process_time[$i];
        }
    }

    //等待时间/人数
    return round($wait_time/$number,3);
}
