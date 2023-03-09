@extends('layouts.app')
@section('content')

    <div class="container py-2">
        {{-- main content --}}
        <div class="field p-4">
            <div class="row mt-4">
                <div class="col-6 align-self-center">
                    <h1><b>The Most Complete Place To Meet Hobbyist Needs</b></h1>
                    <a href="#barang" class="btn btn-dark text-primary rounded-pill">Buy Now!</a>
                </div>
                <div class="col-6 align-self-end"><img src="{{ asset('./img/eva-01.svg') }}" alt="eva-01"></div>
            </div>
        </div>
    </div>
@endsection
