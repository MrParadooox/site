<?php
    namespace controllers;
    use controllers\baseController;
    use models\blogModel;

    class blogController extends baseController {

        public function blogAction(){
            $this->render("views/blog/blog.php", ['layot'=>True, 'model'=>$_GET]);
        }
        public function viewAction(){
            $this->render("views/blog/view.php",['layot'=>True, 'model'=>$_GET]);
        }
    }
