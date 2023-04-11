<div>
    <section id="brng">
        <div class="col-4 offset-8 py-5">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search . . ." aria-label="Search"
                    wire:model="search">
                {{-- <button class="btn btn-outline-primary" type="submit">Search</button> --}}
            </form>
        </div>

        {{-- barang --}}
        <div class="row row-cols-1 row-cols-md-4 g-4 mb-4" id="barang">
            @foreach ($barang as $item)
                <div class="col">
                    <div class="card p-2">
                        {{-- <img src="{{ asset('img/kirito-Preorder.jpg') }}" alt="" width="50" height="200" class="card-img-top mb-2"> --}}
                        <img src="{{ asset('uploads/barang/' . $item->gambar) }}" alt="" width="50"
                            height="200" class="card-img-top mb-2">
                        {{-- <div class="card-body"> --}}
                        <p class="text-small mb-0">Anime: {{ $item->anime }}</p>
                        <h2 class="fw-bolder">{{ $item->nama }}</h2>
                        <p class="text-primary fw-bold">IDR. {{ $item->harga }}.000,00</p>
                        <p class="fw-bold">batas terakhir PO: {{ date('d-m-Y', strtotime($item->estimasi)); }}</p>
                        <div class="d-grid gap-2">
                            @guest
                                @if (Route::has('login'))
                                <a href="{{ url('product/' . $item->id) }}" class="btn btn-primary text-white">Pre-Order</a>
                                @endif
                                @else
                                <a href="{{ url('product/' . $item->id) }}" class="btn btn-primary text-white">Pre-Order</a>
                            @endguest
                        </div>
                        {{-- </div> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
