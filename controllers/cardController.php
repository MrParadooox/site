<?php
    namespace controllers;
    use controllers\baseController;
    use models\cardModel;

    class cardController extends baseController {

        public function cradAddAction(){
            if ($_SERVER["REQUEST_METHOD"]=="GET")
            {
                if (isset($_GET['id'])){
                $productId=$_GET['id'];
                $sessionId = $_COOKIE['sessionId'];
                // $model= cardModel::insert($productId, $sessionId);
                // $model= cardModel::select($sessionId, $productId );
                // $model= cardModel::update($productId, $sessionId);
                $model= cardModel::selectAll($sessionId);
        

                var_dump($model);
                // echo json_encode($model);
                
                }

            }
            
        }

    }