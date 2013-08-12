<?php 
/*
Plugin Name: Cloud9 ecommerce
Plugin URI: https://github.com/muslih/cloud-9-wp-plugin/
Description: cloud9 plugin ecommerce
Version: 1.0
Author: iwebcrux
Author URI: http://iwebcrux.com
License: GPLv2
*/

add_action('admin_menu','cloud9_admin_actions');
function cloud9_admin_actions(){
	add_options_page('Cloud9','Cloud9','manage_options',__FILE__,'cloud9_admin');
}


function  cloud9_admin()
{

}

?>