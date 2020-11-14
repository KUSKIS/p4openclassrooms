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



    public function getComments()
    {
        return $this->getPostComments('comments', 'Comment');
    }


}
