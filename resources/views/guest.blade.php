<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CRSF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Marahobina Store</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>
@livewireScripts
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                Marahobina
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" class=""><button
                                        class="btn btn-primary text-white">Login</button></a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
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
        <livewire:guest.page />

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
