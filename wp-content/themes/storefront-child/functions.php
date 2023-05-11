<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

function my_custom_checkout_message()
{
    echo '<p>Thank you so much for shopping with us! Please review your order details below.</p>';
}
add_action('woocommerce_before_checkout_form', 'my_custom_checkout_message', 10);

function my_custom_product_short_description($description)
{
    $new_short_description = $description . '<br/><br/> This part of the description is used with add_filter.';
    return $new_short_description;
}
add_filter('woocommerce_short_description', 'my_custom_product_short_description', 10, 1);

function my_custom_price_display($price)
{
    $tax_display_mode = get_option('woocommerce_tax_display_shop');
    $price_including_tax = wc_get_price_including_tax(wc_get_product());
    if ($tax_display_mode == 'incl') {
        $price = wc_price($price_including_tax);
    } else {
        $price = wc_price(wc_get_price_excluding_tax(wc_get_product()));
    }
    return $price;
}
add_filter('woocommerce_get_price_html', 'my_custom_price_display', 10, 2);
