<?php

require_once('models/User.php');
require_once('models/Model.php');


class UserManager extends Model
{


public function getUser()
{
    $db = $this->dbConnect();
    $req = $db->prepare(' SELECT * FROM members  WHERE pseudo = :pseudo ');
    $req->execute(array('pseudo' => $_POST['pseudo']));
    if ($req->rowCount() == 1);
    return $req->fetch();

    $req->closeCursor();
}

/*protected function getAllUsers()
{
    $db = $this->dbConnect();
    $var = [];
    $req = $db->query(' SELECT * FROM members ORDER BY id ');
    $req->execute();
    //on crée la variable data qui contient les données

    while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
        //var contiendra les donnees sous forme d'objet
        $var[] = new User($data);
    }

    return $var;
    $req->closeCursor(); //on maintient la requete
}*/



public function getOneUser()
{
    return $this->getUser('members', 'User');
}

/*public function getListUsers()
{
    return $this->getAllUsers('members', 'User');
}*/













}