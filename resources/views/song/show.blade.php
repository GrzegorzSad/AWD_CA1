<!DOCTYPE html>
@section('content')
    <a href="{{ route('songs.index') }}">Back to All Songs</a>
    <h1>Song Details</h1>

    <p>Name: {{ $song->name }}</p>
    <p>Category: {{ $song->category }}</p>
    <p>Artist: {{ $song->artist }}</p>

    <!-- Displaying the associated album -->
    @if ($song->album)
        <p>Album: {{ $song->album->name }}</p>
        <p>Album Release Date: {{ $song->album->release_date }}</p>
    @else
        <p>Album: N/A</p>
    @endif

    <!-- Displaying the playlists containing this song -->
    <h2>Playlists Containing This Song</h2>
    <ul>
        @forelse ($song->playlists as $playlist)
            <li>{{ $playlist->title }}</li>
        @empty
            <li>No playlists contain this song.</li>
        @endforelse
    </ul>

    
</section>
</html>