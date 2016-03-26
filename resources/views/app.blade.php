<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CU Comunity</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>



	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('entersite') }}"><span class="glyphicon glyphicon-subtitles" aria-hidden="true"></span> CUcomunity</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li><a href="{{ url('/fullfunctionmap') }}"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> fullfunctionmap</a></li>
						
						<li><a href="{{ url('/mapstick2') }}"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> my map</a></li>
						<li class="dropdown">

							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> another map <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/mapinbox') }}">mapinbox</a></li>
								<li><a href="{{ url('/map') }}">map</a></li>
								<li><a href="{{ url('/map2') }}">map2</a></li>
								<li><a href="{{ url('/mapstick') }}">mapstick</a></li>
								<li><a href="{{ url('/mapcircle') }}">mapcircle</a></li>
							</ul>
						</li>
						
						<li class="dropdown">

							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ Auth::user()->username }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">

								

							<?php
									if(Auth::user()->student_id==1111155555)
								echo "<li><a href=\"http://localhost:8888/projectxx/public/addcontent\">Add content</a></li>";
								echo "<li><a href=\"http://localhost:8888/projectxx/public/addprereg\">Add Prereg</a></li>";
							?>
							
								<li><a href="{{ url('/addsubject') }}">Add subject</a></li>
								<li><a href="{{ url('/addsubjectprereg') }}">Add subject prereg</a></li>
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@if( session('notify') ) <!-- notify session -->
	<div class="container">
		<div class="alert alert-success" role="alert">{{session('notify')}}</div>
	</div>
	@endif

	
	@if( session('error') ) 
	<div class="container">
		<div class="alert alert-danger" role="alert">{{session('error')}}</div>
	</div>
	@endif

	@if( session('missing') ) 
	<div class="container">
		<div class="alert alert-danger" role="alert">you need to enter {{session('missing')}} {{session('missing2')}} {{session('missing3')}} before</div>
	</div>
	@endif


	@yield('content')

</body>
<!-- <footer class="footer">
  <div class="container">
    <p class="text-muted">Copyright &copy; Computer Science, Chulalongkorn University 2015</p>
  </div>
</footer> -->

</html>
