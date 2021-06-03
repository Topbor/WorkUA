<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
	<link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
</head>
<body>
	
	<header>
		<div class="container">
		<ul class="nav v justify-content-center">
  <li class="nav-item pt-3 pb-3 p-2">
    <a class="nav-link" href="{{route('home')}}">HOME</a>
  </li>
  <li class="nav-item pt-3 pb-3 p-2">
    <a class="nav-link" href="{{route('get')}}">GET STARTED</a>
  </li>
</ul>

</div>
	</header>

<div id="section1">
	<div class="container d-flex justify-content-between rov p-5">
		<div class="article col-sm-11 col-lg-7 col-md-7 col-xl-7">
			<h1 >OUR STRONG ORGANIZATION</h1>
			<p class="mt-3 mb-3" style="color:grey">Solazyme’s microalgae oils are produced in a matter of days using a fermentation process designed to produce oils of the highest purity, performance and sustainability.<i class="fas fa-times fff"></i>	</p>
		</div>
		<div class="video col-sm-8 col-lg-5 col-md-5 col-xl-5">
			
			<video  controls="controls" poster="res/1.png">
			   <source src="res/videoplayback.mp4" type='video/ogg; codecs="theora, vorbis"'>
			   <source src="res/videoplayback.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
			   <source src="res/videoplayback.mp4" type='video/webm; codecs="vp8, vorbis"'>
			   Тег video не поддерживается вашим браузером. 

  			</video>
		</div>
	</div>
</div>
<div id="section2">
		<div class="container d-flex justify-content-between rov p-5">
			<div class="col-sm-11 col-11 col-lg-6 col-md-6 col-xl-6 art2">
				<h1 >DO YOU KNOW WE CAN PROVIDE TO YOU?</h1>
				<p class="mt-3 mb-3" style="color:grey">Solazyme’s microalgae oils are produced in a matter of days using a fermentation process designed to produce oils of the highest purity, performance and sustainability.	</p>
			</div>
			<div class="col-sm-11 col-11 col-lg-6 col-md-6 col-xl-6">
				<div class="row">
					<div class="col-lg-6 col-xl-6 col-md-11  col-sm-11 col-11 p">
						<i style="color:#ff3f40; font-size: 36px;" class="fas fa-cog pb-2"></i>
						<h4>Managemant</h4>
						<p>Solazyme’s microalgae oils are produced in a matter of days using a fermentation process designed to produce oils of the highest purity.</p>

					</div>
					<div class=" col-lg-6 col-xl-6 col-md-11 col-sm-11 col-11 p">
						<i style="color:#ff3f40; font-size: 36px;" class="fas fa-pencil-alt pb-2"></i>
						<h4>UI / UX Design</h4>
						<p>Solazyme’s microalgae oils are produced in a matter of days using a fermentation process designed to produce oils of the highest purity.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-xl-6 col-md-11 col-sm-11 col-11 p">
						<i style="color:#ff3f40; font-size: 36px;" class="far fa-gem pb-2"></i>
						<h4>Logo / Branding</h4>
						<p>Solazyme’s microalgae oils are produced in a matter of days using a fermentation process designed to produce oils of the highest purity.</p>
					</div>
					<div class=" col-lg-6 col-xl-6 col-md-11 col-sm-11 col-11 p">
						<i style="color:#ff3f40; font-size: 36px;" class="fas fa-car-side pb-2"></i>
						<h4>Animation</h4>
						<p>Solazyme’s microalgae oils are produced in a matter of days using a fermentation process designed to produce oils of the highest purity.</p>
					</div>
				</div>

			</div>	
			
		</div>
<hr>	
</div>
  <div id="arrowTop" hidden>
  	<i class="fas fa-arrow-circle-up"></i>
  </div>

<footer>
	<div class="container">
		<div class="foot">
			<p><small style="color:grey;">	&copy; Copyright @Janaed 2016, all rights reserved. </small></p>
			<p class="fds" style="display: flex;justify-content: space-around;">
					<a href=""><i class="fab fa-facebook"></i></a>
					<a href=""><i class="fab fa-twitter"></i></a>
					<a href=""><i class="fab fa-instagram"></i></a>
					<a href=""><i class="fab fa-google-plus"></i></a>
			</p>
		</div>
	</div>
</footer>
<script>

	function animo3(){
	setTimeout(function(){
			document.querySelector("#arrowTop").style.paddingTop="10px";
				setTimeout(function(){
						document.querySelector("#arrowTop").style.paddingTop="0px";	
						animo3();	
				}, 500);}, 500);}
	document.addEventListener("DOMContentLoaded",function(e){
		animo3();
});
</script>
  <script>
    arrowTop.onclick = function() {
      window.scrollTo(pageXOffset, 0);
    };
    window.addEventListener('scroll', function() {
      arrowTop.hidden = (pageYOffset < 72);
    });
  </script>



<script src="https://kit.fontawesome.com/ff9949bf91.js" crossorigin="anonymous"></script>
</body>

</html>