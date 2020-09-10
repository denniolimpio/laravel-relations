@extends('layouts.app')


@section('content')
  <main>
    <ul>
      @foreach ($albums as $album)

          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://images-na.ssl-images-amazon.com/images/I/81lOFvmn6tL._AC_SL1500_.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"> Album Title: {{$album->title}}</h5>
              <p class="card-text">  <a href="{{route('albums.show', $album)}}"> Open</a></p>
            </div>
          </div>
      @endforeach
    </ul>
  </main>

  @endsection
