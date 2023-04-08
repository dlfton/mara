<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Barang Detail</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="viewBarang">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">nama
                            barang</label>
                        <input type="text" id="disabledTextInput" class="form-control" wire:model="nama">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">kategori</label>
                        <input type="text" id="disabledTextInput" class="form-control" wire:model="kategori_id">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">series</label>
                        <input type="text" id="disabledTextInput" class="form-control" wire:model="anime">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">gambar</label>
                        <img src="{{ asset('uploads/barang/'. 'wire:model="nama"') }}" alt="" width="20" height="200"
                            class="card-img-top mb-2">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">deskripsi</label>
                        <input type="text" id="disabledTextInput" class="form-control" wire:model="desc">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
