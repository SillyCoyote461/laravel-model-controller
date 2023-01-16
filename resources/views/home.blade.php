@extends('layout.app')
@section('page-title','Movies')
@section('main')
    <section>
        @foreach ($movies as $movie)
            <div class="card">
                <h2>{{$movie['title']}}</h2>
                <h4>{{$movie['original_title']}}</h4>
                <br>
                <h4>{{$movie['nationality']}}</h4>
                <p>{{$movie['date']}}</p>
                <p>{{$movie['vote']}}</p>
            </div>
        @endforeach
    </section>
@endsection
    
