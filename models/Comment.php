<?php


class Comment
{

    protected $id,
        $com_date,
        $com_user,
        $com_content,
        $alert,
        $chapter_id;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    //hydratation

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            //on crée les setters du tableau recu:
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

    public function setCom_date($com_date)
    {
        $this->com_date = $com_date;
    }

    public function setCom_user($com_user)
    {
        if (is_string($com_user)) {
            $this->com_user = $com_user;
        }
    }

    public function setCom_content($com_content)
    {
        if (is_string($com_content)) {
            $this->com_content = $com_content;
        }
    }

    public function setAlert($alert)
    {
        $alert = (bool) $alert;
        if ($alert > 0) {
            $this->alert = $alert;
        }
    }

    public function set_chapter_id($chapterId)
    {
        $chapterId = (int) $chapterId;
        if ($chapterId > 0) {
            $this->chapter_id = $chapterId;
        }
    }




    //getters

    public function id()
    {
        return $this->id;
    }

    public function com_date()
    {
        return $this->com_date;
    }

    public function com_user()
    {
        return $this->com_user;
    }

    public function com_content()
    {
        return $this->com_content;
    }

    public function alert()
    {
        return $this->alert;
    }

    public function chapter_id()
    {
        return $this->chapter_id;
    }
}
