<div>
    <h1>Games List</h1>
    <ul>
        @foreach($games as $game)
            <li style="margin-bottom: 10px; color: rgb(36, 18, 101)">
                <b><i>ID: {{ $game['id'] }}</i></b><br>
                <b>{{ $game['title'] }}</b><br>
                <i>{{ $game['developer'] }}</i>
            </li>
        @endforeach
    </ul>
</div>
