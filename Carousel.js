function loadpage() {
    var click;
    var click2;
    var click3;

    click = document.getElementById("song-1");
    click.ondblclick = load;

    click2 = document.getElementById("song-2");
    click2.ondblclick = load1;

    click3 = document.getElementById("song-3")
    click3.ondblclick = load2;

}

function load(){

    location = "Form_Menus.php";
}
function load1(){

    location = "Form_Activite.php";
}
function load2(){

    location = "Form_RDV.php";
}