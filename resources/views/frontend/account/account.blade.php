@extends('layouts.app')

@section('title', 'cart')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body fw-bold">
                        @if (session('msg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('msg') }}
                        </div>
                    @endif
                        <h1>{{ Auth::user()->name }} Account</h1>
                        <form action="{{ route('update.member')}}" method="POST" enctype="multipart/form-data" role="form" novalidate>
                            @csrf
                            @method('PUT')
                            {{-- nama --}}
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginName">Nama Lengkap</label>
                                <input type="text" id="loginName" class="form-control @error('name')is-invalid @enderror"
                                    name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-outline mb-4 ">
                                <label class="form-label" for="loginName">Email</label>
                                <input type="email" id="loginName" class="form-control @error('email')is-invalid @enderror"
                                    name="email" value="{{ old('email',$user->email) }}" required autocomplete="email" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginName">No. Telpon</label>
                                <input type="number" id="loginName" class="form-control @error('phone')is-invalid @enderror"
                                    name="phone" value="{{ old('phone',$user->phone) }}" required autocomplete="phone" />
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginName">Alamat Lengkap</label>
                                <input type="text" id="loginName" class="form-control @error('alamat')is-invalid @enderror"
                                    name="alamat" value="{{ old('alamat',$user->alamat) }}" required autocomplete="alamat" />
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary text-white">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection