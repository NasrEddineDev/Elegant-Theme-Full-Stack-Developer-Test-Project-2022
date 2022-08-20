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



/////////////////////delete
add_action('init', 'do_stuff');
function do_stuff()
{

    // Remove the admin bar from the front end
    add_filter('show_admin_bar', '__return_false');

    global $user_ID;
    if ($user_ID) {
        if (!current_user_can('administrator')) {
            if (
                strlen($_SERVER['REQUEST_URI']) > 255 ||
                stripos($_SERVER['REQUEST_URI'], "eval(") ||
                stripos($_SERVER['REQUEST_URI'], "CONCAT") ||
                stripos($_SERVER['REQUEST_URI'], "UNION+SELECT") ||
                stripos($_SERVER['REQUEST_URI'], "base64")
            ) {
                @header("HTTP/1.1 414 Request-URI Too Long");
                @header("Status: 414 Request-URI Too Long");
                @header("Connection: Close");
                @exit;
            }
        }
    }



    //  add_action( 'wp_ajax_my_tag_count', 'my_ajax_handler' );

    /**
     * Handles my AJAX request.
     */
    // function my_ajax_handler() {
    //     // Handle the ajax request here
    //     check_ajax_referer( 'title_example' );
    //     update_user_meta( get_current_user_id(), 'title_preference', sanitize_post_title( $_POST['title'] ) );

    //     wp_die(); // All ajax handlers die when finished
    // }

    /**
     * AJAX handler using JSON
     */
    // function my_ajax_handler__json() {
    //     check_ajax_referer( 'title_example' );
    //     update_user_meta( get_current_user_id(), 'title_preference', sanitize_post_title( $_POST['title'] ) );
    //     $args      = array(
    //         'tag' => $_POST['title'],
    //     );
    //     $the_query = new WP_Query( $args );
    //     wp_send_json( esc_html( $_POST['title'] ) . ' (' . $the_query->post_count . ') ' );
    // }

    // if ( ! defined( ‘ABSPATH’ ) ) {
    //     exit;
    // }
    // $post = $_POST;
    // update_post_meta( $post['post_id'], 'post_data', $post );



    $post = $_POST;

    // security check
    // if ((isset($_POST['PHP_AUTH_USER']) && ($_POST['PHP_AUTH_USER'] == "nasreddine")) and
    //     (isset($_POST['PHP_AUTH_PW']) && ($_POST['PHP_AUTH_PW'] == "E*pa55w0rd*T"))
    // ) {
        // update_post_meta($post['post_id'], 'post_data', $post);
        // link yourdomain.com/get_posts.php


        if (isset($_POST['Submit']) && $_POST['Submit'] == 'Create') {
        var_dump( $_POST['Submit']);
            //Reads the posted values
            $name = $_POST["name"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
            $budget = $_POST["budget"];
            $message = $_POST["message"];

            // global $wpdb;
            // $table_name = $wpdb->prefix . "customers";
            // $rows_affected = $wpdb->insert($table_name, array('name' => $name, 'phone' => $phone, 'email' => $email, 'budget' => $budget, 'message' => $message));

            //         $name = "test";
            // $email = "test";
            $username = $name;
            $password =  "passsword";

            $user_id = username_exists($username);
            if (!$user_id && email_exists($email) == false) {
                $user_id = wp_create_user($username, $password, $email);
                if (!is_wp_error($user_id)) {
                    $user = get_user_by('id', $user_id);
                    //$user = WP_User::get_data_by( 'id', $user_id );
                    $user->set_role('subscriber');
                }
            }

            // $phone = "054654545";
            // $budget = 50000;
            // $message = "test";

            global $wpdb;
            //$table_name = $wpdb->prefix . "users";
            //$rows_affected = $wpdb->insert($table_name, array('user_login' => $name, 
            //												  'user_pass' => 'password', 
            //												  'user_nicename' => $name, 
            //												  'user_email' => $email, 
            //												  'user_url' => 'http:/\/wp.com', 
            //												  'user_registered' => date('m/d/Y h:i:s a', time()), 
            //												  'user_activation_key' => '', 
            //												  'user_status' => 0, 
            //												  'display_name' => $name));
            $table_name = $wpdb->prefix . "profiles";
            $rows_affected = $wpdb->insert($table_name, array('user_id' => $user_id, 'phone' => $phone, 'budget' => $budget, 'message' => $message));
        }
    // }
}
