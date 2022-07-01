@extends('layouts.app')

{{-- {{ dd($user_id) }}
{{ dd($restaurants) }} --}}
@section('content')
    <div class="container">

        @if (session('message'))
            <div class="alert alert-danger">
                {{ session('message') }}
            </div>
        @endif

        <a href=" {{route('admin.restaurants.create')}} " class="btn btn-success">Inserisci Nuova Attività</a>

        <h1>Le tue attività:</h1>
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
                        <img src="{{ $restaurant->immagine }}" alt="{{ $restaurant->immagine }}" width="50">
                    </td>
                    <td class="d-flex">
                        {{-- bottone della show --}}
                        <a href="{{route('admin.restaurants.show', $restaurant->id)}}" class="btn btn-primary">View</a>
                    </td>
                </tr>
                @empty
                  <h2> non ci sono post</h2>
                @endforelse

            </tbody>
        </table>

    </div>
@endsection