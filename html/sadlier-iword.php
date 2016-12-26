<?php include('header.php'); ?>
    <div class="wrap-page iwords-page">
        <div class="header-page clearfix">
            <img src="assets/images/icon/icon-sound-logo.jpg" alt="">
            <p><span>Audio:</span> iWords</p>
        </div>
        <div class="box-content">
            <div class="bar-top clearfix">
                <div class="word">amonish</div>
                <div class="audio-iword">
                    <div class="prev">
                        <a href="">
                            <img class="play-icon" src="assets/images/icon/prev.jpg" alt="">
                        </a>
                    </div>
                    <audio id="song" ontimeupdate="updateTime()" onloadeddata="myOnLoadedData()">
                        <source src="phiasaumotcogai.mp3" type="audio/mp3"/>
                        Your browser does not support the audio tag.
                    </audio>
                    <div class="time process-time">00:00</div>
                    <div id="songSlider" onclick="setSongPosition(this,event)">
                        <div class="line-song">
                            <div id="trackProgress"></div>
                        </div>
                    </div>
                    <div class="time total-time">00:00</div>
                    <div id="songPlayPause" class="playpause pause" onclick="playPause('song')">
                        <img class="pause-icon" src="assets/images/icon/pause.jpg" alt="">
                        <img class="play-icon" src="assets/images/icon/play.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/audio.js"></script>
<?php include('footer.php'); ?>