@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- card sinistra info ristorante --}}
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ $dish->immage }}" alt="{{ $dish->nome_prodotto }}" width="50">
            <div class="card-body">
                <h5 class="card-title"> {{ $dish->nome_prodotto }} </h5>
                <p class="card-text"> {{ $dish->prezzo }} </p>
                <p class="card-text"> {{ $dish->description }} </p>
            </div>

        </div>

        {{-- lista dei piatti --}}

    </div>
@endsection