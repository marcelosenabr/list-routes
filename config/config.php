<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    */
    'name' => 'ListRoutes',

    /*
    |--------------------------------------------------------------------------
    | Layout blade
    |--------------------------------------------------------------------------
    */
    'view_layout' => 'listroutes::layouts.app',

    /*
    |--------------------------------------------------------------------------
    | assets
    |--------------------------------------------------------------------------
    */
    'assets' => 'routes',

    /*
    |--------------------------------------------------------------------------
    | Prefix
    |--------------------------------------------------------------------------
    */
    'prefix' => '',

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    */
    'route_name' => 'routes.',

    /*
    |--------------------------------------------------------------------------
    | Middlewares
    |--------------------------------------------------------------------------
    */
    'middleware' => ['auth'],

    'hidematching' => ['#^telescope#','#^_debugbar#','#^_ignition#'],
    'hidemethods' => ['HEAD'],
    'methodcolours' => ['GET' => 'success', 'HEAD' => 'default', 'OPTIONS' => 'warning', 'POST' => 'info', 'PUT' => 'warning', 'PATCH' => 'info', 'DELETE' => 'danger'],

];