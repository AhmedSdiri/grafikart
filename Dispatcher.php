<?php
Class Dispatcher{
    var $request;
    function __construct(){
           $this->request = new Request();
       /* $r = new Router();*/
       /* Router::parse(this->request->url,$this->request);
        print_r($this->request);*/
       
        $this->request = $this->loadController();
       /* $controller->view();*/
        //ou bien
        call_user_func_array(array($controller,$this->request->action),array());
        
    }
    function loadController(){
        $name = ucfirst($this->request->controller).'Controller';
        $file = ROOT.DS.'controller'.DS.$name.'.php';
        require $file;
        $controller = new $name($this->request);
    }
}