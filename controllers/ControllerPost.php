<?php

require_once('views/View.php');
require_once('models/CommentManager.php');
require_once('models/PostManager.php');

class ControllerPost
{

    private $postManager;
    private $commentManager;
    private $userManager;
    private $view;

    public function __construct()
    {
        if (isset($url) && count($url) < 1) {
            throw new Exception("Page introuvable", 1);
        } elseif (isset($_GET['deletePost'])) {
            $this->deleteOnePost();
        } elseif (isset($_GET['createComment'])) {
            $this->createOneComment();
        } elseif (isset($_GET['updateChapter'])) {
            $this->updateChap();
        } elseif (isset($_GET['deleteComment'])) {
            $this->deleteOneComment();
        } elseif (isset($_GET['oneComment'])) {
            $this->comment();
        } elseif (isset($_GET['check']) && isset($_GET['check']) == "ok") {
            $this->checkAdmin();
        } elseif (isset($_GET['status']) && isset($_GET['status']) == "new") {
            $this->edit();
        } elseif (isset($_GET['modif']) && isset($_GET['modif']) == "modifpost") {
            $this->update();
        } elseif (isset($_GET['response']) && isset($_GET['response']) == "delete") {
            $this->deleteOne();
        } elseif (isset($_GET['etat']) && isset($_GET['etat']) == "newcomment") {
            $this->editOneComment();
        } elseif (isset($_GET['answer']) && isset($_GET['answer']) == "sup") {
            $this->deleteOneCom();
        } elseif (isset($_GET['report']) && isset($_GET['report']) == "alert") {
            $this->reportComment();
        } else {
            $this->chapter();
        }

        $this->postManager = new PostManager();
        $this->CommentManager = new CommentManager();
        $this->userManager = new UserManager();
    }


    public function chapter()
    {
        if (isset($_GET['id'])) {

            $this->postManager = new PostManager();
            $this->commentManager = new CommentManager();
            $chapter = $this->postManager->getChapter($_GET['id']);
            $comments = $this->commentManager->getAllComments($_GET['id']);
            $comment = $this->commentManager->getOneComment($_GET['id']);
            $this->view = new View('SinglePost');
            $this->view->generate(array('chapter' => $chapter, 'comments' => $comments, 'comment' => $comment));
        }
    }

    /*public function connectAdmin()
    {
        if (isset($_GET['connectAdmin'])) {

            $this->view = new View('AdminConnexion');
            $this->view->generate(array());
        }
    }*/

    /*public function checkAdmin()
    {
        $this->userManager = new UserManager();
        //$user = $this->userManager->getOneUser();
        if ($user = $this->userManager->getOneUser($_POST['pseudo'])) {
            if (password_verify($_POST['pass'], $user['pass'])){
                //$this->view = new View('CreatePost');
                //$this->view->generate(array('user' => $user));
                header('Location: post&createPost' . $user['id']);
            }
            else {
                echo "veuillez complèter";
            }
        }
    }*/


    public function checkAdmin()
    {
        $this->userManager = new UserManager();
        $user = $this->userManager->getOneUser();
        $admin = $user['admin'];
        $pseudo = $_POST['pseudo'];
        $userPasswordIsCorrect = password_verify($_POST['pass'], $user['pass']);
        if ($admin == 0) {
            echo 'Accès non autorisé !';
        } else {
            if ($pseudo != $user['pseudo']) {
                echo 'Mauvais identifiant ou mot de passe !';
            } else {
                if ($userPasswordIsCorrect) {
                    //session_start();
                    //$_SESSION['pseudo'] = $pseudo;
                    //$_SESSION['pass'] = $user['pass'];
                    //$_SESSION['id'] = $user['id'];
                    //$_SESSION['pseudo'] = $pseudo;
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['pseudo'] = $pseudo;
                    $this->view = new View('CreatePost');
                    $this->view->generate(array('user' => $user));
                } else {
                    echo 'Mauvais identifiant ou mot de passe !';
                }
            }
        }

    }


    public function edit()
    {
        $this->postManager = new PostManager();
        $chapter = $this->postManager->createChapter();
        if (empty($_POST['chap_title']) || empty($_POST['chap_content'])) {
            echo "Titre et/ou texte manquant(s)";
        } else {
            $this->view = new View('AddPostOk');
            $this->view->generate(array('chapter' => $chapter));
        }
    }

    public function updateChap()
    {
        $this->postManager = new PostManager();
        $chapter = $this->postManager->getChapter($_GET['id']);
        $this->view = new View('updatePost');
        $this->view->generate(array('chapter' => $chapter));
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
        $this->postManager = new PostManager();
        $chapter = $this->postManager->getChapter($_GET['id']);
        $this->view = new View('DeletePost');
        $this->view->generate(array('chapter' => $chapter));
    }

    public function deleteOne()
    {
        $this->postManager = new PostManager();
        $chapter = $this->postManager->deleteChapter();
        $this->view = new View('DeleteOk');
        $this->view->generate(array('chapter' => $chapter));
    }

    public function createOneComment()
    {
        $this->postManager = new PostManager();
        $chapter = $this->postManager->getChapter($_GET['id']);
        $this->view = new View('CreateComment');
        $this->view->generate(array('chapter' => $chapter));
    }

    public function editOneComment()
    {
        $this->commentManager = new CommentManager();
        $comment = $this->commentManager->insertComment();
        $this->view = new View('AddCommentOk');
        $this->view->generate(array('comment' => $comment));
    }

    public function deleteOneComment()
    {
        $this->commentManager = new CommentManager();
        $comment = $this->commentManager->getOneComment($_GET['id']);
        $this->view = new View('DeleteComment');
        $this->view->generate(array('comment' => $comment));
    }

    public function deleteOneCom()
    {
        $this->commentManager = new CommentManager();
        $comment = $this->commentManager->deleteCom();
        $this->view = new View('DeleteCommentOk');
        $this->view->generate(array('comment' => $comment));
    }

    public function comment()
    {
        $this->commentManager = new CommentManager();
        $comment = $this->commentManager->getOneComment($_GET['id']);
        $this->view = new View('OneComment');
        $this->view->generate(array('comment' => $comment));
    }

    public function reportComment()
    {
        $this->commentManager = new CommentManager();
        $comment = $this->commentManager->reportCom();
        $this->view = new View('alertComment');
        $this->view->generate(array('comment' => $comment));
    }




}