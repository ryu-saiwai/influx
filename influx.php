<?php
/**
 * @package Influx
 * @version 1.0
 */
/*
Plugin Name: Influx
Plugin URI: http://example.com
Description: This is default setting plugin, For myself( ryu saiwai )
Author: Ryu Saiwai
Version: 1.0
Author URI: http://ma.tt/
*/

function admin_publish_custom() {
    global $current_user;
    get_currentuserinfo();


    if ( $current_user->roles[0] !== 'administrator' ) {
        echo '<style>input#publish {display: none;}</style>';
    }
}
add_action('admin_print_styles', 'admin_publish_custom');

//jetpackのOGP設定を外す。（all in one seo pack共存対策）
remove_action('wp_head','jetpack_og_tags');

?>