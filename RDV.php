<?php

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Assistant_vocal_code' . DIRECTORY_SEPARATOR . 'FichierJSON.php';
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Assistant_vocal_code' . DIRECTORY_SEPARATOR . 'Formulaire.php';

if ( isset( $_POST['submit'] ) )
{
    $nom = $_POST['nom'];
    $date = $_POST['date'];
    $heure = $_POST['heure'];
    $typeRDV = $_POST['typeRDV'];
    $description = $_POST['description'];
}

$form_RDV = array('Nom' => $nom, 'Date' => $date, 'Heure' => $heure, 'typeRDV' => $typeRDV, 'Description' => $description);


$RDV = new FichierJSON();
$RDV->file_name = 'RDV'. '.json';
$RDV->data = $form_RDV;

file_put_contents($RDV->file_name, $RDV->ConvertirEnJSON());

$form_soumis = new Formulaire();
$form_soumis->page_name = 'form_soumis.php';
$form_soumis->Form_soumis();


