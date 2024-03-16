@extends('layouts.main')

@section('title', $comic->title)

@section('main-content')
    <div class="card">
        <div class="card-header">
            <h2>{{ $comic->title }}</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <p><strong>Description:</strong> {{ $comic->description }}</p>
                    <p><strong>Price:</strong> ${{ $comic->price }}</p>
                    <p><strong>Series:</strong> {{ $comic->series }}</p>
                    <p><strong>Sale Date:</strong> {{ $comic->sale_date }}</p>
                    <p><strong>Type:</strong> {{ $comic->type }}</p>
                    <p><strong>Artists:</strong> {{ $comic->artists }}</p>
                    <p><strong>Writers:</strong> {{ $comic->writers }}</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('comics.index') }}" class="btn btn-secondary">Torna Indietro</a>
            <a href="{{ route('comics.edit', $comic) }}" class="btn btn-warning">Modifica Fumetto</a>
        </div>
    </div>
@endsection
