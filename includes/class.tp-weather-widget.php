<?php
/**
 * Created by PhpStorm.
 * User: quy
 * Date: 04/06/2017
 * Time: 15:52
 */
if ( !function_exists( 'add_action' ) ) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}
class TP_Weather_Widget extends WP_Widget{
    public function __construct()
    {
        $widget_options = array(
            'description'=>'Weather widget for wordpress',
        );
        parent::__construct('tp-weather-widget', __('TP Weather Widget', 'tp-weather'), $widget_options);
        add_action('widgets_init', function(){
            register_widget('TP_Weather_Widget');
        });
        add_action('wp_enqueue_scripts', function(){
            wp_register_style('tp-css', TP_WEATHER_PLUGIN_URL.'scripts/css/style.css');
            wp_enqueue_style('tp-css');
        });
    }

    public function form($instance)
    {
        require (TP_WEATHER_PLUGIN_DIR.'views/tp-weather-widget-form.php');
    }

    public function update($new_instance, $old_instance)
    {
        return parent::update($new_instance, $old_instance); // TODO: Change the autogenerated stub
    }

    public function widget($args, $instance)
    {
        require (TP_WEATHER_PLUGIN_DIR.'views/tp-weather-widget-view.php');
    }
}
