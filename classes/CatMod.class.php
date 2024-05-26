<?php
class CatMod extends dbh {


    protected function displayCat(){
    $select_cat = "select * from `categories`";
    $sendQuery = $this->connect()->query($select_cat);
    $sendQuery->execute();
    if ($sendQuery->rowCount() > 0) {
           $checkQuery = $sendQuery->fetchAll();
           return $checkQuery;
        }
    else {
       $checkQuery =  '<h4>No Categories Yet</h4>';
       return $checkQuery;
    }
}
}