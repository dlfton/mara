<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css',]) --}}
    <!-- FontAwesome JS-->
    <script defer src="{{ asset('assets/plugins/fontawesome/js/all.min.js') }}"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/portal.css') }}">

</head>

<body class="app">
    @include('layouts.adminNav')
    {{-- content --}}
    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <div class="app-card shadow-sm mb-4 p-4">
                    <h3>Tambah Barang</h3>
                    <hr>
                    <div class=""></div>
                    {{-- form --}}
                    <form action="{{ url('admin/home') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginName">Nama Barang</label>
                                <input type="text" id="loginName"
                                    class="form-control @error('nama')is-invalid @enderror" name="nama"
                                    value="{{ old('nama') }}" required autocomplete="nama" autofocus />

                                @error('nama')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- kategori id --}}
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginName">kategori</label>
                                <select name="kategori_id" id="" class="form-control">
                                    <option value="">- pilih -</option>
                                    @foreach ($ket as $item)
                                    <option value="{{ $item->id }}">{{ $item->kategori_id }}</option>
                                    @endforeach
                                </select>
                                {{-- <input type="text" id="loginName"
                                    class="form-control @error('kategori_id')is-invalid @enderror" name="kategori_id"
                                    value="{{ old('kategori_id') }}" required autocomplete="kategori_id" autofocus /> --}}

                                @error('kategori_id')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- Serial Anime --}}
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginName">Serial Anime</label>
                                <input type="text" id="loginName"
                                    class="form-control @error('anime')is-invalid @enderror" name="anime"
                                    value="{{ old('anime') }}" required autocomplete="anime" autofocus />

                                @error('anime')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- harga --}}
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginName">Harga</label>
                                <input type="number" id="loginName"
                                    class="form-control @error('harga')is-invalid @enderror" name="harga"
                                    value="{{ old('harga') }}" required autocomplete="harga" autofocus />

                                @error('harga')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- jumlah --}}
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginName">Jumlah</label>
                                <input type="number" id="loginName"
                                    class="form-control @error('jumlah')is-invalid @enderror" name="jumlah"
                                    value="{{ old('jumlah') }}" required autocomplete="jumlah" autofocus />

                                @error('jumlah')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- gambar --}}
                            <div class="form-outline mb-4 col-8">
                                <label class="form-label" for="loginName">Gambar Barang</label>
                                <input type="file" id="loginName"
                                    class="form-control @error('gambar')is-invalid @enderror" name="gambar"
                                    value="{{ old('gambar') }}" autocomplete="gambar" autofocus />

                                @error('gambar')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- status --}}
                            <div class="form-outline mb-4 col-4">
                                <label class="form-label" for="loginName">Status Barang</label>
                                <input type="checkbox" id="loginName" name="status" /> <br />
                                <div class="form-text">lorem ipsum tidak berguna</div>
                            </div>
                            {{-- Estimasi --}}
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginName">Estimasi</label>
                                <input type="date" id="loginName"
                                    class="form-control @error('estimasi')is-invalid @enderror" name="estimasi"
                                    value="{{ old('estimasi') }}" required />

                                @error('estimasi')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- desc --}}
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginName">Deskripsi</label>
                                <textarea id="loginName" class="form-control @error('desc')is-invalid @enderror" name="desc"
                                    value="{{ old('desc') }}" rows="3" required></textarea>

                                @error('desc')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- submit --}}
                            <div class="d-grid col-12 justify-content-md-end">
                                <button type="submit" class="btn btn-primary">submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!--//app-card-->
    </div>
    <!--//app-wrapper-->

    @include('layouts.adminFooter')
</body>

</html>
