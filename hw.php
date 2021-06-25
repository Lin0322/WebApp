<?php
  /*$t = true;
  $f = false;
  echo "\$t 值 : $t 數字 : (int)$t "."\n";
  echo "\$f 值 : $f 數字 : (int)$f "."\n";
  $x[0] = "Hello";
  echo $x[0]."\n";
  $x[1] = "Halo";
  echo $x[1]."\n";
  $pi = 3.141592;
  echo "\$pi 轉成整數 : ".(int)$pi."\n";
  $input = "3.141592pi";
  echo "pi 轉成浮點數 : ".(float)$input."\n";
  */
  $pi = 3;
  settype($pi, "floatval");
  echo "\$pi 轉成整數: ".$pi."\n";
  $piString = "3 circle";
  echo "是否有轉成功:".settype($piString, "floatval")."\n";
  echo "\$piString 是: ".$piString."\n";
?>