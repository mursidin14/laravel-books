@extends('layouts.main')

@section('content')

    <h2> {{ $title }} </h2>

    @foreach($books as $book)

        <article>
            <h4> 
                <a href="/books/{{ $book->slug }}" class="nav-link"> {{ $book->title }} </a>
            </h4>
            <small class="text-right"> {{ $book->author }} </small>
            <p> {{ $book->except }} </p>
        </article>

    @endforeach

@endsection