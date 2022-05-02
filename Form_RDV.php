<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Menus</title>
</head>
<style>
    body {
        background-image: url(image/bg.png);
        background-position: 50% 30%  ;
        background-repeat: no-repeat;
        padding: 15px;


    }

    form {
        background-color: #11ffee00;
        width: 650px;
        margin: auto;
        margin-top: 100px;

        outline-offset: 15px;
        font-family: Arial;
    }

    h1 {
        color: black;
        text-align: center;
    }

    h3 {
        color: black;
        line-height: 20%;
    }
</style>
<body>
<form id = "Menus" action="RDV.php" method="post">

<h1>Rendez-vous</h1>

    <h3>Nom du patient :</h3>
    <input type = "text" name = "nom" required><br><br>

    <h3>Date :</h3>
    <input type = "date" name = "date" required><br><br>

    <h3>Heure:</h3>
    <input type = "time" name = "heure" required><br><br>

    <h3>Type de rendez-vous :</h3>
    <input type = "text" name = "typeRDV"><br><br>

    <h3>Description : </h3>
    <textarea name = "description" cols = "40" rows = "5"></textarea><br><br>

    <input type="submit" name="submit" value="envoyer">

</form>
</body>
</html>
