<?php include('header.php'); ?>
    <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
    <div class="wrap-page iwords-page">
        <div class="header-page clearfix">
            <p><span>Audio:</span> iWords</p>
        </div>
        <div class="box-content">
            <div class="bar-top clearfix">
                <div class="word">amonish</div>
                <div class="audio-iword">
                    <div class="prev">
                        <a href=""></a>
                    </div>
                    <audio id="song" ontimeupdate="updateTime()" onloadeddata="myOnLoadedData()">
                        <source src="audioFile.mp3" type="audio/mp3"/>
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
                        <span class="pause-icon"></span>
                        <span class="play-icon"></span>
                    </div>
                </div>
            </div>
            <div class="lesson-show">
                <div class="top-word clearfix">
                    <div class="text">
                        <div class="unit">Unit Passage Audio</div>
                        <div class="desc">I'll wait for the  Movie (Compare-and-Contrast Essay)</div>
                    </div>
                    <div class="down text-center">
                        <div class="lession">Unit 1</div>
                        <a href=""></a>
                    </div>
                </div>
                <div class="content-show clearfix">
                    <div class="scroll-iword">
                        <p>
                            <select>
                                <option value="">admonish</option>
                                <option value="">admonish</option>
                                <option value="">admonish</option>
                                <option value="">admonish</option>
                            </select>
                        </p>
                        <p>circumspect</p>
                        <p>deadlock</p>
                        <p>circumspect</p>
                        <p>deadlock</p>
                        <p>circumspect</p>
                        <p>deadlock</p>
                        <p>circumspect</p>
                        <p>deadlock</p>
                        <p>
                            <select>
                                <option value="">admonish</option>
                                <option value="">admonish</option>
                                <option value="">admonish</option>
                                <option value="">admonish</option>
                            </select>
                        </p>
                        <p>circumspect</p>
                        <p>deadlock</p>
                        <p>circumspect</p>
                        <p>deadlock</p>
                        <p>circumspect</p>
                        <p>deadlock</p>
                        <p>circumspect</p>
                        <p>deadlock</p>
                        <p>circumspect</p>
                        <p>
                            <select>
                                <option value="">admonish</option>
                                <option value="">admonish</option>
                                <option value="">admonish</option>
                                <option value="">admonish</option>
                            </select>
                        </p>
                        <p>deadlock</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.mCustomScrollbar.min.js"></script>
    <script src="assets/js/jquery.mousewheel.min.js"></script>
    <script>
        $('.scroll-iword').mCustomScrollbar();
//        (function(){
//            var w_if = $(window).width();
//            var h_if = $(window).height();
//            var hCt = h_if-396;
//            if(w_if < 768){
//                if(hCt > 100){
//                    $('.scroll-iword').height(hCt);
//                }else{
//                    $('.scroll-iword').height(100);
//                }
//            }
//
//        })()
    </script>
    <script src="assets/js/audio.js"></script>
<?php include('footer.php'); ?>