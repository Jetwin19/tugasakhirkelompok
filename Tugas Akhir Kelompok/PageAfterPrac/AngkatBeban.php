<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title>Olahraga</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="CSS/Style.CSS">
</head>

<body>
	<div class="containerbody">
		
	
	<div class="thebody">
		<div class="container">
  <div class="progress" id="progress"></div>
  <audio id="audio" src="Music/lagu.mp3"></audio>
  <h1>Start A Practice</h1>
  <button class="togglePlay" onClick="togglePlay()"></button>

</div>
<div class="Videoae">
<video width="500" height="300" controls>
  <source src="Video/AngkatBeban.mp4" type="video/mp4">
  
  Your browser does not support the video tag.
</video>
</div>
</div>


	
	</div>

<script>
var timer;
var percent = 0;
var audio = document.getElementById("audio");
audio.addEventListener("playing", function(_event) {
  var duration = _event.target.duration;
  advance(duration, audio);
});
audio.addEventListener("pause", function(_event) {
  clearTimeout(timer);
});
var advance = function(duration, element) {
  var progress = document.getElementById("progress");
  increment = 10/duration
  percent = Math.min(increment * element.currentTime * 10, 100);
  progress.style.width = percent+'%'
  startTimer(duration, element);
}
var startTimer = function(duration, element){ 
  if(percent < 100) {
    timer = setTimeout(function (){advance(duration, element)}, 100);
  }
}

function togglePlay (e) {
  e = e || window.event;
  var btn = e.target;
  if (!audio.paused) {
    btn.classList.remove('active');
    audio.pause();
    isPlaying = false;
  } else {
    btn.classList.add('active');
    audio.play();
    isPlaying = true;
  }
}

</script>
</body>
</html>