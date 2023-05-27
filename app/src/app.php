<?php
use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$ano_actual=date('Y');

$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', 
[
    'year' => $ano_actual,
    '_controller' => 'Crimsoncircle\Controller\LeapYearController::index',
]));
return $routes;

