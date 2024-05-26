<?php

class productView extends productMod{

    // allProducts
    public function displayAllProducts(){
          $products = $this->getAllProd();
          return $products;

    }

    public function displaySingProduct($prod_id,$wtl) {
          $products = $this->getSingProd($prod_id,$wtl);
           return $products;
    }
}


