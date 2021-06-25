<?php
$score = 80;

switch(intval($score/10)){
    case 10:
    case 9:
        echo"成績 A";
        break;
    case 8:
        echo"成績 B";
        break;
    case 7:
        echo"成績 C";
        break;
    case 6:
        echo"成績 D";
        break; 
    default:
        echo"成績 E";
        break;

}
?>