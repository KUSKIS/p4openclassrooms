<?php

require_once('models/Chapter.php');
require_once('models/Model.php');

class PostManager extends Model
{

    protected function getAll()
    {
        $db = $this->dbConnect();
        $var = [];
        $req = $db->query(' SELECT * FROM  chapters  ORDER BY id ASC ');
        $req->execute();
        //on crée la variable data qui contient les données
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            //var contiendra les donnees sous forme d'objet
            $var[] = new Chapter($data);
        }
        return $var;
        $req->closeCursor(); //on maintient la requete

    }

    protected function getPost()
    {
        $db = $this->dbConnect();
        $req = $db->prepare('  SELECT id, chap_title, chap_content, chap_date_info, chap_date_modif  FROM
         chapters  WHERE id = ? ');
        $req->execute(array($_GET['id']));
        if ($req->rowCount() == 1);
        return $req->fetch();
        $req->closeCursor();
    }

    protected function createPost()
    {
        $db = $this->dbConnect();
        $req = $db->prepare(' INSERT INTO  chapters (chap_title, chap_content, chap_date_info, chap_date_modif) VALUES (?, ?, NOW(), NOW())');
        $req->execute(array($_POST['chap_title'], $_POST['chap_content']));
        $req->closeCursor();
    }


    protected function updatePost()
    {
        $db = $this->dbConnect();
        $req = $db->prepare(' UPDATE chapters SET chap_title = :chap_title, chap_content = :chap_content, chap_date_modif = NOW()
        WHERE id = :id ');
        $req->execute(array('id' => $_POST['id'], 'chap_title' => $_POST['chap_title'], 'chap_content' => $_POST['chap_content']));
        $req->closeCursor();
    }

    protected function deletePost()
    {
        $db = $this->dbConnect();
        $req = $db->prepare(' DELETE FROM chapters WHERE id = :id ');
        $req->execute(array('id' => $_POST['id']));
        $req->closeCursor();
    }


    public function getListChapters()
    {
        return $this->getAll('chapters', 'Chapter');
    }

    public function getChapter()
    {
        return $this->getPost('chapters', 'Chapter');
    }

    public function createChapter()
    {
        return $this->createPost('chapters', 'Chapter');
    }

    public function updateChapter()
    {
        return $this->updatePost('chapters', 'Chapter');
    }

    public function deleteChapter()
    {
        return $this->deletePost('chapters', 'Chapter');
    }




}
