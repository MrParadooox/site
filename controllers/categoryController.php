<?php
    namespace controllers;
    use controllers\baseController;
    use models\categoryModel;
    use models\productModel;
    use models\brandModel;

    class categoryController extends baseController {
        public function indexAction(){
            if ($_SERVER["REQUEST_METHOD"]=="GET")
            {
                // $this->render("views/product/product.php", ['layot'=>True, 'model'=>$_GET]);
                if (isset($_GET['id'])){
                $id=$_GET['id'];
                $model= productModel::selectByIdCategory($id);
                // $modelPhoto=categoryModel::getFhoto($model);
                $category = categoryModel::categorryAll();
                $this->render("views/product/category.php", ['layot'=>True, 'model'=>$model, 'category'=>$category]);
                
                }
                else{
                    $model= productModel::selectAll(0 , 3);
                    // $modelPhoto=categoryModel::getFhoto($model);
                    $brand = brandModel::brandAll();
                    $category = categoryModel::categorryAll();
                    $this->render("views/product/category.php", ['layot'=>True, 'model'=>$model, 'category'=>$category, 'brand'=>$brand]);
                }

            }
            
        }
        public function ajaxAction(){
            $start=$_GET['start'];
            $end=$_GET["end"];
            $model= productModel::selectAll((int)$start , (int)$end);
            echo json_encode($model);
        }

    }
