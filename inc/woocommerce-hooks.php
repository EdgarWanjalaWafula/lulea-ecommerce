<?php 
    remove_action('woocommerce_template_loop_product_link_close', 'woocommerce_template_loop_product_link_close', 5);
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
    remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
    remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');
    remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');

    add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_add_to_cart');
    add_action('lulea_page_template', 'custom_page');

    function custom_page(){
        echo "hehe";
    }
