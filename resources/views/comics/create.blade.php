@extends('layouts.main')

@section('title', 'Aggiungi Fumetto')

@section('main-content')
<div class="container mt-4">
    <h1 class="mb-4">Aggiungi un nuovo fumetto</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" required>
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" name="series" required>
        </div>
        <div class="form-group">
            <label for="sale_date">Data di vendita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" required>
        </div>
        <div class="form-group">
            <label for="type">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>
        <div class="form-group">
            <label for="artists">Artisti</label>
            <input type="text" class="form-control" id="artists" name="artists" required>
        </div>
        <div class="form-group">
            <label for="writers">Scrittori</label>
            <input type="text" class="form-control" id="writers" name="writers" required>
        </div>
        <button type="submit" class="btn btn-primary">Aggiungi Fumetto</button>
         <a href="{{ route('comics.index') }}" class="btn btn-secondary">Torna Indietro</a>
    </form>
</div>
@endsection
