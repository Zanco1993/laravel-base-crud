@extends('layouts.layout')

@section('header')
<header class="text-center py-5">
    <h1>Dettaglio {{ $data['title'] }}</h1>
</header>
@endsection

@section('main')
<div class="details">
    <div class="container">
        <h2>Questi sono i dettagli del fumetto</h2>
        <ul>
            <li>Info: {{ $data['description'] }}</li>
            <li>Prezzo: {{ $data['price'] }}€</li>
            <li>Serie: {{ $data['series'] }}</li>
            <li>Data uscita: {{ $data['sale_date'] }}</li>
            <li>Genere: {{ $data['type'] }}</li>
        </ul>
    </div>
</div>

@endsection