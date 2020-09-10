@extends('layouts.app')


@section('content')
  <main>
    <ul>
      @foreach ($albums as $album)

          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title"> Album Title: {{$album->title}}</h5>
              <p class="card-text">  <a href="{{route('albums.show', $album)}}"> Open</a></p>
            </div>
          </div>
      @endforeach
    </ul>
  </main>

  @endsection
