<?php


require_once('models/Model.php');

class CommentManager extends Model
{


    protected function getPostComments()
    {
        $db = $this->dbconnect();
        $var = [];
        $comments = $db->prepare(' SELECT id, com_user, com_date, com_content FROM comments WHERE chapter_id = ? ');
        $comments->execute(array($_GET['id']));
        $com_date = date('d-m-Y H:i:s');
        while ($data = $comments->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new Comment($data);
        }
        return $var;
        $comments->closeCursor();
    }

    protected function addComment()
    {
        $db = $this->dbConnect();
        $comment = $db->prepare(' INSERT INTO comments(chapter_id, com_user, com_content, com_date) VALUES (?, ?, ?, NOW())');
        $comment->execute(array($_POST['chapter_id'], $_POST['com_user'], $_POST['com_content']));
        $comment->closeCursor();
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
        $req = $db->prepare(' DELETE FROM comments WHERE id = ? ');
        $req->execute(array($_POST['id']));
        $req->closeCursor();
    }


    public function getComments()
    {
        return $this->getPostComments('comments', 'Comment');
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


}
