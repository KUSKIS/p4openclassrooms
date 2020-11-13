<?php

require_once('views/View.php');
require_once('models/PostManager.php');


class ControllerHome
{

    private $PostManager;
    private $view;

    public function __construct() //retrait parametre $url
    {
        if (isset($url) && count($url) > 1) {
            throw new Exception("Page introuvable", 1);
        } else {
            $this->listChapters();
        }

        $this->chapterManager = new PostManager();
    }

    //afficher tous les chapitres
    public function listChapters()
    {
        $this->postManager = new PostManager();
        $chapters = $this->postManager->getListChapters();
        $this->view = new View('Home');
        $this->view->generate(array('chapters' => $chapters));
    }


}
