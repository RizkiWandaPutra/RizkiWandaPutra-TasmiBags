@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach($produks as $produk)
        <div class="col-md-3">
            <div class="card" style="width: 12rem;">
                <img src="{{url('img/produk')}}/{{ $produk->gambar }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $produk->nama_produk }}</h5>
                  <p class="card-text">
                    <strong>Harga :</strong> Rp.{{ number_format($produk->harga) }} <br>
                    <strong>Stok : </strong> {{ $produk->stok }} <br>
                    <hr>
                    <strong>Keterangan :</strong> <br>
                    {{ $produk->keterangan}}
                  </p>
                  <a href="{{ url('pesan') }}/{{ $produk->id }}" class="btn btn-primary"><i class="bi bi-cart-plus"></i> Pesan</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
