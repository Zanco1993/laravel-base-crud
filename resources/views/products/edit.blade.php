@extends('layouts.layout')

@section('main')
<div class="container">

    <h1>Creazione nuovo fumetto</h1>
    
    <form method="POST" action="{{ route('products.update', $data->id) }}">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" value="{{ $data->title }}">
        </div>
        <div class="form-group">
            <label class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" rows="3">{{ $data->description }}</textarea>
        </div>
        <div class="form-group">
            <label class="form-label">Thumb</label>
            <input type="text" class="form-control" name="thumb" value="{{ $data->thumb }}">
        </div>
        <div class="form-group">
            <label class="form-label">Prezzo</label>
            <input type="text" class="form-control" name="price" value="{{ $data->price }}">
        </div>
        <div class="form-group">
            <label class="form-label">Serie</label>
            <input type="text" class="form-control" name="series" value="{{ $data->series }}">
        </div>
        <div class="form-group">
            <label class="form-label">Data</label>
            <input type="text" class="form-control" name="sale_date" value="{{ $data->sale_date }}">
        </div>
        <div class="form-group">
            <label class="form-label">Genere</label>
            <input type="text" class="form-control" name="type" value="{{ $data->type }}">
        </div>
        <div>
            <button class="btn btn-success" type="submit">Modifica</button>
        </div>

    </form>
    
</div>
@endsection