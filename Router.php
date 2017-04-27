<?php
Class Router{
    
    /**
      permet de parser
     * @param $url a parser
     * @return tableau contenant les paramztre
     **/
    function __construct(){
        
    }
   function parse($url,$request){
        $url = trim($url,'/');
        $params = expldode('/', $url);
        $request->controller = $param[0]; 
        $request->action = isset($param[1]) ? $param[1] : 'index';
        $request-> action = array_slice($param,2);
        return true;
    }
    
}