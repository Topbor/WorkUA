<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
        <link rel="stylesheet" href="1.css">
        <link rel="stylesheet" href="2.css">
        <style>
        footer{
            margin-top:190px;
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
                <div class="title m-b-md">
                Register a new account
                </div>
                <div class="title2 m-b-md all">
                  This user name already exist
                </div>
                <div class="links">
                    <a href="{{route('register')}}">Try again</a>
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
<script src="https://kit.fontawesome.com/ff9949bf91.js" crossorigin="anonymous"></script>
    </body>
</html>
