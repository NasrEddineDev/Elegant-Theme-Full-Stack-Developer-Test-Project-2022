<?php

/**
 * Plugin Name:       My Test Plugin For Elegant Theme
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Nasr Eddine Guelfout
 * Author URI:        https://example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . '/wp-load.php'); // add wordpress functionality
//require_once(ABSPATH .'/wp-blog-header.php');


function addetuser(WP_REST_Request $request){
    $data = json_decode($request->get_body(), true);
    $userdata = array(
        'user_login'  =>  $data["login"],
        'first_name'    =>  $data["first_name"],
        'last_name'    =>  $data["last_name"],
        'user_email'   =>  $data["email"],
        'user_pass'   =>  $data["password"],
        'user_url'   =>  $data["url"],
        'role'   =>  $data["role"]
    );

    $user_id = wp_insert_user( $userdata ) ;
    
    
    if( is_wp_error( $user_id  ) ) {
        return $user_id->get_error_message();
    }
    
    $user = get_user_by('id', $user_id);
    return $userdata;
}

add_action("rest_api_init", function(){
    register_rest_route("wp/v2", "addetuser", array(
        "methods"  => "POST",
        "callback" => "addetuser"
    ));
});