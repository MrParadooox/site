<?php

namespace views;

class view {
    private $viewPath;

    public function __construct($viewPath, array $params){
        $this->viewPath=$viewPath;
        $this->view($params);
    }
    private function view(array $params){
        extract($params);
        if(isset($layot) && $layot=TRUE){
            require_once('views/shared/header.php');
        }
        require_once $this->viewPath;
        if(isset($layot) && $layot=TRUE){
            require_once('views/shared/footer.php');
        }
    }
}