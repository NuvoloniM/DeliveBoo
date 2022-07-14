@extends('layouts.app')

@section('content')

<div class=" container-generale over d-flex">
    <div class="personal dashboard">
        <ul class="personal-ul mt-5">
            <li>
                <a class="personal-a white" href="{{route('admin.restaurants.index')}}">Home</a>
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
                <a class="personal-a white" href="/">Ordina anche tu</a>
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
    <div class="row dish">
        <div class="col-12">
            @if ( session('message') )
            <div class="alert alert-info">
                {{ session('message') }}
            </div>
            @endif
            <h1 class="text-center blue">I tuoi piatti:</h1>
            <div class="row d-flex ml-5">
                @forelse ($dishes as $dish)
                <div class="col-6 mt-3 rounded-lg mt-2">
                    <div class="d-flex flex-column justify-content-around">
                        <div class="img rounded-lg d-flex justify-content-between align-items-end pb-3"
                            style="background-image: url({{asset("storage/$dish->immage")}})">
                            {{-- <img class="img" src="{{asset("storage/$restaurant->immagine")}}"> --}}
                            <span>
                                <a href="{{route('admin.restaurants.dishes.show',['restaurant'=> $data, $dish->id])}}"
                                    class="btn btn-primary">
                                    View
                                </a>
                            </span>
                            <span>
                                <a href="{{route('admin.restaurants.dishes.edit',['restaurant'=> $data, $dish->id])}}"
                                    class="btn btn-primary">
                                    Edit
                                </a>
                            </span>
                            <span>
                                <form
                                    action="{{route('admin.restaurants.dishes.destroy', ['restaurant'=> $data, $dish->id])}}"
                                    method="POST" class="delete-form">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </span>
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
<style scoped>
    .personal-ul {
        list-style-type: none;
        /* position: fixed; */
        padding-top: 200px;
    }

    .blue {
        color: rgba(11, 99, 184, 1);
    }
    .personal {
        width: 220px;
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

    .personal-a:hover {
        color: white;
    }
    .dish{
        width: calc(100% - 220px);
    }

</style>
