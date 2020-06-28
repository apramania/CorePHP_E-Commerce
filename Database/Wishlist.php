<?php
    class Wishlist{
        public $db = null;

        public function __construct(DBController $db){
            if(!isset($db->conn)){
                return null;
            }
            $this->db = $db;
        }

        public function addById($itemid, $userid){
            $result = $this->db->conn->query("SELECT * FROM cart WHERE item_id = {$itemid}");
            echo $result;
        }

        //fetch product using getData Method
        public function getData($table='wishlist'){
            $result = $this->db->conn->query("SELECT * FROM {$table}");

            $resultArray = array();
            
            //fetch product one by one
            while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;

        }
    }
?>