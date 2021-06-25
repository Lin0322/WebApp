<?php
namespace App\Controllers;

use kernel\Controller;
use App\Models\indexModel;
use App\Views\indexView;

class IndexController extends Controller {
   
    protected $paras;

    public function __construct($parameter){
       parent::__construct($parameter);
    }

    public function getUri(){
        $this->paras = parent::getUri();
        return $this->paras;
    }
    
    public function run(){
        var_dump($this->getUri());
        $username = new indexModel();
        $result = $username->printName();
        $view = new indexView("/");
        $view->show($result);
    }
}