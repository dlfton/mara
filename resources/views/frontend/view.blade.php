@extends('layouts.app')

@section('content')
    @livewireScripts

    <div class="container py-2">
        {{-- main content --}}
        <div class="field p-4">
            <div class="row mt-4">
                <div class="col-md-6">
                    <img src="{{ asset('uploads/barang/' . $item->gambar) }}" alt="" width="100%" height="100%">
                </div>
                <div class="col-md-6 align-self-top">
                    <form action="">
                        <h1 class="fw-bold text-primary mb-2">{{ $item->nama }}</h1>
                        <h3>IDR {{ $item->harga }}.000,00</h3>
                        <h4>Spesifikasi</h4>
                        <h6 class="text-break">{{ $item->desc }}</h6>
                        <h2>informasi</h2>
                        <p>Serial : {{ $item->anime }}</p>
                        <p>kategori : {{ $item->kategori->kategori_id }}</p>
                        <p>jumlah : {{ $item->jumlah }}</p>
                        @guest
                            @if (Route::has('login'))
                                <a class="btn btn-primary" href="{{ Route('login') }}">Pre-Order</a>
                            @endif
                        @else
                            <a class="btn btn-primary" href="{{ Route('cart.member') }}">Pre-Order</a>
                            <a class="btn btn-outline-dark">Cart</a>
                        @endguest
                    </form>
                </div>
            </div>
        </div>
    </div>

    @livewireScripts
@endsection