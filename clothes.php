<?php

class Clothes {
    private $name ;
    private $prize ;


    /*設置建構子*/
    public function __construct($outsidename,$outsidePrize){
        $this -> name = $outsidename;
        $this ->prize = $outsidePrize;
    }


    public function setName($outsidename){
        $this->name=$outsidename; /* 這個名字是外部名字 this "name" is outsidename */ 
    }

    public function getName(){
        return $this->name;

    }

    public function setPrize($outsidePrize){
        $this->prize=$outsidePrize; /* 這個價錢是外部價錢 this "prize" is outsideprize */ 
    }

    public function getPrize(){
        return $this->prize;

    }
    public function doWash(){
        return "用洗衣機洗";
    }

    public function __destruct(){
        
    }

}
?>