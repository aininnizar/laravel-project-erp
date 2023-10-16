@extends('sidebar')

@section('title', 'Manufaktur')
@section('pageTitle', 'Manufaktur')
@section('pageSubTitle', 'Tambah Produk Jual')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Dapat Dijual</h5>

            <form class="row g-3">
                <div class="">
                  <label for="price" class="form-label">Harga Jual</label>
                  <input type="number" class="form-control form-control-sm " id="price">
                </div>
                <div class="">
                  <label for="cost" class="form-label">Biaya</label>
                  <input type="number" class="form-control form-control-sm" id="cost">
                </div>
                <div class="">
                  <label for="productCategory" class="form-label">Kategori Produk</label>
                  <input type="text" class="form-control form-control-sm" id="productCategory">
                </div>
                <div class="">
                  <label for="internalReference" class="form-label">Referensi Internal</label>
                  <input type="text" class="form-control form-control-sm" id="internalReference">
                </div>
                <div class="">
                  <label for="barcode" class="form-label">Barcode</label>
                  <input type="text" class="form-control form-control-sm" id="barcode">
                </div>
                <div class="">
                    <label for="formFileSm" class="form-label">Gambar Produk</label>
                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                  </div>
                
                <div class="text-end">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>

        </div>
    </div>
@endsection
