@extends('layouts.main')

@section('title', 'Comics')

@section('section-id', 'comics-index')

@section('content')

    <ul>
        @forelse($comics as $comic)
            <li>
                {{ $comic->title }}
                {{ $comic->description }}
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
                {{ $comic->price }}
                {{ $comic->series }}
                {{ $comic->sale_date }}
                {{ $comic->type }}
            </li>
        @empty
            <h3>Non ci sono fumetti</h3>
        @endforelse
    </ul>

@endsection
