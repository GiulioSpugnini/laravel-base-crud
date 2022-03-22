@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="card main-card p-5">

            <div class="col-6"><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
            </div>
            <div class="col6">{{ $comic->title }}</div>
            <div class="col-4">{{ $comic->price }}</div>
            <div class="col-4">{{ $comic->series }}</div>
            <div class="col-3">{{ $comic->sale_date }}</div>
            <div class="col-4">{{ $comic->type }}</div>
            <div class="col-12">{{ $comic->description }}</div>
        </div>
    </div>
@endsection
