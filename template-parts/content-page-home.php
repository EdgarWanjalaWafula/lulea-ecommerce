<?php 

    $home_banner = get_field('home_banner'); 
    $home_cat_grid = get_field('home_grid');

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
            <?php 
                                        lulea_theme_img($banner['background_image'], 'slider-image', 'position-absolute w-100 h-100 theme-obj-fit');
                                    ?>
            <div class="d-flex h-100 align-items-end banner-slider position-relative higher-z-index">
                <div class="container-fluid higher-z-index">
                    <div class="row">
                        <div class="col-md-8 text-white offset-1 heading">
                            <span
                                class="small text-uppercase heading-font-spacing"><?php echo $banner['tagline']; ?></span>
                            <h1 class="heading-font-spacing text-uppercase"><?php echo $banner['heading']; ?></h1>
                            <div class="button-group d-flex">
                                <a href="<?php echo $banner['page_cta']; ?>"
                                    class="btn theme-button text-white btn-sm d-flex align-items-center">Shop it</a>
                                <a href="<?php echo $banner['page_cta']; ?>"
                                    class="btn theme-button text-white btn-sm d-flex align-items-center">more
                                    products</a>
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
<section class="shop-home-bestsellers shop-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-2 text-center">
                <h1 class="heading text-uppercase">the paragon collection</h1>
                <p>LULEA represents the Kenyan brand for high quality
                    premium, handcrafted leather, textile bags and
                    accessories. The creativity and craftsmanship rooted in
                    the company pedigree enable to deliver a distinctive
                    brand to better express the personality of its fashion
                    conscious customers.</p>

                <p>At a low price point of entry, our Paragon Range is
                    LULEA’s brand ambassador.</p>
            </div>
        </div>
        <?php echo do_shortcode('[products limit="4" columns="2" visibility="featured"]'); ?>
        <div class="row">
            <div class="col-md-6 offset-3 text-center">
                <a href="<?php echo home_url('shop'); ?>" class="theme-button theme-bg text-white">shop now</a>
            </div>
        </div>
    </div>
</section>
<?php
    }

    $tax = 'product_cat';
    $terms = get_terms($tax, array(
        'orderby'    	=> 'id', 
        'order'      	=> 'ASC',
        'hide_empty' 	=> 1, 
    )); 
    
    if(count($terms) > 0): 
        ?>
            <section class="position-relative theme-padding">
                <div class="container-fluid">
                    <div class="row grid-items">
                        <div class="col-md-6">
                            <?php 
                                foreach($terms as $key=>$term){
                                    get_template_part('template-parts/content', 'component-category-card', array(
                                        'term' => $term
                                    ));

                                    if($key % 3 == 0 ){
                                        ?>
                                            </div>
                                            <div class="col-md-6">
                                        <?php
                                    }
                                }   
                            ?>
                    </div>
                </div>
            </section>
        <?php
    endif; 