<?php
class homeController {
    public static function constructAction() {
        load_model("product");
        $p= new product();
        $productShow = $p->result;
        load_view('home',$productShow);
    } 
    
}
