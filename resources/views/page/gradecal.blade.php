@extends('app')

@section('content')  


<div class="container-fluid">

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Grade Calculator</div>

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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/gradecal') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

					

						<div class="form-group">
							<label class="col-md-4 control-label">AVG Gpa</label>
							<div class="col-md-6">
								<input type="int" class="form-control" name="avggpa" value="{{ old('avggpa') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">CGX</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="cgx" value="{{ old('cgx') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">this term gpa</label>
							<div class="col-md-6">
								<input type="int" class="form-control" name="thisgpa" value="{{ old('thisgpa') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">this term weight</label>
							<div class="col-md-6">
								<input type="int" class="form-control" name="weight" value="{{ old('weight') }}">
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