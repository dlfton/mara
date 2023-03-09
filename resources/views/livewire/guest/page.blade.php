<div>
    <section id="brng">
        <div class="col-4 offset-8 py-5">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>

        {{-- barang --}}
        <div class="row row-cols-1 row-cols-md-4 g-4 mb-4" id="barang">
                @foreach ($barang as $a)
                <div class="col">
                    <div class="card p-2">
                        {{-- <img src="{{ asset('img/kirito-Preorder.jpg') }}" alt="" width="50" height="200" class="card-img-top mb-2"> --}}
                        <img src="{{ asset('uploads/barang/'.$a->gambar) }}" alt="" width="50" height="200" class="card-img-top mb-2">
                        {{-- <div class="card-body"> --}}
                        <h3 class="fw-bold">{{ $a->nama }}</h3>
                        <p>{{ $a->harga }}</p>
                        <p>{{ $a->estimasi }}</p>
                        <div class="d-grid gap-2">
                            <a href="" class="btn btn-primary text-white">Pre-Order</a>
                        </div>
                        {{-- </div> --}}
                    </div>
                </div>
                @endforeach
            </div>
    </section>
</div>