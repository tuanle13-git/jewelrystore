<?php
class detailController {
    public static function constructAction() {
        if (!empty($_GET["idproduct"])) {
            load_model("product");
            $p= new product();
            $p->getproductbyid($_GET["idproduct"]);
            $productShow = $p->getproductbyid($_GET["idproduct"]);
            
            if (!empty($productShow))
            load_view('detail',$productShow);
            else
            load_view("home");
        }
        else{
            load_view("home");
        }
        
    } 
}

   