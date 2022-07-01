@extends('layouts.app')

{{-- {{ dd($user_id) }}
{{ dd($restaurants) }} --}}
@section('content')
    <div class="container">

        <h1>Le tue attività:</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Nome Attività</th>
                    <th scope="col">Indirizzo</th>
                    <th scope="col">Immagine</th>
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
                        <img src="{{ $restaurant->immagine }}" alt="{{ $restaurant->immagine }}" width="50">
                    </td>
                </tr>
                @empty
                  <h2> non ci sono post</h2>
                @endforelse

            </tbody>
        </table>

    </div>
@endsection