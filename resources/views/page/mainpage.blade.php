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

			#bg {
			  background-image: url('freelancer-desk.jpg');
			  background-position: center top;
			  background-size: 1080px auto;
			  padding: 70px 90px 120px 90px;
			}

			#search {
			  padding: 20px;
			  background: rgb(34,34,34); /* for IE */
			  background: rgba(34,34,34,0.75);
			}

			#search h2, #search h5, #search h5 a { text-align: center; color: #fefefe; font-weight: normal; }
			#search h2 { margin-bottom: 50px }
			#search h5 { margin-top: 70px }

			a:link {
			    color: red;
			}

			/* visited link */
			a:visited {
			    color: green;
			}

			/* mouse over link */
			a:hover {
			    color: hotpink;
			}

			/* selected link */
			a:active {
			    color: blue;
			}
			a {font-size: 51px}


		</style>
	</head>
	
	<body style="background-image:url({{ URL::asset('images/nnn.jpg') }}); background-size:     cover;                      /* <------ */
    background-repeat:   no-repeat;
    background-position: center center;" >
		
		<script>alert('welcome to CUcomunity');</script>
		<div class="container">
			<div id="bg">
  			<div id="search">
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
			</div>
		</div>
	</body>
</html>
