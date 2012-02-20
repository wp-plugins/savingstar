<?php
/*
Plugin Name: SavingStar
Plugin URI: http://savingstar.com
Description: Shows Banners in your Website from Saving Star
Version: 1.1
Author: SavingStar
Author URI: http://savingstar.com
License: GPL2
*/

/*  Copyright 2011  SavingStar  (email : info@savingstar.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?><?php
/* -------------------------------------------------------------------------------------------------------------------------- */
define( 'SSBP_IFRAME', 'http://savingstar.com/blog/sidebar/');//Sets iFrame src location  |
/* -------------------------------------------------------------------------------------------------------------------------- */
define( 'SSBP_PUGIN_NAME', 'SavingStar');
define( 'SSBP_PLUGIN_DIRECTORY', 'savingstar');
define( 'SSBP_CURRENT_VERSION', '1.1' );
define( 'SSBP_CURRENT_BUILD', '1' );
define( 'SSBP_DEBUG', false);	//Development Only

// create custom plugin settings menu
add_action( 'admin_menu', 'ssbp_create_menu' );

// call register settings function
add_action( 'admin_init', 'ssbp_register_settings' );

register_activation_hook(__FILE__, 'ssbp_activate');
register_deactivation_hook(__FILE__, 'ssbp_deactivate');
register_uninstall_hook(__FILE__, 'ssbp_uninstall');

add_action('admin_head', 'my_admin_head');
function my_admin_head() {
        echo '<link rel="stylesheet" type="text/css" href="' .plugins_url('/css/savingstar-admin.css', __FILE__). '">';
}
function ssbp_activate() { // activating the default values
	add_option('ss_mpid', '00');
	add_option('ss_subid', '');
}

function ssbp_deactivate() { // deactivation
	// needed for proper deletion of every option
	//delete_option('ss_mpid');
	//delete_option('ss_subid');
}

function ssbp_uninstall() { // uninstallation
	# delete all data stored
	delete_option('ss_mpid');
	delete_option('ss_subid');
}

function ssbp_create_menu() {
	// create new top-level menu
	add_menu_page( 
		__('SavingStar', ''),
		__('SavingStar', ''),
		0,
		SSBP_PLUGIN_DIRECTORY.'/savingstar_settings_page.php',
		'',
		plugins_url('/images/ss-icon.png', __FILE__)
	);
}
function ssbp_register_settings() { //register settings
	register_setting( 'ssbp-settings-group', 'ss_mpid' );
	register_setting( 'ssbp-settings-group', 'ss_subid' );
}

function ssbp_debug() { // check if debug is activated
	# only run debug on localhost
	if ($_SERVER["HTTP_HOST"]=="localhost" && defined('SSBP_DEBUG') && SSBP_DEBUG==true) return true;
}
/********************************************************/
/********************************************************/
function ss_display_iframe( $atts ) {
	extract( shortcode_atts( array(
			'type' => 'Medium Rectangle(300w x 250h)',
	), $atts ) );
	$size = esc_attr($type);
	$mpid = get_option('ss_mpid');
	$subid = get_option('ss_subid');
	switch($size){
		case 'Medium Rectangle(300w x 250h)':
			$width = 300;
			$height = 250;
			break;
		case 'Wide Skyscraper(160w x 600h)':
			$width = 160;
			$height = 600;
			break;
		case 'Skyscraper(120w x 600h)':
			$width = 120;
			$height = 600;
			break;
		default:
			$width = 300;
			$height = 250;
	}
	//return "<br />MPID:".get_option('ss_mpid')."<br />Type:".$size."<br />Width:".$width."<br />Height:".$height."<br />";
return '<iframe src="'.SSBP_IFRAME.'?mpid='.$mpid.'&subid='.$subid.'&width='.$width.'&height'.$height.'" width="'.$width.'" height="'.$height.'" scrolling="no">
  		<p>Your browser does not support iframes.</p>
		</iframe>';
}
add_shortcode('ss_display_iframe', 'ss_display_iframe');
/********************************************************/
/********************************************************/
/**
 * SavingStar_Widget Class
 */
class SavingStar_Widget extends WP_Widget {
	/** constructor */
	function __construct() {
		parent::WP_Widget( /* Base ID */'savingstar_widget', /* Name */'SavingStar', array( 'description' => 'Shows Banners in your Widget Areas from Saving Star' ) );
	}

	/** @see WP_Widget::widget */
	function widget( $args, $instance ) {
		extract( $args );
		$itype = empty($instance['itype']) ? 'Medium Rectangle(300w x 250h)' : $instance['itype'];
		$mpid = get_option('ss_mpid');
		$subid = get_option('ss_subid');
		echo $before_widget;
		/////////////////////////////////////////////////////////
		switch($itype){
			case 'Medium Rectangle(300w x 250h)':
				$width = 300;
				$height = 250;
				break;
			case 'Wide Skyscraper(160w x 600h)':
				$width = 160;
				$height = 600;
				break;
			case 'Skyscraper(120w x 600h)':
				$width = 120;
				$height = 600;
				break;
			default:
				$width = 300;
				$height = 250;
		}
		echo '<iframe src="'.SSBP_IFRAME.'?mpid='.$mpid.'&subid='.$subid.'&width='.$width.'&height'.$height.'" width="'.$width.'" height="'.$height.'" scrolling="no">
  		<p>Your browser does not support iframes.</p>
		</iframe>';
		/////////////////////////////////////////////////////////
		echo $after_widget;
	}

	/** @see WP_Widget::update */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['itype'] = strip_tags(stripslashes($new_instance['itype']));
		return $instance;
	}

	/** @see WP_Widget::form */
	function form( $instance ) {
		if ( $instance ) {
			$itype = esc_attr( $instance[ 'itype' ] );
		} ?>
		<p>
        <label for="<?php echo $this->get_field_id('itype'); ?>"><?php _e( 'Banner Size:' ); ?></label>
        <select name="<?php echo $this->get_field_name('itype'); ?>" id="<?php echo $this->get_field_id('itype'); ?>" class="widefat">
            <option value="Medium Rectangle(300w x 250h)"<?php selected( $instance['itype'], 'Medium Rectangle(300w x 250h)' ); ?>><?php _e('Medium Rectangle (300w x 250h)'); ?></option>
            <option value="Wide Skyscraper(160w x 600h)"<?php selected( $instance['itype'], 'Wide Skyscraper(160w x 600h)' ); ?>><?php _e('Wide Skyscraper (160w x 600h)'); ?></option>
            <option value="Skyscraper(120w x 600h)"<?php selected( $instance['itype'], 'Skyscraper(120w x 600h)' ); ?>><?php _e( 'Skyscraper (120w x 600h)' ); ?></option>
        </select>
		</p>
		<?php 
	}
} // class SavingStar_Widget

// register SavingStar_Widget widget
add_action( 'widgets_init', create_function( '', 'register_widget("SavingStar_Widget");' ) );
?>