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
                </tr>
            </thead>
            <tbody>
                @forelse ($dish as $item)
                <tr>
                    <td>
                        {{ $item->nome_prodotto }}
                    </td>
                    <td>
                        {{ $item->prezzo }}
                    </td>
                    <td>
                        {{ $item->vegetariano }}
                    </td>
                    <td>
                        {{ $item->glutine }}
                    </td>
                    <td>
                        <img src="{{ $item->immage }}" alt="{{ $item->immage }}" width="50">
                    </td>
                    <td>
                        {{ $item->description }}
                    </td>
                </tr>                    
                @empty
                    <h2> non ci sono post</h2>
                @endforelse
            </tbody>
        </table>


    </div>
@endsection