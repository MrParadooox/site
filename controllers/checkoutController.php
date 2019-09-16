<?php
    namespace controllers;
    use controllers\baseController;
    use models\productModel;

    class checkoutController extends baseController {
        public function indexAction(){

            $this->render("views/user/checkout.php", ['layot'=>True, 'model'=>$_GET]);
            
        }


    }
