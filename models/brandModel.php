<?php

    namespace models;
    use models\baseModel;
    use \PDO;

    class brandModel extends baseModel{
        const tableName='brand';
        public function rules(){
            return ["id", "name", "description", "img"];
           
        }

        
        public static function brandAll(){
            try
            {
                $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $brandArray=[];
                    $stmt = $conn->prepare("SELECT * FROM `".self::tableName."`");
                    $stmt->execute();
                    foreach ($stmt as $row) {
                        $brand = new brandModel;
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
        