@extends('layouts.app')

@section('content')
    <div class="container">

        {{-- card sinistra info ristorante --}}
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ $restaurant->immagine }}" alt="{{ $restaurant->immagine }}" width="50">
            <div class="card-body">
                <h5 class="card-title"> {{ $restaurant->nome_attivita }} </h5>
                <p class="card-text"> {{ $restaurant->indirizzo }} </p>
            </div>
        </div>

        {{-- lista dei piatti --}}


    </div>
@endsection