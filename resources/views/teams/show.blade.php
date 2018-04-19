<!DOCTYPE html>
<html>
<head>
	<title>{{ $team->name }}</title>
</head>
<body>
<p>IME TIMA: {{ $team->name }}</p>
<p>EMAIL ADRESA: {{ $team->email }}</p>
<p>ADRESA: {{ $team->address }}</p>
<p>GRAD: {{ $team->city }}</p>

<p>IGRACI:</p>

@foreach($team->players as $player)
                <ol>
                  <a href="{{route('single-player',['id'=> $player->id])}}">{{ $player->first_name }} {{ $player->last_name }}</a>
                  
                </ol>
@endforeach

   @if(count($team_with_comments->comments))

            <hr/>
            <h4>Comments</h4>
            <ul>
              @foreach($team_with_comments->comments as $comment)
                <li>
                  <p>{{ $comment->content }}</p>
                </li>
              @endforeach
            </ul>
   @endif


   <form method="POST" action="{{route('comments-team',['post_id'=>$team->id])}}">
            {{csrf_field()}}
    <div>
      <label for="content"> Molimo vas unesite komentar </label>
      <input id="content" type="text" name="content">
      @include('layouts.partials.error-message',['fieldTitle'=>'content']) 
    </div>

    <div class="form-group">
      <button type="submit">Submit</button>
      
    </div>
  </form>

    



</body>
</html>

