<?php get_header(); ?>




<body> 
<?php get_nav(); ?>
   
<main class="border border-dark">

    
    <!-- banner -->
    <div class="container-fluid position-relative d-flex justify-content-center p-0">
        <a class="text-decoration-none w-100 h-100" href="?a">
            <img src="/public/image/banner/banner.png" alt="banner" class="w-100 h-100 ">
            <div class="position-absolute  bottom-0 text-center pb-5">
                <h1 class="text-white p-3">CHÀO MỪNG BẠN ĐẾN VỚI <br>
                    CỬA HÀNG</h1>
                <a class="text-dark bg-white p-3 text-decoration-none">TẤT CẢ SẢN PHẨM</a>
            </div>
        </a>
    </div>
    <!-- maincontent -->
    <div class="container-fluid " >
        <div class="row p-0">
            <div class="titlebottom productcontent col-6 col-sm-2 p-0">
                <a href="?page=detail" class=" text-decoration-none text-dark">
                    <div class="imgcon position-relative">  
                        <img class="mainimg"
                      src="/public/image/contents/hoatai.png">
                        <div class="titleimgbottom">HOA TAI</div>
                    </div>
                </a>
            </div>
            <div class="titlebottom productcontent col-6 col-sm-2 p-0">
                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">  
                        <img class="mainimg"
                        src="/public/image/contents/nhan.png">   
                        <div class="titleimgbottom">NHẪN</div>                    </div>
                </a>
            </div>
            <div class="titlebottom productcontent col-6 col-sm-2 p-0">
                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">  
                        <img class="mainimg"
                        src="/public/image/contents/lactay.png">     
                        <div class="titleimgbottom">LẮC TAY</div>                    </div>
                </a>
            </div>
            <div class="titlebottom productcontent col-6 col-sm-2 p-0">
                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">  
                        <img class="mainimg"
                        src="/public/image/contents/vongco.png">    
                        <div class="titleimgbottom">VÒNG CỔ</div>                    </div>
                </a>
            </div>
            <div class="titlebottom productcontent col-6 col-sm-2 p-0">
                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">  
                        <img class="mainimg"
                        src="/public/image/contents/gift.png">  
                        <div class="titleimgbottom">QUÀ TẶNG</div>
                    </div>
                </a>
            </div>
            <div class="titlebottom productcontent col-6 col-sm-2 p-0">
                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">  
                        <img class="mainimg"
                        src="/public/image/contents/mens.png">      
                    <div class="titleimgbottom">DÀNH CHO NAM</div>                
                </a>
            </div>
            
        </div>
    </div>
    <div class="container position-relative">
        <p class="pt-3 d-flex justify-content-center"><b>BÁN CHẠY NHẤT</b></p>
        <div class="row slidecontainer">
        <?php 
        while($row=$datashow->fetch_assoc()){
            echo '<div class="col-4 col-sm-2 product" >

            <a href="?page=detail&idproduct='.$row["id_product"]. '" class="text-decoration-none text-dark">
                <div class="imgcon position-relative">
                    <img class="mainimg"
                        src="'.$row["imgmain"].'"
                        data-imgsub = "'.$row["imgsub"]. '
                        alt="" style="z-index: 2; ">

                    <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                </div>
                <div class="" style="margin-top: 2px;">
                    <h6>'.$row["name"]. '</h6>
                    <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                    <p style="margin: 0 !important;" style="font-size: 14px;">'.$row["price"]. '</p>
                </div>
            </a>
        </div>';
        }
        ?>
         
    
        </div>
    </div>
    </main>