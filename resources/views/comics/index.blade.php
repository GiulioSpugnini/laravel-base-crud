@extends('layouts.main')

@section('title', 'Comics')

@section('section-id', 'comics-index')

@section('content')
    @if (session('message'))
        <div class="alert alert-{{ session('type') }}">
            {{ session('message') }}
        </div>
    @endif
    <div class="d-flex justify-content-end align-items-center">
        <a class="btn btn-primary" href="{{ route('comics.create') }}">Aggiungi Fumetto</a>
    </div>

    <div>
        @forelse($comics as $comic)
            <div class="border my-3 p-3">
                <div class="d-flex flex-column align-items-start">
                    <a class="h5" href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
                    <div>
                        <h5>{{ $comic->price }}</h5>
                        <h5>{{ $comic->series }}</h5>
                        <p>{{ $comic->description }}</p>
                        <h5>{{ $comic->sale_date }}</h5>
                        <h5>{{ $comic->type }}</h5>
                    </div>
                </div>
                <div class=" d-flex justify-content-end">
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-secondary me-2">
                        Modifica
                    </a>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Cancella</button>

                    </form>
                </div>
            </div>
        @empty
            <h3>Non ci sono fumetti</h3>
        @endforelse
    </div>


@endsection

@section('other-scripts')
    <script>
        const deleteForms = document.querySelectorAll('.delete-form');
        deleteForms.forEach(form => {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                const accept = confirm('Sei sicuro di voler cancellare?');
                if (accept) e.target.submit();
            });
        });
    </script>
@endsection
