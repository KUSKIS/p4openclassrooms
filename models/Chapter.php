<?php


class Chapter
{


    protected $id,
        $chap_title,
        $chap_content,
        $chap_date_info,
        $chap_date_modif;

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

    //setters

    public function setId($id)
    {
        $id = (int) $id;
        if ($id > 0) {
            $this->id = $id;
        }
    }

    public function setChap_title($chap_title)
    {
        if (is_string($chap_title)) {
            $this->chap_title = $chap_title;
        }
    }

    public function setChap_content($chap_content)
    {
        if (is_string($chap_content)) {
            $this->chap_content = $chap_content;
        }
    }

    public function setChap_date_info($chap_date_info)
    {
        $this->chap_date_info = $chap_date_info;
    }

    public function setChap_date_modif($chap_date_modif)
    {
        $this->chap_date_modif = $chap_date_modif;
    }

    //getters

    public function id()
    {
        return $this->id;
    }

    public function chap_title()
    {
        return $this->chap_title;
    }

    public function chap_content()
    {
        return $this->chap_content;
    }

    public function chap_date_info()
    {
        return $this->chap_date_info;
    }

    public function chap_date_modif()
    {
        return $this->chap_date_modif;
    }










}