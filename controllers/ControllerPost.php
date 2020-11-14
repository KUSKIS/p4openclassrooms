<?php


class ControllerPost
{

    private $postManager;
    private $view;

    public function __construct()
    {
        if (isset($url) && count($url) < 1) {
            throw new Exception("Page introuvable", 1);
        } else {
            $this->chapter();
        }

        $this->postManager = new PostManager();
    }


    public function chapter()
    {
        if (isset($_GET['id'])) {

            $this->postManager = new PostManager();
            $chapter = $this->postManager->getChapter($_GET['id']);
            $this->view = new View('SinglePost');
            $this->view->generate(array('chapter' => $chapter));
        }
    }
}