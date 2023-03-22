<?php

class MainController extends CoreController
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
        $this->show('home');
    }
    public function about()
    {
        $this->show('about');
    }

    public function contact()
    {
        $this->show('contact');
    }
    public function legalMentions()
    {
        $this->show('legal-mentions');
    }

    public function newsletter()
    {
        $this->show('newsletter');
    }
}
