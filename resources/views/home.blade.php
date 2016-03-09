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



				<div class="row">
				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <img src="http://localhost:8888/ProjectXX/public/images/nnnn.jpg"  alt="...">
				      <div class="caption">
				        <h3>Best Gen-ed Suggestion for nisit</h3>
				        <p>lists of best gen-ed forever in chulalongkorn university base on population of nisit who entered course</p>
				        <p><a href="#" class="btn btn-primary" role="button">see more</a> <a href="#" class="btn btn-default" role="button">send this</a></p>
				      </div>
				    </div>
				  </div>


				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <img src="http://localhost:8888/ProjectXX/public/images/map.png"  alt="...">
				      <div class="caption">
				        <h3>Best place in Chulalongkorn University</h3>
				        <p>not only include 24 hour library near chulalongkorn University also have great resturant and chill place</p>
				        <p><a href="#" class="btn btn-primary" role="button">see more</a> <a href="#" class="btn btn-default" role="button">send this</a></p>
				      </div>
				    </div>
				  </div>


				  <div class="col-sm-6 col-md-4">
				    <div class="thumbnail">
				      <img src="http://localhost:8888/ProjectXX/public/images/222.jpg" alt="...">
				      <div class="caption">
				        <h3>Special technic to increase your gpa</h3>
				        <p>There are a lot of technic that can help you increase your gpa as high as possible</p>
				        <p><a href="#" class="btn btn-primary" role="button">see more</a> <a href="#" class="btn btn-default" role="button">send this</a></p>
				      </div>
				    </div>
				  </div>
				</div>



				
				  <div class="col-lg-6">
				    <div class="input-group">
				      <span class="input-group-btn">
				        <button class="btn btn-default" type="button">Go!</button>
				      </span>
				      <input type="text" class="form-control" placeholder="Search for...">
				    </div><!-- /input-group -->
				  </div><!-- /.col-lg-6 -->
				

				<!-- <div class="jumbotron">
				  <h1>Another Content</h1>
				  <p>hello</p>
				  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
				</div> -->
			
		</div>
	</div>
</div>

@endsection
