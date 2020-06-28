<?php
    class DBController{
        //Database Connection Properties
        protected $host = 'localhost';
        protected $user = 'root';
        protected $password = 'testing321';
        protected $database = 'mstore';

        //Connection Property
        public $conn = null;

        public function __construct(){
            $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database );
            if($this->conn->connect_error){
                echo 'Fail'.$this->conn->connect_error;
            }
        }

        public function __destruct(){
            $this->closeConnection();
            // echo "Destroyed";
        }

        //Closing MySqli Connection
        protected function closeConnection(){
            if($this->conn!=null){
                $this->conn->close();
                $this->conn = null;
            }
        }
    }


?>