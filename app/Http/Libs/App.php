<?php
namespace App\Http\Libs;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class App
{ 
    private static $widgets = [];
    public static function initWidgets(){
        $widgets = app('request')->input('_widgets',null); 
        if(!empty($widgets)):
        $widgets = array_unique($widgets);
        foreach($widgets as $widget){
            $Class =  "App\Http\Widgets\\".ucfirst($widget);
            if(class_exists($Class) 
                && !isset(self::$widgets[$widget])){
                self::$widgets[$widget] =  serialize(new $Class());
            }
        }
        endif;
        return self::$widgets;
    }
}
