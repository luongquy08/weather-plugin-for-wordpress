<?php
/**
 * Created by PhpStorm.
 * User: quy
 * Date: 04/06/2017
 * Time: 10:17
 */
// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}
define('OPEN_WEATHER_MAP_API_KEY', 'bd5e378503939ddaee76f12ad7a97608');
class TPWeatherAPI{
    // Lay chuoi json
    public static function getJson($json){
        return json_decode($json, true);
    }
    // Gui request toi website
    public function request($city = 'Ho+Chi+Minh', $like = true, $mode = 'json'){
        $type = ($like)?'like':'accurate';
        $city = urlencode(trim($city));
        $url = "http://api.openweathermap.org/data/2.5/find?q={$city}&type={$like}&mode={$mode}&appid=".OPEN_WEATHER_MAP_API_KEY;
        @$fileGet = file_get_contents($url);
        if ($fileGet){
            return self::getJson($fileGet);
        }else{
            return false;
        }
    }
    // Lay duoc du lieu weather
    public static function getWeather($data = [], $mode = 'json'){
        if($data){
            $return = [];
            foreach($data as $cityName){
                $url = "http://api.openweathermap.org/data/2.5/weather?q={$cityName}&units=metric&mode={$mode}&appid=".OPEN_WEATHER_MAP_API_KEY;
                @$fileGet = file_get_contents($url);
                if ($fileGet){
                    $return[] = self::getJson($fileGet);
                }
            }
            if ($return){
                return $return;
            }
        }
        return false;
    }

    public static function getTemperature($temp = 0, $option = 'celcius'){
        switch ($option){
            case 'celcius':
                return $temp.'C';
                break;

            case 'fahrenheit':
                return ($temp*9/5 + 32).'F';
                break;
        }
    }

    public static function getWeatherIcon($code="01d"){
        return "http://openweathermap.org/img/w/{$code}.png";
    }
}