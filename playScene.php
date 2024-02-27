<section>
    <div class="linearGradient">
        <div class="playContainer">
            <div class="box">
                <div class="container" id="score">
                    <h3>Score: </h3>
                    <hr>
                    <h4>Games: </h4>
                    <p>P1:<?php echo $_SESSION["hrac1"]?> </p>
                    <p>P2:<?php echo $_SESSION["hrac2"]?> </p>
                </div>
            </div>
            <div class="box">
                <div class="container" id="play-field">
                    <table>
                        <?php
                        for ($col = 1; $col < 4; $col++) {
                            echo "<tr>";
                            for ($row = 1; $row < 4; $row++) {
                                echo "<td><a href=?row$row-col$col>";
                                if (sudeKolo($pocetKol)) {
                                    if (array_key_exists("row$row-col$col", $_GET)) {
                                        echo $_SESSION["row$row-col$col"] = $znak1;
                                    } else {
                                        echo $_SESSION["row$row-col$col"];
                                    }
                                } else {
                                    if (array_key_exists("row$row-col$col", $_GET)) {
                                        echo $_SESSION["row$row-col$col"] = $znak2;
                                    } else {
                                        echo $_SESSION["row$row-col$col"];
                                    }
                                }
                                echo "</a></td>";
                            }
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
            <div class="box">
                <div class="container" id="player-turn">
                    <h3><?php
                        if (sudeKolo($pocetKol)) {
                            echo $_SESSION["hrac1"];
                        }else{
                            echo $_SESSION["hrac2"];
                        }
                    ?>Turn</h3>
                    
                    <hr>
                    <?php
                    if (sudeKolo($pocetKol)) {
                        echo $znak2;
                    }else{
                        echo $znak1;
                    }
                    
                    ?>
                </div>
            </div>


        </div>
    </div>
</section>