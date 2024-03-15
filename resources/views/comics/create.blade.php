@extends('layouts.main')

@section('title', 'Aggiungi Fumetto')

@section('main-content')
<div class="container mt-4">
    <h1 class="mb-4">Aggiungi un nuovo fumetto</h1>
    @include('comics.form')
</div>
@endsection
