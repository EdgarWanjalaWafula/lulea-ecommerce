<div class="position-relative shop-inner-banner d-flex align-items-center text-white">
    <img class="position-absolute h-100 w-100 theme-obj-fit" src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : wp_get_attachment_image_url('57', 'full'); ?>" alt="Luxury Leather Kenya">
    <div class="container-fluid">
        <div class="row">
            <div class="col position-relative">
                <?php 
                    $title = "";
                    if(is_shop()){
                        $title = "Shop"; 
                    } else {
                        $title = get_the_title(); 
                    }
                ?>
                <h1 class="woocommerce-products-header__title page-title"><?php echo esc_html($title); ?></h1>
            </div>
        </div>
    </div>
</div>