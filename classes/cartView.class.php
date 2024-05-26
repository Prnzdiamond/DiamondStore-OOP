<?php

class cartView extends cartMod {
    public function cartItemCount($param){
        if($param == 'qty'){
          $itemQty = 0;
           if(isset($_SESSION['user_id'])){
            $itemArr =  $this->countcartItem($_SESSION['user_id']);
            foreach($itemArr as $key){
                $itemQty += $key['quantity'];
            }
           }
           else{
               if (isset($_SESSION['cart-items'])) {
                  $cartArr = $_SESSION['cart-items'];

               if (!empty($cartArr)) {
                foreach ($cartArr as $quantity) {
                    $itemQty += intval($quantity);
                }
               }
        }
           }

           return $itemQty;
        }
        elseif($param == 'price'){
            $itemPrice = 0;
            if(isset($_SESSION['user_id'])){
                $itemArr = $this->countcartItem($_SESSION['user_id']);
                foreach ($itemArr as $key) {
                    $prod_id = $key['product_id'];
                    $qty = $key['quantity'];
                    $pro = new productView();
                    $prod_dets = $pro->displaySingProduct($prod_id,'product_id');
                    foreach ($prod_dets as $key) {
                        $itemPrice += intVal(str_replace(",","",$key['product_price']))*$qty;
                    }

                }
            }
            elseif (isset($_SESSION['cart-items'])) {
                foreach ($_SESSION['cart-items'] as $key => $value) {
                    $pro = new productView();
                    $prod_dets = $pro->displaySingProduct($key,'product_id');
                    foreach ($prod_dets as $key) {
                        $itemPrice += intVal(str_replace(",","",$key['product_price']))*$value;
                    }

                }
    }
            return $itemPrice;
        }
    }

    public function viewCartitems(){
        $pro = new productView();
        if(isset($_SESSION['user_id'])){
            $cartItems = [];
            $itemArr = $this->countcartItem($_SESSION['user_id']);
            foreach($itemArr as $key){
                $prod_id = $key['product_id'];
                $qty = $key['quantity'];
                $prod_dets = $pro->displaySingProduct($prod_id,'product_id');
                foreach($prod_dets as $item){
                   $item['quantity'] = $qty;
                   $cartItems[] = $item;
                }
            }
           return $cartItems;
        }else{
            if(isset($_SESSION['cart-items'])){
                $cartItems =[];
                foreach ($_SESSION['cart-items'] as $key => $value) {
                    $prod_id = $key;
                    $qty = $value;
                    $prod_dets = $pro->displaySingProduct($prod_id,'product_id');
                    foreach($prod_dets as $item){
                   $item['quantity'] = $qty;
                   $cartItems[] = $item;
                }

                }
                return $cartItems;
            }
        }
    }

}

