<?php

    namespace models;
    use models\baseModel;
    use \PDO;

    class categoryModel extends baseModel{
        const tableNameCategory='category';
        public function rules(){
            return ["id", "name", "description", "position", "img", "url"];
            
        }

        public static function categorryAll(){
            try
            {
                $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $categoryArray=[];
                    $stmt = $conn->prepare("SELECT * FROM `".self::tableNameCategory."`");
                    $stmt->execute();
                    foreach ($stmt as $row) {
                        $category = new categoryModel;
                        $category->tryMap($row);
                        array_push ($categoryArray, $category);
                    }                    
            }
            catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
            finally {
                $conn=null;
                return $categoryArray;
            }
        }

    }