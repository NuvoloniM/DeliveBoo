@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Le tue attività:</h1>
        <table class="table table-dark">
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
                        <img src="{{ $dish->immage }}" alt="{{ $dish->immage }}" width="50">
                    </td>
                    <td>
                        {{ $dish->description }}
                    </td>
                    <td class="d-flex">
                        {{-- bottone della show --}}
                        <a href="{{route('admin.restaurants.dishes.show',['restaurant'=> $data, $dish->id])}}" class="btn btn-primary">View</a>
                        {{-- bottone della edit modifica attivita --}}
                        {{-- <a href="{{route('admin.restaurants.dishes.edit', $dish->id)}}" class="btn btn-primary">Edit</a> --}}
                    </td>
                </tr>                    
                @empty
                    <h2> non ci sono piatti</h2>
                @endforelse
            </tbody>
        </table>


    </div>
@endsection