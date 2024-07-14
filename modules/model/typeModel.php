<?php
    class type extends db {
        public $result;
        public function __construct() {
            $SQL = "SELECT * From style";
            $this->result = parent::querySQL($SQL);
        }
    }