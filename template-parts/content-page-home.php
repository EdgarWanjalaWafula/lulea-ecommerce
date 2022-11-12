<?php 

$home_banner = get_field('home_banner'); 

if($home_banner){
    ?>
        <section class="position-relative shop-home-banner">
            <div class="carousel">
                <?php 
                    $banners = $home_banner['banner_items'];

                    if($banners){
                        foreach($banners as $key=>$banner){
                            ?>
                            <div class="carousel-cell h-100">
                                <img class="position-absolute w-100 h-100 theme-obj-fit" src="<?php echo $banner['background_image']; ?>" alt="">
                                <div class="d-flex h-100 align-items-end banner-slider">
                                    <div class="container-fluid higher-z-index">
                                        <div class="row">
                                            <div class="col-md-8 text-white offset-1 heading">
                                                <span class="small text-uppercase heading-font-spacing"><?php echo $banner['tagline']; ?></span>
                                                <h1 class="heading-font-spacing text-uppercase"><?php echo $banner['heading']; ?></h1>
                                                <div class="button-group d-flex">
                                                    <a href="<?php echo $banner['page_cta']; ?>" class="btn theme-button text-white btn-sm d-flex align-items-center">Shop it</a>
                                                    <a href="<?php echo $banner['page_cta']; ?>" class="btn theme-button text-white btn-sm d-flex align-items-center">more products</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                ?>
            </div>
        </section>
        <section class="shop-home-bestsellers">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <span class="heading small text-uppercase">best sellers</span>
                    </div>
                </div>
            </div>
        </section>
    <?php
}