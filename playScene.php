<section>
    <div class="linearGradient">
        <div class="playContainer">
            <div class="box">
                <div class="container" id="score">
                    <h3>Score: </h3>
                    <hr>
                    <h4>Games: </h4>
                    <p><?php echo $player1Name ?>: </p>
                    <p><?php echo $player2Name ?>: </p>
                </div>
            </div>
            <div class="box">
                <div class="container" id="play-field">
                    <table>
                        <tr>
                            <td id="pole1"><a href="?turn=pole1"></a></td>
                            <td id="pole2"><a href="?turn=pole2"></a></td>
                            <td id="pole3" style="border-right:none"><a href=""></a></td>
                        </tr>
                        <tr>
                            <td id="pole4"><a href="?"></a></td>
                            <td id="pole5"><a href=""></a></td>
                            <td id="pole6" style="border-right:none"><a href=""></a></td>
                        </tr>
                        <tr>
                            <td id="pole7" style="border-bottom:none;"><a href=""></a></td>
                            <td id="pole8" style="border-bottom:none;"><a href=""></a></td>
                            <td id="pole9" style="border-right:none;border-bottom:none"><a href=""></a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="box">
                <div class="container" id="player-turn">
                    <h3><?php echo $activePlayer ?>'s Turn</h3>
                    <hr>
                    <i class="fa-solid fa-xmark"></i>
                </div>
            </div>


        </div>
    </div>
</section>