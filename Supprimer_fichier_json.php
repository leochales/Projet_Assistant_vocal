<?php

if (isset ($_POST['submit'])) {

    /* $case1 = $_POST['menus'];
     $case2 = $_POST['RDV'];
     $case3 = $_POST['activite'];*/

    if (isset  ($_POST['menus'])) {

        $fichier = 'Menus.json';

        if (file_exists($fichier)) {

            unlink('Menus.json');
        }


    }


    if (isset  ($_POST['RDV'])) {

        $fichier = 'RDV.json';

        if (file_exists($fichier)) {

            unlink('RDV.json');
        }


    }

    if (isset  ($_POST['activite'])) {

        $fichier = 'Activite.json';

        if (file_exists($fichier)) {

            unlink('Activite.json');
        }


    }
    recharger();
}

function recharger()
{

    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'Carousel.html';
    header("Location: http://$host$uri/$extra");

}








