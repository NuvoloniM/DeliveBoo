@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="personal col-sm-4 ">
            <ul class="personal-ul mt-5">
                <li>
                    <a class="personal-a white" href="{{route('admin.restaurants.index')}}">Home</a>
                </li>
                <li>
                    <a class="personal-a white" href="#">Il tuo profilo</a>
                </li>
                <li>
                    <a class="personal-a white" href="/">Ordina anche tu</a>
                </li>
                <li>
                    <a class="personal-a white" href="{{route('admin.restaurants.index')}}">Torna indietro</a>
                </li>
                <li>
                    <a class="personal-a white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
        <div class="col-sm-8 text-center rounded-lg mt-5">
            <div class="d-flex flex-column justify-content-around">
                <div class="img rounded-lg" style="background-image: url({{asset("storage/$dish->immage")}})">
                    {{-- <img class="img" src="{{asset("storage/$restaurant->immagine")}}"> --}}
                </div>
                <div class="name mt-3">
                    <h3 class="white">
                        {{ $dish->nome_prodotto }}
                    </h3>
                </div>
                <div class="mt-3 white">
                    <span>
                        {{ $dish->prezzo }}&euro;
                    </span>
                </div>
                <div class="mt-3 mb-3 white">
                    {{$dish->description}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style scoped>
    .col-8 {
        text-align: center;
    }

    .img {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 400px;
    }

    .white {
        color: white;
    }

    .container-restaurant {
        margin-top: 12vh;
    }

    .personal-ul {
        list-style-type: none;

        padding-top: 200px;
    }

    /* .personal {
        width: 220px
    } */

    .personal-a:hover {
        color: white;
    }

    /* .dish {
        width: calc(100% - 220px);
    } */

</style>
