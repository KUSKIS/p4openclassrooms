<?php

require_once('models/Chapter.php');
require_once('models/Model.php');

class PostManager extends Model
{

    public function getAll()
    {
        $db = $this->dbConnect();
        $var = [];
        $req = $db->query(' SELECT * FROM  chapters  ORDER BY id desc ');
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
        $chapter = $db->prepare('  SELECT id, chap_title, chap_content, chap_date_info, chap_date_modif  FROM
         chapters  WHERE id = ? ');
        $chapter->execute(array($_GET['id']));
        $chap_date_info = date('d-m-Y H:i:s');
        $chap_date_modif = date('d-m-Y H:i:s');
        if ($chapter->rowCount() == 1);
        return $chapter->fetch();
        $chapter->closeCursor();
    }

    protected function createPost()
    {
        $db = $this->dbConnect();
        $req = $db->prepare(' INSERT INTO  chapters (chap_title, chap_content, chap_date_info, chap_date_modif) VALUES (?, ?, NOW(), NOW())');
        $req->execute(array($_POST['chap_title'], $_POST['chap_content']));

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



}
