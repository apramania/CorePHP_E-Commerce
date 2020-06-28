<?php

    class Cart{
        
        public $db = null;

        public function __construct(DBController $db){
            if(!isset($db->conn)){
                return null;
            }
            $this->db = $db;
        }

        //insert into cart table
        public function insertIntoCart($params = null, $table = "cart"){
            if($this->db->conn != null){
                if($params != null){
                    //get table columns
                    $columns = implode(',',array_keys($params));
                    // print_r($columns);
                    $values = implode(',',array_values($params));
                    // print_r($values);


                    //create query string
                    $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns,$values);
                    // echo $query_string;


                    //execute query string
                    $result = $this->db->conn->query($query_string);

                    return $result;
                }
            }
        }

        //get userid and itemid and insert into cart
        public function addToCart($userid, $itemid){
            if(isset($userid) && isset($itemid)){
                $params = array(
                    "user_id" => $userid,
                    "item_id" => $itemid
                );

                //insert into cart
                $result = $this->insertIntoCart($params);

                if($result){
                    header("Location:".$_SERVER["PHP_SELF"]);
                }
            }
        }

        //delete cart item using cart item id
        public function deleteById($item_id = null, $table = 'cart'){
            if($item_id!=null){
                $result = $this->db->conn->query("DELETE FROM {$table} WHERE item_id={$item_id}");
                if($result){
                    header("Location:".$_SERVER['PHP_SELF']);
                }

                return $result;
            }
            
        }


        //get subtotal value
        public function getSubTotal($arr){
            if(isset($arr)){
                $sum = 0;
                foreach($arr as $item){
                    $sum += floatval($item[0]);
                }

                return sprintf('%.2f', $sum);
            }
        }

        //get item_id of cart 
        public function getCartId($cartArray = null, $key = "item_id"){
            if($cartArray != null){
                $cart_id = array_map(function($value) use($key){
                    return $value[$key];
                }, $cartArray);
                return $cart_id;
            }
            
        }

        //save for later
        public function saveForLater($item_id=null, $saveTable = "wishlist", $fromTable = "cart"){
            if($item_id != null){
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id = {$item_id};";
            $query .= "DELETE FROM {$fromTable} WHERE item_id={$item_id}";


            $result = $this->db->conn->multi_query($query);

            if($result){
                header("Location:".$_SERVER['PHP_SELF']);
            }
            return $result;
            }
        }
    }

?>