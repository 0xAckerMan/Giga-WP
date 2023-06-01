<?php

/**
 * @package: customplugin
 */

/*
 * Plugin Name: Giga Plugin
 * Plugin URI: http://...
 * Description: This is my custom plugin developed from scratch
 * Version: 1.0.0
 * Author: Joel Kores
 * Author URI: http://k0r3s.me
 * Licence: GPL V2 or later
 * Text domain: myplugin
 */


//Security check
defined('ABSPATH') or die("You are in touble hacker");


class MyCustomPlugin{
    //methods
}

if (class_exists('MyCustomPlugin')){
    $mycustomplugin = new MyCustomPlugin();
}

