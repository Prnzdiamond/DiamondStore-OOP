<?php
class productMod extends dbh {

    // get products
    //   get all
   protected function getAllProd (){
        try{
            $dbconn = $this->connect();
            $sql = "select * from products";
            $send_query = $dbconn->query($sql);
            $send_query->execute();
            $result = $send_query->fetchAll();
            return $result;
        }catch(PDOException $e){
            echo $e->getLine().$e->getFile();
            echo "Error".$e->getMessage();
        }
        }

        
        //   get single
    protected function getSingProd ($prod_id,$wtl){
        $key_arr = ['product_id','prod_uid','product_title','product_key','select_category','select_brandName'];
        if(!in_array($wtl,$key_arr)){
            echo "THeif";
            exit;
        }
        try{
        $dbconn = $this->connect();
        $sql = "select * from products where $wtl like ?";
        $send_query = $dbconn->prepare($sql);
        $send_query->execute(["%$prod_id%"]);
        $result = $send_query->fetchAll();
        return $result;
        }catch(PDOException $e){
            echo "Error ".$e->getMessage();
            echo $e->getLine().$e->getFile();
        }
    }

    // create Product

    // update product

    // view product


}





