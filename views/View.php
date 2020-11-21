<?php



class View
{

    private $_file;
    private $_title;

    public function __construct($action)
    {
        $this->_file = "views/View" . $action . ".php";
    }

    public function generate($data)
    {
        $content = $this->generateFile($this->_file, $data);
        $view = $this->generateFile('views/template.php', array(
            'title' => $this->_title,
            'content' => $content
        ));

        echo $view;
    }

    public function generateForm()
    {
        $content = $this->generateFileSimple($this->_file);
        $view = $this->generateFile('views/template.php', array(
            'title' => $this->_title,
            'content' => $content
        ));

        echo $view;
    }

    private function generateFile($file, $data)
    {
        if (file_exists($file)) {
            extract($data);
            ob_start();
            require $file;
            return ob_get_clean();
        } else {
            throw new Exception("File '$file' not found", 1);
        }
    }

    private function generateFileSimple($file)
    {
        if (file_exists($file)) {
            ob_start();
            require $file;
            return ob_get_clean();
        } else {
            throw new Exception("File '$file' not found", 1);
        }
    }








}