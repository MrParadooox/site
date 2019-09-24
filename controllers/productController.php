<?php
    namespace controllers;
    use controllers\baseController;
    use models\productModel;
    use models\reviewsModel;
    use models\deliveryModel;

    class productController extends baseController {

        //  select All

        public function productAction(){
            $model= productModel::selectById($_GET['id']);
            $reviews = reviewsModel::select($_GET['id']);
            $delivery=deliveryModel::deliveryAll();
            $this->render("views/product/product.php", ['layot'=>True, 'model'=>$model, 'get'=>$_GET, 'reviews'=>$reviews, 'delivery'=>$delivery]);
        }

        public function getProductAction(){
            $id = $_GET["id"];
            $model= productModel::selectById($id);
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
