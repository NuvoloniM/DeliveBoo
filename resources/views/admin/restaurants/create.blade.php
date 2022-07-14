@extends('layouts.app')

@section('content')
<div class="d-flex mt-4">
    <div class="dashboard mt-3">
        <div class="personal">
            <ul class="personal-ul">
                <li>
                    <a class="personal-a white" href="{{route('admin.restaurants.index')}}">Home</a>
                </li>
                <li>
                    <a class="personal-a white" href="{{route('admin.restaurants.create')}}">Aggiungi attività</a>
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
    <div class="container mt-3">
        {{-- catch errors --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action=" {{route('admin.restaurants.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- inserimento nome attività --}}
            <div class="form-group white mt-5">
                <label for="title">
                    <h3 class="ombra">
                        Nome Attività
                    </h3>
                </label>
                <input type="text" class="form-control" id="nome_attivita" placeholder="nome attività"
                    name="nome_attivita">
            </div>

            {{-- inserimento indirizzo attività --}}
            <div class="form-group white mt-5">
                <label for="content">
                    <h3 class="ombra">
                        Indirizzo
                    </h3>
                </label>
                <input type="text" class="form-control" id="indirizzo" placeholder="indirizzo" name="indirizzo">
            </div>

            {{-- selezione del tipo di ristorante --}}

            <h3 class="white ombra mt-5">Seleziona le tipologie di attività:</h3>

            @foreach ( $categories as $category )
            <div class="form-check form-check-inline mt-2">
                <input class="form-check-input" type="checkbox" id="category-{{ $category->id }}"
                    value=" {{ $category->id }} " name="categories[]" @if ( in_array($category->id, old('categories',
                []) ) ) checked @endif
                >
                <label class="form-check-label white" for="category-{{ $category->id }}"> {{ $category->tipologia }}
                </label>
            </div>
            @endforeach

            {{-- inserimento url immagine --}}
            <div class="form-group white mt-5">
                <label for="image">
                    <h3 class="ombra">
                        Logo Attività
                    </h3>
                </label>
                <input type="file" class="form-control-file" id="immagine" placeholder="url dell'immagine"
                    name="immagine">
            </div>

            <div>
                <button type="submit" class="btn btn-success mt-3">Crea</button>
            </div>

        </form>
    </div>
</div>


@endsection

<style>
    .white {
        color: white;
    }
    .dashboard{
        width: 220px;
    }
    .personal-ul {
        list-style-type: none;
        padding-top: 25vh
        /* margin-top: 8vh; */
    }
    .personal-a:hover{
        color: white;
    }
    .ombra{
        text-shadow: 1px 1px 7px black;
    }
</style>
