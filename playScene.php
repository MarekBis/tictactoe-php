<section>
    <div class="linearGradient">
        <div class="playContainer">
            <div class="box">
                <div class="container" id="score">
                    <h3>Players</h3>
                    <hr>
                    <p><?php echo $_SESSION["hrac1"] ?> </p>
                    <p><?php echo $_SESSION["hrac2"] ?> </p>
                </div>
            </div>
            <div class="box">
                <div class="container" id="play-field">
                    <?php
                    if ($rowWin || $colWin || $sikmoWin){
                        echo "<div class='unclickable'>";
                    }
                    ?>
                    <table>
                        <?php
                        for ($row = 1; $row < 4; $row++) {
                            echo "<tr>";
                            for ($col = 1; $col < 4; $col++) {
                                echo "<td>";
                                if ($_SESSION["row$row-col$col"] == ($znak1 || $znak2)){
                                    echo "<div class='unclickable'>";
                                }
                                echo "<a href=?row$row-col$col>";
                                echo $_SESSION["row$row-col$col"];
                                echo "</a>";
                                if ($_SESSION["row$row-col$col"] == ($znak1 || $znak2)){
                                    echo "</div>";
                                }
                                echo "</td>";
                            }
                            echo "</tr>";
                        }

                        ?>

                    </table>
                    <?php
                    if ($rowWin || $colWin || $sikmoWin){
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
            <div class="box">
                <div class="container" id="player-turn">
                    <?php
                    if ($rowWin || $colWin || $sikmoWin){
                        echo "<h3>Game Over</h3>";
                        echo "<h4>";
                        echo vyber($pocetKol,$_SESSION["hrac2"],$_SESSION["hrac1"]);
                        echo " Wins</h4>";
                        echo "<a href='?restart'><button class='button-30'>Restartovat</button></a>";
                    }else if($pocetKol >8){
                        echo "<h4>Remiza</h4>";
                        echo "<a href='?restart'><button class='button-30'>Restartovat</button></a>";
                    }else{
                        echo "<h3>";
                        echo vyber($pocetKol, $_SESSION["hrac1"], $_SESSION["hrac2"]);
                        echo "'s Turn</h3>";
                        echo vyber($pocetKol, $znak2, $znak1);
                    }
                    ?>
                    
                </div>
            </div>


        </div>
    </div>
</section>