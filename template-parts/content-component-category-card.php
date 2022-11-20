<?php 
    $arr = $args['term'];
    $thumbnail_id = get_term_meta( $arr->term_id, 'thumbnail_id', true );
    $cat_img = wp_get_attachment_image_url( $thumbnail_id ? $thumbnail_id : '84', 'category-thumbnail');
?>

<a href="<?php echo get_term_link($arr); ?>" class="card position-relative border-0 rounded-0 category-card">
    <img src="<?php echo $cat_img; ?>" alt="L" class="position-absolute h-100 w-100 theme-obj-fit">
    <div class="card-body position-relative higher-z-index text-white">
        <h4><?php echo esc_html($arr->name); ?></h4>
        <?php 
            if($arr->description){
                echo "<p>".$arr->description."</p>";
            }
        ?>
    </div>
</a>