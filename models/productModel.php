<?php

    namespace models;
    use models\baseModel;
    use \PDO;

    class productModel extends baseModel{
        const tableName='product';
        const tableNamePhoto='productimg';
        public function rules(){
            return ["id", "Name", "smallDesc", "description", "count", "brandId", "price"];
            
        }

        public static function selectAll(){
            try
            {
                $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT * FROM `".self::tableName."`");
                $stmt->execute();
                $tovarArray=[];
                foreach ($stmt as $row)
                {
                    $tovar = new productModel;
                    $tovar->tryMap($row);
                    array_push ($tovarArray, $tovar);
                }
            }
            catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
            finally {
                $conn=null;
                
                return $tovarArray;
            }
        }


        public static function selectById($get){
            try
            {
                $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT * FROM `".self::tableName."` WHERE id =:id");
                $stmt->bindParam(':id', $get['id']);
                $stmt->execute();
                $tovarArray=[];
                foreach ($stmt as $row)
                {
                    $tovar = new productModel;
                    $tovar->tryMap($row);
                    array_push ($tovarArray, $tovar);
                }
            }
            catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
            finally {
                $conn=null;
                
                return $tovarArray;
            }
        }

        public static function getFhoto($model)
            {
            try {
                $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $fhotoArray=[];
                foreach ($model as $row)
                {
                    $stmt = $conn->prepare("SELECT * FROM `".self::tableNamePhoto."` WHERE productId=:id");
                    $stmt->bindParam(':id', $row->id);
                    $stmt->execute();
                    foreach ($stmt as $result) {
                        $fhoto['productId']=$result['productId'];
                        $fhoto['position']=$result['position'];
                        $fhoto['url']=$result['url'];
                        array_push ($fhotoArray, $fhoto);
                    }                    
                }
            }
            catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
            finally {
                $conn=null;
                return $fhotoArray;
            }



        }




    }