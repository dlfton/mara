@extends('layouts.app')

@section('title', 'cart')

@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="fw-bold">Checkout Item Livewire</h1>
                        </div>
                        <div class="card-item p-2">

                            <table class="table table-responsive table-striped text-center align-self-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama Barang</th>
                                        <th>Kategori</th>
                                        <th>Quantity</th>
                                        <th>Harga</th>
                                        <th>Jumlah</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>gambar</td>
                                        <td>Nama Barang</td>
                                        <td>Kategori</td>
                                        <td>Quantity</td>
                                        <td>Harga</td>
                                        <td>Jumlah</td>
                                        <td>Action</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="fw-bold">Payment</h2>
                            <form action="" method="post" method="POST" enctype="multipart/form-data" role="form"
                                novalidate>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="loginName">Nama Lengkap</label>
                                    <input type="text" id="loginName"
                                        class="form-control @error('xxx')is-invalid @enderror" name="xxx"
                                        value="{{ old('xxx') }}" required autocomplete="xxx" />
                                    @error('xxx')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="loginName">Phone</label>
                                    <input type="number" id="loginName"
                                        class="form-control @error('xxx')is-invalid @enderror" name="xxx"
                                        value="{{ old('xxx') }}" required autocomplete="xxx" />
                                    @error('xxx')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="loginName">Address</label>
                                    <input type="text" id="loginName"
                                        class="form-control @error('xxx')is-invalid @enderror" name="xxx"
                                        value="{{ old('xxx') }}" required autocomplete="xxx" />
                                    @error('xxx')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="formFileMultiple">upload transfer receipt</label>
                                    <input type="file" id="formFileMultiple"
                                        class="form-control @error('xxx')is-invalid @enderror" name="xxx"
                                        value="{{ old('xxx') }}" required autocomplete="xxx" />
                                    <div id="emailHelp" class="form-text">Format (JPEG, PNG)</div>
                                    @error('xxx')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary text-white">Order</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
