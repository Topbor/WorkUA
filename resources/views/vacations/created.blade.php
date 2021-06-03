<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="../1.css">
    <link rel="stylesheet" href="../2.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <style>
        .content{
    min-height: 80vh;
    padding:100px;
}
.title3{
    font-size:30px;
    margin-bottom:100px;
    margin-top:50px;
}
.j{
    font-size:20px!important;
}
    </style>
</head>
<body>
	
	<header>
		<div class="container">
		<ul class="nav v justify-content-center">
  <li class="nav-item pt-3 pb-3 p-2">
    <a class="nav-link" href="{{route('home')}}">HOME</a>
  </li>

</ul>

</div>
	</header>

    <div class="content">
                <div class="title3">
                   Choose the lenguage of programing to see vacations
                </div>
                <div class="links ">
                    <a class="j" href="{{route('show.all')}}">All</a>
                    <a class="j" href="{{route('show.typejs')}}">JS Type</a>
                    <a class="j" href="{{route('show.typec')}}">C Type</a>
                    <a class="j" href="{{route('show.typephp')}}">PHP Type</a>
                    <a class="j" href="{{route('show.typeother')}}">Others</a>
                </div>
                 
            </div>
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