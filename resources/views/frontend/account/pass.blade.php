@extends('layouts.app')

@section('title', 'change password')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item {{ Request::is('member/account') ? 'active' : '' }}"><a href="{{ route('account.member') }}" class="{{ Request::is('member/account') ? 'text-white' : '' }}">Change Profile</a></li>
                        <li class="list-group-item {{ Request::is('member/password') ? 'active' : '' }}"><a href="{{ route('password.member') }}" class="{{ Request::is('member/password') ? 'text-white' : '' }}">Change Password</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body fw-bold">
                        @if (session('msg'))
                            <div class="alert alert-success" role="alert">
                                {{ session('msg') }}
                            </div>
                        @endif
                        <h1>Change Password</h1>
                        <form action="{{ route('update.password.member') }}" method="POST" enctype="multipart/form-data"
                            role="form" novalidate>
                            @csrf
                            @method('PUT')
                            {{-- nama --}}
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginName">Old Password</label>
                                <input type="password" id="loginName"
                                    class="form-control @error('old_password')is-invalid @enderror" name="old_password"
                                    value="{{ old('old_password') }}" required autocomplete="name" placeholder="old password . . ." />
                                @error('old_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginName">New Password</label>
                                <input type="password" id="loginName"
                                    class="form-control @error('new_password')is-invalid @enderror" name="new_password"
                                    value="{{ old('new_password') }}" required autocomplete="name" placeholder="new password . . ." />
                                @error('new_password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="loginName">Confirm Password</label>
                                <input type="password" id="loginName"
                                    class="form-control @error('new_password_confirmation')is-invalid @enderror"
                                    name="new_password_confirmation" value="{{ old('new_password_confirmation') }}" required
                                    autocomplete="name" placeholder="confirm password . . ." />
                                @error('new_password_confirmation')
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
