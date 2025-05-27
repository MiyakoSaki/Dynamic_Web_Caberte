<!DOCTYPE html>
<html>
<head>
    <title>Game Details</title>
</head>
<body>
    <h1>{{ $game['title'] }}</h1>
    <p><strong>Developer:</strong> {{ $game['developer'] }}</p>
    <p><strong>Genre:</strong> {{ $game['genre'] }}</p>
    <p><strong>Price:</strong> ${{ number_format($game['price'], 2) }}</p>

    <a href="{{ url('/games') }}">← Back to Game List</a>
</body>
</html>