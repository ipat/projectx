@extends('app')

@section('content')  


<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Add Subject</div>

				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/addsubject') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Year & Semester</label>
							<div class="col-md-6">
								<select name="parent" id="parent">
									<option value="year1semester1" selected>year1semester1</option>
									<option value="year1semester2">year1semester2</option>
									<option value="year2semester1">year2semester1</option>
									<option value="year2semester2">year2semester2</option>
									<option value="year3semester1">year3semester1</option>
									<option value="year3semester2">year3semester2</option>
									<option value="year4semester1">year4semester1</option>
									<option value="year4semester2">year4semester2</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Subject ID</label>
							<div class="col-md-6">
								<input type="int" class="form-control" name="subject_id" value="{{ old('subject_id') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Subject Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						

						
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									

								submit


								</button>
							</div>
						</div>
					</form>		           
				</div>
			</div>
		</div>
	</div>
</div>








@endsection