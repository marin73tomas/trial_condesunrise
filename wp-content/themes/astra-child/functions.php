<?php

/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('CHILD_THEME_ASTRA_CHILD_VERSION', '1.0');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{

	wp_enqueue_style('astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all');
}

add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);

/**
 * Enqueue bootstrap
 */
function boostrap_files()
{
	wp_enqueue_style('bootstrap-style', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/releases/v5.15.3/js/all.js?defer');
	wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'boostrap_files');

add_shortcode('top_section', 'top_section');
function top_section()
{
?>
	<div class="top-section d-flex justify-content-end">
		<div id="phone-top" class="d-flex align-items-center fw-bold mx-2"><a href='tel:+18004861541' class="text-decoration-none"><i class="fas fa-phone-alt mx-3 main-red-color"></i>800-486-1541</a></div>
		<div id="search-top" class="d-flex  align-items-center  position-relative mx-2"><i class=" mx-3 fas fa-search"></i></div>
		<div id="contact-top" class="ms-4 d-flex  d-flex justify-content-center align-items-center"><a class="fw-bold text-white text-decoration-none" href=" #">CONTACT US </a>
		</div>
	</div>


<?php
}
