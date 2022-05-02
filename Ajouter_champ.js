var id = 0;
var id1 = 0;
var id2 = 0;
var id3 = 0;
var id4 = 0;
var id5 = 0;
var id6 = 0;
var id7 = 0;

function entree_plus() {

    //Permet de ne pouvoir créer que trois champs
    if (id < 3) {
        // Crée une balise input de type texte nommée entreeID + la valeur de la variable id
        var ID = document.createElement("input");
        ID.setAttribute("type", "text");
        ID.setAttribute("name", "entreeID" + id);
        ID.setAttribute("placeholder", "Entree");

        // Incrémente la valeur de la variable id
        id++;

        // Insere la balise input contenu dans la variable ID à l'endroit ou se trouvel'id GFG_DOWN
        document.getElementById("GFG_DOWN").appendChild(ID);
    }
}

function plats_plus() {



    //var form = document.getElementById("Menus");

    if (id1 < 3) {
        // Create an input element for emailID
        var ID = document.createElement("input");
        ID.setAttribute("type", "text");
        ID.setAttribute("name", "platsID" + id1);
        ID.setAttribute("placeholder", "Plats");


        id1++;

        document.getElementById("GFG_DOWN2").appendChild(ID);
    }
}

function plaitiers_plus() {

    var form = document.getElementById("Menus");


    if (id2 < 3) {
        // Create an input element for emailID
        var ID = document.createElement("input");
        ID.setAttribute("type", "text");
        ID.setAttribute("name", "plaitiersID" + id2);
        ID.setAttribute("placeholder", "Produits Laitiers");

        id2++;

        document.getElementById("GFG_DOWN3").appendChild(ID);
    }
}

function desserts_plus() {


    // Create a form synamically
    var form = document.getElementById("Menus");
    /*form.setAttribute("method", "post");
    form.setAttribute("action", "Convertisseur_JSON.php");*/

    if (id3 < 3) {
        // Create an input element for emailID
        var ID = document.createElement("input");
        ID.setAttribute("type", "text");
        ID.setAttribute("name", "dessertsID" + id3);
        ID.setAttribute("placeholder", "Desserts");


        id3++
        document.getElementById("GFG_DOWN4").appendChild(ID);
    }
}

function entree_plus2() {


    // Create a form synamically
    //Impossible de l'enlever sionon mes new champs sont créé au meme endroit
    var form = document.getElementById("Menus");
    /*form.setAttribute("method", "post");
    form.setAttribute("action", "Convertisseur_JSON.php");*/

    if (id4 < 3) {
        // Create an input element for entreeID
        var ID = document.createElement("input");
        ID.setAttribute("type", "text");
        ID.setAttribute("name", "entreeDiID" + id4);
        ID.setAttribute("placeholder", "Entree");

        id4++
        document.getElementById("GFG_DOWN5").appendChild(ID);
    }
}

function plats_plus2() {


    // Create a form synamically
    //var form = document.createElement("form");
    var form = document.getElementById("Menus");
    /*form.setAttribute("method", "post");
    form.setAttribute("action", "Convertisseur_JSON.php");*/

    if (id5 < 3) {
        // Create an input element for emailID
        var ID = document.createElement("input");
        ID.setAttribute("type", "text");
        ID.setAttribute("name", "platsDiID" + id5);
        ID.setAttribute("placeholder", "Plats");

        id5++
        document.getElementById("GFG_DOWN6").appendChild(ID);
    }
}

function plaitiers_plus2() {


    // Create a form synamically
    var form = document.getElementById("Menus");
    /*form.setAttribute("method", "post");
    form.setAttribute("action", "Convertisseur_JSON.php");*/

    if (id6 < 3) {
        // Create an input element for emailID
        var ID = document.createElement("input");
        ID.setAttribute("type", "text");
        ID.setAttribute("name", "plaitiersDiID" + id6);
        ID.setAttribute("placeholder", "Produits Laitiers");


        id6++
        document.getElementById("GFG_DOWN7").appendChild(ID);
    }
}

function desserts_plus2() {


    // Create a form synamically
    var form = document.getElementById("Menus");
    /* form.setAttribute("method", "post");
     form.setAttribute("action", "Convertisseur_JSON.php");*/

    if (id7 < 3) {
        // Create an input element for emailID
        var ID = document.createElement("input");
        ID.setAttribute("type", "text");
        ID.setAttribute("name", "dessertsDiID" + id7);
        ID.setAttribute("placeholder", "Desserts");


        id7++
        document.getElementById("GFG_DOWN8").appendChild(ID);
    }
}

