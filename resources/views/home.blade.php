@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					You are logged in!
					<ul>
						<li><a href="{{ url('detail/1') }}">physic</a></li>

					</ul>	
				</div>

			</div>


				<div class="panel panel-default">
						<div class="panel-heading">Interesting</div>

							<div class="panel-body">
							<div class="quote">{{ Inspiring::quote() }}</div>
							<ul>
							<li><a href="{{ url('detail/1') }}">physic</a></li>

							</ul>	
						</div>

				</div>





			
		</div>
	</div>
</div>
@endsection
