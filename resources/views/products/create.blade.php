@extends('layouts.layout')

@section('main')
<div class="container">

    <h1>Creazione nuovo fumetto</h1>

    
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        
        <div class="form-group">
            <label class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">
            @error('title')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="3">{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label class="form-label">Thumb</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"  value="{{ old('thumb') }}">
            @error('thumb')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"  value="{{ old('price') }}">
            @error('price')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"  value="{{ old('series') }}">
            @error('series')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label">Data</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"  value="{{ old('sale_date') }}">
            @error('sale_date')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label">Genere</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" name="type"  value="{{ old('type') }}">
            @error('type')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button class="btn btn-success" type="submit">Crea</button>
        </div>

    </form>
    
</div>
@endsection