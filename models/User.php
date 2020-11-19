<?php

class User
{

    protected $id,
              $pseudo,
              $pass,
              $email;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    //hydratation

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            //on crée les setters du tableau recu: setId, setTitle
            //pour définir les valeurs des attibuts
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }









}