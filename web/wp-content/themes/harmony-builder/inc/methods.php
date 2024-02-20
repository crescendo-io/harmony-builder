<?php
function is_login_page() {
    return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}

function checkNonce($nonceContext) {
    $nonce = isset($_POST['nonce']) ? sanitize_text_field($_POST['nonce']) : 0;
    if (!wp_verify_nonce($nonce, $nonceContext)) {
        exit(__('not authorized', 'domain'));
    }
}

function dateMonthInFr($date) {
    $english_months = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
    $french_months = array('Janv', 'Févr', 'Mars', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sept', 'Oct', 'Nov', 'Déc');
    return str_replace($english_months, $french_months,  $date);
}


function get_class_strate($advanced) {
    $class = '';
    if($advanced['composant_white_mode']){
        $class .= "white";
    }if($advanced['composant_marge'] == "small"){
        $class .= " marge-small";
    }
    return $class;
}

function get_background_strate($advanced) {
    $background = '';
    if($advanced['params'] && $advanced['composant_background']){
        $background = "style='background: " . $advanced['composant_background'] . "'";
    }
    return $background;
}

function get_background_cut($advanced) {
    $backgroundCut = '';

    if($advanced['background_cut_enable'] && $advanced['background_cut_color']){
        $backgroundCut = '<div class="background-cut ' . $advanced['composant_background_cut_position'] . '" style="background-color: ' . $advanced['background_cut_color'] .'; height: '. $advanced['composant_background_cut_purcent'] . '%;"></div>';
    }

    return $backgroundCut;
}