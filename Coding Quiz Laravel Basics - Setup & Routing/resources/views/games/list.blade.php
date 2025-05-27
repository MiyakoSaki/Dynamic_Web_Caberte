<!DOCTYPE html>
<html>
<head>
    <title>Games List</title>
</head>
<body>
    <h1>Games List</h1>

    @if (!empty($games))
        <ul>
            @foreach($games as $game)
                <li>
                    <strong>Title:</strong> {{ $game['title'] }}<br>
                    <strong>Developer:</strong> {{ $game['developer'] }}<br>
                    <strong>Genre:</strong> {{ $game['genre'] ?? 'N/A' }}<br>
                    <strong>Price:</strong> ${{ number_format($game['price'] ?? 0, 2) }}<br>
                    <hr>
                </li>
            @endforeach
        </ul>
    @else
        <p>No games found.</p>
    @endif

</body>
</html>
