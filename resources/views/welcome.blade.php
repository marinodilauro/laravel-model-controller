@extends('layouts.app')


@section('content')
  <div class="container">

    <h1>HomePage</h1>

    <div class="row row-cols-2 row-cols-md-4 g-4">

      @forelse ($movies as $movie)
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">{{ $movie->title }}</h3>
              <h4>{{ $movie->original_title }}</h4>
            </div>
            <div class="card-body">
              <ul class="list-unstyled">
                <li>Nationality: {{ $movie->nationality }}</li>
                <li>Release date: {{ $movie->date }}</li>
                <li>Vote: {{ $movie->vote }}/10</li>
              </ul>
            </div>
          </div>
        </div>

      @empty

        <div class="col">
          <p>No movies here, sorry 😓</p>
        </div>
      @endforelse

    </div>
  </div>
@endsection
