<?php
   /*
   Plugin Name: Review Disclaimer
   Plugin URI: https://surpriseazwebservices.com/wordpress-plugins/review-disclaimer/
   Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=9AGSF4W2HTR6W
   Description: Use a shortcode to quickly insert product or service review disclaimers inside your posts.
   Version: 1.0.2
   Author: Scott DeLuzio
   Author URI: http://surpriseazwebservices.com
   License: GPL2
   */
   
	/*  Copyright 2013  Scott DeLuzio  (email : scott (at) surpriseazwebservices.com)

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

/* Settings Page */

// Hook for adding admin menus
add_action('admin_menu', 'oizuled_review_disclaimer');

// action function for above hook
function oizuled_review_disclaimer() {
    // Add a new submenu under Settings:
    add_options_page('Review Disclaimer Options','Review Disclaimer', 'manage_options', 'oizuledreviewdisclaimer', 'oizuled_review_disclaimer_settings_page');
}

add_action('admin_init', 'register_oizuled_review_disclaimer_settings');

function activate_review_disclaimer() {
  add_option('oizuled-review-disclaimer', 'Enter disclaimer text');
}

function deactive_review_disclaimer() {
  delete_option('oizuled-review-disclaimer');
}

register_activation_hook(__FILE__, 'activate_review_disclaimer');
register_deactivation_hook(__FILE__, 'deactive_review_disclaimer');

function register_oizuled_review_disclaimer_settings() {
	register_setting( 'oizuled-review-disclaimer-option-group', 'oizuled-review-disclaimer');
}

// Display the page content for the disclaimer submenu
function oizuled_review_disclaimer_settings_page() {
	include(WP_PLUGIN_DIR.'/review-disclaimer/options.php');  
}

/* Set Shortcodes */
function oizuled_review() {
if(!isset($oizuledreviewdisclaimer)) {
	$oizuledreviewdisclaimer = get_option('oizuled-review-disclaimer');
}
	return $oizuledreviewdisclaimer;
}
add_shortcode('ReviewDisclaimer', 'oizuled_review');

?>