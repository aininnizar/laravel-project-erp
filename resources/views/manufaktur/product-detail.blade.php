@extends('sidebar')

@section('title', 'Manufaktur')
@section('pageTitle', 'Manufaktur')
@section('pageSubTitle', 'Detail Produk')

@section('content')
<div class="card mx-auto my-5" style="max-width: 50rem;">
    <div class="card-header text-center fw-bold fs-2 text-black">Detail Produk</div>
    <div class="card-body">
        <div class="row p-2 mt-2">
            <div class="col-sm-6 col-md-8">
                <p class="fw-bold m-0">Nama Produk</p>
                <p class="m-0">JAM</p>
            </div>
            <div class="col-sm-6 col-md-4 text-end">
                <img src="{{ asset('img/jam-dinding.png') }}" style="max-width: 5rem;" alt="">
            </div>
        </div>

        
            <div class="row">
                <div class="col-md-6">
                    <ol class="list-group">
                        <li class="d-flex justify-content-between align-items-start py-1">
                            <div class="ms-2 me-auto">
                                <div class="fw-normal text-black">Harga</div>
                                <div class="fw-light">Rp. 1000</div>
                            </div>
                        </li>
                        <li class="d-flex justify-content-between align-items-start py-1">
                            <div class="ms-2 me-auto">
                                <div class="fw-normal text-black">Biaya</div>
                                <div class="fw-light">Rp. 1000</div>
                            </div>
                        </li>
                        <li class="d-flex justify-content-between align-items-start py-1">
                            <div class="ms-2 me-auto">
                                <div class="fw-normal text-black">Kategori Produk</div>
                                <div class="fw-light">Rp. 1000</div>
                            </div>
                        </li>
                    </ol>
                </div>
                <div class="col-md-6">
                    <ol class="list-group">
                        <li class="d-flex justify-content-between align-items-start py-1">
                            <div class="ms-2 me-auto">
                                <div class="fw-normal text-black">Referensi Internal</div>
                                <div class="fw-light">Rp. 1000</div>
                            </div>
                        </li>
                        <li class="d-flex justify-content-between align-items-start py-1">
                            <div class="ms-2 me-auto">
                                <div class="fw-normal text-black">Barcode</div>
                                <div class="fw-light">Rp. 1000</div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        
    </div>
    <div class="card-footer">
        <div class="text-end">
            <button type="submit" class="btn btn-secondary btn-sm">Print</button>
            <button type="submit" class="btn btn-warning btn-sm">Edit</button>
        </div>
    </div>
</div>




@endsection
