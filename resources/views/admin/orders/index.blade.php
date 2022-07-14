@extends('layouts.app')

{{-- {{ dd($user_id) }}
{{ dd($restaurants) }} --}}
@section('content')
<div class="bg-view">
    <div class="container pt-5">

        @if ( session('message') )
        <div class="alert alert-info">
            {{ session('message') }}
        </div>
        @endif
 
        <button class="btn btn-info border border-info ">
            <a class="personal-a text-white" href="{{route('admin.restaurants.index')}}"><i
                    class="fa-solid fa-arrow-left mr-2"></i>Torna alle tue attività</a>
        </button>

        <h2 class="text-center text-white text-uppercase mt-5">riepilogo Ordini ricevuti</h2>
        <div class="d-flex justify-content-center">
            <table class="table text-center w-75">
            <thead class="bg-white ">
                <tr>
                    <th scope="col">Data ordine</th>
                    <th scope="col">Nome del ordinante</th>
                    <th scope="col">Cognome del ordinante</th>
                    <th scope="col">Totale ordine</th>
                </tr>
            </thead>
            <tbody class="bg-white">
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
                </tr>
                @empty
                <h2> Non ci sono ordini</h2>
                @endforelse

            </tbody>
        </table>
        </div>
        

        </table>
    </div>
</div>

@endsection
<style>
    .bg-view {
        height: 100vh;
        background: rgb(11, 99, 184);
        background: linear-gradient(0deg, rgba(11, 99, 184, 1) 18%, rgba(75, 138, 191, 1) 45%, rgba(255, 255, 255, 1) 100%);
    }

    .table {
        width: 40%;
        padding: 10px;
        background-color: #FFF;
        color: #000;
        opacity: 0.7;
    }

</style>
