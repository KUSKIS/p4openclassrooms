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
        } elseif (isset($_GET['tablePost'])) {
            $this->readAllPosts();
        }else {
            $this->listChapters();
        }

        $this->chapterManager = new PostManager();
    }


    public function listChapters()
    {
        $this->postManager = new PostManager();
        $chapters = $this->postManager->getListChapters();
        $this->view = new View('Home');
        $this->view->generate(array('chapters' => $chapters));
    }

    public function readAllPosts()
    {
        if (isset($_GET['tablePost'])) {

            $this->postManager = new PostManager();
            $chapters = $this->postManager->getListChapters();
            $this->view = new View('TablePost');
            $this->view->generate(array('chapters' => $chapters));
        }
    }


}
