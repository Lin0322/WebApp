<?php
function check($num){
  if ( $num == 0 ){
    throw new Exception('Summary is Zero ！！', 100);
  }
  return $num;
}

try{
    $num=5;
  echo "The Answer is :".(100/check($num));
} catch (Exception $e){
  echo "Error Message: ".$e->getMessage()."\n
";
  echo "Error Code: ".$e->getCode()."\n
";
}
?>