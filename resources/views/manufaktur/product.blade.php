@extends('sidebar')

@section('title', 'Manufaktur')

@section('pageTitle', 'Manufaktur')
@section('pageSubTitle', 'Data Produk')

@section('content')

    <div class="row">

        <div class="col-lg-4 col-md-6 col-sm-6">
            <a href="{{ url('manufaktur/product-detail') }}">
                <div class="card mb-3" style="max-width:540px;">
                    <div class="row g-0">
                        <div class="m-auto col-md-4 col-sm-6 sm-m-auto text-center">
                            <img src="{{ asset('img/jam-dinding.png') }}" class="img-fluid " alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title m-0">JAM</h5>
                                <p class="card-text m-0">[JAM]</p>
                                <p class="card-text m-0"><small class="text-muted">Harga: Rp 1000</small></p>
                                <p class="card-text m-0"><small class="text-muted">On Hand: 1</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>


@endsection
