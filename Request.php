<?php
Class Request{
  public $url;
    function __construct(){
    $this->url = $_SERVER['PATH_INFO'];
    //  echo  $this->request->url; 
        echo 'hello i am here ';
    }
}