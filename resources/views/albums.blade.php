<!DOCTYPE html>
<html>
<head>
    <title>List of Albums</title>
</head>
<body>
    <a href="{{ route('index') }}">Home</a>
    <h1>List of Albums</h1>
    <ul>
        @foreach ($albums as $album)
            <li>{{ $album->name }}</li>
        @endforeach
    </ul>
</body>
</html>