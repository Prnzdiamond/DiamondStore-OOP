<?php

class BrandView extends BrandMod {
     public function displayBrandview(){
        $checkQuery = $this->displayBrands();
        if(empty($checkQuery)){
              echo '<h4>No brands Yet</h4>';
              exit;
        }
        foreach($checkQuery as $key){
        $cat_title = $key['brand_ref'];
               $cat_id = $key['brand_id'];
               echo "<li class='nav-item mt-4 fs-5'><a href='index.php?brand=$cat_id' class='nav-link nav-list'>$cat_title</a></li>";

        }
     }


}