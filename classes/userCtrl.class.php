<?php

class userCtrl extends usersMod{
    public function RegUser ($email, $username, $password, $image,$phone){
        return $this->register($email, $username, $password, $image,$phone);
        
    }

    public function loginUser ($email, $password){
      return  $this->login($email, $password);
    }
}