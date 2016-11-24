<?php

/*
Plugin Name: Encyclopedia Pro
Plugin URI: http://dennishoppe.de/wordpress-plugins/encyclopedia
Description: Encyclopedia enables you to create your own encyclopedia, lexicon, glossary, wiki, dictionary or knowledge base.
Version: 1.5.20
Author: Dennis Hoppe
Author URI: http://DennisHoppe.de
Text Domain: encyclopedia
Domain Path: /languages/
*/

$includeFiles = function($pattern){
  $arr_files = glob($pattern);
  if (!empty($arr_files) && is_Array($arr_files)){
    foreach ($arr_files as $include_file){
      include_once $include_file;
    }
  }
};

$plugin_folder = DirName(__FILE__);
$includeFiles("{$plugin_folder}/classes/*.php");
$includeFiles("{$plugin_folder}/widgets/*.php");

WordPress\Plugin\Encyclopedia\Core::init(__FILE__);
