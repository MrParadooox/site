<?php
    namespace controllers;
    use controllers\baseController;
    use models\productModel;
    use models\reviewsModel;

    class productController extends baseController {

        //  select All

        public function productAction(){
            $model= productModel::selectById($_GET);
            $reviews = reviewsModel::select($_GET['id']);
            // $modelPhoto=productModel::getFhoto($model);
            $this->render("views/product/product.php", ['layot'=>True, 'model'=>$model, 'get'=>$_GET, 'reviews'=>$reviews]);
        }

        public function getProductAction(){
            $model= productModel::selectById($_GET);
            echo json_encode($model);
        }

        public function inserReviewsAction(){
            
            $model= reviewsModel::insert($_POST['name'], $_POST['email'], $_POST['productId'], $_POST['description']);
            echo json_encode($model);
        }



        public function editAction(){
            // $this->render("views/product/category.php", ['layot'=>True, 'model'=>$_GET]);
        }
        
        public function deleteAction(){
            // $this->render("views/product/category.php", ['layot'=>True, 'model'=>$_GET]);
        }

    }
