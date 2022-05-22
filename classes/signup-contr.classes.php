<?php

class SignupContr {

    private $uid;
    private $email;
    private $pwd;
    private $pwdrepeat;
    
    public function __construct($uid, $email, $pwd, $pwdrepeat){
        $this->$uid = $uid;
        $this->$email = $email;
        $this->$pwd = $pwd;
        $this->$pwdrepeat = $pwdrepeat;
    }

    private function emptyInput(){

        $result;
        if (empty($this->$uid) || empty($this->$email) || empty($this->$pwd) || empty($this->$pwdrepeat)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function invalidUid(){

        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->$uid;)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

    private function invalidEmail(){

        $result;
        if (!filter_var($this->$email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }
    private function invalidEmail(){

        $result;
        if ($this->$pwd !== $this->$pwdrepeat) {
            $result = false;
        }
        else {
            $result = true;
        }
        return $result;
    }

}
