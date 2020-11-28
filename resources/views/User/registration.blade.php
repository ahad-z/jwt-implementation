@extends('User.index')
@section('content')
	@if (\Session::has('success'))
	    <div class="alert alert-success">
	        <ul>
	            <span>{!! \Session::get('success') !!}</span>
	        </ul>
	    </div>
   @endif
	<form method="post" action="{{ ('store') }}">
		@csrf
		<div class="form-group">
			<label for="name">Enter Your Name</label>
			<input type="text" class="form-control" id="name"  name="name" placeholder="Enter your name" value="{{ old('name') }}">
			@error('name')
			<small style="color: red" class="tex-center">{{ $message }}</small>
			@enderror 	
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="text" class="form-control" id="exampleInputEmail1" name="email" value="{{ old('email') }}">
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			@error('email')
			<small style="color: red" class="tex-center">{{ $message }}</small>
			@enderror
		</div> 
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" name="password" value="{{ old('password') }}">
			@error('password')
			<small style="color: red" class="tex-center">{{ $message }}</small>
			@enderror
		</div>	
		<div class="form-group">
			<label for="confirmPassword">Confirm password</label>
			<input type="password" class="form-control" id="confirmPassword" name="c_password">
			@error('password')
			<small style="color: red" class="tex-center">{{ $message }}</small>
			@enderror
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

@endsection

<script type="text/javascript">

</script>