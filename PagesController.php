<?php
require ('Controller.php');

class PageController extends Controller{
    function view(){
        $this->render('index');
    }
}