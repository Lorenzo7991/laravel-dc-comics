@extends('layouts.main')

@section('title', isset($comic) ? 'Modifica Fumetto' : 'Aggiungi Fumetto')

@section('main-content')
<div class="container mt-4">
    @if ($errors->any())
        <div class="alert alert-danger">
        <h1 class="text-danger">There are some error's...</h1>
            <ul class="text-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1 class="mb-4">{{ isset($comic) ? 'Modifica fumetto' : 'Aggiungi un nuovo fumetto' }}</h1>
    <form action="{{ isset($comic) ? route('comics.update', $comic) : route('comics.store') }}" method="POST">
        @csrf
        @isset($comic)
            @method('PUT')
        @endisset
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', isset($comic) ? $comic->title : '') }}" required >
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" required>{{ old('description', isset($comic) ? $comic->description : '') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="thumb">Thumb</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb', isset($comic) ? $comic->thumb : '') }}" required>
            @error('thumb')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" step="0.01" value="{{ old('price', isset($comic) ? $comic->price : '') }}" required>
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series', isset($comic) ? $comic->series : '') }}" required>
            @error('series')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="sale_date">Data di vendita</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ old('sale_date', isset($comic) ? $comic->sale_date : '') }}" required>
            @error('sale_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type">Tipo</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type', isset($comic) ? $comic->type : '') }}" required>
            @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="artists">Artisti</label>
            <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" value="{{ old('artists', isset($comic) ? $comic->artists : '') }}" required>
            @error('artists')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="writers">Scrittori</label>
            <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" value="{{ old('writers', isset($comic) ? $comic->writers : '') }}" required>
            @error('writers')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">{{ isset($comic) ? 'Salva modifiche' : 'Aggiungi fumetto' }}</button>
        <a href="{{ route('comics.index') }}" class="btn btn-secondary mt-3">Torna Indietro</a>
    </form>
</div>
@endsection
