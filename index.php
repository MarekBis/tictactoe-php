<?php
$idStranky = "startScene";

if (array_key_exists("players-submit", $_POST)) {
    $player1Name = $_POST["player1-name"];
    $player2Name = $_POST["player2-name"];
    $idStranky = "playScene";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="./faviconGame.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicTacToe Game</title>
</head>

<body>
    <header>
        <h1>tic tac toe</h1>
        <h2>select players</h2>
    </header>
    <?php require "./$idStranky.php" ?>
    <footer>
        <strong>
            <p>&copy;2024 Marek Bis</p>
        </strong>
    </footer>
</body>

</html>