<?php
class BrandMod extends dbh {
    protected function displayBrands(){
    $select_cat = "select * from `brand`";
    $sendQuery = $this->connect()->query($select_cat);
    $sendQuery->execute();
    $checkQuery = $sendQuery->fetchAll();
    return $checkQuery;
  
}
}

