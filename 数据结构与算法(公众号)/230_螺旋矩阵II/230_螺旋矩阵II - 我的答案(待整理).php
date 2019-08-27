<?php

function generateMatrix($n)
{
    // 输出数组
    $arr = [];

    // 转向次数
    $time = 0;

    // 数组下标
    $subscript = [0,0];

    // 下标转向
    $direction = [1,1];

    for($i = 1; $i <= $n*$n; $i++) {

        // 下次数组下标
        $NextSubscript = $subscript;
        $NextSubscript[$direction[0]] += $direction[1];

        // 判断是否转向
        if($subscript[$direction[0]]+$direction[1] >= $n || $subscript[$direction[0]]+$direction[1] < 0 || isset($arr[$NextSubscript[0]][$NextSubscript[1]])) {
            $time++;
            $direction = direction($time, $subscript);
        }

        // 赋值
        $arr[$subscript[0]][$subscript[1]] = $i;

        // 数组下标更新
        $subscript[$direction[0]] += $direction[1];

    }
    return $arr;
}

/**
 * 获取转向
 */
function direction($time, $direction) {
    switch ($time%4) {
        case 0:
            $direction = [1,1];
            break;

        case 1:
            $direction = [0,1];
            break;

        case 2:
            $direction = [1,-1];
            break;

        case 3:
            $direction = [0,-1];
            break;

        default:
            break;
    }
    return $direction;
}

$n = 3;
$arr = generateMatrix($n);
foreach($arr as $k => $v) {
    ksort($v);
    foreach($v as $kk => $vv) {
         echo sprintf("%5s",$vv);
         // :
         // : 扩展下 搞个想搞个万花筒
         // :
//        $c = sprintf("%04s",$vv);
//        echo "<a style=\"margin-left:10px;color:#5{$c}f\">★</a>";

    }
    echo "<br/>";
    echo PHP_EOL;


}

?>