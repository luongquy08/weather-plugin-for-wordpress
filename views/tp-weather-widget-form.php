<?php
/**
 * Created by PhpStorm.
 * User: quy
 * Date: 04/06/2017
 * Time: 16:36
 */
?>
<p>
    <label for="<?php echo $this->get_field_id('title') ?>">Widget Title:</label>
    <input class="widefat" id="<?php echo $this->get_field_id('title') ?>" name="<?php echo $this->get_field_name('title') ?>" type="text" value="TP Weather Widget">
</p>
<p>
    <label for="widget-tp-weather-widget-3-unit">Unit:</label>
    <select class="widefat" id="widget-tp-weather-widget-3-unit" name="widget-tp-weather-widget[3][unit]">
        <option value="fahrenheit">Fahrenheit (F)</option>
        <option value="celsius" selected="">Celsius (C)</option>
    </select>
</p>
