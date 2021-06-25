<?php
$files= file_get_contents("cards.html");

$files= str_replace("{Information}","Project",$files);

$files= str_replace("{cardimages}","images.jpg",$files);

$files= str_replace("{usrename}","Peter Wang",$files);

$files= str_replace("{content}","Welcome to my site.....",$files);

$files= str_replace("{siteurl}","https://php.onlinedoc.tw/",$files);


file_put_contents("cards1.html" $files;