<?php

class MainController
{
    public function pageNotFound()
    {
        header("HTTP/1.1 404 Not Found");
        $this->show('404');
    }

    /**
     * Home function displays home page
     * @return void
     *
     */
    public function home()
    {
        // Délègue l'affichage à la méthode "show" du MainController
        $this->show('home');
    }


    /**
     * Generate HTML of a page with all necessary templates - private function
     *
     * @param string $viewName name of the view (route)
     * @param array $viewData array with all data to display in the view
     * @return void
     */
    private function show($viewName, $viewData = [])
    {
        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }
}
