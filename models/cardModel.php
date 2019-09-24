<?php

    namespace models;
    use models\baseModel;
    use \PDO;
    use models\productModel;

    class cardModel extends baseModel{
        const tableName='sessioncard';
        public function rules(){
            return ["sessionId", "productId", "count"];
           
        }


        public static function add($productId, $count){
            try{
                setcookie('sessionId',$sessionId,time() + (86400 * 30), '/',  $_SERVER['HTTP_HOST'], false);
                +
              
                
            }
            finally {
                return $h;
                
            }
        }



        public static function add($productId, $sessionId){
            try{
                $sesion = cardModel::select($productId, $sessionId);
                if ($sesion==null){
                    $h= null;
                    $count=1;
                    $h = cardModel::insert($productId, $sessionId, $count);
                } else {
                    $count = $sesion[0]->count;
                    if($count == null){
                        $count= 1; 
                        $h = cardModel::update($count, $productId, $sessionId);
                    }
                    $count++;
                    $h = cardModel::update($count, $productId, $sessionId);
                }
                
              
                
            }
            catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
            finally {
                $conn=null;
                return $h;
                
            }
        }


        public static function selectAll($sessionId){
            try{

                $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT * FROM `".self::tableName."` WHERE `sessionId` = :SessionId");
                $SessionId = trim(htmlspecialchars($sessionId));
                $stmt->bindParam(':SessionId', $SessionId);
                $stmt->execute();
                $cardArray=[];
                foreach ($stmt as $row)
                {
                    $card = new cardModel;
                    $card->tryMap($row);
                    $product = productModel::selectById($card->productId);
                    $card->cardProduct=$product;
                    array_push ($cardArray, $card);
                }
            }
            catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
            finally {
                $conn=null;
                
                return $cardArray;
            }
        }

        
        public static function insert($productId, $sessionId, $count){
            try{

                $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("INSERT INTO ".self::tableName." (sessionId, productId ,count) VALUES (:SessionId, :IdProduct, :count)");
                $productId = trim(htmlspecialchars($productId));
                $stmt->bindParam(':count', $count);
                $stmt->bindParam(':IdProduct', $productId);
                $stmt->bindParam(':SessionId', $sessionId);
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


        public static function select($productId, $sessionId){
            try{

                $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("SELECT * FROM `".self::tableName."` WHERE `sessionId` = :SessionId AND `productId` = :IdProduct");
                $SessionId = trim(htmlspecialchars($sessionId));
                $productId = trim(htmlspecialchars($productId));
                $stmt->bindParam(':IdProduct', $productId);
                $stmt->bindParam(':SessionId', $SessionId);
                $stmt->execute();
                $cardArray=[];
                foreach ($stmt as $row)
                {
                    $card = new cardModel;
                    $card->tryMap($row);
                    array_push ($cardArray, $card);
                }
            }
            catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
            finally {
                $conn=null;
                
                return $cardArray;
            }
        }

        public static function update($count, $productId , $sessionId){
            try{

                $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("UPDATE `".self::tableName."` SET `count`= :count WHERE `sessionId` = :SessionId AND `productId` = :IdProduct");
                $SessionId = trim(htmlspecialchars($sessionId));
                $stmt->bindParam(':count', $count);
                $stmt->bindParam(':SessionId', $SessionId);
                $stmt->bindParam(':IdProduct', $productId);
                $stmt->execute();
                $cardArray=[];
                foreach ($stmt as $row)
                {
                    $card = new cardModel;
                    $card->tryMap($row);
                    array_push ($cardArray, $card);
                }
            }
            catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
            finally {
                $conn=null;
                
                return $cardArray;
            }
        }

        public static function delete($productId , $sessionId){
            try{

                $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $stmt = $conn->prepare("DELETE FROM `".self::tableName."` WHERE `sessionId` = :SessionId AND `productId` = :IdProduct");
                $SessionId = trim(htmlspecialchars($sessionId));
                $stmt->bindParam(':SessionId', $SessionId);
                $stmt->bindParam(':IdProduct', $productId);
                $stmt->execute();
                $cardArray=[];
                foreach ($stmt as $row)
                {
                    $card = new cardModel;
                    $card->tryMap($row);
                    array_push ($cardArray, $card);
                }
            }
            catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }
            finally {
                $conn=null;
                
                return $cardArray;
            }
        }


    }
        