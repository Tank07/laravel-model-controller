@extends('layout.layout')

@section('title', 'Movies')

@section('content')

        @forelse ($movies as $key => $movie)
            
                        <h3 >{{ $movie->title }}</h3>
                        <p >{{ $movie->original_title }}</p>
                        <p >{{ $movie->nationality }}</p>
                        <p >{{ $movie->date }}</p>     
                        <p >{{ $movie->vote }}</p>                   
             
        @empty
            <p>Array vuoto</p>
        @endforelse

@endsection