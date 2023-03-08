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
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Status Barang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->status == '1' ? 'ada' : 'hidden' }}</td>
                                <td>
                                    <a href="{{ url('barang/'.$item->id.'/edit') }}" class="btn btn-success">edit</a>
                                    <a href="" class="btn btn-danger">delete</a>
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
