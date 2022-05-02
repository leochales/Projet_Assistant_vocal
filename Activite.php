<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Assistant_vocal_code' . DIRECTORY_SEPARATOR . 'FichierJSON.php';
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Assistant_vocal_code' . DIRECTORY_SEPARATOR . 'Formulaire.php';

if (isset($_POST['submit'])) {
    $name = $_POST['activite'];
    $date = $_POST['date'];
    $heure = $_POST['heure'];
    $description = $_POST['description'];
}

$form_ACTIVITE = array('Activite' => $name, 'Date' => $date, 'Heure' => $heure, 'Description' => $description);


$activite = new FichierJSON();
$activite->file_name = 'Activite' . '.json';
$activite->data = $form_ACTIVITE;

file_put_contents($activite->file_name, $activite->ConvertirEnJSON());

$form_soumis = new Formulaire();
$form_soumis->page_name = 'form_soumis.php';
$form_soumis->Form_soumis();




