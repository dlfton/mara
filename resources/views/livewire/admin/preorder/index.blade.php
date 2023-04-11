<div>
    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <div class="app-card shadow-sm mb-4 p-4">
                    <div class="row">
                        {{-- @if ($updateKate)
                            @include('livewire.admin.kategori.update')
                        @else
                            @include('livewire.admin.kategori.add')
                        @endif --}}
                        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session()->get('success') }}
                            </div>
                        @endif

                        @if (session()->has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                        <div class="col-6">
                            <h1 class="app-page-title"></i> &nbsp;Pre-Order</h1>
                        </div>
                        <div class="col-6 text-end">
                            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#tambahmodal"><i class="fa-regular fa-square-plus"></i>&nbsp;Tambah
                                Kategori</button> --}}
                        </div>
                    </div>
                    {{-- datatables --}}
                    <table class="table table-bordered table-striped text-center align-items-center">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Status Pre-Oder</th>
                                <th>Tanggal Pemesanan</th>
                                <th>Nama Barang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pre as $x)
                                <tr class="align-middle">
                                    <td>{{ $loop->iteration }}</td>
                                    <td></td>

                                    <td class="d-flex gap-2 justify-content-center">
                                        <button wire:click="edit({{ $x->id }})" class="text-primary border-0"
                                            data-bs-toggle="modal" data-bs-target="#editmodal"><i
                                                class="fas fa-fw fa-pen-to-square"></i></button>
                                        |
                                        <button onclick="deleteKate({{ $x->id }})"
                                            class="text-primary border-0"><i class="fas fa-fw fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--//app-card-->
    </div>
</div>
