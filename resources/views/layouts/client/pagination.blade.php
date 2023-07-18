<div class="row row-cols-1 row-cols-md-2 g-4">
    @foreach ($artikel as $item)
        <a href="{{ url('/berita/' . $item->slug) }}" class="">
            <div class="col m-0">
                <div class="card">
                    <img src="{{ asset('uploads/' . $item->gambar_artikel) }}" class="card-img-top" alt="Gambar Artikel" />
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $item->judul }}
                        </h5>
                        <div class="card-text">

                            {{ Str::words($item->body, 15, ' ...') }}

                        </div>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
</div>
<div class="row row-cols-md-2">
    <div class="col-md-12 text-center d-flex justify-content-center align-items-center">
        {!! $artikel->links() !!}
    </div>
</div>
</div>
