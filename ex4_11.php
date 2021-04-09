<?php
while(true){
    echo"這是第一層迴圈!";
    while(true){
        echo"這是第二層迴圈!";
        break 2;
    }


}
 echo"已跳出第二層迴圈!";

?>