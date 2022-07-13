@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 rounded-lg">
                <div class="d-flex flex-column justify-content-around">
                    <div class="img rounded-lg" style="background-image: url({{asset("storage/$dish->immage")}})">
                        {{-- <img class="img" src="{{asset("storage/$restaurant->immagine")}}"> --}}
                    </div>
                    <div class="name mt-3">
                        <span class="white">
                            {{ $dish->nome_prodotto }}
                        </span>
                    </div>
                    <div class="mt-3 white">
                        <span>
                            {{ $dish->prezzo }}
                        </span>
                    </div>
                    <div class="mt-3 mb-3 white">
                        {{$dish->description}}
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset("storage/$dish->immage")}}" alt="{{ $dish->nome_prodotto }}" width="50">
            <div class="card-body">
                <h5 class="card-title"> {{ $dish->nome_prodotto }} </h5>
                <p class="card-text"> {{ $dish->prezzo }} </p>
                <p class="card-text"> {{ $dish->description }} </p>
            </div>

        </div> --}}
    </div>
@endsection

<style>
    .col-12 {
        /* background-color: rgb(25, 159, 214); */
        border: 1px solid cyan;
        text-align: center;
    }
    .img{
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 400px;
    }
    .white{
        color: white;
    }
    .container-restaurant{
        margin-top: 12vh;
    }
</style>