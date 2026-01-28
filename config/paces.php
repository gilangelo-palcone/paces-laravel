<?php

return [
    // Theme Configuration
    'theme' => [
        'skin' => env('PACES_THEME_SKIN', 'luxe'),
        'mode' => env('PACES_THEME_MODE', 'light'),
    ],
    
    // Layout Configuration
    'layout' => [
        'position' => env('PACES_LAYOUT_POSITION', 'fixed'), // fixed, scrollable
    ],
    
    // Topbar Configuration
    'topbar' => [
        'color' => env('PACES_TOPBAR_COLOR', 'dark'), // light, dark, gradient, gray
    ],
    
    // Sidenav Configuration
    'sidenav' => [
        'color' => env('PACES_SIDENAV_COLOR', 'light'), // light, dark, gradient, gray
        'size' => env('PACES_SIDENAV_SIZE', 'default'), // default, compact, condensed
        'user_info' => env('PACES_SIDENAV_USER_INFO', true),
    ],
];
