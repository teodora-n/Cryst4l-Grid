<?php
/**
 * Plugin Name: Cryst4l Grid
 * Plugin URI: http://cryst4l.info
 * Description: CSS grid and shortcodes
 * Version: 1.0
 * Author: Teodora & Lyndsey
 
	Copyright YEAR  PLUGIN_AUTHOR_NAME  (email : PLUGIN AUTHOR EMAIL)

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
**/

function cryst4l_grid_styles() {
	wp_register_style('cryst4l_grid', plugins_url('css/style.css',__FILE__ ));
	wp_enqueue_style('cryst4l_grid');
}
add_action( 'admin_init','cryst4l_grid_styles');
add_action( 'wp_enqueue_scripts', 'cryst4l_grid_styles' );

function cryst4l_grid( $atts, $content = null ) {
   return '<div class="container">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid', 'cryst4l_grid');

function cryst4l_grid_pad( $atts, $content = null ) {
   return '<div class="container-pad">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_pad', 'cryst4l_grid_pad');

function cryst4l_grid_1_12( $atts, $content = null ) {
   return '<div class="grid-1-12">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_1_12', 'cryst4l_grid_1_12');

function cryst4l_grid_2_12( $atts, $content = null ) {
   return '<div class="grid-2-12">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_2_12', 'cryst4l_grid_2_12');

function cryst4l_grid_3_12( $atts, $content = null ) {
   return '<div class="grid-3-12">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_3_12', 'cryst4l_grid_3_12');

function cryst4l_grid_4_12( $atts, $content = null ) {
   return '<div class="grid-4-12">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_4_12', 'cryst4l_grid_4_12');

function cryst4l_grid_5_12( $atts, $content = null ) {
   return '<div class="grid-5-12">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_5_12', 'cryst4l_grid_5_12');

function cryst4l_grid_6_12( $atts, $content = null ) {
   return '<div class="grid-6-12">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_6_12', 'cryst4l_grid_6_12');

function cryst4l_grid_7_12( $atts, $content = null ) {
   return '<div class="grid-7-12">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_7_12', 'cryst4l_grid_7_12');

function cryst4l_grid_8_12( $atts, $content = null ) {
   return '<div class="grid-8-12">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_8_12', 'cryst4l_grid_8_12');

function cryst4l_grid_9_12( $atts, $content = null ) {
   return '<div class="grid-9-12">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_9_12', 'cryst4l_grid_9_12');

function cryst4l_grid_10_12( $atts, $content = null ) {
   return '<div class="grid-10-12">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_10_12', 'cryst4l_grid_10_12');

function cryst4l_grid_11_12( $atts, $content = null ) {
   return '<div class="grid-11-12">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_11_12', 'cryst4l_grid_11_12');

function cryst4l_grid_12_12( $atts, $content = null ) {
   return '<div class="grid-12-12">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_12_12', 'cryst4l_grid_12_12');

function cryst4l_grid_1_12_last( $atts, $content = null ) {
   return '<div class="grid-1-12 last">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_1_12_last', 'cryst4l_grid_1_12_last');

function cryst4l_grid_2_12_last( $atts, $content = null ) {
   return '<div class="grid-2-12 last">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_2_12_last', 'cryst4l_grid_2_12_last');

function cryst4l_grid_3_12_last( $atts, $content = null ) {
   return '<div class="grid-3-12 last">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_3_12_last', 'cryst4l_grid_3_12_last');

function cryst4l_grid_4_12_last( $atts, $content = null ) {
   return '<div class="grid-4-12 last">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_4_12_last', 'cryst4l_grid_4_12_last');

function cryst4l_grid_5_12_last( $atts, $content = null ) {
   return '<div class="grid-5-12 last">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_5_12_last', 'cryst4l_grid_5_12_last');

function cryst4l_grid_6_12_last( $atts, $content = null ) {
   return '<div class="grid-6-12 last">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_6_12_last', 'cryst4l_grid_6_12_last');

function cryst4l_grid_7_12_last( $atts, $content = null ) {
   return '<div class="grid-7-12 last">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_7_12_last', 'cryst4l_grid_7_12_last');

function cryst4l_grid_8_12_last( $atts, $content = null ) {
   return '<div class="grid-8-12 last">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_8_12_last', 'cryst4l_grid_8_12_last');

function cryst4l_grid_9_12_last( $atts, $content = null ) {
   return '<div class="grid-9-12 last">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_9_12_last', 'cryst4l_grid_9_12_last');

function cryst4l_grid_10_12_last( $atts, $content = null ) {
   return '<div class="grid-10-12 last">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_10_12_last', 'cryst4l_grid_10_12_last');

function cryst4l_grid_11_12_last( $atts, $content = null ) {
   return '<div class="grid-11-12 last_last">' . do_shortcode($content) . '</div>';
}
add_shortcode('grid_11_12', 'cryst4l_grid_11_12_last');

