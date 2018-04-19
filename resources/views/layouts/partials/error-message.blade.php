@if($errors->has($fieldTitle))
	<div class="alert alert-danger">
		@foreach($errors->get($fieldTitle) as $error)
			<div><p>{{$error}}</p></div>
		@endforeach
	</div>
@endif

	