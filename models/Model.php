<?php

require_once('models/Post.php');

abstract class Model
{

    private $db;

    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=projet4;charset=utf8', 'root', '');

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $db;
    }


}