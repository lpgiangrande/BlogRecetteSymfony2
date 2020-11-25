<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\AdminRecetteController::index'], null, null, null, false, false, null]],
        '/admin/create' => [[['_route' => 'admin_create', '_controller' => 'App\\Controller\\Admin\\AdminRecetteController::create'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
