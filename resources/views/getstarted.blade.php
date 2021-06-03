<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="1.css">
    <link rel="stylesheet" href="3.css">
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
	<div class="container justify-content-between rov p-5 k">
        <div class="article">
            <h1>Please choose who you are</h1>
        </div>
    <div class="btns">
				<a href="{{route('login')}}" id="apple">
					<div>
                    <i class="fas fa-star-half-alt"></i>
					</div>
					<div class="nujno">
						<p>EMPLOYER</p>
					</div>
				</a>
				<a href="{{route('vacations.created')}}" id="play">
					<div>
                    <i class="fas fa-book-open"></i>
					</div>
					<div class="nujno">
						<p>EMPLOEE</p>
					</div>
				</a>
			</div>
	</div>
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