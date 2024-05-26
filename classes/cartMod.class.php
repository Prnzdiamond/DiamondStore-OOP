<?php

class cartMod extends dbh{
  protected function addtoCart ($prod_id,$qty,$user_id=""){
    if(isset($_SESSION['user_id'])){
        echo "true";
    $dbconn = $this->connect();
    $sql = "select * from cart_details where product_id = ? and users_id = ?";
    $send_query = $dbconn->prepare($sql);
    $send_query->execute([$prod_id,$user_id]);
    if($send_query->rowCount() == 0){
        $sql = "insert into cart_details (users_id,product_id,quantity) values (?,?,?)";
        $send_query = $dbconn->prepare($sql);
        $send_query->execute([$user_id,$prod_id,$qty]);
    }
    elseif($send_query->rowCount() > 0){
        $newQty = 0;
        $result = $send_query->fetchAll();
        foreach ($result as $key) {
            $newQty = $qty + $key['quantity'];
            $sql = "update cart_details set quantity = ? where product_id = ? and users_id = ?";
            $send_query = $dbconn->prepare($sql);
            $send_query->execute([$newQty,$prod_id,$user_id]);
        }

    }
    }else{
        if(!isset($_SESSION['cart-items'])){
            $_SESSION['cart-items'] = [];
        }
         if(isset($_SESSION['cart-items'][$prod_id])){
            $_SESSION['cart-items'][$prod_id] += $qty;
         }
         else{
             $_SESSION['cart-items'][$prod_id] = $qty;
         }
    }

   }

   protected function countcartItem($user_id="") {
     if(isset($_SESSION['user_id'])){
        $dbconn = $this->connect();
        $sql = "select * from cart_details where users_id = ?";
        $send_query = $dbconn->prepare($sql);
        $send_query->execute([$user_id]); 
        $result = $send_query->fetchAll();
        return $result;   
   }
  }


}