<!DOCTYPE html>
<html>
<head>
    <title>List of Playlists</title>
</head>
<body>
    <a href="{{ route('index') }}">Home</a>
    <h1>List of Playlists</h1>
    <ul>
        @foreach ($playlists as $playlist)
            <li>{{ $playlist->title }}</li>
        @endforeach
    </ul>
</body>
</html>