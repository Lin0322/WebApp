<?php
$file = file_get_contents("readfile.html");
$file = str_replace("{titlename}","welcome", $file);
if(date("20")>=12){
    $file = str_replace("{color}","blue",$file);
} else{
    $file =str_replace ("{color}","red",$file);
}
$file = str_replace("{name}","Peter",$file);

print $file;

?>