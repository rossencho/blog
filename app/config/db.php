<?php

Class DataBaseSlim{
    private $dbhost = 'localhost';
    private $dbuser= 'root';
    private $dbpass= 'toor';
   // private $dbpass= '';
    private $dbname = "blog";
    private $conn;
    
    public function connect(){
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=".$this->dbhost.";dbname=".$this->dbname.";",
                    $this->dbuser,
                    $this->dbpass
                    );
            $this->conn->exec("set names utf8");
        }
        catch(PDOException $exception){
            echo "Connection error: ". $exception->getMessage();
        }
        return $this->conn;
    }
}
