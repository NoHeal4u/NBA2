<!DOCTYPE html>
<html>
<head>
	<title>{{ $player->first_name }}</title>
</head>
<body>
<p>IME IGRACA: {{ $player->first_name }}</p>
<p>PREZIME IGRACA: {{ $player->last_name }}</p>
<p>EMAIL ADRESA: {{ $player->email }}</p>
<p>Tim:<a href="{{route('single-team',['id'=> $player->team->id])}}"> {{$player->team->name}}</a></p>

</body>
</html>
