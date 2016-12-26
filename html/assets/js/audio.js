var activeSong;
activeSong = document.getElementById('song');

function myOnLoadedData() {
    $('.total-time').html(Math.floor(activeSong.duration / 60) + ":" + (Math.floor(activeSong.duration % 60) < 10 ? '0' : '') + Math.floor(activeSong.duration % 60));
}

function play(id){
    activeSong.play();
    var percentageOfVolume = activeSong.volume / 1;
    var percentageOfVolumeMeter = document.getElementById('volumeMeter').offsetWidth * percentageOfVolume;
    document.getElementById('volumeStatus').style.width = Math.round(percentageOfVolumeSlider) + "px";
}

function pause(){
    activeSong.pause();
}
function playPause(id){

    if (activeSong.paused){
        activeSong.play();
        $('#songPlayPause').removeClass('pause');
        $('#songPlayPause').addClass('play');
    }else{
        activeSong.pause();
        $('#songPlayPause').removeClass('play');
        $('#songPlayPause').addClass('pause');
    }
}

function updateTime(){
    var currentSeconds = (Math.floor(activeSong.currentTime % 60) < 10 ? '0' : '') + Math.floor(activeSong.currentTime % 60);
    var currentMinutes = Math.floor(activeSong.currentTime / 60);
    $('.process-time').html(currentMinutes + ":" + currentSeconds);
    $('.total-time').html(Math.floor(activeSong.duration / 60) + ":" + (Math.floor(activeSong.duration % 60) < 10 ? '0' : '') + Math.floor(activeSong.duration % 60));

    var percentageOfSong = (activeSong.currentTime/activeSong.duration);
    var percentageOfSlider = document.getElementById('songSlider').offsetWidth * percentageOfSong;

    document.getElementById('trackProgress').style.left = Math.round(percentageOfSlider) + "px";
}
function volumeUpdate(number){
    activeSong.volume = number / 100;
}

function changeVolume(number, direction){
    if(activeSong.volume >= 0 && direction == "down"){
        activeSong.volume = activeSong.volume - (number / 100);
    }
    if(activeSong.volume <= 1 && direction == "up"){
        activeSong.volume = activeSong.volume + (number / 100);
    }
    var percentageOfVolume = activeSong.volume / 1;
    var percentageOfVolumeSlider = document.getElementById('volumeMeter').offsetWidth * percentageOfVolume;
    document.getElementById('volumeStatus').style.width = Math.round(percentageOfVolumeSlider) + "px";
}
function setLocation(percentage){
    activeSong.currentTime = activeSong.duration * percentage;
}
function setSongPosition(obj,e){
    var songSliderWidth = obj.offsetWidth;
    var evtobj=window.event? event : e;
    // clickLocation =  evtobj.layerX - obj.offsetLeft;
    clickLocation =  evtobj.layerX;

    var percentage = (clickLocation/songSliderWidth);
    setLocation(percentage);
}
function setVolume(percentage){
    activeSong.volume =  percentage;

    var percentageOfVolume = activeSong.volume / 1;
    var percentageOfVolumeSlider = document.getElementById('volumeMeter').offsetWidth * percentageOfVolume;

    document.getElementById('volumeStatus').style.width = Math.round(percentageOfVolumeSlider) + "px";
}
function setNewVolume(obj,e){
    var volumeSliderWidth = obj.offsetWidth;
    var evtobj = window.event? event: e;
    clickLocation = evtobj.layerX - obj.offsetLeft;
    var percentage = (clickLocation/volumeSliderWidth);
    setVolume(percentage);
}
function stopSong(){
    activeSong.currentTime = 0;
    activeSong.pause();
}