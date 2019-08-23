<?php
    namespace controllers;
    use controllers\baseController;
    use models\productModel;

    class productController extends baseController {

        public function productAction(){
            $this->render("views/product/product.php", ['layot'=>True, 'model'=>$_GET]);
        }
        public function categoryAction(){
            $this->render("views/product/category.php", ['layot'=>True, 'model'=>$_GET]);
        }
        

    }
