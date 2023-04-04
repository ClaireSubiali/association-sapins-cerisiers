<?php
// ----------------------------------------------------------------
// Inclusion des classes
// ----------------------------------------------------------------

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/Controllers/CoreController.php';
require __DIR__ . '/../app/Controllers/MainController.php';
require __DIR__ . '/../app/Controllers/EventController.php';


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
    'home'

);
$router->map(
    'GET',
    '/a-propos',
    [
        'controller' => 'MainController',
        'method' => 'about'
    ],
    'about'

);
$router->map(
    'GET',
    '/galerie',
    [
        'controller' => 'MainController',
        'method' => 'gallery'
    ],
    'gallery'

);
$router->map(
    'GET',
    '/contact',
    [
        'controller' => 'MainController',
        'method' => 'contact'
    ],
    'contact'

);
$router->map(
    'GET',
    '/mentions-legales',
    [
        'controller' => 'MainController',
        'method' => 'legalMentions'
    ],
    'legal-mentions'

);
$router->map(
    'GET',
    '/newsletter',
    [
        'controller' => 'MainController',
        'method' => 'newsletter'
    ],
    'newsletter'

);
$router->map(
    'GET',
    '/a-venir',
    [
        'controller' => 'EventController',
        'method' => 'nextEvents'
    ],
    'next-events'

);
$router->map(
    'GET',
    '/nos-evenements',
    [
        'controller' => 'EventController',
        'method' => 'allEvents'
    ],
    'all-events'

);
$router->map(
    'GET',
    '/evenement',
    [
        'controller' => 'EventController',
        'method' => 'event'
    ],
    'event'

);

//Vérification s'il y a une route qui coreespond à celle demandée
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
