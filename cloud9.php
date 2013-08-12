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
	?>
	<div class="wrap">
		<h4>A more interested hello world plugin </h4>
		<table class="widefat">
			<thead>
				<tr>
					<th>Post Title</th>
					<th>Post Id</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>Post Title</th>
					<th>Post Id</th>
				</tr>
			</tfoot>
			<tbody>
<?php 
	global $wpdb;

	$mytestdrafts = $wpdb->get_results(
		"
		SELECT ID,post_title 
		FROM $wpdb->posts 
		WHERE post_status = 'draft'
		"
	);
?>	
<?php
	foreach ($mytestdrafts as $mytestdraft) {
?>
	<tr>
<?php
	echo "<td>".$mytestdraft->post_title."</td>";
	echo "<td>".$mytestdraft->ID."</td>";
?>
	</tr>
<?php 
	}
?>
			</tbody>
		</table>
	</div>
	<?php
}

?>