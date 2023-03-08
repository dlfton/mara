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
                    <h3>Edit Barang</h3>
                    <hr>
                    <div class=""></div>
                    {{-- form --}}
                    <form action="{{ url('admin/'.$item->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginName">Nama Barang</label>
                                <input type="text" id="loginName"
                                    class="form-control @error('nama')is-invalid @enderror" name="nama"
                                    value="{{ $item->nama }}" required autocomplete="nama" autofocus />

                                @error('nama')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginName">kategori</label>
                                <select name="kategori_id" id="" class="form-control">
                                    <option value="">-- pilih --</option>
                                    @foreach ($ket as $kt)
                                    <option value="{{ $kt->id }}"{{ old('kategori_id', $item->kategori_id) == $kt->id ? 'selected' : null }}>{{ $kt->kategori_id }}</option>
                                    @endforeach
                                </select>
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
                                    value="{{ old('anime',$item->anime) }}" required autocomplete="anime" autofocus />

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
                                    value="{{ $item->harga }}" required autocomplete="harga" autofocus />

                                @error('harga')
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
                                    autocomplete="gambar" autofocus /> <br />
                                <img src="{{ asset('/uploads/category/' . $item->gambar) }}" alt="" width="200"
                                    height="150" />

                                @error('gambar')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- status --}}
                            <div class="form-outline mb-4 col-4">
                                <label class="form-label" for="loginName">Status Barang</label>
                                <input type="checkbox" id="loginName" name="status" {{ $item->status == '1' ? 'checked':'' }} />
                                <br />
                                <div class="form-text">lorem ipsum tidak berguna</div>
                            </div>
                            {{-- Estimasi --}}
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginName">Estimasi</label>
                                <input type="date" id="loginName"
                                    class="form-control @error('estimasi')is-invalid @enderror" name="estimasi"
                                    value="{{ $item->estimasi }}" required />

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
                                    value="{{ $item->desc }}" rows="3" required>{{ $item->desc }}</textarea>

                                @error('desc')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="d-grid col-12 justify-content-md-end">
                                <button type="submit" class="btn btn-primary">update</button>
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