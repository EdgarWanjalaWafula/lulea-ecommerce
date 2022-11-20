<?php 
    // Actions 
    remove_action('woocommerce_template_loop_product_link_close', 'woocommerce_template_loop_product_link_close', 5);
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
    remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
    remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');
    remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');

    add_action('lulea_filter_bar', 'woocommerce_result_count');
    add_action('lulea_filter_bar', 'woocommerce_catalog_ordering');
    add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart');
    add_action('lulea_after_header', 'custom_page_banner');

    function custom_page_banner(){
        get_template_part('template-parts/content', 'component-page-banner'); // load custom banner from template parts 
    }

    // Filters 
    add_filter( 'single_product_archive_thumbnail_size', function( $size ) {
        return 'product-thumbnail'; // modify product image size in grid/archive pages 
    });