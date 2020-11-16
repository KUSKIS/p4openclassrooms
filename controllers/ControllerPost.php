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
        }  elseif (isset($_GET['deletePost'])) {
            $this->deleteOnePost();
        } elseif (isset($_GET['createComment'])) {
            $this->createOneComment();
        } elseif (isset($_GET['updateChapter'])) {
            $this->updateChap();
        } elseif (isset($_GET['deleteComment'])) {
            $this->deleteOneComment();
        } elseif (isset($_GET['status']) && isset($_GET['status']) == "new") {
            $this->edit();
        } elseif (isset($_GET['modif']) && isset($_GET['modif']) == "modifpost") {
            $this->update();
        } elseif (isset($_GET['response']) && isset($_GET['response']) == "delete") {
            $this->deleteOne();
        } elseif (isset($_GET['etat']) && isset($_GET['etat']) == "newcomment") {
            $this->registerOneComment();
        } elseif (isset($_GET['answer']) && isset($_GET['answer']) == "supcom") {
            $this->deleteOneCom();
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


    public function createOnePost()
    {
        if (isset($_GET['createPost'])) {

            $this->view = new View('CreatePost');
            $this->view->generateForm();
        }
    }

    public function edit()
    {
        $this->postManager = new PostManager();
        $chapter = $this->postManager->createChapter();
        $this->view = new View('CreatePost');
        $this->view->generate(array('chapter' => $chapter));
    }

    public function updateChap()
    {
        if (isset($_GET['updateChapter'])) {

            $this->view = new View('updatePost');
            $this->view->generateForm();
        }
    }

    public function update()
    {
            $this->postManager = new PostManager();
            $chapter = $this->postManager->updateChapter();
            $this->view = new View('UpdateOk');
            $this->view->generate(array('chapter' => $chapter));

    }

    public function deleteOnePost()
    {
        if (isset($_GET['deletePost'])) {

            $this->view = new View('DeletePost');
            $this->view->generateForm();
        }

    }

    public function deleteOne()
    {

        $this->postManager = new PostManager();
        $chapter = $this->postManager->deleteChapter();
        $this->view = new View('DeleteOk');
        $this->view->generate(array('chapters' => $chapter));
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
        $this->view = new View('CreateComment');
        $this->view->generate(array('comments' => $comment));
    }

    public function deleteOneComment()
    {
        if (isset($_GET['deleteComment'])) {

            $this->view = new View('DeleteComment');
            $this->view->generateForm();
        }
    }

    public function deleteOneCom()
    {
        $this->commentManager = new CommentManager();
        $comment = $this->commentManager->deleteCom();
        $this->view = new View('DeleteCommentOk');
        $this->view->generate(array('comment' => $comment));
    }
}