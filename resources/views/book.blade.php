@extends('layouts.main')

@section('content')

    <h2> {{ $title }} </h2>

        <article>
            <h3> {{ $books->title }} </h3>
             {!! $books->body !!}
            <small class="text-right"> {{ $books->author }} </small>
        </article>

@endsection