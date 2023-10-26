<!DOCTYPE html>
<html>
<head>
    <title>List of Songs</title>
</head>
<body>
    <a href="{{ route('dashboard') }}">Home</a>
    <h1>List of Songs</h1>
    <ul>
        @foreach ($songs as $song)
            <li>
                <a href="{{ route('songs.show', ['song' => $song]) }}">
                    {{ $song->name }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>