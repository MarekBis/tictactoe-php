<?php
session_start();

function sudeKolo($argPocetKol){
    if ($argPocetKol % 2 == 0 || $argPocetKol == 0){
        return true;
    }else{
        return false;
    }

}


$znak1 = "<i class='fa-solid fa-o'></i>";
$znak2 = "<i class='fa-solid fa-x'></i>";

if (array_key_exists("players-submit",$_POST)){
    $hrac1 = $_POST["player1-name"];
    $hrac2 = $_POST["player2-name"];
    $_SESSION["hrac1"] = $hrac1;
    $_SESSION["hrac2"] = $hrac2;
    $_SESSION["row1-col1"] = "";
    $_SESSION["row1-col2"] = "";
    $_SESSION["row1-col3"] = "";

    $_SESSION["row2-col1"] = "";
    $_SESSION["row2-col2"] = "";
    $_SESSION["row2-col3"] = "";
    
    $_SESSION["row3-col1"] = "";
    $_SESSION["row3-col2"] = "";
    $_SESSION["row3-col3"] = "";

}
if (!array_key_exists("PHPSESSID",$_COOKIE)){
    $idStranky = "startScene";
}

if (array_key_exists("pocetKol", $_SESSION)) {
    //existuje
    $_SESSION["pocetKol"]++;
    $pocetKol = $_SESSION["pocetKol"];
    $idStranky = "playScene";
} else {
    //sess neexistuje
    $_SESSION["pocetKol"] = -1;
    $pocetKol = $_SESSION["pocetKol"];
}

