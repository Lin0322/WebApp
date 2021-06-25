<?php

$name = trim($_POST["name"]);
$password = trim($_POST["password"]); 

if ($name == "Peter"){
    if($password == "abc123" ){
        echo"login complete";
    }else{
        echo"login uncomplete";
    }
} else{
    echo"login failed";
}




?>