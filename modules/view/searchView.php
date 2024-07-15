<?php get_header();
 $_SESSION['user'] = 1; 
?>




<body> 
<?php get_nav(); ?>
<div class="container position-relative ">
        <div ><h1 >Earrings</h1>
            <p>Elevate your jewelry ensemble with silver and gold earrings.</p>
        </div>
        <div style="z-index: 1;" class="d-flex justify-content-between pb-3 pt-3 bg-white sticky-top fixedtopint2">
            <p class="text-decoration-underline">BỘ LỌC</p>
            <div>
                <div class="d-inline-block">SẮP XẾP THEO: </div>
                <div class="d-inline-block">
                    <select class="form-select " aria-label="Default select example">
                        <option selected value="1">Mới nhất</option>
                        <option value="2">Cũ nhất</option>
                        <option value="3">Giá cao đến thấp</option>
                        <option value="4">Giá thấp đến cao</option>
                    </select>
                </div>
    
            </div>
        </div>
        <div class="row ">
         
           
            <div class="col-sm-3 product">

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">  
                        <img class="mainimg"
                      src="https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,c_limit,w_3840,q_auto/https://static.mejuri.com/legacy-front/production/system/spree/products/16841/original/DiamondsTeam_ring_wg_hero_0360.jpg?1605794060" decoding="async" data-nimg="fill" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover;" sizes="(min-width: 768px) 24vw, 40vw" srcset="https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,c_limit,w_256,q_auto/https://static.mejuri.com/legacy-front/production/system/spree/products/16841/original/DiamondsTeam_ring_wg_hero_0360.jpg?1605794060 256w, https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,c_limit,w_384,q_auto/https://static.mejuri.com/legacy-front/production/system/spree/products/16841/original/DiamondsTeam_ring_wg_hero_0360.jpg?1605794060 384w, https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,c_limit,w_640,q_auto/https://static.mejuri.com/legacy-front/production/system/spree/products/16841/original/DiamondsTeam_ring_wg_hero_0360.jpg?1605794060 640w, https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,c_limit,w_750,q_auto/https://static.mejuri.com/legacy-front/production/system/spree/products/16841/original/DiamondsTeam_ring_wg_hero_0360.jpg?1605794060 750w, https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,c_limit,w_828,q_auto/https://static.mejuri.com/legacy-front/production/system/spree/products/16841/original/DiamondsTeam_ring_wg_hero_0360.jpg?1605794060 828w, https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,c_limit,w_1080,q_auto/https://static.mejuri.com/legacy-front/production/system/spree/products/16841/original/DiamondsTeam_ring_wg_hero_0360.jpg?1605794060 1080w, https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,c_limit,w_1200,q_auto/https://static.mejuri.com/legacy-front/production/system/spree/products/16841/original/DiamondsTeam_ring_wg_hero_0360.jpg?1605794060 1200w, https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,c_limit,w_1920,q_auto/https://static.mejuri.com/legacy-front/production/system/spree/products/16841/original/DiamondsTeam_ring_wg_hero_0360.jpg?1605794060 1920w, https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,c_limit,w_2048,q_auto/https://static.mejuri.com/legacy-front/production/system/spree/products/16841/original/DiamondsTeam_ring_wg_hero_0360.jpg?1605794060 2048w, https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,c_limit,w_3840,q_auto/https://static.mejuri.com/legacy-front/production/system/spree/products/16841/original/DiamondsTeam_ring_wg_hero_0360.jpg?1605794060 3840w">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <p style="font-size: 14px; font-weight: 500; margin-bottom: 5px;">Boyfriend Bold Bracelet</p>
                        <div class="d-flex">  <span class="selectcolor">  <span class="selectcolorsub"></span></span>   <span class="selectcolor">  <span class="selectcolorsub"></span></span></div>
                        <p class="m-0 metal_stone_name" style="font-size: 12px!important; font-weight: 300;"></p>
                        <p style="margin: 0 !important; font-size: 12px!important; font-weight: 200;" >1000000 VNĐ</p>
                        <p style="margin: 0 !important; font-size: 12px!important; font-weight: 200;" >Vàng 14K</p>
                    </div>
                </a>
            </div>
            <?php 
        while($row=$datashow->fetch_assoc()){
            echo '<div class="col-sm-3 product" >

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