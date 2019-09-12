<?php

    namespace models;
    use models\baseModel;
    use \PDO;

    class answerreviewsModel extends baseModel{
        const tableName='answerreviews';
        public function rules(){
            return ["reviewsId", "userId", "userName", "description", "dataTime"];
        }

        public static function select($id){
            try
            {
                $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $answerreviewsArray=[];
                    $stmt = $conn->prepare("SELECT * FROM `".self::tableName."` WHERE `reviewsId` = :id");
                    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                    $stmt->execute();
                    foreach ($stmt as $row) {
                        $answerreviews = new answerreviewsModel;
                        $answerreviews->tryMap($row);
                        array_push ($answerreviewsArray, $answerreviews);
                    }                    
            }
            catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
            finally {
                $conn=null;
                return $answerreviewsArray;
            }
        }

    }
        