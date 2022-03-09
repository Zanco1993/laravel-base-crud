@extends('layouts.layout')

@section('header')
<header class="text-center py-5">
    <h1>LISTA FUMETTI</h1>
</header>
@endsection

@section('main')
<main>
    <div class="text-center">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Aggiungi</a>
    </div>

    {{-- @dd($date) --}}
    <div class="container">
        <div class="row">
            @foreach ($date as $item)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ $item['thumb'] }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $item['title'] }}</h5>
                    <a href="{{ route('products.show', $item->id) }}" class="btn btn-primary">More info</a>
                    <a href="{{ route('products.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    {{-- importiamo deleteForm che andrà ad eliminare il campo specifico grazie all'ID --}}
                    @include('partials.deleteForm', [
                        'id' => $item->id,
                        'route' => 'products.destroy'
                    ])
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    
    
</div>
</div>
</main>

@endsection