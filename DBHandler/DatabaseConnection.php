<?php

class DBConnection
{
private $servername = "localhost";
private $username = "prakash";    // make a user account into phpmyadmin name prakash
private $password = "abc123";    // and give that account a password  is abc123
private $databasename="ourdatabase";

public $conn="";

public function __construct()
{
    try {
        $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->databasename", $this->username, $this->password);
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
    
}

}

?>