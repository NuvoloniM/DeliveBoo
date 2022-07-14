@extends('layouts.app')

@section('content')
<div class="container-generale d-flex">
    <div class="personal dashboard">
        <ul class="personal-ul">
            <li>
                <a class="personal-a white" href="{{route('admin.restaurants.index')}}">Home</a>
            </li>
            <li>
                <a class="personal-a white" href="{{route('admin.restaurants.create')}}">Aggiungi attività</a>
            </li>
            <li>
                <a class="personal-a white" href="{{route('admin.order')}}">I tuoi ordini</a>
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
    <div class="activities">
        @if ( session('message') )
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
        @endif
        
        <div class="over activities">
            <div class="text-center blue title">
                <h1>
                    Le tue attivita'
                </h1>
            </div>
            <div class="container">
                <div class="row d-flex jusify-content-end">
                    <div class="col-12 text-center rounded-lg mt-3 p-3">
                        <a href="{{route('admin.restaurants.dishes.index', $restaurant->id)}}">
                            <div class="d-flex flex-column justify-content-around">
                                <div class="img rounded-lg" style="background-image: url({{asset("storage/$restaurant->immagine")}})">
                                 {
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
        </div>
        

    </div>
</div>

    {{-- <div class=" container container-restaurant">
        <div class="row justify-content-between">
            <div class="col-6">
                <div class="personal dashboard">
                    <ul class="personal-ul">
                        <li>
                            <a class="personal-a white" href="{{route('admin.restaurants.index')}}">Home</a>
                        </li>
                        <li>
                            <a class="personal-a white" href="{{route('admin.restaurants.create')}}">Aggiungi attività</a>
                        </li>
                        <li>
                            <a class="personal-a white" href="{{route('admin.order')}}">I tuoi ordini</a>
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
            </div>
            <div class="col-6 rounded-lg text-center">
                <a href="{{route('admin.restaurants.dishes.index', $restaurant->id)}}">
                    <div class="d-flex flex-column justify-content-around">
                        <div class="img rounded-lg" style="background-image: url({{asset("storage/$restaurant->immagine")}})">
                         {
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
    </div> --}}
    
@endsection
@section('scripts')
    <script src="{{asset('js/delete-msg.js')}}"></script>
@endsection

<style scoped>
    
    .img{
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 400px;
    }
    .white{
        color: white;
    }
    .container-generale{
        margin-top: 2vh;
    }
    .personal-ul {
        list-style-type: none;
        padding-top: 25vh
        /* margin-top: 8vh; */
    }
    .personal-a:hover{
        color: white;
    }
    .personal {
        width: 220px;
    }
    .activities {
        /* background-color: purple; */
        width: calc(100% - 220px);
    }
    .blue {
        color: rgba(11, 99, 184, 1);
    }
</style>