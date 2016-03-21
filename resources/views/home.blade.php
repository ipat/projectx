@extends('app')

@section('content')




<div class="container-fluid">
	
	<div class="row-fluid">
		
		<div class="col-md-10 col-md-offset-1">

			<div class="row">
        		<div class="col-sm-8" style="">	
        			<div class="jumbotron" style="background-color: rgba(0,0,0,0.6);" > <!-- all ready transpartent -->
        				<ul class="nav nav-pills" role="tablist">
						  <li role="presentation" class="active"><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Your status <span class="badge">42</span></a></li>
						  <li role="presentation"><a href="{{ url('/mysubject') }}">Subject <span class="badge"><?php 
						$student_id=Auth::user()->student_id;
						$x = DB::table('gendata')->where('student_id', $student_id)->where('depth','=',2)->count();
						echo $x;
						?></span></a></li>
						  <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
						</ul>
  						<h3></h3>
  						
						<div class="progress">

						  <div class="progress-bar  progress-bar-striped" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" 	 
						  				<?php 
						  				$A = DB::table('gendata')->where('student_id', Auth::user()->student_id)->count(); 
										$A = 100-((50-$A)/0.5);
										echo "style=\"min-width: 2em; width:".$A."%;\"";
										?>% > curret progress <?php echo $A?>%
						   				
						  </div>
						</div>
						

  						<p>Student ID : <?php echo Auth::user()->student_id; ?></p>
						<p>Name : <?php echo Auth::user()->name_first; ?>   <?php echo Auth::user()->name_last; ?></p>
						<p>Faculty : <?php echo Auth::user()->faculty; ?> Major : <?php echo Auth::user()->major; ?></p>
						<p>Membersince : <?php echo Auth::user()->created_at; ?></p>
  						
  									
									<!-- Single button -->
										<div class="btn-group">
										  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> More <span class="caret"></span>
										  </button>
										  <ul class="dropdown-menu">
										    <li><a href="#">Edit Data</a></li>
										    <li><a href="#">Edit Subject</a></li>
										    <li><a href="#">Delete Account</a></li>
										    <li role="separator" class="divider"></li>
										    <li><a href="#">Separated link</a></li>
										  </ul>
										</div>

										<div class="btn-group dropup">
										  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> More </button>
										  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										    <span class="caret"></span>
										    <span class="sr-only">Toggle Dropdown</span>
										  </button>
										  <ul class="dropdown-menu">
										    <li><a href="#">Edit Data</a></li>
										    <li><a href="#">Edit Subject</a></li>
										    <li><a href="#">Delete Account</a></li>
										    <li role="separator" class="divider"></li>
										    <li><a href="#">Separated link</a></li>
										  </ul>
										</div>
									 
									
						</div>

        				

				</div>

    			<div class="col-md-4" style="">
    				<div class="panel panel-default">
						<div class="panel-heading">Navigation</div>
							<div class="panel-body">
					
							<!-- <ul> -->

							<!-- <li><a href="{{ url('detail/1') }}">physic</a></li> -->

							<!-- search broken -->
							<form method="POST">
							<div class="input-group">
				      		<span class="input-group-btn">
				       		<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Go!</button>
				      		</span>
				      		<input type="text" class="form-control" name="data" value="{{ old('data') }}"  placeholder="Search for...">
				    	</div>
				    </form>
					<!-- </ul> -->	
						


						<br>

						<p>hello world</p>
						<p><a href="#" class="btn btn-primary" role="button">Add subject</a></p>
						<p><a href="#" class="btn btn-primary" role="button">Add subject manual</a></p>
						<p><a href="#" class="btn btn-primary" role="button">Grade calculation</a></p>
						<a href="#" class="btn btn-primary" role="button">Grade prediction</a>
					</div>

				</div>

    			  <div class="col-md-10 col-md-offset-1">
				    
				  </div>

    	</div>

  </div>

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



				
				 


				
			
		</div>
	</div>
</div>
<footer class="panel-footer" style="background-color: rgba(0,0,0,0.6);">
      <p>© Nobpo Payomrat buit from<a href="http://getbootstrap.com">Bootstrap</a> <a href="https://">Larravel</a> and <a href="https://">D3</a></p>
      
    </footer>
@endsection
