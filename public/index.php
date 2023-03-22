<?php
// ----------------------------------------------------------------
// Inclusion des classes
// ----------------------------------------------------------------

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/Controllers/CoreController.php';
require __DIR__ . '/../app/Controllers/MainController.php';


// ----------------------------------------------------------------
// AltoRouter pour la gestion des routes
// ----------------------------------------------------------------

$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);
// ----------------------------------------------------------------
// Définition du tableau des routes
// ----------------------------------------------------------------

$router->map(
    'GET',
    '/',
    [
        'controller' => 'MainController',
        'method' => 'home'
    ],
    'main-home'

);
$router->map(
    'GET',
    '/',
    [
        'controller' => 'EventController',
        'method' => 'events'
    ],
    'main-events'

);
$match = $router->match();
if ($match !== false) {
    $routeInfos = $match['target'];
    $controllerToUse = $routeInfos['controller'];

    $methodToCall = $routeInfos['method'];

    // Instanciation
    $controller = new $controllerToUse();

    $controller->$methodToCall();
} else {
    // Page 404
    $controller = new MainController();
    $controller->pageNotFound();
}
