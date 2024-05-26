<?php

class dbh {

    private $host = 'localhost';
    private $dbname = 'diamondstore';
    private $username = 'root';
    private $password = '';
protected function connect() {

    
    try {
      
       $dbconn = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';charset=UTF8;',$this->username,$this->password);
       if($dbconn){
        $dbconn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
       }
        
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $dbconn;

}
}

