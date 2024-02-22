<?php
session_start();
$idStranky = "startScene";

if (array_key_exists("players-submit", $_POST)) {
    $player1Name = $_POST["player1-name"];
    $player2Name = $_POST["player2-name"];
    $idStranky = "playScene";
    $turn = 0;
    $activePlayer = $player1Name;
    $icon = "<i class='fa-solid fa-o'></i>";
}

if(array_key_exists("turn",$_GET)){
    if($turn % 2 == 0 || $turn == 0){
        //sude kolo
        $activePlayer = $player1Name;
        $icon = "<i class='fa-solid fa-o'></i>";
        $turn++;
    }else{
        //liche kolo
        $activePlayer = $player2Name;
        $icon = "<i class='fa-solid fa-xmark'></i>";
        $turn++;

    }
}
echo "POST: ";
var_dump($_POST);
echo "GET: ";
var_dump($_GET);
echo "SESSION: ";
var_dump($_SESSION);

