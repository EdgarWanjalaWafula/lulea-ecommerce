<section class="shop-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <img src="<?php echo wp_get_attachment_image_url('178', 'full'); ?>" alt="">

            </div>
            <div class="col">
                <?php echo get_the_content(); ?>
                <?php echo do_shortcode('[contact-form-7 id="173" title="Corporate Form"]'); ?>
            </div>
        </div>
    </div>
</section>