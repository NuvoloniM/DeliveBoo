@extends('layouts.app')

@section('content')
    <div class="container">

        {{-- card sinistra info ristorante --}}
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset("storage/$restaurant->immagine")}}" alt="{{ $restaurant->immagine }}" width="50">
            <div class="card-body">
                <h5 class="card-title"> {{ $restaurant->nome_attivita }} </h5>
                <p class="card-text"> {{ $restaurant->indirizzo }} </p>
            </div>

            {{-- bottone per eliminare l'attività --}}
            @include('includes.deleteRestaurant')

            {{-- bottone per mostrare il menu dei piatti --}}
            <a href="{{route('admin.restaurants.dishes.index', $restaurant->id)}}" class="btn btn-primary">View</a>

        </div>

        {{-- lista dei piatti --}}

    </div>
@endsection
@section('scripts')
    <script src="{{asset('js/delete-msg.js')}}"></script>
@endsection