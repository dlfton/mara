@extends('layouts.app')
@section('content')
    <div class="container py-2">
        {{-- main content --}}
        <div class="field p-4">
            <div class="row mt-4">
                <div class="col-md-6">
                    <img src="{{ asset('uploads/barang/' . $item->gambar) }}" alt="" width="100%" height="100%">
                </div>
                <div class="col-md-6 align-self-top">
                    <form action="">
                        <h2>{{ $item->nama }}</h2>
                        <h2>{{ $item->harga }}</h2>
                        <h2>Spesifikasi</h2>
                        <h4>{{ $item->desc }}</h4>
                        <h2>informasi</h2>
                        <p>Serial : {{ $item->anime }}</p>
                        <p>kategori : {{ $item->kategori->kategori_id }}</p>
                        <p>jumlah : {{ $item->jumlah }}</p>
                        <button>Pre-Order</button>
                        <button>Cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
