<?php
class EmailFormatException extends Exception {
  function printMessage(){
    echo "例外訊息:" . $this->getMessage() . "\n";
echo "例外訊息編碼:" . $this->getCode() . "\n";
  }
}
function checkEmail($email){
  if (!strpos($email,"@"))
    throw new EmailFormatException("E-mail需要包含'@'",100);
}
try {
  checkEmail('gmail.com');
} catch (EmailFormatException $e){
  $e->printMessage();
}
?>