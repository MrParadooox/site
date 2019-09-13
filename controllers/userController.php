<?php
    namespace controllers;
    use controllers\baseController;
    use models\userModel;

    class userController extends baseController {

        public function loginAction(){
            if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $user = userModel::varification($_POST['Phone']);
                $userPassword = new userModel;
                $userPassword->Password=$_POST['Password'];
                $password = $userPassword::HasherPassword();
                if($password == $user->Password)
                    {
                        $this->autorizationAction($user->Email);
                        $this->render('views/home/index.php', ['layout'=>True]);
                    }
                    else {
                        $this->render("views/user/login.php", ['layot'=>True, 'model'=>$_GET, 'user'=>$password]);
                    }
                
            }
            $this->render("views/user/login.php", ['layot'=>True, 'model'=>$_GET]);
        }
        public function registerAction(){
            $this->render("views/user/register.php",['layot'=>True, 'model'=>$_GET]);
        }
        public function contactAction(){
            $this->render("views/user/contact.php",['layot'=>True, 'model'=>$_GET]);
        }
        public function insertAction(){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $userVarification = userModel::varification($_POST['Email']);
                var_dump($userVarification);
                if(empty($userVarification)){
                    $user = new userModel;
                    if($user->tryMap($_POST)){
                        $user->insert();
                    }
                }
            }
        }


        public function autorizationAction($Email){
            if (session_status()<>2) session_start();
            $_SESSION["Autorization"] = TRUE;
            $_SESSION["Email"] = $Email;
        }

    }

