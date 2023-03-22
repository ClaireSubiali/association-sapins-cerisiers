<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tomorrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Sapins aux Cerisiers</title>
</head>

<body>
    <header class="header">
        <div class="header__top">
            <img class="header__top__logo" src="assets/images/logo-removebg-preview.png" alt="#">
            <h1 class="header__top__title">Des&nbspSapins aux&nbspCerisiers</h1>
            <div class="header__top__menu-button">Menu</div>
        </div>

        <nav class="header__nav">
            <ul class="header__nav__ul">
                <li><a href="<?= $router->generate('home') ?>">Accueil</a></li>
                <li><a href="<?= $router->generate('next-events') ?>">A venir</a></li>
                <li><a href="<?= $router->generate('all-events') ?>">Nos évenements</a></li>
                <li><a href="<?= $router->generate('about') ?>">A propos</a></li>
                <li><a href="<?= $router->generate('contact') ?>">Contact</a></li>
            </ul>
        </nav>
    </header>