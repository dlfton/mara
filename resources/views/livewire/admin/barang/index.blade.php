@include('livewire.admin.barang.view')
<div class="app-wrapper">
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <div class="app-card shadow-sm mb-4 p-4">
                <div class="row">
                    @if (session('msg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('msg') }}
                        </div>
                    @endif
                    <div class="col-6">
                        <h1 class="app-page-title"></i> &nbsp;Barang</h1>
                    </div>
                    <div class="col-6 text-end">
                        <a href="{{ route('barang.tambah') }}" class="btn btn-primary"><i
                                class="fa-regular fa-square-plus"></i>&nbsp;Tambah Barang</a>
                    </div>
                </div>
                {{-- datatables --}}
                <table class="table table-bordered table-striped text-center align-items-center">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>Series</th>
                            <th>Gambar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $item)
                            <tr class="align-middle">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->kategori->kategori_id }}</td>
                                <td>{{ $item->anime }}</td>
                                <td><img src="{{ asset('uploads/barang/' . $item->gambar) }}" alt=""
                                        width="2" height="40" class="card-img-top mb-2 rounded-circle"></td>
                                <td class="d-flex gap-2 justify-content-center">
                                    <a href="{{ url('barang/' . $item->id . '/edit') }}" class="text-primary"><i
                                            class="fas fa-fw fa-pen-to-square"></i></a>
                                    {{-- <a href="" class="btn btn-danger">delete</a> --}}
                                    |
                                    <form action="{{ url('admin/' . $item->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-primary border-0"><i
                                                class="fas fa-fw fa-trash"></i></button>
                                    </form>
                                    |
                                    <button type="button" class="text-primary border-0" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal-{{ $item->id }}"><i
                                            class="fas fa-eye"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="">
                    {{ $barang->links() }}
                </div>
            </div>
        </div>
    </div>
    <!--//app-card-->
</div>

@foreach ($barang as $data)
<!-- Modal -->
<div class="modal fade" id="exampleModal-{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Barang Detail</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <fieldset disabled="disabled">
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">nama
                            barang</label>
                        <input type="text" id="disabledTextInput" class="form-control" value="{{ $data->nama }}"
                            placeholder="Disabled input">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">kategori</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"
                            value="{{ $data->kategori->kategori_id }}">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">series</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"
                            value="{{ $data->anime }}">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">gambar</label><br>
                        <img src="{{ asset('uploads/barang/' . $data->gambar) }}" alt="" width="400" height="400" class="img-fluid mb-2">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">deskripsi</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input"
                            value="{{ $data->desc }}">
                    </div>
                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach