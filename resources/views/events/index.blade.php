<h2>Eventos</h2>
<hr>
<ul>
    @foreach($events as $e)
        <li><a href="{{route('event.show', $e->id)}}">{{$e->name}}</a></li>
    @endforeach
</ul>
