<?php

require_once('views/View.php');
require_once('models/CommentManager.php');
require_once('models/PostManager.php');

class ControllerPost
{

    private $postManager;
    private $commentManager;
    private $view;

    public function __construct()
    {
        if (isset($url) && count($url) < 1) {
            throw new Exception("Page introuvable", 1);
        } elseif (isset($_GET['createPost'])) {
            $this->createOnePost();
        } elseif (isset($_GET['createComment'])) {
            $this->createOneComment();
        }elseif (isset($_GET['status']) && isset($_GET['status']) == "new") {
            $this->edit();
        } elseif (isset($_GET['etat']) && isset($_GET['etat']) == "newcomment") {
            $this->registerOneComment();
        }else {
            $this->chapter();
        }

        $this->postManager = new PostManager();
        $this->CommentManager = new CommentManager();
    }


    public function chapter()
    {
        if (isset($_GET['id'])) {

            $this->postManager = new PostManager();
            $this->commentManager = new CommentManager();
            $chapter = $this->postManager->getChapter($_GET['id']);
            $comments = $this->commentManager->getComments($_GET['id']);
            $this->view = new View('SinglePost');
            $this->view->generate(array('chapter' => $chapter, 'comments' => $comments));
        }
    }

    public function createOnePost()
    {
        if (isset($_GET['createPost'])) {

            $this->_view = new View('CreatePost');
            $this->_view->generateForm();
        }
    }

    public function edit()
    {
        $this->postManager = new PostManager();
        $chapter = $this->postManager->createChapter();
        $this->_view = new View('CreatePost');
        $this->_view->generate(array('chapter' => $chapter));
    }

    public function createOneComment()
    {

        if (isset($_GET['createComment'])) {

            $this->view = new View('CreateComment');
            $this->view->generateForm();
        }
    }

    public function registerOneComment()
    {

        $this->commentManager = new CommentManager();
        $comment = $this->commentManager->insertComment();
        $this->_view = new View('CreateComment');
        $this->_view->generate(array('comments' => $comment));
    }
}