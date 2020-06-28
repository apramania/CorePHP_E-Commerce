<?php

    


    //use to fetch product data

    class Product{
        

        public $db;

        public function __construct(DBController $dbc){
            if(!isset($dbc->conn)){
                echo "Not Set";

            }
            $this->db = $dbc;
        }

        //fetch product using getData Method
        public function getData($table='product'){
            $result = $this->db->conn->query("SELECT * FROM {$table}");

            $resultArray = array();
            
            //fetch product one by one
            while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;

        }

        //get product using id
        public function getProdById($id=null, $table='product'){
            if(isset($id)){
                $result = $this->db->conn->query("SELECT * FROM {$table} WHERE item_id={$id}");

                $resultArray = array();
            
                //fetch product one by one
                while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    $resultArray[] = $item;
                }

                return $resultArray;
                }
        }
    }

?>