<?php

    namespace models;
    use models\baseModel;
    use \PDO;

    class deliveryModel extends baseModel{
        const tableName='delivery';
        public function rules(){
            return ["id", "name", "description", "img"];
           
        }

        
        public static function deliveryAll(){
            try
            {
                $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $brandArray=[];
                    $stmt = $conn->prepare("SELECT * FROM `".self::tableName."`");
                    $stmt->execute();
                    foreach ($stmt as $row) {
                        $brand = new deliveryModel;
                        $brand->tryMap($row);
                        array_push ($brandArray, $brand);
                    }                    
            }
            catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
            finally {
                $conn=null;
                return $brandArray;
            }
        }

    }
        