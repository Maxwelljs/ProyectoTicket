<?php
/**
*@param string
*@param string
*@return string
*/
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

function isRouteActive($route, $class = 'active'){
    if(Str::contains(Route::currentRouteName(),$route)){
        return $class;
    }
    return null;


}
