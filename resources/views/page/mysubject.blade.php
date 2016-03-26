@extends('app')

@section('content')  

<div class="container-fluid">
	
<div class="row-fluid">

<div class="col-md-10 col-md-offset-1">

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">My Subject</div>

  <!-- Table -->
  <div class="panel-body">
    <p>...</p>
  </div>
  <table class="table" Style="color:white;">
		<?php 
		if(isset($gendata)){
			echo "<tr>
					<td><b>Subject ID</b></td>
					<td><b>Subject Name</b></td>
					<td><b>Year&Semester</b></td> 
					<td><b>Link</b></td>
					<td><b>Edit</b></td>
					<td><b>Delete</b></td>
				  </tr>";
			
			foreach ($gendata as $xxx) {
				echo "<tr>
						<td>" . $xxx->subject_id . "</td>
						<td>" . $xxx->name . "</td>
						<td>" . $xxx->parent . "</td>
						<td><a href='http://localhost:8888/projectxx/public/detail/" . $xxx->link . "'> " . $xxx->link . " </a></td>
						<td><a href='http://localhost:8888/projectxx/public/edit/" . $xxx->link . "'> edit </a></td>
						<td><a href='http://localhost:8888/projectxx/public/delete/" . $xxx->link . "' class=\"btn btn-danger deleteLink\"  role=\"button\">delete</a></p></td>
				  	  </tr>";
			}
		}
		 ?>
	</table>
</div>
</div>
</div>
</div>	<!-- <br><br><br><br> -->
	<footer class="panel-footer" style="background-color: rgba(0,0,0,0.6);">
      <p>© Nobpo Payomrat buit from<a href="http://getbootstrap.com">Bootstrap</a> <a href="https://">Larravel</a> and <a href="https://">D3</a></p>
      
    </footer>

<script type="text/javascript">
	$(".deleteLink").click(function(){
		return confirm('Are you sure?');
	});
</script>

@endsection

