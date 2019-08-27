<?php

    namespace models;
    use models\baseModel;
    use \PDO;
    
    class userModel extends baseModel{
        const tableName='user';
        const soult="qwerty dvcde";
        public function rules()
        {
            return ["FirstName", "LastName","Email", "Phone", "login", "Password"];
        }
        
        private function HasherPassword()
        {
            return sha1(self::soult.trim(htmlspecialchars($this->Password)).self::soult);
        }

        public static function varification($Email){
            $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM `".self::tableName."` WHERE `Email`= :Email");
            $stmt->bindParam(':Email', $Email);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if($row)
            {
                $userVarification = new userModel;
                $userVarification->tryMap($row);                
                return $userVarification;
            }
        }

        public function insert()
                {
                try {
                    $conn = new PDO("mysql:host=".self::ServerName.";dbname=".self::DBName, self::UserName, self::Password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt=$conn->prepare("INSERT INTO `".self::tableName."` (`login`,	`Password`,	`FirstName`, `LastName`, `Email`, `Phone`)
                    VALUES(:login, :Password, :FirstName, :LastName, :Email, :Phone)");
                    $login=trim(htmlspecialchars($this->login));
                    $Password= $this->HasherPassword();
                    $FirstName=trim(htmlspecialchars($this->FirstName));
                    $LastName=trim(htmlspecialchars($this->LastName));
                    $Email=trim(htmlspecialchars($this->Email));
                    $Phone=trim(htmlspecialchars($this->Phone));

                    $stmt->bindParam(':login',$login);
                    $stmt->bindParam(':Password',$Password);
                    $stmt->bindParam(':FirstName',$FirstName);
                    $stmt->bindParam(':LastName',$LastName);
                    $stmt->bindParam(':Email',$Email);
                    $stmt->bindParam(':Phone',$Phone);
                    $stmt->execute();

                    echo "Connected successfully"; 
                    }
                catch(PDOException $e)
                    {
                    echo "Connection failed: " . $e->getMessage();
                    }
                    finally {
                        $conn=null;
                    }

        }
    }