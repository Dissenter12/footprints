@extends('..layouts/app')

@section('title')
	Footprints Diary
@endsection

@section('content')
	<div class="container-fluid mainfeed">
		<div class="panel panel-default">
		    <div class="panel-heading">
		    	<strong>Name</strong>
		    	<p>Places</p>
		    </div>
		    <div class="panel-body">
			    <strong>Image/s</strong>
			    <p>Post Content / Caption</p>
		    </div>
		    <div class="panel-footer">
			    <p><strong>User: </strong>Comment</p>
				</div>
	    </div>
	    <div class="panel panel-default">
		    <div class="panel-heading">
		    	<div class="container-fluid">
			    		<div style="display: flex;">
				    	<img src="https://cdn-images-1.medium.com/fit/c/120/120/0*qo15NtGasIEtwZIq." style="width:50px; border-radius: 100%; height: 50px;">
			    	
			    		<div>
				    	<strong>Maverick Punzalan</strong>
				    	
				    	
				    	<p>Quezon City, Philippines</p>
				    	</div>
				    	</div>
				    	
			    		
		    	</div>
		    </div>
		    <div class="panel-body">
			    <strong><img src="https://4.bp.blogspot.com/--wtygsYfTeo/WE5g9vCfdgI/AAAAAAAAK08/2n3HfTt4Q8w1NuBa10De4ORdgnqNF6EWQCEw/s640/IMG_3594.JPG" style="max-width:500px; width: 100%;"></strong>
			    <p>Hi Welcome to the ME! hahaha</p>
		    </div>
		    <div class="panel-footer">
			    <p><strong>Lara Croft: </strong>Wow Something new! hehehe</p>
			    <input type="text" name="comment" placeholder="Comment..." class="form-control form-control-footprint">
				</div>
	    </div>
	    <div class="panel panel-default">
		    <div class="panel-heading">
		    	<strong>Name</strong>
		    	<p>Places</p>
		    </div>
		    <div class="panel-body">
			    <strong>Image/s</strong>
			    <p>Post Content / Caption</p>
		    </div>
		    <div class="panel-footer">
			    <p><strong>User: </strong>Comment</p>
				</div>
	    </div>
</div>
@endsection