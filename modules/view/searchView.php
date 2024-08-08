<?php get_header();
?>
<?php get_nav(); ?>

<main class="container-fluid  m-0 p-0">
            <div class="m-0 py-md-3 py-sm-1 container-fluid bg-white d-flex justify-content-between shadow  top-sticky-2 sticky-top" style="z-index: 10!important;">
                <div class="roboto-regular px-lg-5 sort-area bg-white ">
                    <p class="m-0 text-decoration-underline">BỘ LỌC</Canvas></p></div>
                <div class="roboto-regular sort-area bg-white ">
                    <div class=" d-flex flex-row pe-md-3 pe-sm-1">
                        <p class=" m-0">XẮP XẾP: </p>
                        <p class="m-0 sort-value">MỚI NHẤT</p>
                        <i class="bi bi-chevron-compact-down genaral-sort-list" data-show="true"></i>
                        <i class="bi bi-chevron-compact-up genaral-sort-list d-none show-sort-list"></i>
                    </div>
                    <div class="position-relative show-sort-list sort-area-value d-none">
                        <div class="position-absolute p-1 top-100 start-0 end-0 bg-white shadow-lg">
                            <li class="list-unstyled active" data-value="MỚI NHẤT">MỚI NHẤT</p>
                            <li class="list-unstyled" data-value="CŨ NHẤT">CŨ NHẤT</p>
                            <li class="list-unstyled" data-value="CAO ĐẾN THẤP">GIÁ: CAO ĐẾN THẤP</p>
                            <li class="list-unstyled" data-value="THẤP ĐẾN CAO">GIÁ: THẤP ĐẾN CAO</p>

                                
                               
                        </div>
                    </div>
                </div>
            </div>
           <div class="container-sm border-start border-end border-dark">
            <div class="row "  style="align-items: stretch;">
                <!-- card -->
                <div class="col-6 col-sm-3 h-100  p-sm-3 p-1">
                    <div class="border border-dark">
                        <a class="text-dark text-decoration-none" href="">
                            <img class="w-100 ratio ratio-1x1" style="background-color: rgb(250,247,240);"
                                src="https://cdn.pnj.io/images/thumbnails/300/300/detailed/217/sp-glddddw000886-lac-tay-kim-cuong-vang-trang-14k-pnj-01.png"
                                alt="">
                            <div class="">
                                <p class="text-center">Dây cổ Vàng trắng 14K đính ngọc trai Akoya PNJ PAMXW000021</p>
                                <p class="text-center roboto-light">100000 VNĐ</p>
                            </div>
                        </a>
                    </div>

                </div>
                <?php 
                while($row=$datashow->fetch_assoc()){?>
                <div class="col-6 col-sm-3 h-auto  p-sm-3 p-1 d-flex flex-column">
                    <div class="border border-dark h-100 d-flex">
                        <a class="text-dark text-decoration-none h-auto d-flex flex-column" href="">
                            <img class="w-100 ratio ratio-1x1" style="background-color: rgb(250,247,240);"
                                src="<?php echo $row['main_img']; ?>"
                                alt="">
                            <div class="d-flex flex-column h-100 ">
                                <p class="text-center"><?php echo $row['name_product']; ?></p>
                                <p class="text-center roboto-light mt-auto"><?php echo $row['price']; ?> VNĐ</p>
                            </div>
                        </a>
                    </div>

                </div>
                <?php } ?>

            </div>

           </div>
        </main>
        <main style="height: 10000px;">
            <div class="sticky-top " style="top: 100px;height: 100px; width: 100%; background-color: black;"></div>
        </main>
        <?php get_footer(); ?>