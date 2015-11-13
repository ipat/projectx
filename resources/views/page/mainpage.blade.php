<html>
	<head>
		<title>CU Comunity</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	
	<body style="background-image:url({{ URL::asset('images/nnn.jpg') }})">
		
		<script>alert('welcome to CUcomunity');</script>
		<div class="container">
			
			<div class="content">
				<div class="title">CUcomunity</div>
				<div class="body">you need to log in first</div>
				<li><a href="{{ url('home') }}">Home</a></li>
				<li><a href="{{ url('map') }}">Map</a></li>
				<li><a href="{{ url('/auth/login') }}">Login</a></li>
				<li><a href="{{ url('/auth/register') }}">Register</a></li>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div>
	</body>
</html>
