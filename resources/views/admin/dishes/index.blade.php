@extends('layouts.app')

@section('content')
<div class="container">
    @if ( session('message') )
    <div class="alert alert-info">
        {{ session('message') }}
    </div>
    @endif
    <h1 class="text-center white">Le tue attività:</h1>
    <div class="row">
        @forelse ($dishes as $dish)
        <div class="col-6 mt-3">
            <div class="d-flex flex-column justify-content-around">
                <div class="img d-flex justify-content-between align-items-end pb-3" style="background-image: url({{asset("storage/$dish->immage")}})">
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
                        <form action="{{route('admin.restaurants.dishes.destroy', ['restaurant'=> $data, $dish->id])}}"
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
<table class="table table-dark">
    <a href=" {{route('admin.restaurants.dishes.create',['restaurant'=> $data])}} " class="btn btn-success">Inserisci
        Nuovo Piatto</a>
    <thead>
        <tr>
            <th scope="col">Nome Prodotto</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Vegetariano</th>
            <th scope="col">Glutine</th>
            <th scope="col">Immage</th>
            <th scope="col">Description</th>
            <th scope="col">azioni</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($dishes as $dish)
        <tr>
            <td>
                {{ $dish->nome_prodotto }}
            </td>
            <td>
                {{ $dish->prezzo }}
            </td>
            <td>
                {{ $dish->vegetariano }}
            </td>
            <td>
                {{ $dish->glutine }}
            </td>
            <td>
                <img src="{{asset("storage/$dish->immage")}}" alt="{{ $dish->immage }}" width="50">
            </td>
            <td>
                {{ $dish->description }}
            </td>
            <td class="d-flex">
                {{-- bottone della show --}}
                <a href="{{route('admin.restaurants.dishes.show',['restaurant'=> $data, $dish->id])}}"
                    class="btn btn-primary">View</a>
                <a href="{{route('admin.restaurants.dishes.edit',['restaurant'=> $data, $dish->id])}}"
                    class="btn btn-primary">Edit</a>
                <form action="{{route('admin.restaurants.dishes.destroy', ['restaurant'=> $data, $dish->id])}}"
                    method="POST" class="delete-form">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                {{-- bottone della edit modifica attivita --}}
                {{-- <a href="{{route('admin.restaurants.dishes.edit', $dish->id)}}" class="btn btn-primary">Edit</a>
                --}}
            </td>
        </tr>
        @empty
        <h2> non ci sono piatti</h2>
        @endforelse
    </tbody>
</table>


</div>
@endsection
<style>
    .col-6 {
        /* background-color: rgb(25, 159, 214); */
        border: 1px solid cyan;
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

    .container-restaurant {
        margin-top: 12vh;
    }

</style>
