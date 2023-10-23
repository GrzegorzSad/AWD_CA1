<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Welcome to the Music App</h1>
    <ul>
        <li><a href="{{ route('songs.index') }}">Songs</a></li>
        <li><a href="{{ route('albums.index') }}">Albums</a></li>
        <li><a href="{{ route('playlists.index') }}">Playlists</a></li>
    </ul>
</body>
</html>