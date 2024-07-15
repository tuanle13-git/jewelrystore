<?php get_header(); 

?>




<body> 
<?php get_nav(); ?>
<main>
    <?php $row=$datashow->fetch_assoc(); ?>
        <div class="container-sm">
            <div class="row">
                <div class="col-8 ">
                    <div class="d-grid" style="grid-template-columns: repeat(2,1fr)">
                        <div class="h-100 w-100">
                            <div class="imgconcircle">
                                <img src=
                                <?php 
                                    echo "'".$row["imgmain"]."'";
                                    $_SESSION['user'] = $row['id_product'];
                                ?>
                                
                                    alt="">
                            </div>
        
                        </div>
                        <div class="h-100 w-100">
                            <div class="imgconcircle">
                                <img src= <?php 
                                    echo "'".$row["imgmain"]."'";
                                ?>
                                    alt="">
                            </div>
        
        
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-4 ">
                    <p class="fw-bold">
                    <?php 
                                    echo $row["name"];
                                ?>
                    </p>
                    <p class="">
                    <?php 
                                    echo $row["price"];
                                ?>
                    </p>
                    <hr>
                    <div class="p-3 bg-danger">
                
                    </div>
                    <hr>
                    <div class="d-flex bg-dark text-white p-3">
                        <p class="m-auto">THÊM VÀO GIỎ</p>
                    </div>
                    <div class="p-5 text-decoration-underline">
                        <p>+ Miễn phí vận chuyển</p>
                        <p>+ Hoản trả 30 ngày</p>
                        <p>+ Bào hành 2 năm</p>
                    </div>
                    <hr>
                    <div>
                        <div class="d-flex justify-content-between align-content-center">
                            <p class="mt-auto mb-auto">Thông số sản phẩm</p>
                            <h3 class="hideplus">+</h3 >
                            
                        </div>
                        <div class="ps-5 pt-2 d-none ">
                            chán quá mấy đứa bây
                            <br>
                            hãy nói
                            <br>
                            new
                            <br>
                            abc
                            <br>
                            <b> </b>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <div class="d-flex justify-content-between align-content-center">
                            <p class="mt-auto mb-auto">Thông số sản phẩm</p>
                            <h3 class="hideplus">+</h3 >
                            
                        </div>
                        <div class="ps-5 pt-2 d-none ">
                            chán quá mấy đứa bây
                            <br>
                            hãy nói
                            <br>
                            new
                            <br>
                            abc
                            <br>
                            <b> </b>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </main>

    <div class="container position-relative">
        <p class="pt-3 d-flex justify-content-center"><b>BÁN CHẠY NHẤT</b></p>
        <div class="row slidecontainer">
            <div class="col-4 col-sm-2 product" >

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">
                        <img class="mainimg"
                            src="https://product.hstatic.net/200000689681/product/2_774e332371d644559837e22b76a90332_large.png"
                            alt="" style="z-index: 2; ">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <h6>Boyfriend Bold Bracelet</h6>
                        <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                        <p style="margin: 0 !important;" style="font-size: 14px;">1000000 VNĐ</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-2 product" >

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">
                        <img class="mainimg"
                            src="https://product.hstatic.net/200000689681/product/2_774e332371d644559837e22b76a90332_large.png"
                            alt="" style="z-index: 2; ">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <h6>Boyfriend Bold Bracelet</h6>
                        <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                        <p style="margin: 0 !important;" style="font-size: 14px;">1000000 VNĐ</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-2 product" >

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">
                        <img class="mainimg"
                            src="https://product.hstatic.net/200000689681/product/2_774e332371d644559837e22b76a90332_large.png"
                            alt="" style="z-index: 2; ">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <h6>Boyfriend Bold Bracelet</h6>
                        <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                        <p style="margin: 0 !important;" style="font-size: 14px;">1000000 VNĐ</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-2 product" >

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">
                        <img class="mainimg"
                            src="https://product.hstatic.net/200000689681/product/2_774e332371d644559837e22b76a90332_large.png"
                            alt="" style="z-index: 2; ">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <h6>Boyfriend Bold Bracelet</h6>
                        <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                        <p style="margin: 0 !important;" style="font-size: 14px;">1000000 VNĐ</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-2 product" >

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">
                        <img class="mainimg"
                            src="https://product.hstatic.net/200000689681/product/2_774e332371d644559837e22b76a90332_large.png"
                            alt="" style="z-index: 2; ">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <h6>Boyfriend Bold Bracelet</h6>
                        <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                        <p style="margin: 0 !important;" style="font-size: 14px;">1000000 VNĐ</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-2 product" >

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">
                        <img class="mainimg"
                            src="https://product.hstatic.net/200000689681/product/2_774e332371d644559837e22b76a90332_large.png"
                            alt="" style="z-index: 2; ">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <h6>Boyfriend Bold Bracelet</h6>
                        <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                        <p style="margin: 0 !important;" style="font-size: 14px;">1000000 VNĐ</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-2 product" >

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">
                        <img class="mainimg"
                            src="https://product.hstatic.net/200000689681/product/2_774e332371d644559837e22b76a90332_large.png"
                            alt="" style="z-index: 2; ">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <h6>Boyfriend Bold Bracelet</h6>
                        <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                        <p style="margin: 0 !important;" style="font-size: 14px;">1000000 VNĐ</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-2 product" >

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">
                        <img class="mainimg"
                            src="https://product.hstatic.net/200000689681/product/2_774e332371d644559837e22b76a90332_large.png"
                            alt="" style="z-index: 2; ">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <h6>Boyfriend Bold Bracelet</h6>
                        <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                        <p style="margin: 0 !important;" style="font-size: 14px;">1000000 VNĐ</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-2 product" >

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">
                        <img class="mainimg"
                            src="https://product.hstatic.net/200000689681/product/2_774e332371d644559837e22b76a90332_large.png"
                            alt="" style="z-index: 2; ">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <h6>Boyfriend Bold Bracelet</h6>
                        <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                        <p style="margin: 0 !important;" style="font-size: 14px;">1000000 VNĐ</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-2 product" >

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">
                        <img class="mainimg"
                            src="https://product.hstatic.net/200000689681/product/2_774e332371d644559837e22b76a90332_large.png"
                            alt="" style="z-index: 2; ">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <h6>Boyfriend Bold Bracelet</h6>
                        <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                        <p style="margin: 0 !important;" style="font-size: 14px;">1000000 VNĐ</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-2 product" >

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">
                        <img class="mainimg"
                            src="https://product.hstatic.net/200000689681/product/2_774e332371d644559837e22b76a90332_large.png"
                            alt="" style="z-index: 2; ">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <h6>Boyfriend Bold Bracelet</h6>
                        <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                        <p style="margin: 0 !important;" style="font-size: 14px;">1000000 VNĐ</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-2 product" >

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">
                        <img class="mainimg"
                            src="https://product.hstatic.net/200000689681/product/2_774e332371d644559837e22b76a90332_large.png"
                            alt="" style="z-index: 2; ">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <h6>Boyfriend Bold Bracelet</h6>
                        <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                        <p style="margin: 0 !important;" style="font-size: 14px;">1000000 VNĐ</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-2 product" >

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">
                        <img class="mainimg"
                            src="https://product.hstatic.net/200000689681/product/2_774e332371d644559837e22b76a90332_large.png"
                            alt="" style="z-index: 2; ">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <h6>Boyfriend Bold Bracelet</h6>
                        <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                        <p style="margin: 0 !important;" style="font-size: 14px;">1000000 VNĐ</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-2 product" >

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">
                        <img class="mainimg"
                            src="https://product.hstatic.net/200000689681/product/2_774e332371d644559837e22b76a90332_large.png"
                            alt="" style="z-index: 2; ">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <h6>Boyfriend Bold Bracelet</h6>
                        <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                        <p style="margin: 0 !important;" style="font-size: 14px;">1000000 VNĐ</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-2 product" >

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">
                        <img class="mainimg"
                            src="https://product.hstatic.net/200000689681/product/2_774e332371d644559837e22b76a90332_large.png"
                            alt="" style="z-index: 2; ">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <h6>Boyfriend Bold Bracelet</h6>
                        <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                        <p style="margin: 0 !important;" style="font-size: 14px;">1000000 VNĐ</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-2 product " >

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">
                        <img class="mainimg"
                            src="https://product.hstatic.net/200000689681/product/2_774e332371d644559837e22b76a90332_large.png"
                            alt="" style="z-index: 2; ">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <h6>Boyfriend Bold Bracelet</h6>
                        <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                        <p style="margin: 0 !important;" style="font-size: 14px;">1000000 VNĐ</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-2 product" >

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">
                        <img class="mainimg"
                            src="https://product.hstatic.net/200000689681/product/2_774e332371d644559837e22b76a90332_large.png"
                            alt="" style="z-index: 2; ">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <h6>Boyfriend Bold Bracelet</h6>
                        <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                        <p style="margin: 0 !important;" style="font-size: 14px;">1000000 VNĐ</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-2 product" >

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">
                        <img class="mainimg"
                            src="https://product.hstatic.net/200000689681/product/2_774e332371d644559837e22b76a90332_large.png"
                            alt="" style="z-index: 2; ">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <h6>Boyfriend Bold Bracelet</h6>
                        <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                        <p style="margin: 0 !important;" style="font-size: 14px;">1000000 VNĐ</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-2 product" >

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">
                        <img class="mainimg"
                            src="https://product.hstatic.net/200000689681/product/2_774e332371d644559837e22b76a90332_large.png"
                            alt="" style="z-index: 2; ">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <h6>Boyfriend Bold Bracelet</h6>
                        <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                        <p style="margin: 0 !important;" style="font-size: 14px;">1000000 VNĐ</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-2 product" >

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">
                        <img class="mainimg"
                            src="https://product.hstatic.net/200000689681/product/2_774e332371d644559837e22b76a90332_large.png"
                            alt="" style="z-index: 2; ">
                        <img class="sub"
                            src="https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,c_limit,w_384,q_auto/https://static.mejuri.com/legacy-front/production/system/spree/products/30601/original/1-BeadedHuggieHoops-14k-Stack1_027.jpg?1697734365"
                            alt="" style="z-index: 1;">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <h6>Boyfriend Bold Bracelet</h6>
                        <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                        <p style="margin: 0 !important;" style="font-size: 14px;">1000000 VNĐ</p>
                    </div>
                </a>
            </div>
            <div class="col-4 col-sm-2 product" >

                <a href="" class="text-decoration-none text-dark">
                    <div class="imgcon position-relative">
                        <img class="mainimg"
                            src="https://product.hstatic.net/200000689681/product/2_774e332371d644559837e22b76a90332_large.png"
                            alt="" style="z-index: 1; ">
                        <img class="sub"
                            src="https://static.mejuri.com/mejuri-com/image/fetch/c_scale,f_auto,q_60,c_limit,w_384,q_auto/https://static.mejuri.com/legacy-front/production/system/spree/products/30601/original/1-BeadedHuggieHoops-14k-Stack1_027.jpg?1697734365"
                            alt="" style="z-index: 0;">

                        <div class="addicon  rounded-pill">Thêm vào giỏ</div>
                    </div>
                    <div class="" style="margin-top: 2px;">
                        <h6>Boyfriend Bold Bracelet</h6>
                        <p class="m-0 metal_stone_name" style="font-size: 14px;"></p>
                        <p style="margin: 0 !important;" style="font-size: 14px;">1000000 VNĐ</p>
                    </div>
                </a>
            </div>


        </div>
    </div>

    <?php 
                                    echo "'". $_SESSION['user']."'";
                                   
                                ?>