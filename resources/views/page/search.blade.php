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
		if(isset($newdata)){
			echo "<tr>
					<td><b>Subject ID</b></td>
					<td><b>ID</b></td>
					<td><b>Link</b></td> 
					
				  </tr>";
			
			foreach ($newdata as $newdata) {
				echo "<tr>
						<td>" . $newdata->subject_id . "</td>
						<td>" . $newdata->title . "</td>
						<td><a href='http://localhost:8888/projectxx/public/detail/" . $xxx->link . "' class=\"btn btn-primary\"  role=\"button\">view</a></p></td>
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

@endsection

