<?php
/**
 * Plugin Name:       Latest Post Redirect
 * Plugin URI:        https://github.com/photuris5/pluginTut
 * Description:       A plugin that creates a redirect called /latest and sends users to the most recently published blog post, with an option to also send to latest modified.
 * Version:           1.0.0
 * Author:            Gina Wilson
 * Author URI:        https://8forty8.net
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */


 if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
 }

 /** 
  *  Get latest post permalink
  *  @return String $url
**/

function bsc_get_latest_permalink() {
    $args = array(
        'numberposts' => '1',
    );

    $latest_posts = get_posts( $args );
    $latest_post = wp_list_pluck( $latest_post, 'ID' );
    return get_permalink( $latest_id['0'] );
}

// create the redirection using permalink
function bsc_create_latest_redirect() {
    add_rewrite_rule( 'lastest', 'bsc_get_latest_permalink', () );
}
add_action( 'init', 'bsc_create_latest_redirect' );

 
// On post publish, re-create permalink
