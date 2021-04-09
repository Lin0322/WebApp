<?php
  $input[4]= isset($value)? $value : "空的";
  echo $input."\n";
  $input = $value ?? "空的";
  echo $input;
?>