<?php
/**
 * Plugin Name: TSKAMATH FaceBook Like
 * Description: Simple Facebook Like with Shortcode
 * Plugin URI: tsktech.in/tskfblike
 * Author: Srikanth Kamath
 * Author URI: https://tskamath.com
 * Version: 1.0.1
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: tsk-fblike
 * Domain Path: /language
 * Network: false
 *
 *
 * Name is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Name is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Name. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
 */

defined( 'ABSPATH' ) || exit;


/*
* load scripts
*/
require_once (plugin_dir_path(__FILE__) . '/includes/tsk-fblike-scripts.php');

/*
* include Class
*/
require_once (plugin_dir_path(__FILE__) . '/includes/class-tsk-fblike.php');

/*
* include ShortCode
*/
require_once (plugin_dir_path(__FILE__) . '/includes/tsk-fblike-shortcode.php');

//Register Widget
 function register_fblikebox(){
	register_widget('FBlikeBox_Widget');
 }
 add_action('widgets_init','register_fblikebox');



