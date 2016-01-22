@extends('app')

@section('content')  


<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Add Content</div>
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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/addcontent') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">ID</label>
							<div class="col-md-6">
								<input type="int" class="form-control" name="id" value="{{ old('id') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Subject_ID</label>
							<div class="col-md-6">
								<input type="int" class="form-control" name="subject_id" value="{{ old('subject_id') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Title</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="title" value="{{ old('title') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">body1</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="body1" value="{{ old('body1') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">body2</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="body2" value="{{ old('body2') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">body3</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="body3" value="{{ old('body3') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">body4</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="body4" value="{{ old('body4') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">comment</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="comment" value="{{ old('comment') }}">
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