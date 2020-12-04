<?php

require_once('models/Comment.php');
require_once('models/Model.php');

class CommentManager extends Model
{


    protected function getPostComments()
    {
        $db = $this->dbconnect();
        $var = [];
        $req = $db->prepare(' SELECT id, com_user, com_date, com_content FROM comments WHERE chapter_id = ? ');
        $req->execute(array($_GET['id']));
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new Comment($data);
        }
        return $var;
        $req->closeCursor();
    }

    protected function getComment()
    {
        $db = $this->dbconnect();
        $req = $db->prepare('  SELECT * FROM comments  WHERE id = ? ');
        $req->execute(array($_GET['id']));
        if ($req->rowCount() == 1);
        return $req->fetch();
        $req->closeCursor();
    }

    protected function addComment()
    {
        $db = $this->dbConnect();
        $req = $db->prepare(' INSERT INTO comments(chapter_id, com_user, com_content, alert, com_date) VALUES (?, ?, ?, 0, NOW())');
        $req->execute(array($_POST['chapter_id'], htmlspecialchars($_POST['com_user']), htmlspecialchars($_POST['com_content'])));
        $req->closeCursor();
    }

    protected function listComments()
    {
        $db = $this->dbConnect();
        $var = [];
        $req = $db->query(' SELECT * FROM  comments  ORDER BY id desc ');
        $req->execute();
        //on crée la variable data qui contient les données
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            //var contiendra les donnees sous forme d'objet
            $var[] = new Comment($data);
        }
        return $var;
        $req->closeCursor(); //on maintient la requete
    }

    protected function deleteComment()
    {
        $db = $this->dbConnect();
        $req = $db->prepare(' DELETE FROM comments WHERE id = :id ');
        $req->execute(array('id' => $_POST['id']));
        $req->closeCursor();
    }

    protected function reportOneComment()
    {
        $db = $this->dbConnect();
        $req = $db->prepare(' UPDATE comments SET alert = 1 WHERE id = :id');
        $req->execute(array('id' => $_POST['id']));
        $req->closeCursor();
    }


    public function getAllComments()
    {
        return $this->getPostComments('comments', 'Comment');
    }

    public function getOneComment()
    {
        return $this->getComment('comments', 'Comment');
    }

    public function insertComment()
    {
        return $this->addComment('comments', 'Comment');
    }

    public function getListComments()
    {
        return $this->listComments('comments', 'Comment');
    }

    public function deleteCom()
    {
        return $this->deleteComment('comments', 'Comment');
    }

    public function reportCom()
    {
        return $this->reportOneComment('comments', 'Comment');
    }


}
