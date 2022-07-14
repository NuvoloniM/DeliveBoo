@extends('layouts.app')

@section('content')

    <div class="container over">
        <div class="row">
            <div class="col-4">
                <div class="personal dashboard">
                    <ul class="personal-ul mt-5">
                        <li>
                            <img
                            src="{{ asset('img/magnapp-logo.png') }}"
                            width="100"
                            alt="moto"
                            />
                        </li>
                        <li>
                            <a class="personal-a white" href="/">Home</a>
                        </li>
                        <li>
                            <a class="personal-a white" href="{{route('admin.restaurants.index')}}">Le tue attività</a>
                        </li>
                        <li>
                            <a class="personal-a white"
                                href="{{route('admin.restaurants.dishes.create',['restaurant'=> $data])}}">Aggiungi
                                piatto</a>
                        </li>
                        <li>
                            <a class="personal-a white" href="#">I tuoi ordini</a>
                        </li>
                        <li>
                            <a class="personal-a white" href="#">Il tuo profilo</a>
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
            </div>
            <div class="col-8">
                @if ( session('message') )
                <div class="alert alert-info">
                    {{ session('message') }}
                </div>
                @endif
                <h1 class="text-center blue">I tuoi piatti:</h1>
                <div class="row">
                    @forelse ($dishes as $dish)
                    <div class="col-6 mt-3 rounded-lg mt-2">
                        <div class="d-flex flex-column justify-content-around mb-5">
                            <div class="img rounded-lg d-flex justify-content-between align-items-end pb-3"
                                 style="background-image: url({{asset("storage/$dish->immage")}})"
                            >
                                <div>
                                    <a href="{{route('admin.restaurants.dishes.show',['restaurant'=> $data, $dish->id])}}"
                                        class="btn btn-primary mb-3 ml-3">
                                        View
                                    </a>
                                </div>
                                <div>
                                    <a href="{{route('admin.restaurants.dishes.edit',['restaurant'=> $data, $dish->id])}}"
                                        class="btn btn-primary mb-3">
                                        Edit
                                    </a>
                                </div>
                                <div>
                                    <a>
                                        <form
                                        action="{{route('admin.restaurants.dishes.destroy', ['restaurant'=> $data, $dish->id])}}"
                                        method="POST" class="delete-form">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger mr-3">
                                                Delete
                                            </button>
                                        </form>                                        
                                    </a>
                                </div>
                            </div>
                            <div class="name mt-3">
                                <h4 class="white">
                                    {{ $dish->nome_prodotto }}
                                </h4>
                            </div>
                            <div class="mt-3 white">
                                <span>
                                    Prezzo: {{ $dish->prezzo }}&euro;
                                </span>
                            </div>
                            {{-- <div class="mt-3 white">
                                                    <span>
                                                        {{ $dish->vegetariano }}
                            </span>
                        </div>
                        <div class="mt-3 white">
                            <span>
                                {{ $dish->glutine }}
                            </span>
                        </div> --}}
                        <div class="mt-3 white">
                            <span>
                                {{ $dish->description }}
                            </span>
                        </div>

                    </div>
                </div>
                @empty
                <div>
                    non ci sono piatti
                </div>
                @endforelse
            </div>
        </div>
    </div>




</div>
@endsection
<style>
    .personal-ul{
        list-style-type: none;
        position: fixed;
        padding-top: 200px;
    }
    .blue {
        color: rgba(11, 99, 184, 1);
    }

    .over {
        height: 100vh;
        overflow-y: auto;
    }

    .over::-webkit-scrollbar {
    display: none;
    }

    .col-6 {
        /* background-color: rgb(25, 159, 214); */
        /* border: 1px solid cyan; */
        text-align: center;
    }

    .img {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 350px;
    }

    .white {
        color: white;
    }
    .personal-a:hover{
        color: white;
    }

    

</style>
