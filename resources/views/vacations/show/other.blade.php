<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="../../1.css">
    <link rel="stylesheet" href="../../2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
    <style>
        .content{
    min-height: 80vh;
    padding:40px;
}
.title3{
    font-size:30px;
    margin-bottom:70px;
    margin-top:50px;
}
.content{
    padding-right:140px;
    padding-left:140px;
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
                <div class="title3 m-b-md all">
                   Tasks with others languages
                </div>
                <div class="cards">

                
                      @forelse ($items as $item)
                      <div class="card col-lg-11 col-sm-11 col-md-11 col-xl-11">
                        <div class="card-body">
                            <h4 class="card-title"><a href="{{route('show.vacshow',['id' => $item->id])}}">{{ $item->title }}</a></h4>
                            <h6 class="card-subtitle mb-2 text-muted l">{{ $item->company }}</h6>
                            <p class="card-text l">
                            {{ $item->description }}
                            </p>
                            <div class="d-flex">
                            <p class="type l">
                            Language: {{ $item->type}}
                            </p>
                            <p class="price l">
                            Price: {{ $item->price}}$
                            </p></div>

                        </div>
                        </div>
                         
                        @empty
                            <p>There are no tasks for this languages </p>
                        @endforelse
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
    </body>
</html>
