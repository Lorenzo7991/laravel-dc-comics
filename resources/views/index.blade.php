@extends('layouts.main')

@section('title', 'Home')

@section('main-content')
<div class="container mt-4">
    <h1 class="mb-4">Lista fumetti</h1>
    <div class="row">
        @foreach($comics as $comic)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ $comic->thumb }}" class="card-img-top img-fluid" alt="{{ $comic->title }}" >
                <div class="card-body">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">Dettagli</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection