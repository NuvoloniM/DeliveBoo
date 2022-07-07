@extends('layouts.app')

@section('content')
<div class="container">
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
            <input type="text" class="form-control" id="prezzo" placeholder="prezzo" name="prezzo" value="{{ old( 'prezzo', $dish->prezzo) }}">
        </div>

        <div class="form-group">
            <label for="description">Inserisci Descrizione</label>
           <textarea name="description" id="description" cols="30" rows="10" placeholder="descrizione">
                {{ old('description', $dish->description)}}
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
            <input type="hidden" name="glutine" value="0">
            <input type="checkbox" id="glutine" name="glutine" 
            @if(old('glutine', $dish->glutine) == 1) checked @endif
            value="1"
            >
        </div>
        <div class="form-group">
            <label for="vegetariano">vegetariano</label>
            <input type="hidden" name="vegetariano" value="0">
            <input type="checkbox" id="vegetariano" name="vegetariano"             
            @if(old('vegetariano', $dish->vegetariano) == 1) checked @endif
            value="1"
            >
        </div>
        <div class="form-group">
            <label for="view">visibilità</label>
            <input type="hidden" name="view" value="0">
            <input type="checkbox" id="view" name="view"
            @if(old('view', $dish->view) == 1) checked @endif 
            value="1"
            >
        </div>

        <div>
            <button type="submit" class="btn btn-success">Modifica</button>
        </div>

    </form>
</div>

@endsection