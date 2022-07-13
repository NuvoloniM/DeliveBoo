@extends('layouts.app')

{{-- {{ dd($user_id) }}
{{ dd($restaurants) }} --}}
@section('content')
    <div class="container">

        @if ( session('message') )
            <div class="alert alert-info">
                {{ session('message') }}
            </div>
        @endif

       

        <h1>Ordini ricevuti:</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Data ordine</th>
                    <th scope="col">Nome del ordinante</th>
                    <th scope="col">Cognome del ordinante</th>
                    <th scope="col">prezzo totale</th>
                    <th scope="col">restaurant_id</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                <tr>
                    <td>
                        {{ $order->data_ordine}}
                    </td>
                    <td>
                        {{  $order->nome }}
                    </td>
                    <td>
                        {{  $order->cognome }}
                    </td>
                    <td>
                        {{  $order->prezzo_totale }} €
                    </td>
                    <td>
                        {{  $order->restaurant_id }} 
                    </td>
                </tr>
                @empty
                  <h2> non ci sono post</h2>
                @endforelse

            </tbody>
        </table>
    </div>
@endsection
