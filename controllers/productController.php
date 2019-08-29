<?php
    namespace controllers;
    use controllers\baseController;
    use models\productModel;

    class productController extends baseController {

        //  select All
        public function indexAction(){
            if ($_SERVER["REQUEST_METHOD"]=="GET")
            {
                // $this->render("views/product/product.php", ['layot'=>True, 'model'=>$_GET]);
                $model= productModel::selectAll();
                $modelPhoto=productModel::getFhoto($model);
                $this->render("views/product/category.php", ['layot'=>True, 'model'=>$model, 'modelPhoto'=>$modelPhoto]);
            }
            
        }
        public function productAction(){
            $model= productModel::selectById($_GET);
            $modelPhoto=productModel::getFhoto($model);
            $this->render("views/product/product.php", ['layot'=>True, 'model'=>$model, 'get'=>$_GET, 'modelPhoto'=>$modelPhoto]);
        }
        public function selectIdyAction(){
            // $this->render("views/product/product.php", ['layot'=>True, 'model'=>$_GET]);
        }



        public function editAction(){
            // $this->render("views/product/category.php", ['layot'=>True, 'model'=>$_GET]);
        }
        
        public function deleteAction(){
            // $this->render("views/product/category.php", ['layot'=>True, 'model'=>$_GET]);
        }

    }
