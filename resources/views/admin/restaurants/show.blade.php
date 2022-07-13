@extends('layouts.app')

@section('content')
    <div class="container container-restaurant">
        <div class="row">
            <div class="col-12 rounded-lg">
                <a href="{{route('admin.restaurants.dishes.index', $restaurant->id)}}">
                    <div class="d-flex flex-column justify-content-around">
                        <div class="img rounded-lg" style="background-image: url({{asset("storage/$restaurant->immagine")}})">
                         {{-- <img class="img" src="{{asset("storage/$restaurant->immagine")}}"> --}}
                        </div>
                        <div class="name mt-3">
                            <h3 class="white">
                                {{ $restaurant->nome_attivita }}
                            </h3>
                        </div>
                        <div class="mt-3 white">
                            <span>
                                {{ $restaurant->indirizzo }}
                            </span>
                        </div>
                        <div class="mt-3">
                            @include('includes.deleteRestaurant')
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- <div class="container">

        
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{asset("storage/$restaurant->immagine")}}" alt="{{ $restaurant->immagine }}" width="50">
            <div class="card-body">
                <h5 class="card-title"> {{ $restaurant->nome_attivita }} </h5>
                <p class="card-text"> {{ $restaurant->indirizzo }} </p>
            </div>

            
            @include('includes.deleteRestaurant')

            
            <a href="{{route('admin.restaurants.dishes.index', $restaurant->id)}}" class="btn btn-primary">View</a>

        </div>

        

    </div> --}}
@endsection
@section('scripts')
    <script src="{{asset('js/delete-msg.js')}}"></script>
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