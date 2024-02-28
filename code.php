<?php
session_start();
// nastaveni znaku
$znak1 = "<i class='fa-solid fa-x'></i>";
$znak2 = "<i class='fa-solid fa-o'></i>";
// nastaveni session promennych pri poslani POSTU na prvni strance
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
    $idStranky="playScene";

}
if (array_key_exists("pocetKol", $_SESSION)) {
    //existuje
    $_SESSION["pocetKol"]++;
    $pocetKol = $_SESSION["pocetKol"];
    $idStranky = "playScene";
} else {
    //sess neexistuje
    $idStranky = "startScene";
    $_SESSION["pocetKol"] = -1;
    $pocetKol = $_SESSION["pocetKol"];
}
// liche/sude kolo
function vyber($pocetKol,$arg1,$arg2){
    if ($pocetKol % 2 == 0 || $pocetKol == 0){
        return $arg1;
    }else{
        return $arg2;
    }
}
// zpracovani GET formulare a ulozeni hodnot do SESSION
if($idStranky == "playScene"){
    for ($col = 1; $col < 4; $col++) {
        for ($row = 1; $row < 4; $row++) {  
            if (array_key_exists("row$row-col$col", $_GET)) {
                $_SESSION["row$row-col$col"] = vyber($pocetKol,$znak1,$znak2);
                header("Location: ?");
                $_SESSION["pocetKol"]--;
            } else {
                $_SESSION["row$row-col$col"];
            }
        }
    }
}
    


// handle RESTARTU
if(array_key_exists("restart",$_GET)){
    session_destroy();
    setcookie("PHPSESSID", "", time()-1, "/");
    header("Location: ?");
    exit;
}

//GAME LOGIC
$rowWin=false;
$colWin=false;
$sikmoWin=false;
//ROW WIN
if($idStranky == "playScene"){
    if ($_SESSION["row1-col1"] == vyber($pocetKol,$znak1,$znak2) && $_SESSION["row1-col2"] == vyber($pocetKol,$znak1,$znak2) && $_SESSION["row1-col3"] == vyber($pocetKol,$znak1,$znak2)){
        $rowWin=true;
    }else if ($_SESSION["row2-col1"] == vyber($pocetKol,$znak1,$znak2) && $_SESSION["row2-col2"] == vyber($pocetKol,$znak1,$znak2) && $_SESSION["row2-col3"] == vyber($pocetKol,$znak1,$znak2)){
        $rowWin=true;
    }else if ($_SESSION["row3-col1"] == vyber($pocetKol,$znak1,$znak2) && $_SESSION["row3-col2"] == vyber($pocetKol,$znak1,$znak2) && $_SESSION["row3-col3"] == vyber($pocetKol,$znak1,$znak2)){
        $rowWin=true;
    }
    //COL WIN
    if ($_SESSION["row1-col1"] == vyber($pocetKol,$znak1,$znak2) && $_SESSION["row2-col1"] == vyber($pocetKol,$znak1,$znak2) && $_SESSION["row3-col1"] == vyber($pocetKol,$znak1,$znak2)){
        $colWin=true;
    }else if ($_SESSION["row1-col2"] == vyber($pocetKol,$znak1,$znak2) && $_SESSION["row2-col2"] == vyber($pocetKol,$znak1,$znak2) && $_SESSION["row3-col2"] == vyber($pocetKol,$znak1,$znak2)){
        $colWin=true;
    }else if ($_SESSION["row1-col3"] == vyber($pocetKol,$znak1,$znak2) && $_SESSION["row2-col3"] == vyber($pocetKol,$znak1,$znak2) && $_SESSION["row3-col3"] == vyber($pocetKol,$znak1,$znak2)){
        $colWin=true;
    }
    //sikmoWin
    if ($_SESSION["row1-col1"] == vyber($pocetKol,$znak1,$znak2) && $_SESSION["row2-col2"] == vyber($pocetKol,$znak1,$znak2) && $_SESSION["row3-col3"] == vyber($pocetKol,$znak1,$znak2)){
        $sikmoWin=true;
    }else if ($_SESSION["row1-col3"] == vyber($pocetKol,$znak1,$znak2) && $_SESSION["row2-col2"] == vyber($pocetKol,$znak1,$znak2) && $_SESSION["row3-col1"] == vyber($pocetKol,$znak1,$znak2)){
        $sikmoWin=true;
    }
}