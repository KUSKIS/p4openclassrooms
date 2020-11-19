<?php

require_once('views/View.php');
require_once('models/PostManager.php');


class ControllerHome
{

    private $PostManager;
    private $commentManager;
    private $view;

    public function __construct() //retrait parametre $url
    {
        if (isset($url) && count($url) > 1) {
            throw new Exception("Page introuvable", 1);
        } elseif (isset($_GET['tablePost'])) {
            $this->readAllPosts();
        } elseif (isset($_GET['tableComment'])) {
            $this->listAllComments();
        } else {
            $this->listChapters();
        }

        $this->chapterManager = new PostManager();
        $this->commentManager = new CommentManager();
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

    public function listAllComments()
    {
        if (isset($_GET['tableComment'])) {

            $this->commentManager = new CommentManager();
            $comments = $this->commentManager->getListComments();
            $this->view = new View('TableComment');
            $this->view->generate(array('comments' => $comments));
        }
    }







}
