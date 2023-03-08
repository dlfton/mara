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
                <table class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>estimasi Barang</th>
                            <th>Status Barang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->kategori->kategori_id }}</td>
                                <td>{{ $item->estimasi }}</td>
                                <td>{{ $item->status == '1' ? 'ada' : 'hidden' }}</td>
                                <td class="d-flex gap-2 justify-content-center">
                                    <a href="{{ url('barang/'.$item->id.'/edit') }}" class="btn btn-success">edit</a>
                                    {{-- <a href="" class="btn btn-danger">delete</a> --}}
                                    <form action="{{ url('admin/'.$item->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
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
