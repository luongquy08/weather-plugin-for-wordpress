<?php
/**
 * Created by PhpStorm.
 * User: quy
 * Date: 04/06/2017
 * Time: 09:27
 */
// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

class TPWeather{
    public function __construct()
    {
        $tp_weather_widget = new TP_Weather_Widget();
    }

    public function activation_hook(){

    }

    public function deactivation_hook(){

    }
}