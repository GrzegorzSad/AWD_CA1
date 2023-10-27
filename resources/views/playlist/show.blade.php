<!DOCTYPE html>
<html>
<head>
    <title>Playlist Details</title>
</head>
<body>
    <a href="{{ route('playlists.index') }}">Back To All Playlists</a>
    <h1>Playlist Details</h1>

    <p>Title: {{ $playlist->title }}</p>
    <p>User: {{ $playlist->user }}</p>
    <p>Creation Date: {{ $playlist->creation_date }}</p>

    <h2>All Songs in the Playlist</h2>
    <ul>
        @foreach ($playlist->songs as $song)
            <li>{{ $song->name }}</li>
        @endforeach
    </ul>
</body>
</html>