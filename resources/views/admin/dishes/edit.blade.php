@extends('layouts.app')

@section('content')
<div class="container">
    <form action=" {{route('admin.restaurants.dishes.update',[$restaurant, $dish->id])}}" method="POST"  enctype="multipart/form-data">
        @method('PUT')
        @csrf
        
        
        {{-- inserimento nome piatto --}}
        <div class="form-group">
            <label for="nome prodotto">Nome Piatto</label>
            <input type="text" class="form-control" id="nome_prodotto" placeholder="nome prodotto" name="nome_prodotto" value="{{ old( 'nome_prodotto', $dish->nome_prodotto) }}">
        </div>

        {{-- inserimento indirizzo attività --}}
        <div class="prezzo">
            <label for="content">Prezzo</label>
            <input type="number" class="form-control" id="prezzo" placeholder="prezzo" name="prezzo" value="{{ old( 'prezzo', $dish->prezzo) }}">
        </div>

        <div class="form-group">
            <label for="descrizione">Inserisci Descrizione</label>
           <textarea name="description" id="description" cols="30" rows="10" placeholder="descrizione">
                {{ old('descrizione', $dish->descrizione)}}
           </textarea>
        </div>
        <div class="form-group">
            <label for="title">url immagine</label>
            <input type="file" class="form-control-file" id="immage" placeholder="immage" name="immage" value="{{ old( 'immage', $dish->immage) }}">
        </div>
        {{-- selezione del tipo di ristorante --}}
        <hr>
        <h3>Seleziona le tipologie di attività:</h3>
        <select name="kitchen_types_id" id="kitchen_types_id">
            <option value="">Nessuna Categoria</option>
            @foreach ($categories as $category )
                <option
                    @if( old( 'kitchen_types_id', $dish->kitchen_types_id ) == $category->id ) selected @endif
                    value=" {{ $category->id }} "
                    >{{ $category->label }}</option>
            @endforeach
        </select>
        <div class="form-group">
            <label for="glutine">glutine</label>
            <input type="checkbox" id="glutine" name="glutine" 
            value="1"
            {{ (! empty(old('glutine')) ? 'checked' : '') }}
            {{-- value={{@if(($dish->glutine == 'checked')? 1 : 0) @endif}}  --}}
            {{-- value="1" --}}
                {{-- @if ( old('$dish->glutine') == 'on' ? 'checked' : '' )  @endif  --}}
                {{-- @if( old( 'glutine', $dish->glutine ) == $dish->glutine )  @endif --}}
                @if ($dish->glutine == 1) checked @endif
            >
        </div>
        <div class="form-group">
            <label for="vegetariano">vegetariano</label>
            <input type="checkbox" id="vegetariano" name="vegetariano" 
            {{-- value="1" --}}
            {{-- @if (old('$dish->vegetariano', $dish->vegetariano) == 1) cheked @endif --}}
            @if( old( 'vegetariano', $dish->vegetariano ) == $dish->vegetariano )  @endif
            @if ($dish->vegetariano == 1) checked @endif
            >
        </div>
        <div class="form-group">
            <label for="view">visibilità</label>
            <input type="checkbox" id="view" name="view" 
            {{-- value="1" --}}
            {{-- @if (old('$dish->view', $dish->view) == 1) cheked @endif --}}
            @if( old( 'view', $dish->view ) == $dish->view )  @endif
            >
        </div>

        <div>
            <button type="submit" class="btn btn-success">Modifica</button>
        </div>

    </form>
</div>

@endsection