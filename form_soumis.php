<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Menus</title>
    <style>
        html, body {
            font-family: Arial;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            flex-direction: column;
        }

        body {
            display: flex;
            justify-content: center;



        }
        .center{
            display: flex;
            position: relative;
            width: 100%;
            height: 100%;
            background-color: brown;
            align-items: center;
            justify-content: center;
        }
        .envoyer{
            display: flex;
            position: relative;
            width: 100%;
            height: 100%;
            justify-content: center;
            padding-top: 2%;

        }
        h1{
            color: white;
        }
        input[type=submit] {
            width: 10%;
            height: 30%;
            background-color: black;
            color: white;
            box-shadow: 0px 0px 20px grey;

            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: rosybrown;
        }


    </style>
</head>
<body>
<form method="post">
    <div class="center">
        <h1>Formulaire soumis!</h1>
    </div>
    <div class="envoyer">
        <input type="submit" name="submit" value="cliquez-ici">
    </div>
</form>
</body>
</html>
<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Assistant_vocal_code' . DIRECTORY_SEPARATOR . 'Formulaire.php';


if (isset($_POST['submit'])) {
    $recharger = new Formulaire();
    $recharger->page_name = 'Carousel.html';
    $recharger->Form_soumis();
}


?>