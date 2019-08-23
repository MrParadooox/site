<?php
namespace controllers;
use views\view;

class baseController{
    public function render($viewPath, array $params=[]){
        new view($viewPath, $params);       
    }
}