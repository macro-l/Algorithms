<?php
 function generateMatrix2($n)
 {
     $nums = [];
     $dr = $r = $c = 0;
     $dc = 1;

     for($k = 1; $k <= $n*$n; $k++) {
         $nums[$r][$c] = $k;
//         echo (($r+$dr+$n)%$n)."  ><  ";
//         echo (($c+$dc+$n)%$n)."  ><  ";
//         echo "dr ".$dr."  ><  ";
//         echo "dc ".$dc."  ><  ";
         if(isset($nums[($r+$dr+$n)%$n][($c+$dc+$n)%$n])) {

             // var_dump(isset($nums[($r+$dr+$n)%$n][($c+$dc+$n)%$n])) ;
             // die;
             $tempdc = $dc;
             $dc = -$dr;
             $dr = $tempdc;
             // echo "dr".$dr."  ><  ";
             // echo "dc".$dc."  ><  ";
             // die;
         }
//         echo "dr ".$dr."  ><  ";
//         echo "dc ".$dc."  ><  ";
         $r += $dr;
         $c += $dc;
//         echo "dr ".$dr."  ><  ";
//         echo "dc ".$dc."  ><  ";
//         echo "r " .$r ."  ><  ";
//         echo "c " .$c ."  ><  ";
//         echo "nums ";
//         print_r($nums);
//         echo "<br />";
     }
     return $nums;
 }

 $n = 3;
 $arr = generateMatrix2($n);
 foreach($arr as $k => $v) {
     ksort($v);
     foreach ($v as $kk => $vv) {
         echo $vv;
     }
     echo "<br/>";
     echo PHP_EOL;

 }

?>