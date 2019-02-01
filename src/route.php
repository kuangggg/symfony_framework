<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('index', new Routing\Route('/index', [
	'_controller' => 'App\\Controller\\IndexController::indexAction',
]));

$routes->add('home', new Routing\Route('/home/{name}', [
	'name' => 'default name',
	'_controller' => 'App\\Controller\\IndexController::homeAction',
]));

return $routes;