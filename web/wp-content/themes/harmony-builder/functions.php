<?php
define('THEME_DIR', get_template_directory() . '/');
define('THEME_URL', get_template_directory_uri() . '/');
define('HOME_URL', get_home_url());

define('AJAX_URL', admin_url('admin-ajax.php'));

if (ENV_PROD) {
    define('GTAG_KEY', '');
} else {
    define('GTAG_KEY', '');
}

if(!ENV_LOCAL){
    require_once (__DIR__ . '/inc/acf.php');
}

require_once (__DIR__ . '/inc/datatypes.php');
require_once (__DIR__ . '/inc/configuration.php');
require_once (__DIR__ . '/inc/configuration_security.php');
require_once (__DIR__ . '/inc/methods.php');
require_once (__DIR__ . '/inc/ajax-methods.php');

require_once (__DIR__ . '/inc/vendors/vendor/autoload.php');


// --------------------------
// Scripts et style
// --------------------------
add_action('init', 'scripts_site');

function scripts_site(){

    if (!is_admin() && !is_login_page()) wp_deregister_script('jquery');

    if (!is_admin() || !is_user_logged_in()) {

         // Style
        wp_enqueue_style('style_principal', get_template_directory_uri() . '/assets/css/app.css', array(), filemtime(get_template_directory() . '/assets/css/app.css'));

        // Script
        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), filemtime(get_template_directory() . '/js/jquery.js'), true);
        wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', array(), filemtime(get_template_directory() . '/js/app.js'), true);


        // Script à injecter exemple :
        // if (is_front_page()) {
        //     wp_enqueue_script('home-js', get_template_directory_uri() . '/js/home.js', array('jquery'), '1.1.0', true);
        // }

       $dataToBePassed = array(
            'wp_ajax_url' => AJAX_URL,
            'wp_theme_url' => THEME_URL,
            'wp_home_url' => HOME_URL,
            'exampleNonce' => wp_create_nonce('exampleNonce'),
            'gtag_key' =>  GTAG_KEY,
            // 'bug_report_id' =>  get_field('params-bugreport-id', 'options')
        );
        wp_localize_script('script-js', 'ParamsData', $dataToBePassed);
    }
}

function get_custom_thumb($id="", $size=""){
    $datas['url'] = '';
    $datas['alt'] = '';

    if($id){
        $imageURL = wp_get_attachment_image_src($id, $size);
        $attachement = get_post_meta($id, '_wp_attachment_image_alt', TRUE);

        if($imageURL){
            $datas['url'] = reset($imageURL);
        }
        if($attachement){
            $datas['alt'] = $attachement;
        }
    }

    return $datas;
}


function get_advanced_fields(){
    $datas['params']                                = get_sub_field('params');
    $datas['composant_background']                  = get_sub_field('composant_background');
    $datas['background_cut_enable']                 = get_sub_field('background_cut');
    $datas['background_cut_color']                  = get_sub_field('composant_background_cut');
    $datas['composant_background_cut_position']     = get_sub_field('composant_background_cut_position');
    $datas['composant_background_cut_purcent']      = get_sub_field('composant_background_cut_purcent');
    $datas['composant_marge']                       = get_sub_field('composant_marge');
    $datas['composant_white_mode']                  = get_sub_field('composant_white_mode');

    return $datas;
}

