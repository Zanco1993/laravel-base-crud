@extends('layouts.layout')

@section('header')
<header class="text-center py-5">
    <h1>LISTA FUMETTI</h1>
</header>
@endsection

@section('main')
<main>

    {{-- @dd($date) --}}
    <div class="container">
        <div class="row">
            @foreach ($date as $item)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ $item['thumb'] }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $item['title'] }}</h5>
                    <a href="{{ route('products.show', $item->id) }}" class="btn btn-primary">More info</a>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    
    
</div>
</div>
</main>

@endsection