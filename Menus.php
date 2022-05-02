<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Assistant_vocal_code' . DIRECTORY_SEPARATOR . 'FichierJSON.php';
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Assistant_vocal_code' . DIRECTORY_SEPARATOR . 'Formulaire.php';


//Définir les variables
$entreeDe1 = $platDe1 = $p_laitiersDe1 = $dessertDe1 = "";
$entreeDe2 = $platDe2 = $p_laitiersDe2 = $dessertDe2 = "";
$entreeDe3 = $platDe3 = $p_laitiersDe3 = $dessertDe3 = "";
$entreeDe4 = $platDe4 = $p_laitiersDe4 = $dessertDe4 = "";

$entreeDi1 = $platDi1 = $p_laitiersDi1 = $dessertDi1 = "";
$entreeDi2 = $platDi2 = $p_laitiersDi2 = $dessertDi2 = "";
$entreeDi3 = $platDi3 = $p_laitiersDi3 = $dessertDi3 = "";
$entreeDi4 = $platDi4 = $p_laitiersDi4 = $dessertDi4 = "";


// Vérifier si le formulaire est soumis
if (isset($_POST['submit'])) {

    $entreeDe1 = $_POST['entreeDe1'];
    $platDe1 = $_POST['platsDe1'];
    $p_laitiersDe1 = $_POST['p_laitiersDe1'];
    $dessertDe1 = $_POST['dessertsDe1'];


    $entreeDi1 = $_POST['entreeDi1'];
    $platDi1 = $_POST['platsDi1'];
    $p_laitiersDi1 = $_POST['p_laitiersDi1'];
    $dessertDi1 = $_POST['dessertsDi1'];


    $entree = array($entreeDe2, $entreeDe3, $entreeDe4);
    $entree2 = array($entreeDi2, $entreeDi3, $entreeDi4);

    $plat = array($platDe2, $platDe3, $platDe4);
    $plat2 = array($platDi2, $platDi3, $platDi4);

    $p_laitiers = array($p_laitiersDe2, $p_laitiersDe3, $p_laitiersDe4);
    $p_laitiers2 = array($p_laitiersDi2, $p_laitiersDi3, $p_laitiersDi4);

    $dessert = array($dessertDe2, $dessertDe3, $dessertDe4);
    $dessert2 = array($dessertDi2, $dessertDi3, $dessertDi4);


    for ($j = 0; $j < 4; $j++) {
        if (isset($_POST['entreeID' . $j])) {
            $entree[$j] = $_POST['entreeID' . $j];
        }
        if (isset($_POST['platsID' . $j])) {
            $plat[$j] = $_POST['platsID' . $j];
        }
        if (isset($_POST['plaitiersID' . $j])) {
            $p_laitiers[$j] = $_POST['plaitiersID' . $j];
        }
        if (isset($_POST['dessertsID' . $j])) {
            $dessert[$j] = $_POST['dessertsID' . $j];
        }
        if (isset($_POST['entreeDiID' . $j])) {
            $entree2[$j] = $_POST['entreeDiID' . $j];
        }
        if (isset($_POST['platsDiID' . $j])) {
            $plat2[$j] = $_POST['platsDiID' . $j];
        }
        if (isset($_POST['plaitiersDiID' . $j])) {
            $p_laitiers2[$j] = $_POST['plaitiersDiID' . $j];
        }
        if (isset($_POST['dessertsDiID' . $j])) {
            $dessert2[$j] = $_POST['dessertsDiID' . $j];
        }


    }


}


$form_menusD1 = $form_menusD2 = $form_menusD3 = $form_menusD4 = $form_menusD5 = $form_menusD6 = $form_menusD7 = "";


$form = array($form_menusD1, $form_menusD2, $form_menusD3, $form_menusD4, $form_menusD5, $form_menusD6, $form_menusD7);

if (isset($_POST['submit'])) { //et si la page et chargée


    //tableau contenant les différents aliments
    $form = array('diner' => array('entrees' => array($entreeDe1, $entree[0], $entree[1], $entree[2]), 'plats' => array($platDe1, $plat[0], $plat[1], $plat[2]),
        'p_laitiers' => array($p_laitiersDe1, $p_laitiers[0], $p_laitiers[1], $p_laitiers[2]), 'desserts' => array($dessertDe1, $dessert[0], $dessert[1], $dessert[2])),
        'dejeuner' => array('entrees' => array($entreeDi1, $entree2[0], $entree2[1], $entree2[2]), 'plats' => array($platDi1, $plat2[0], $plat2[1], $plat2[2]),
            'p_laitiers' => array($p_laitiersDi1, $p_laitiers2[0], $p_laitiers2[1], $p_laitiers2[2]), 'desserts' => array($dessertDi1, $dessert2[0], $dessert2[1], $dessert2[2])));


}
$menu = new FichierJSON();
$menu->file_name = 'Menus' . '.json';
$menu->data = $form;
file_put_contents($menu->file_name, $menu->ConvertirEnJSON());


$recharger = new Formulaire();
$recharger->page_name = 'Form_Menus.php';
$recharger->Form_soumis();


