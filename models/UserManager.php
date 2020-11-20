<?php

require_once('models/User.php');
require_once('models/Model.php');


class UserManager extends Model
{


protected function getUser()
{
    $db = $this->dbConnect();
    $req = $db->prepare('  SELECT id, pseudo, pass, email  FROM
    members  WHERE pseudo = ? ');
    $req->execute();
        //on crée la variable data qui contient les données

    while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            //var contiendra les donnees sous forme d'objet
        $var[] = new User($data);
    }

    return $var;
    $req->closeCursor(); //on maintient la requete
}

protected function addUser()
{
    $db = $this->dbConnect();
    $req = $db->prepare(' INSERT INTO members(pseudo, pass, email) VALUES (?, ?, ?)');
    $req->execute(array($_POST['pseudo'], $_POST['pass'], $_POST['email']));

    $req->closeCursor();
}

public function getOneUser()
{
    return $this->getUser('members', 'User');
}

public function addOneUser()
{
    return $this->addUser('members', 'User');
}











}