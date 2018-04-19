<!DOCTYPE html>
<html>
<head>
	<title>Timovi</title>
</head>
<body>
	 @if($message = session('message'))
    <div> {{$message}} </div>
    @endif

    @if(Auth()->check())
        <div> {{Auth()->user()->name}} </div>
        <a href="/logout">Logout</a>
        @else
          <a href="/login">Login</a>
          <a href="/register">Register</a>
    @endif

<p>Timovi:</p><br>
<ul>
	@foreach ($teams as $team)

	<li><a href="{{route('single-team',['id'=> $team->id])}}">{{$team->name}}</a></li>

	@endforeach
</ul>

</body>
</html>

