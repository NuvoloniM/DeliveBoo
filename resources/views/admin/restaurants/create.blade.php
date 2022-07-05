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
    <form action=" {{route('admin.restaurants.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- inserimento nome attività --}}
        <div class="form-group">
            <label for="title">Nome Attività</label>
            <input type="text" class="form-control" id="nome_attivita" placeholder="nome_attivita" name="nome_attivita">
        </div>

        {{-- inserimento indirizzo attività --}}
        <div class="form-group">
            <label for="content">Indirizzo</label>
            <input type="text" class="form-control" id="indirizzo" placeholder="indirizzo" name="indirizzo">
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
                    @if ( in_array($category->id, old('categories', []) ) ) checked @endif
                >
                <label class="form-check-label" for="category-{{ $category->id }}"> {{ $category->tipologia }} </label>
            </div>
        @endforeach

        {{-- inserimento url immagine --}}
        <div class="form-group">
            <label for="image">Logo Attività</label>
            <input type="file" class="form-control-file" id="immagine" placeholder="url dell'immagine" name="immagine">
        </div>

        <div>
            <button type="submit" class="btn btn-success">Crea</button>
        </div>

    </form>
</div>

@endsection