<?php

class CoreController {
    /**
     * Generate HTML of a page with all necessary templates - protected function
     *
     * @param string $viewName name of the view (route)
     * @param array $viewData array with all data to display in the view
     * @return void
     */
    protected function show($viewName, $viewData = [])
    {
//TODO Trouver mieux que la variable gloable pour $router
        global $router;

         $viewData['currentPage'] = $viewName;
         

        // $viewData['assetsBaseUri'] = $_SERVER['BASE_URI'] . 'assets/';

        // $viewData['baseUri'] = $_SERVER['BASE_URI'];

        extract($viewData);
        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
}