<?php

require_once('views/View.php');
require_once('models/PostManager.php');


class ControllerHome
{

    private $PostManager;
    private $commentManager;
    private $userManager;
    private $view;

    public function __construct()
    {
        if (isset($url) && count($url) > 1) {
            throw new Exception("Page introuvable", 1);
        } elseif (isset($_GET['tablePost'])) {
            $this->readAllPosts();
        } elseif (isset($_GET['tableComment'])) {
            $this->listAllComments();
        } elseif (isset($_GET['connectAdmin'])) {
            $this->connectAdmin();
        } else {
            $this->listChapters();
        }

        $this->chapterManager = new PostManager();
        $this->commentManager = new CommentManager();
        $this->userManager = new UserManager();
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
        $this->postManager = new PostManager();
        $chapters = $this->postManager->getListChapters();
        $this->view = new View('TablePost');
        $this->view->generate(array('chapters' => $chapters));
    }

    public function listAllComments()
    {
        $this->commentManager = new CommentManager();
        $comments = $this->commentManager->getListComments();
        $this->view = new View('TableComment');
        $this->view->generate(array('comments' => $comments));
    }

    public function connectAdmin()
    {
        $this->view = new View('AdminConnexion');
        $this->view->generate(array());
    }











}
