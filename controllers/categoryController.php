<?php
    namespace controllers;
    use controllers\baseController;
    use models\categoryModel;

    class categoryController extends baseController {
        public function indexAction(){
            if ($_SERVER["REQUEST_METHOD"]=="GET")
            {
                // $this->render("views/product/product.php", ['layot'=>True, 'model'=>$_GET]);
                if (isset($_GET['id'])){
                $id=$_GET['id'];
                $model= categoryModel::selectCategory($id);
                $modelPhoto=categoryModel::getFhoto($model);
                $category = categoryModel::categorryAll();
                $this->render("views/product/category.php", ['layot'=>True, 'model'=>$model, 'modelPhoto'=>$modelPhoto, 'category'=>$category]);
                }else{
                $model= categoryModel::selectAll();
                $modelPhoto=categoryModel::getFhoto($model);
                $category = categoryModel::categorryAll();
                $this->render("views/product/category.php", ['layot'=>True, 'model'=>$model, 'modelPhoto'=>$modelPhoto, 'category'=>$category]);
                }

            }
            
        }
    }
