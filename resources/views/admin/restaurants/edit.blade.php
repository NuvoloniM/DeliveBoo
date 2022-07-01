@extends('layouts.app')

@section('content')
<div class="container">
    <form action=" {{route('admin.restaurants.update', $restaurant->id)}}" method="POST">
        @method('PUT')
        @csrf

        {{-- inserimento nome attività --}}
        <div class="form-group">
            <label for="title">Nome Attività</label>
            <input 
                type="text" 
                class="form-control" 
                id="nome_attivita" 
                placeholder="nome_attivita" 
                name="nome_attivita"
                value="{{ old( 'nome_attivita', $restaurant->nome_attivita) }}"
            >
        </div>

        {{-- inserimento indirizzo attività --}}
        <div class="form-group">
            <label for="content">Indirizzo</label>
            <input 
                type="text" 
                class="form-control" 
                id="indirizzo" 
                placeholder="indirizzo" 
                name="indirizzo"
                value="{{ old( 'indirizzo', $restaurant->indirizzo) }}"
            >
        </div>

        {{-- selezione del tipo di ristorante --}}
        <hr>
        <h3>Seleziona le tipologie di attività:</h3>

        @foreach ( $categories as $category )
            <div class="form-check form-check-inline">
                <input
                    class="form-check-input"
                    type="checkbox"
                    id="category-{{ $category->id }}"
                    value=" {{ $category->id }} "
                    name="categories[]"
                    @if ( in_array($category->id, old('categories', $restaurant_categories_id ) ) ) checked @endif
                >
                <label class="form-check-label" for="category-{{ $category->id }}"> {{ $category->tipologia }} </label>
            </div>
        @endforeach

        {{-- inserimento url immagine --}}
        <div class="form-group">
            <label for="image">Logo Attività</label>
            <input 
            type="text" 
            class="form-control-file" 
            id="immagine" 
            placeholder="url dell'immagine" 
            name="immagine"
            value="{{ old('immagine', $restaurant->immagine) }}"
            >
        </div>

        <div>
            <button type="submit" class="btn btn-success">Crea</button>
        </div>

    </form>
</div>

@endsection