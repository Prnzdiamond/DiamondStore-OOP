<?php

class CatView extends CatMod {
     public function displaycatview(){
        $checkQuery = $this->displayCat();
        if(empty($checkQuery)){
              echo '<h4>No brands Yet</h4>';
              exit;
        }
        foreach($checkQuery as $key){
        $cat_title = $key['category_ref'];
               $cat_id = $key['category_id'];
               echo "<li class='nav-item mt-4 fs-5'><a href='index.php?category=$cat_id' class='nav-link nav-list'>$cat_title</a></li>";

        }
     }


}