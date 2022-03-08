@extends('layouts.layout')

@section('main')
<div class="container">

    <h1>Creazione nuovo fumetto</h1>
    
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        
        <div class="form-group">
            <label class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" placeholder="Inserisci">
        </div>
        <div class="form-group">
            <label class="form-label">Descrizione</label>
            <textarea class="form-control" name="description" rows="3" placeholder="Inserisci"></textarea>
        </div>
        <div class="form-group">
            <label class="form-label">Thumb</label>
            <input type="text" class="form-control" name="thumb" placeholder="Inserisci">
        </div>
        <div class="form-group">
            <label class="form-label">Prezzo</label>
            <input type="text" class="form-control" name="price" placeholder="Inserisci">
        </div>
        <div class="form-group">
            <label class="form-label">Serie</label>
            <input type="text" class="form-control" name="series" placeholder="Inserisci">
        </div>
        <div class="form-group">
            <label class="form-label">Data</label>
            <input type="text" class="form-control" name="sale_date" placeholder="Inserisci">
        </div>
        <div class="form-group">
            <label class="form-label">Genere</label>
            <input type="text" class="form-control" name="type" placeholder="Inserisci">
        </div>
        <div>
            <button class="btn btn-success" type="submit">Crea</button>
        </div>

    </form>
    
</div>
@endsection