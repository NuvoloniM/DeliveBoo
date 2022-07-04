@extends('layouts.app')

@section('content')
<div class="container">
    <form action=" {{route('admin.restaurants.dishes.store',['restaurant'=> $restaurant])}}" method="POST">
        @csrf
        {{-- inserimento nome attività --}}
        <div class="form-group">
            <label for="nome prodotto">Nome Piatto</label>
            <input type="text" class="form-control" id="nome_prodotto" placeholder="nome prodotto" name="nome_prodotto">
        </div>

        {{-- inserimento indirizzo attività --}}
        <div class="prezzo">
            <label for="content">Prezzo</label>
            <input type="number" class="form-control" id="prezzo" placeholder="prezzo" name="prezzo">
        </div>

        <div class="form-group">
            <label for="descrizione">Inserisci Descrizione</label>
           <textarea name="description" id="description" cols="30" rows="10" placeholder="descrizione">

           </textarea>
        </div>
        <div class="form-group">
            <label for="title">url immagine</label>
            <input type="text" class="form-control" id="immage" placeholder="immage" name="immage">
        </div>
        {{-- selezione del tipo di ristorante --}}
        <hr>
        <h3>Seleziona le tipologie di attività:</h3>

        {{-- @foreach ( $categories as $category )
            <div class="form-check form-check-inline">
                <input
                    class="form-check-input"
                    type="checkbox"
                    id="category-{{ $category->id }}"
                    value=" {{ $category->id }} "
                    name="categories[]"
                    @if ( in_array($category->id, old('categories', []) ) ) checked @endif
                >
                <label class="form-check-label" for="category-{{ $category->id }}"> {{ $category->tipologia }} </label>
            </div>
        @endforeach --}}
        <div class="form-group">
            <label for="glutine">glutine</label>
            <input type="checkbox" id="glutine" name="glutine" value="1" checked>
        </div>
        <div class="form-group">
            <label for="vegetariano">vegetariano</label>
            <input type="checkbox" id="vegetariano" name="vegetariano" value="1">
        </div>
        <div class="form-group">
            <label for="view">visibilità</label>
            <input type="checkbox" id="view" name="view" value="1">
        </div>

        <div>
            <button type="submit" class="btn btn-success">Crea</button>
        </div>

    </form>
</div>

@endsection