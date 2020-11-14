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
        } else {
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
}