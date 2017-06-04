<?php
/**
 * Created by PhpStorm.
 * User: quy
 * Date: 04/06/2017
 * Time: 09:13
 */
/*
 * Plugin Name: TP-Weather
 * Plugin URI: ngocquyblog.blogspot.com
 * Description: Simple Weather Plugin
 * Version: 1.0.0
 * Author: Luong Van Quy
 * Author URI: ngocquyblog.blogspot.com
 * Text Domain: tp-weather
 */

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

define('TP_WEATHER_VERSION', '1.0.0');
define('TP_WEATHER_MINIMUM_WP_VERSION', '4.1.1');
define('TP_WEATHER_PLUGIN_URL', plugin_dir_url(__FILE__));
define('TP_WEATHER_PLUGIN_DIR', plugin_dir_path(__FILE__));

require_once (TP_WEATHER_PLUGIN_DIR.'includes/class.tp-weather-api.php');
require_once (TP_WEATHER_PLUGIN_DIR.'includes/class.tp-weather-widget.php');
require_once (TP_WEATHER_PLUGIN_DIR.'includes/class.tp-weather.php');

$tp_weather = new TPWeather();
