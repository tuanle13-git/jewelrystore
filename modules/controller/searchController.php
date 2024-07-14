<?php

function constructAction() {
   
    
    load_model("product");
        $p = new product();
        $datashow = $p->result;
        load_view('search',$datashow);
}
    function nhanAction() {
        load_model("product");
        $p = new product();
        $datashow = $p->result;
        load_view('searchview',$datashow);

    } 