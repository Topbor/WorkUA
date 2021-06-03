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
            <div class="content">
                <div class="title m-b-md">
                   Add a new vacation
                </div>

            </div>
    <form class="form-signin" action="{{route('vacations.store')}}" method="POST">
    @csrf
        <input name="title" type="text" style="margin-bottom:30px;"  class="form-control" placeholder="Vacation title" >
        <input name="comp" type="text" style="margin-bottom:30px;"  class="form-control" placeholder="Company title" >
        <textarea class="form-control" style="margin-bottom:30px;" rows="8" name="disc" placeholder="Discription"></textarea>
        <select class="form-control" size="4" name="type">
          <option disabled>Choose type</option>
          <option selected value="PHP">PHP</option>
          <option value="Java Script">Java Script</option>
          <option value="C#">C#</option>
          <option value="C++">C++</option>
          <option value="React">React</option>
          <option value="Ruby">Ruby</option>
          <option value="Pyton">Pyton</option>
          <option value="Assembler">Assembler</option>
          <option value="Angular">Angular</option>
        </select>
        <input name="price" type="number" style="margin-bottom:30px;"  class="form-control"  placeholder="Price(in $)">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Add</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
    </form>
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
