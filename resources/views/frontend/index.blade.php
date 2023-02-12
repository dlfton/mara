@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Member Page') }}</div>

                    <div class="card-body">
                        @guest
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                <h2>ini udah login member</h2>
                                <p>{{ $msg }}</p>
                                {{ __('You are logged in!') }}
                            @else
                                <h2>ini belum login member</h2>
                            @endif
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
