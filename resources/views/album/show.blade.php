@extends('layouts.app')

@section('content')
<a href="{{ route('albums.index') }}">Back to Albums</a>
    <h1>Album Details</h1>

    <p>Name: {{ $album->name }}</p>
    <p>Artist: {{ $album->artist }}</p>
    <p>Description: {{ $album->description }}</p>
    <p>Release Date: {{ $album->release_date }}</p>

    <!-- You can add more album-specific properties here -->

    <h2>All Songs in the Album</h2>
    <ul>
        @foreach ($album->songs as $song)
            <li>{{ $song->name }}</li>
        @endforeach
    </ul>


</section>