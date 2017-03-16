document.getElementById("hiddenSoundPlayer").onclick = function() {
    var audio = document.getElementById("audio");
    audio.volume = 0.4;
    if(audio.duration < 0 || audio.paused) {
        audio.play();
    }
};