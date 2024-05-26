<?php

class cartCtrl extends cartMod {
   public function prepItemfrCart ($prod_id,$qty){
        if(isset($_SESSION['user_id'])){
            $this->addtoCart($prod_id,$qty,$_SESSION['user_id']);
        }
        else{
             $this->addtoCart($prod_id,$qty);
        }
    }
}