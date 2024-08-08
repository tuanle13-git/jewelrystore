<?php
class product extends db
{
    public $result;
    public $query;

    public function __construct()
    {
        parent::__construct();
        $SQL = "SELECT * From product";
        $this->query = $SQL;
        $this->result = parent::querySQL($SQL);
    }
    public function getallproduct()
    {
        $SQL = "SELECT * From product";
        $this->query = $SQL;
        $this->result = parent::querySQL($SQL);
    }
    public function getproductbyid($id_product)
    {
            $sql = "SELECT        
                p.id_product,
                t.name_trademark,
                s.name_sex,
                m.name_stone AS name_mainstone,
                u.name_stone AS name_substone,
                p.name_product,
                p.weight_product,
                c.name_category
            FROM
                product p,
                trademark t,
                sex s,
                stone m,
                stone u,
                category c
            WHERE
                p.id_trademark = t.id_trademark
                AND p.id_sex = s.id_sex
                AND p.id_mainstone = m.id_stone
                AND p.id_substone = u.id_stone
                AND p.id_category = c.id_category
                AND P.id_product=$id_product;
                    ";
        $step1 = parent::querySQL($sql);
        $arr = mysqli_fetch_assoc($step1);
        if(empty($arr)) return ;
        $sql = "SELECT
                    ps.id_size,
                    s.name_size,
                    ps.quantity,
                    ps.price
                FROM
                    productsize ps, size s
                WHERE
                    ps.id_size=s.id_size AND
                    ps.id_product=$id_product;
                ";
            $step2 = parent::querySQL($sql);
            $arr['size'] = mysqli_fetch_all($step2,MYSQLI_ASSOC);;
            $sql = "SELECT
                    m.link
                FROM
                    img m
                WHERE
                    m.id_product=$id_product
                ORDER BY m.role DESC;
                ";
            $step3 = parent::querySQL($sql);
            $arr['img'] = mysqli_fetch_all($step3,MYSQLI_ASSOC);;
          
           
        return $arr;       
    }
    
    public function searchProduct($kw=null)
    {
        
            $sql = "SELECT        
                p.id_product,
                p.name_product,
                p.price,
                p.main_img
            FROM
                product p
            
                    ";
        $step1 = parent::querySQL($sql);          
        return $step1;       
        var_dump($step1);
    }
    




}
