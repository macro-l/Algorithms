<?php
function combine($n, $k)
{
// 二维数组 - 最终返回值
    $result = [];

// 整数 - 循环key
    $i = 0;

// 一维数组 - 二维数组($result)的一维基础
    $p = array();

// 循环 - 一维数组($p)的初始化
    for($j = 0; $j<$k; $j++)
    {
        $p[] = 0;
    }

// 循环 - 算法的循环主体
    while ($i >= 0) {
//  赋值 - ???未知???
        $p[$i] = $p[$i]+1;
// 判断 - ???未知???
        if($p[$i] > $n) {
            --$i;
        } else if($i == ($k-1)){
            $result[] = $p;
        } else {
            ++$i;
//  赋值 - ???未知???
            $p[$i] = $p[$i-1];
        }
    }
    return $result;
}

var_dump(combine(4,2));
?>