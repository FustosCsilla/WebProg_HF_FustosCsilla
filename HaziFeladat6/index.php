<?php

session_start();

if (isset($_POST["elkuldott"])){
    if (isset($_SESSION["eredmeny"])){
        talalgatas($_POST["talalgatas"], $_SESSION["eredmeny"]);
    }
    else{
        $_SESSION["eredmeny"]= rand(1, 10);
        talalgatas($_POST["talalgatas"], $_SESSION["eredmeny"]);
    }
}

function talalgatas($szam, $eredmeny){
    if ($_POST["talalgatas"]>=1 && $_POST["talalgatas"]<=10){
        if ($szam>$eredmeny){
            echo "Kisebb, mint: " . $szam;
        }
        elseif ($szam<$eredmeny) {
            echo "Nagyobb, mint: " . $szam;
        }
        else {
            echo "Helyes a talalat! A szam: " . $eredmeny;
            unset($_SESSION["eredmeny"]);
        }
    }
    else {
        echo "A szam nem 1 es 10 kozott van. Probald ujra!";
    }
}

?>

<form method="post" action="">
    <input type="hidden" name="elkuldott" value="true">
    Melyik számra gondoltam 1 és 10 között?
    <input name="talalgatas" type="text">
    <br>
    <br>
    <input type="submit" value="Elküld">
</form>