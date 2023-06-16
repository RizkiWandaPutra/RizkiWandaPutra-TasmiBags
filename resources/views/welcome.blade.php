@extends('layouts.app')


@section('content')
<div class="container-lg">
    <div class="row">
    
    <div class="col-lg-12 mt-2">
        <div class="card">
            </div>
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('welcome') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Produk</a></li>
                    </ol>
                  </nav>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">TasmiBags</h5>
                    <p class="card-text">Menjual Tas dan Sepatu</p>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/tasmi/tasmi3.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/tasmi/tasmi4.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
