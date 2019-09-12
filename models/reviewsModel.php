<?php

    namespace models;
    use models\baseModel;
    use \PDO;
    use models\answerreviewsModel;

    class reviewsModel extends baseModel{
        const tableName='reviews';
        public function rules(){
            return ["id", "userId", "userName", "email", "productId", "description", "dataTime"];
        }

        public static function select($id){
            try
            {
                $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $reviewsArray=[];
                    $stmt = $conn->prepare("SELECT * FROM `".self::tableName."` WHERE `productId` = :id ");
                    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                    $stmt->execute();
                    foreach ($stmt as $row) {
                        $reviews = new reviewsModel;
                        $reviews->tryMap($row);
                        $answerreviews =answerreviewsModel::select($reviews->id);
                        $reviews->answerreviews=$answerreviews;
                        array_push ($reviewsArray, $reviews);
                    }                    
            }
            catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
            finally {
                $conn=null;
                return $reviewsArray;
            }
        }


        public static function insert($name, $email, $productId, $description){
            try{

            $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("INSERT INTO  `".self::tableName."` (`id` , `userId`, `userName`, `email`, `productId`, `description`, `dataTime`) VALUES ( null, 2 , :name, :email, :productId , :description, :dates)");
                $dates = date("m.d.y");
                $name = trim(htmlspecialchars($name));
                $email = trim(htmlspecialchars($email));
                $productId = trim(htmlspecialchars($productId));
                $description = trim(htmlspecialchars($description));
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':productId', $productId);
                $stmt->bindParam(':description', $description);
                $stmt->bindParam(':dates', $dates);
                $stmt->execute();




                
            }
            catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
            finally {
                return   $stmt;
                $conn=null;
                
            }
        }


    }
        