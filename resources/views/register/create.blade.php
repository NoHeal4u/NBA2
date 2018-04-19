<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>

	<form method="POST" action="/register">
	{{csrf_field()}}
		<div>
			<label for="name"> Name </label>
			<input id="name" type="text" name="name">
			@include('layouts.partials.error-message',['fieldTitle'=>'name']) 
		</div>

		<div>
			<label for="email"> Email </label>
			<input id="email" type="text" name="email">
			 @include('layouts.partials.error-message',['fieldTitle'=>'email']) 
		</div>
		
		<div>
			<label for="password"> Password </label>
			<input id="password" type="password" name="password">
			@include('layouts.partials.error-message',['fieldTitle'=>'password']) 
		</div>

		<div>
			<label for="password_confirmation"> Password Confirmation </label>
			<input id="password_confirmation" type="password" name="password_confirmation">
			@include('layouts.partials.error-message',['fieldTitle'=>'password_confirmation']) 
		</div>

		<div>
			<button type="submit">Submit</button>
			
		</div>
	</form>

</body>
</html>