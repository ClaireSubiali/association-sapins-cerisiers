<?php
// ----------------------------------------------------------------
// Inclusion des classes
// ----------------------------------------------------------------

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
    '/' => 'home'
];

// Vérification si page demandée existe (dans les routes définies au dessus)
if (isset($routes[$pageToDisplay])) {

    // Instance du controller
    $controller = new MainController();

    // Méthode correspondant à la route
    $methodToCall = $routes[$pageToDisplay];

    // appel de la méthode correspondante du controller
    $controller->$methodToCall();
} else {
    // Page 404
    $controller = new MainController();
    $controller->pageNotFound();
}
