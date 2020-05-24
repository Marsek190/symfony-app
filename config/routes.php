<?php

use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->add('home', '/')
        ->controller(\Front\Controller\Home::class)
        ->methods(['GET']);

    $routes->add('city', '/city')
        ->controller(\Front\Controller\City::class)
        ->methods(['GET']);

    $routes->add('country', '/country')
        ->controller(\Front\Controller\Country::class)
        ->methods(['GET']);

};