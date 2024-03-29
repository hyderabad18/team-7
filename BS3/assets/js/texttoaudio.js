

function checkCompatibilty () {
    if(!('speechSynthesis' in window)){
        alert('Your browser is not supported. If google chrome, please upgrade!!');
    }
};

checkCompatibilty();

var voiceOptions = document.getElementById('voiceOptions');
var volumeSlider = document.getElementById('volumeSlider');
var rateSlider = document.getElementById('rateSlider');
var pitchSlider = document.getElementById('pitchSlider');
// var myText = document.getElementById('myText');

var voiceMap = [];

function loadVoices () {
    var voices = speechSynthesis.getVoices();
    for (var i = 0; i < voices.length; i++) {
        var voice = voices[i];
        var option = document.createElement('option');
        option.value = voice.name;
        option.innerHTML = voice.name;
        voiceOptions.appendChild(option);
        voiceMap[voice.name] = voice;
    };
};

window.speechSynthesis.onvoiceschanged = function(e){
    loadVoices();
};

function speak (x) {
    var msg = new SpeechSynthesisUtterance();
    msg.volume = volumeSlider.value;
    msg.voice = voiceMap[voiceOptions.value];
    msg.rate = rateSlider.value;
    msg.Pitch = pitchSlider.value;
    msg.text = document.getElementById(x).value;
    window.speechSynthesis.speak(msg);
};

