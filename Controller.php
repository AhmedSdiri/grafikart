<?php

class Controller{
    
   public $request;
    public $vars = array();
    function __construct(){
        $this->request = $request;
    }
        public function render($view){
        $view = ROOT.DS.'view'.DS.$this->reques->controller.DS.$view.'.php';
            die(view);
        
    }
    //second param est optionel
    public function set($key,$value=null){
        $this->vars[$key] = $value;
    }
    
}