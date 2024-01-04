@extends('layouts.main')

@section('content')

    <h2> {{ $title }} </h2>

    @foreach($books as $book)

        <article>
            <h3><a href="/books/{{ $book->slug }}" class="nav-link"> {{ $book->title }} </a></h3>
            <p> {{ $book->except }} </p>
        </article>

    @endforeach

@endsection