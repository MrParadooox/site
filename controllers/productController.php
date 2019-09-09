<?php
    namespace controllers;
    use controllers\baseController;
    use models\productModel;

    class productController extends baseController {

        //  select All

        public function productAction(){
            $model= productModel::selectById($_GET);
            // $modelPhoto=productModel::getFhoto($model);
            $this->render("views/product/product.php", ['layot'=>True, 'model'=>$model, 'get'=>$_GET, 'modelPhoto'=>$modelPhoto]);
        }

        public function getProductAction(){
            $model= productModel::selectById($_GET);
            // $modelPhoto=productModel::getFhoto($model);
            // $this->render("views/product/product.php", ['layot'=>True, 'model'=>$model, 'get'=>$_GET, 'modelPhoto'=>$modelPhoto]);
            echo json_encode($model);
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
