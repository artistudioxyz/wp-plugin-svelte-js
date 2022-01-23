<?php
/*
 * Plugin Name:       WordPress Plugin Boilterplate with Svelte
 * Plugin URI:        https://example.com
 * Description:       Just another awesome plugin
 * Version:           1.0.0
 * Author:            Agung Sundoro
 * Author URI:        https://example.com
 * License:           GPL-3.0
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 *
 * SOFTWARE LICENSE INFORMATION
 *
 * For detailed information regarding to the licensing of
 * this software, please review the license.txt
*/

add_action('wp_enqueue_scripts', function(){
    wp_enqueue_script('bundle', plugin_dir_url(__FILE__) . 'assets/build/bundle.js', array(), '1.0.0', true);
    wp_enqueue_style('bundle', plugin_dir_url(__FILE__) . 'assets/build/bundle.css');
});