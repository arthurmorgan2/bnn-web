<div class="row row-cols-1 row-cols-md-2 g-4">
    @foreach ($artikel as $item)
        <div class="col-md-6">
            <a href="{{ url('/berita/' . $item->slug) }}">
                <div class="card shadow">
                    <div class="row">
                        <div class="col d-flex justify-content-center align-items-center">
                            <img src="{{ asset('uploads/' . $item->gambar_artikel) }}"
                                class="card-news-img mt-4 rounded-5" alt="Gambar Artikel" />
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-news-cat mb-2">
                            {{ $item->kategori->nama_kategori }}
                        </div>
                        <div class="card-news-title">{{ $item->judul }}
                        </div>
                    </div>
                </div>
            </a>

        </div>
    @endforeach
</div>
<div class="row row-cols-md-2">
    <div class="col-md-12 text-center d-flex justify-content-center align-items-center">
        {!! $artikel->links() !!}
    </div>
</div>
</div>
