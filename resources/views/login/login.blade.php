@extends('adminpanel')

@section('content')
	
	<div class="row">

		<form autocomplete="off" action="{{ route('api.user.authenticate') }}" method="post" >
	  		<div class="form-group">
	    		<label for="email">Email address:</label>
	    		<input type="email" name="email" class="form-control" id="email">
	  		</div>
	  		<div class="form-group">
	    		<label for="pwd">Password:</label>
	    		<input type="password" name="password" class="form-control" id="pwd">
	  		</div>
	  		<div class="checkbox">
	    		<label><input type="checkbox"> Remember me</label>
	  		</div>
	  		<button type="submit" class="btn btn-default">Submit</button>
		</form>



	</div>	

@stop