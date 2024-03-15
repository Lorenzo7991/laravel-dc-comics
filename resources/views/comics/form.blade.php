@extends('layouts.main')

@section('title', isset($comic) ? 'Modifica Fumetto' : 'Aggiungi Fumetto')

@section('main-content')
<div class="container mt-4">
    <h1 class="mb-4">{{ isset($comic) ? 'Modifica fumetto' : 'Aggiungi un nuovo fumetto' }}</h1>
    <form action="{{ isset($comic) ? route('comics.update', $comic) : route('comics.store') }}" method="POST">
    @csrf
    @isset($comic)
        @method('PUT')
    @endisset
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ isset($comic) ? $comic->title : '' }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ isset($comic) ? $comic->description : '' }}</textarea>
        </div>
        <div class="form-group">
    <label for="thumb">Thumb</label>
    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ isset($comic) ? $comic->thumb : '' }}" required>
</div>
<div class="form-group">
    <label for="price">Prezzo</label>
    <input type="number" class="form-control" id="price" name="price" step="0.01" value="{{ isset($comic) ? $comic->price : '' }}" required>
</div>
<div class="form-group">
    <label for="series">Serie</label>
    <input type="text" class="form-control" id="series" name="series" value="{{ isset($comic) ? $comic->series : '' }}" required>
</div>
<div class="form-group">
    <label for="sale_date">Data di vendita</label>
    <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ isset($comic) ? $comic->sale_date : '' }}" required>
</div>
<div class="form-group">
    <label for="type">Tipo</label>
    <input type="text" class="form-control" id="type" name="type" value="{{ isset($comic) ? $comic->type : '' }}" required>
</div>
<div class="form-group">
    <label for="artists">Artisti</label>
    <input type="text" class="form-control" id="artists" name="artists" value="{{ isset($comic) ? $comic->artists : '' }}" required>
</div>
<div class="form-group">
    <label for="writers">Scrittori</label>
    <input type="text" class="form-control" id="writers" name="writers" value="{{ isset($comic) ? $comic->writers : '' }}" required>
</div>
        <button type="submit" class="btn btn-primary mt-3">{{ isset($comic) ? 'Salva modifiche' : 'Aggiungi fumetto' }}</button>
        <a href="{{ route('comics.index') }}" class="btn btn-secondary mt-3">Torna Indietro</a>
    </form>
</div>
@endsection
