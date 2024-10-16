<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cache Time
    |--------------------------------------------------------------------------
    |
    | Cache time for get data huma
    |
    | - set zero for remove cache
    | - set null for forever
    |
    | - unit: minutes
    */

    "cache_time" => env("HUMA_CACHE_TIME", 0),

    /*
    |--------------------------------------------------------------------------
    | Default Panel Name
    |--------------------------------------------------------------------------
    |
    | Here you can specify which of the panel name you want
    |
    */

    'panel_name' => env('HUMA_PANEL_NAME', 'Huma'),

];
