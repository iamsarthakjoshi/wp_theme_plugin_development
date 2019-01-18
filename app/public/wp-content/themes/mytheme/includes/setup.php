<?php

function sj_setup_theme(){
  // Adding theme menus by calling one of the builtin functions of wordpress below
  // Not necessary in newer version of wordpress since register_nav_menu will auto call this function.
  add_theme_support('menus'); 
  
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');

  // Enable support for custom logo.
  add_theme_support('custom-logo', array(
    'width'  => 95,
    'height' => 95,
  ));

  // Registering theme menu, 
  register_nav_menu('primary', __('Primary Menu','mytheme'));
  register_nav_menu('secondary', __('Secondary Menu','mytheme'));
} 