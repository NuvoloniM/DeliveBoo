@extends('layouts.app')

@section('content')
    <div class="container-generale d-flex">
        <div class="personal dashboard">
            <ul class="personal-ul">
                <li>
                    <a class="personal-a" href="{{route('admin.restaurants.index')}}">Home</a>
                </li>
                <li>
                    <a href="{{route('admin.restaurants.create')}}">Nuova attività</a>
                </li>
                <li>
                    <a href="#">I tuoi ordini</a>
                </li>
                <li>
                    <a href="#">Il tuo profilo</a>
                </li>
            </ul>
        </div>
        <div class="activities">
            @if ( session('message') )
            <div class="alert alert-info">
                {{ session('message') }}
            </div>
            @endif
            <div class="text-center">
                <h2>
                    Le tue attivita'
                </h2>
            </div>
            <div class="container">
                <div class="row d-flex">
                    @forelse ($restaurants as $restaurant)
                    <div class="col-6 text-center rounded-lg mt-3">
                        <a href="{{route('admin.restaurants.show', $restaurant->id)}}">
                            <div class="d-flex flex-column justify-content-between">
                                <div class="img">
                                    <img src="{{$restaurant->immagine}}">
                                </div>
                                <div class="name mt-3">
                                    <span>
                                        {{ $restaurant->nome_attivita }}
                                    </span>
                                </div>
                                <div class="mt-3">
                                    <span>
                                        {{ $restaurant->indirizzo }}
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    @empty
                    @endforelse
                </div>
            </div>

        </div>
    </div>




{{-- <div class="row">
    <div class="col-3 py-5 px-3">
        <h2>Questa è la Dashboard</h2>
        <ul class="dashboard">
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{route('admin.restaurants.index')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{route('admin.restaurants.create')}}">Aggiungi una nuova
                    attività</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">Vai ai tuoi ordini</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">Statistiche dei tuoi ordini</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">Vai al tuo profilo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
    <div class="col-9 bg_primary py-5">
        @if ( session('message') )
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
        @endif

        <h1 class="text-center">Le tue attività:</h1>
        <a href=" {{route('admin.restaurants.create')}} " class="btn btn-success">Inserisci Nuova Attività</a>

        <div class="row justify-content-around">
            @forelse ($restaurants as $restaurant)
            <div class="col-5 my-3 index_side p-0">
                <a href="{{route('admin.restaurants.show', $restaurant->id)}}">
                    <div class="card text-center">
                        <img  src="{{$restaurant->immagine}}"
                            class="card-img-top" alt="{{ $restaurant->nome_attivita }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $restaurant->nome_attivita }}</h5>
                            <p class="card-text">{{ $restaurant->indirizzo }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @empty
            <h2> non ci sono restaurant</h2>
            @endforelse
        </div>

        <div class="row justify-content-around align-items-center">
            @forelse ($restaurants as $restaurant)
            <div class="col-5 my-3 index_side p-0 rounded-pill">
                <a href="{{route('admin.restaurants.show', $restaurant->id)}}">
                    <div class="d-flex align-items-center">
                        <div class="col-6 px-0">
                            <img 
                                src="{{$restaurant->immagine}}" class="rounded-pill img-fluid"
                                alt="{{ $restaurant->nome_attivita }}">
                        </div>
                        <div class="col-6 text-center align-items-center">
                            <h5 class="">{{ $restaurant->nome_attivita }}</h5>
                            <p class="">{{ $restaurant->indirizzo }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @empty
            <h2> non ci sono restaurant</h2>
            @endforelse
        </div>

    </div>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Nome Attività</th>
                <th scope="col">Indirizzo</th>
                <th scope="col">Immagine</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($restaurants as $restaurant)
            <tr>
                <td>
                    {{ $restaurant->nome_attivita }}
                </td>
                <td>
                    {{ $restaurant->indirizzo }}
                </td>
                <td>
                    <img src="{{asset("storage/$restaurant->immagine")}}" alt="{{ $restaurant->immagine }}" width="50">
                </td>
                <td class="d-flex">
                   
                    <a href="{{route('admin.restaurants.show', $restaurant->id)}}" class="btn btn-primary">View</a>
                   
                    <a href="{{route('admin.restaurants.edit', $restaurant->id)}}" class="btn btn-primary">Edit</a>
                   
                    @include('includes.deleteRestaurant')
                </td>
            </tr>
            @empty
            <h2> non ci sono post</h2>
            @endforelse

        </tbody>
    </table>
</div> --}}
@endsection
@section('scripts')
<script src="{{asset('js/delete-msg.js')}}"></script>
@endsection
<style scoped lang="scss">
    .container-generale {
        background-color: red;
    }

    .dashboard {
        background-color: yellow;
    }

    .activities {
        background-color: purple;
        width: calc(100% - 220px);
    }

    .personal-ul {
        list-style-type: none;
        margin-top: 8vh;
    }

    .personal-a {
        text-decoration: none;
        color: black;
    }

    .personal {
        width: 220px;
    }

    .col-6 {
        background-color: rgb(25, 159, 214);
        border: 1px solid cyan;
    }

    /* .img {
        height: 40%;
    } */

</style>
