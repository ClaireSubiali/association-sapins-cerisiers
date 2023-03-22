<?php
// ----------------------------------------------------------------
// Inclusion des classes
// ----------------------------------------------------------------

require __DIR__ . '/../app/Controllers/CoreController.php';
require __DIR__ . '/../app/Controllers/MainController.php';


// ----------------------------------------------------------------
// Récupération de la page à afficher
// ----------------------------------------------------------------

// Vérification si paramètre d'URL '_url' valide 
if (isset($_GET['_url'])) {
    $pageToDisplay = $_GET['_url'];
} else {
    // par défaut accueil
    $pageToDisplay = '/';
}

// ----------------------------------------------------------------
// Définition du tableau des routes
// ----------------------------------------------------------------

$routes = [
    // url de la page => nom de la méthode du contrôleur
    '/' => [
        'controller' => 'MainController',
        'method' => 'home'
    ],
    '/evenements' => [
        'controller' => 'EventController',
        'method' => 'events'
    ]
];

// Vérification si page demandée existe (dans les routes définies au dessus)
if (isset($routes[$pageToDisplay])) {

    $routeInfos = $routes[$pageToDisplay];
    // Nom controller à instancier
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
