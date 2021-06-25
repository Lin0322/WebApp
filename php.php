<?php
function buyCoffee(cost){
    $cup = $cost /50;
    return $cup;

}

$peter = buyCoffee(300);
print("Peter 買了 %d 杯咖啡!",$peter);

?>