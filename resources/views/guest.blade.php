@extends('layouts.app')
@livewireScripts

@section('content')
<body>
    
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

        {{-- section catagories --}}
        <section id="kategori" class="my-5">

            <h1 class="text-center text-primary fw-bold mb-5">Categories</h1>

            <div class="row row-cols-1 row-cols-md-3 g-3 justify-content-between">
                <div class="col">
                    <a href=""><img src="{{ asset('./img/kt-1.svg') }}" class="card-img-top" alt="nendroid"></a>
                </div>
                <div class="col">
                    <a href=""><img src="{{ asset('./img/kt-2.svg') }}" class="card-img-top" alt=""></a>
                </div>
                <div class="col">
                    <a href=""><img src="{{ asset('./img/kt-3.svg') }}" class="card-img-top" alt=""></a>
                </div>
            </div>


        </section>

        {{-- section req order --}}
        <section id="req">
            <div class="field p-4">
                <h1 class="text-center fw-bold">Item For Request Order</h1>

            </div>
        </section>

        {{-- section barang --}}
        <livewire:member.page />

        {{-- section footer --}}
        <section id="ftr">
            <div class="field-ftr p-5">
                <h1 class="fw-bold text-primary">Marahobina. We're Here!</h1>
                <p class="text-white">Contact Us:</p>
                <div class="flex">
                    <a href=""><i class='bx bxl-instagram' style="font-size: 2rem"></i></a>
                    <a href=""><i class='bx bxl-whatsapp' style="font-size: 2rem"></i></a>
                </div>
                <p class="text-white">copyright &copy; {{ date('Y') }} Marahobina</p>

                <div class="d-flex justify-content-end">
                    {{-- <div class="form-check align-self-center">
                        <input class="form-check-input" type="checkbox" value="" id="loginCheck"
                            {{ old('remember') ? 'checked' : '' }} />
                        <label class="form-check-label" for="loginCheck"> {{ __('Remember Me') }} </label>
                    </div> --}}
                    <div class="m-0">
                        <a href="#" class="me-5 text-decoration-none text-white">terms and service</a>
                        <a href="#" class="text-decoration-none text-white">privacy policy</a>
                    </div>
                </div>
            </div>
        </section>
        {{-- end container --}}
    </div>
    @livewireScripts
</body>

</html>
@endsection