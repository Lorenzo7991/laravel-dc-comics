@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-12 mb-4">
            <a href="{{ route('comics.create') }}" class="btn btn-success">Aggiungi fumetto</a>
        </div>
    </div>
    <h1 class="mb-4">Lista fumetti</h1>
    <div class="row">
        @foreach($comics as $comic)
        <div class="col-md-4 mb-4">
            <div class="card shadow p-2 mb-5 bg-body-tertiary rounded" style="height: 350px;"> 
                <img src="{{ $comic->thumb }}" class="card-img-top img-fluid mx-auto" alt="{{ $comic->title }}" style="max-width: 200px; max-height: 200px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                </div>
                <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">Dettagli</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
