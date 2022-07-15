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
                            <span class="dataOrdine">{{ $order->data_ordine}}</span>
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
                <div class="container">
                    <canvas id="myCanvas">

                    </canvas>
                </div>
            </table>
        </div>


        </table>
    </div>
</div>

@endsection

{{-- @section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js">
</script>
<script>
    let data = document.querySelectorAll('dataOrdine');
    let test = Array.from(data)
    let myCanvas = document.getElementById("myCanvas").getContext('2d');
    let mesi = ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre',
        'Ottobre', 'Novembre', 'Dicembre'
    ];
    //let chart = new Chart();
    console.log(test);
</script>
@endsection --}}
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
