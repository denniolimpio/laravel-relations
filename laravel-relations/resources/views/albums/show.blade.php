@extends('layouts.app')

@section('content')
  <main>

    <h5 class="card-title"> Album Title: {{$album->title}}</h5>

    <ul>
      <li>
        Record: {{$album->record}}
      </li>
      <li>
        Year {{$album->year}}
      </li>
    </ul>

    <a href="{{route('albums.index','album')}}"> Back</a>


    <h5> Track list</h5>

    <ul>
      @foreach ($album->songs as $song)

        <ul class="list-group">
          <li class="list-group-item">{{ $song->title }}</li>
        </ul>
      @endforeach
    </ul>

  </main>

@endsection
