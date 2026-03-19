<?php

namespace App\Controllers;

use App\Core\Controller;

class WebController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function home()
    {
        echo $this->view->render("home", [
            "title" => "Home | " . APP_NAME
        ]);
    }

    public function contact()
    {
        echo $this->view->render("contact", [
            "title" => "Contato | " . APP_NAME
        ]);
    }

    public function projects()
    {
        echo $this->view->render("projects", [
            "title" => "Projetos | " . APP_NAME
        ]);
    }

    public function resume()
    {
        echo $this->view->render("resume", [
            "title" => "Experiência | " . APP_NAME
        ]);
    }
}