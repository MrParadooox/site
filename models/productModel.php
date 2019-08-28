<?php

    namespace models;
    use models\baseModel;
    use \PDO;

    class productModel extends baseModel{
        const tableName='product';
        public function rules(){
            return ["id"];
        }

        public function select(){
            if (isset($model['id'])){
            $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM `".self::tableName."` WHERE `id`= :id");
            $stmt->bindParam(':id', $model['id']);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if($row)
            {              
                return $row;
                var_dump($row);
                $product = new productModel;
                $product->tryMap($row);                
                return $product;
            }
        }




    }
}