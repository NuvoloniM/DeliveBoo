@extends('layouts.app')

@section('content')
<div class="container">
<<<<<<< HEAD
    <form action=" {{route('admin.restaurants.dishes.store',['restaurant'=> $restaurant])}}" method="POST"
        enctype="multipart/form-data">
=======
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
    
    <form action=" {{route('admin.restaurants.dishes.store',['restaurant'=> $restaurant])}}" method="POST" enctype="multipart/form-data">
>>>>>>> 8327bcb97ad261c94139f8cd841bf5bb17600dbe
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
            <input type="file" class="form-control-file" id="immage" placeholder="immage" name="immage">
        </div>
        {{-- selezione del tipo di ristorante --}}
        <hr>
        <h3>Seleziona le tipologie del piatto:</h3>

        <div class="form-check form-check-inline">
            <select name="kitchen_types_id" id="kitchen_types_id">
                <option value="">Nessuna Categoria</option>
                @foreach ($categories as $category )
                <option @if( old( 'kitchen_types_id' )==$category->id ) selected @endif
                    value=" {{ $category->id }} ">{{ $category->label }}</option>
                @endforeach
            </select> 
        </div>
       
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
