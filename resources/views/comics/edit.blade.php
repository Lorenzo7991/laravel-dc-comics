@extends('layouts.main')

@section('title', 'Modifica Fumetto')

@section('main-content')
<div class="container mt-4">
    <h1 class="mb-4">Modifica fumetto</h1>
    @include('comics.form')
</div>
@endsection
