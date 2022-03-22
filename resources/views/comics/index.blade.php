@extends('layouts.main')

@section('title', 'Comics')

@section('section-id', 'comics-index')

@section('content')
    <div class="d-flex justify-content-end align-items-center">
        <a class="btn btn-small btn-primary" href="{{ route('comics.create') }}">Aggiungi Fumetto</a>
    </div>
    <ul>
        @forelse($comics as $comic)
            <li>
                <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
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
