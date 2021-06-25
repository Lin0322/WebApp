<?php


$sum = 0;
$i =0;

while(true){
    $i++;
    $sum += $i ;
    if($sum >= 100) break;
}

printf("次數:%d",$i);
printf("總計:%d",$sum);
?>