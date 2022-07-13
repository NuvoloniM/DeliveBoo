@extends('layouts.app')

@section('content')
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
    <form action=" {{route('admin.restaurants.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- inserimento nome attività --}}
        <div class="form-group white mt-5">
            <label for="title">
                <h5>
                    Nome Attività
                </h5>
            </label>
            <input type="text" class="form-control" id="nome_attivita" placeholder="nome attività" name="nome_attivita">
        </div>

        {{-- inserimento indirizzo attività --}}
        <div class="form-group white mt-5">
            <label for="content">
                <h5>
                    Indirizzo
                </h5>
            </label>
            <input type="text" class="form-control" id="indirizzo" placeholder="indirizzo" name="indirizzo">
        </div>

        {{-- selezione del tipo di ristorante --}}
        
        <h5 class="white mt-5">Seleziona le tipologie di attività:</h5>

        @foreach ( $categories as $category )
            <div class="form-check form-check-inline mt-2">
                <input
                    class="form-check-input"
                    type="checkbox"
                    id="category-{{ $category->id }}"
                    value=" {{ $category->id }} "
                    name="categories[]"
                    @if ( in_array($category->id, old('categories', []) ) ) checked @endif
                >
                <label class="form-check-label white" for="category-{{ $category->id }}"> {{ $category->tipologia }} </label>
            </div>
        @endforeach

        {{-- inserimento url immagine --}}
        <div class="form-group white mt-5">
            <label for="image">
                <h5>
                    Logo Attività
                </h5>
            </label>
            <input type="file" class="form-control-file" id="immagine" placeholder="url dell'immagine" name="immagine">
        </div>

        <div>
            <button type="submit" class="btn btn-success mt-3">Crea</button>
        </div>

    </form>
</div>

@endsection

<style>
    .white{
        color: white;
    }
</style>