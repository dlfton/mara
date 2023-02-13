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
                    <form action="{{ url('kategori/admin') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginName">Nama Barang</label>
                                <input type="text" id="loginName"
                                    class="form-control @error('name')is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus />

                                @error('name')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- slug --}}
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginName">Slug</label>
                                <input type="text" id="loginName"
                                    class="form-control @error('slug')is-invalid @enderror" name="slug"
                                    value="{{ old('slug') }}" required autocomplete="slug" autofocus />

                                @error('slug')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- deskripsi --}}
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
                            {{-- gambar --}}
                            <div class="form-outline mb-4 col-8">
                                <label class="form-label" for="loginName">Gambar Barang</label>
                                <input type="file" id="loginName"
                                    class="form-control @error('image')is-invalid @enderror" name="image"
                                    value="{{ old('image') }}" required autocomplete="image" autofocus />

                                @error('image')
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
                            {{-- Meta Title --}}
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginName">Meta Title</label>
                                <input type="text" id="loginName"
                                    class="form-control @error('meta_title')is-invalid @enderror" name="meta_title"
                                    value="{{ old('meta_title') }}" required />

                                @error('meta_title')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- meta keyword --}}
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginName">Meta Keyword</label>
                                <textarea id="loginName" class="form-control @error('meta_keyword')is-invalid @enderror" name="meta_keyword"
                                    value="{{ old('meta_keyword') }}" rows="3" required></textarea>

                                @error('meta_keyword')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            {{-- meta deskripsi --}}
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginName">Meta Deskripsi</label>
                                <textarea id="loginName" class="form-control @error('meta_desc')is-invalid @enderror" name="meta_desc"
                                    value="{{ old('meta_desc') }}" rows="3" required></textarea>

                                @error('meta_desc')
                                    <span class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
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
