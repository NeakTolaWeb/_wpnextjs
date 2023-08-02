<?php

function wpnextj_load_assets() {
  wp_enqueue_script('_wpnextjsmainjs', get_theme_file_uri('/build/index.js'), array('wp-element'), '1.0', true);
  wp_enqueue_style('_wpnextjsmaincss', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'wpnextj_load_assets');

function wpnextj_add_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'wpnextj_add_support');