<?php
    namespace controllers;
    use controllers\baseController;
    use models\userModel;

    class userController extends baseController {

        public function loginAction(){
            $this->render("views/user/login.php", ['layot'=>True, 'model'=>$_GET]);
        }
        public function registerAction(){
            $this->render("views/user/register.php",['layot'=>True, 'model'=>$_GET]);
        }
        public function contactAction(){
            $this->render("views/user/contact.php",['layot'=>True, 'model'=>$_GET]);
        }

    }
