@extends('app')

@section('content')  


<div class="container-fluid">

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Add prereg</div>

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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/addprereg') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">subject_id</label>
							<div class="col-md-6">
								<input type="int" class="form-control" name="subject_id" value="{{ old('subject_id') }}">
							</div>
						</div>

						<div class="form-group" style="color:black;">
							<label class="col-md-4 control-label" style="color:white;">number</label>
							<div class="col-md-6">
								<select name="number" id="number">
									<option value="1" selected>1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">prereg1</label>
							<div class="col-md-6">
								<input type="int" class="form-control" name="prereg1" value="{{ old('prereg1') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">prereg2</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="prereg2" value="{{ old('prereg2') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">prereg3</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="prereg3" value="{{ old('prereg3') }}">
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