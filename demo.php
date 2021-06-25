<?php
include "paint.php";

$tshirt = new Clothes("白襯衫",1000);

printf("衣服名字: %s \n", $tshirt->getName());
printf("衣服的價錢: %d\n",$tshirt->getPrize());
printf("衣服清洗方法 %s\n", $tshirt->doWash());

$cowpaint = new Paint("鬼洗",3000,100,30);

printf("褲子名稱: %s \n", $cowpaint->getName());
printf("褲子價錢: %d 元\n", $cowpaint->getPrize());
printf("褲子長度: %d CM\n",$cowpaint->getlength());
printf("褲子腰圍: %d inch\n",$cowpaint->getwaist());
printf("褲子的清洗方式: %s", $cowpaint->doWash());


?>