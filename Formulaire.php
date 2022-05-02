<?php

class Formulaire
{
    public $page_name;

    public function Form_soumis()
    {

        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = $this->page_name;
        header("Location: http://$host$uri/$extra");

    }

}