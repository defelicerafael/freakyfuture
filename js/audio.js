
var imgAudio = document.getElementById("img-audio");
imgAudio.style.cursor = "pointer";

var mp3 = new Audio("mp3/FreakyFuturesoundtrackbyBalam.mp3");
/*mp3.autoplay = true;
mp3.play();*/

function ToggleAudio() { 
    if(mp3.paused){
        imgAudio.src="img/header/volumen-off.png";
        mp3.play();
    }else{
        mp3.pause();
        imgAudio.src="img/header/volumen-on.png";
    }
} 
imgAudio.addEventListener("click", ToggleAudio);
