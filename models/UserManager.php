<?php

require_once('models/User.php');
require_once('models/Model.php');


class UserManager extends Model
{


    protected function getUser()
    {
        $db = $this->dbConnect();
        $req = $db->prepare(' SELECT * FROM members  WHERE pseudo = :pseudo ');
        $req->execute(array('pseudo' => $_POST['pseudo']));
        if ($req->rowCount() == 1);
        return $req->fetch();
        $req->closeCursor();
    }

    public function getOneUser()
    {
        return $this->getUser('members', 'User');
    }



}