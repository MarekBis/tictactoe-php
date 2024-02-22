<section>
    <div class="linearGradient">
        <div class="playContainer">
            <div class="box">
                <div class="container" id="score">
                    <h3>Score: </h3>
                    <hr>
                    <h4>Games: </h4>
                    <p><?php echo $player1Name?>: </p>
                    <p><?php echo $player2Name?>: </p>
                </div>
            </div>
            <div class="box">
                <div class="container" id="play-field">
                    <table>
                        <tr>
                            <td id="pole1"><a href="#"><i class="fa-solid fa-o"></i></a></td>
                            <td id="pole2"><a href="#"></a></td>
                            <td id="pole3" style="border-right:none"></td>
                        </tr>
                        <tr>
                            <td id="pole4"></td>
                            <td id="pole5"><i class="fa-solid fa-o"></i></td>
                            <td id="pole6" style="border-right:none"></td>
                        </tr>
                        <tr>
                            <td id="pole7"style="border-bottom:none;"></td>
                            <td id="pole8" style="border-bottom:none;"></td>
                            <td id="pole9" style="border-right:none;border-bottom:none"><i class="fa-solid fa-o"></i></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="box">
                <div class="container" id="player-turn">
                    <h3><?php echo $player1Name?>'s Turn</h3>
                    <hr>
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>

            
        </div>
    </div>
</section>