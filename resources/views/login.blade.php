<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="1.css">
    <link rel="stylesheet" href="2.css">
    <link rel="stylesheet" href="3.css">
    <!-- Custom styles for this template -->
    <link href="{{config('app.url')}}/assets/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <header>
		<div class="container">
		<ul class="nav v justify-content-center">
  <li class="nav-item pt-3 pb-3 p-2">
    <a class="nav-link" href="{{route('home')}}">HOME</a>
  </li>
 
</ul>

</div>
	</header>

    <div class="content pt-5 pb-5">
                <div class="title m-b-md">
                   Log in
                </div>

            </div>
    <form class="form-signin" action="{{route('logination')}}" method="POST">
    @csrf
        <input name="login" type="text" style="margin-bottom:30px;"  class="form-control" placeholder="Username" >
        <input name="pass" type="password" style="margin-bottom:30px;"  class="form-control" placeholder="Password" >
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log IN</button>
        <p class="mt-5 mb-3 text-muted">If you don't have an account you can <a href="{{route('register')}}">Register in now</a> </p>
    </form>


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