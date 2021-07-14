<?php
    session_start(); 

    class Database{
        private $servername='us-cdbr-east-04.cleardb.com';
        private $username='b185b47a594a3b';
        private $password='dee1e978';
        private $db_name='heroku_23d4a01d829b1a3';
        public $conn;

        public function __construct(){   
            // is to automatically runs whenever this file is executed/run
            $this->conn = new mysqli(
                $this->servername,
                $this->username,
                $this->password,
                $this->db_name
            );
            if($this->conn == TRUE){
                return $this->conn;
            } else{
                die('ERROR '.$this->conn->connect_error);
            }
        } 
    }


   
?>