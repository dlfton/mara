<div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="tambahmodal" tabindex="-1" aria-labelledby="tambahmodalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="tambahmodalLabel">Tambah Kategori</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="loginName">Nama Kateogri</label>
                            <input type="text" id="loginName"
                                class="form-control @error('kategori_id')is-invalid @enderror"
                                value="{{ old('kategori_id') }}" required autocomplete="kategori_id" autofocus
                                wire:model="kategori_id" />

                            @error('kategori_id')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button data-bs-dismiss="modal" aria-label="Close" class="btn btn-secondary">Close</button>
                    <button wire:click.prevent="store()" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</div>
