@extends('layouts.app')

@section('content')
<div class="view">
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

        <form action=" {{route('admin.restaurants.dishes.update',[$restaurant, $dish->id])}}" method="POST"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf


            {{-- inserimento nome piatto --}}
            <div class="form-group">
                <label for="nome prodotto">
                    <h5>
                        Nome Piatto:
                    </h5>
                </label>
                <input type="text" class="form-control" id="nome_prodotto" placeholder="nome prodotto"
                    name="nome_prodotto" value="{{ old( 'nome_prodotto', $dish->nome_prodotto) }}">
            </div>
            {{-- inserimento indirizzo attività --}}
            <div class="prezzo white mt-5">
                <label for="content">
                    <h5>
                        Prezzo:
                    </h5>
                </label>
                <input type="text" class="form-control" id="prezzo" placeholder="prezzo" name="prezzo"
                    value="{{ old( 'prezzo', $dish->prezzo) }}">
            </div>
            <div class="form-group white mt-5">
                <label for="description">
                    <h5>
                        Inserisci Descrizione:
                    </h5>
                </label>
                <div>
                    <textarea class="w-100" name="description" id="description" cols="30" rows="10"
                        placeholder="descrizione">
                    {{ old('description', $dish->description)}}
                </textarea>
                </div>
            </div>
            <div class="form-group white mt-5">
                <label for="title">
                    <h5>
                        Seleziona un'immagine:
                    </h5>
                </label>
                <input type="file" class="form-control-file" id="immage" placeholder="immage" name="immage"
                    value="{{ old( 'immage', $dish->immage) }}">
            </div>
            {{-- selezione del tipo di ristorante --}}

            <h5 class="white mt-5">Seleziona la tipologia del piatto:</h5>
            <select name="kitchen_types_id" id="kitchen_types_id">
                <option value="">Nessuna Categoria</option>
                @foreach ($categories as $category )
                <option @if( old( 'kitchen_types_id' , $dish->kitchen_types_id ) == $category->id ) selected @endif
                    value=" {{ $category->id }} "
                    >{{ $category->label }}</option>
                @endforeach
            </select>
            <div class="form-group white mt-3">
                <label for="glutine">glutine</label>
                <input type="hidden" name="glutine" value="0">
                <input type="checkbox" id="glutine" name="glutine" @if(old('glutine', $dish->glutine) == 1) checked
                @endif
                value="1"
                >
            </div>
            <div class="form-group white">
                <label for="vegetariano">vegetariano</label>
                <input type="hidden" name="vegetariano" value="0">
                <input type="checkbox" id="vegetariano" name="vegetariano" @if(old('vegetariano', $dish->vegetariano) ==
                1)
                checked @endif
                value="1"
                >
            </div>
            <div class="form-group white">
                <label for="view">visibilità</label>
                <input type="hidden" name="view" value="0">
                <input type="checkbox" id="view" name="view" @if(old('view', $dish->view) == 1) checked @endif
                value="1"
                >
            </div>

            <div class="pb-5">
                <button type="submit" class="btn btn-success">Modifica</button>
            </div>

        </form>
    </div>
</div>

<style>
    .w-100 {
        height: 150px;
    }

    .white {
        color: white;
    }
    .view{
        
        background: rgb(11,99,184);
        background: linear-gradient(0deg, rgba(11,99,184,1) 18%, rgba(75,138,191,1) 45%, rgba(255,255,255,1) 100%);
        
    }
</style>
@endsection
