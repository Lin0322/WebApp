<?php

$files = fopen("email.csv","wb");

$file_tmp = array();
while ((! feof($files)) && (fgetcsv($files))) {
    array_push($file_tmp);
}
fclose($files);
$new_line = array("peter@hello.com",5,28,2021,1000);
array_push($file_tmp , $new_line);
$files = fopen("email.csv","w");
foreach($file_tmp as $lines){
    fputcsv($files,$lines);
}
fclose($files);
print("寫入完成");



?>