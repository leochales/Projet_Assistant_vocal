<?php

// Start the session
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Menus</title>
</head>
<body>
<script src = "Ajouter_champ.js"></script>
<style>
    body {
        background-image: url(image/bg.png);
        background-position: 50% 35%  ;
        background-repeat: no-repeat;
        padding: 15px;



    }

    form {
        background-color: #11ffee00;
        width: 650px;
        margin: auto;
        margin-top: 100px;

        font-family: Arial;
    }

    h1 {
        color: black;
        text-align: center;
    }

    h2 {
        color: black;
    }


</style>

<form id = "Menus" name="menus" action="Menus.php" method="post">

    <h1> Menus de la semaine du <?php  $date = date("d/m/y"); echo $date; ?> </h1>
    <h2>Dejeuner</h2>

    <label for="entree">Entrees:</label> <input type="text" id="entree" name="entreeDe1" pattern="[A-Za-z]{1,30}" required>
    <input onClick="entree_plus()" type ="button" value = "+"><br>
    <p id="GFG_DOWN"></p>

    <label for="plat">Plats:</label> <input type="text" id="plat" name="platsDe1" pattern="[A-Za-z]{1,30}" required>
    <input onClick="plats_plus()" type ="button" value = "+"><br>
    <p id="GFG_DOWN2"></p>


    <label for="plaitier">Produits Laitiers:</label> <input type="text" id="plaitier" name="p_laitiersDe1" pattern="[A-Za-z]{1,30}" required>
    <input onClick="plaitiers_plus()" type ="button" value = "+"><br>
    <p id="GFG_DOWN3"></p>
    <input id="prodId3" name="prodId" type="hidden" value="0">

    <label for="desserts">Desserts:</label> <input type="text" id="desserts" name="dessertsDe1" pattern="[A-Za-z]{1,30}" required>
    <input onClick="desserts_plus()" type ="button" value = "+"><br>
    <p id="GFG_DOWN4"></p>
    <input id="prodId4" name="prodId" type="hidden" value="0">

    <h2>Diner</h2>

    <label for="entree1">Entrees:</label> <input type="text" id="entree1" name="entreeDi1" pattern="[A-Za-z]{1,30}" required>
    <input onClick="entree_plus2()" type ="button" value = "+"><br>
    <p id="GFG_DOWN5"></p>
    <input id="prodId5" name="prodId" type="hidden" value="0">

    <label for="plat1">Plats:</label> <input type="text" id="plat1" name="platsDi1" pattern="[A-Za-z]{1,30}" required>
    <input onClick="plats_plus2()" type ="button" value = "+"><br>
    <p id="GFG_DOWN6"></p>
    <input id="prodId6" name="prodId" type="hidden" value="0">

    <label for="plaitier1">Produits Laitiers:</label> <input type="text" id="plaitier1" name="p_laitiersDi1" pattern="[A-Za-z]{1,30}" required>
    <input onClick="plaitiers_plus2()" type ="button" value = "+"><br>
    <p id="GFG_DOWN7"></p>
    <input id="prodId7" name="prodId" type="hidden" value="0">

    <label for="desserts1">Desserts:</label> <input type="text" id="desserts1" name="dessertsDi1" pattern="[A-Za-z]{1,30}" required>
    <input onClick="desserts_plus2()" type ="button" value = "+"><br>
    <p id="GFG_DOWN8"></p>
    <input id="prodId8" name="prodId" type="hidden" value="0">


    <input type="submit" name="submit" value="envoyer"><br><br>


    <?php

    if (!isset($_SESSION["incrementation"])){

        $_SESSION["incrementation"]=1;
    }

    if($_SESSION["incrementation"]<=7 ){

        echo $_SESSION["incrementation"] . '/7';
        $_SESSION["incrementation"] = $_SESSION["incrementation"] + 1;

    }else {
        session_destroy();

        require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Assistant_vocal_code' . DIRECTORY_SEPARATOR . 'Formulaire.php';

        $menu_soumis = new Formulaire();
        $menu_soumis->page_name = 'formMenu_soumis.php';
        $menu_soumis->Form_soumis();


    }
    ?>

</form>
</body>
</html>