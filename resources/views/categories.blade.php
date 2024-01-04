@extends('layouts.main')

@section('content')

    <h2> {{ $title }} </h2>

    @foreach($categories as $category)

        <ul>
            <li>
                <a href="/categories/{{ $category->slug }}" class="nav-link"> {{ $category->name }} </a>
            </li>
        </ul>

    @endforeach

@endsection