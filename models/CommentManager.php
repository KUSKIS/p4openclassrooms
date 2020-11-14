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



    public function getComments()
    {
        return $this->getPostComments('comments', 'Comment');
    }

    public function insertComment()
    {
        return $this->addComment('comments', 'Comment');
    }


}
