<?php
    class product extends db {
        public $result;
        public $query;
        
        public function __construct() {
            parent::__construct();
            $SQL = "SELECT * From product";
            $this->query = $SQL;
            $this->result = parent::querySQL($SQL);
        }
        public function getallproduct(){
            $SQL = "SELECT * From product";
            $this->query = $SQL;
            $this->result = parent::querySQL($SQL);
        }
        public function getproductbyid ($id_product){
            $SQL = "SELECT * From product WHERE id_product=$id_product";
            $this->query = $SQL;
            $this->result = parent::querySQL($SQL);
        }
    }