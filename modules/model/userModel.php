<?php
    class user extends db {
        public $result;
        public function __construct() {
            parent::__construct();
            $SQL = "SELECT * From user";
            $this->result = parent::querySQL($SQL);
        }
        public static function checkpassword($username,$password){
            $SQL = "SELECT password From user where username='".$username."' AND password ='".md5($password)."'";
            $result = parent::querySQL($SQL);
            if ($result->num_rows >0)
            return true;
            else return false;
        }
    }