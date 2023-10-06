   @extends('layouts.client.main')


   @section('content')
       {{-- News Content Section --}}
       <section class="news-content">
           {{-- Carousel Section --}}
           <div class="carouselContainer">
               <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                   <div class="carousel-indicators">
                       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                           aria-current="true" aria-label="Slide 1"></button>
                       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                           aria-label="Slide 2"></button>
                       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                           aria-label="Slide 3"></button>
                       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                           aria-label="Slide 4"></button>
                       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                           aria-label="Slide 5"></button>
                       <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
                           aria-label="Slide 6"></button>
                   </div>
                   <div class="carousel-inner">
                       <div class="carousel-item active">
                           <img src="images/banner.webp" class="d-block w-100" alt="...">
                       </div>
                       <div class="carousel-item">
                           <img src="images/banner2.jpg" class="d-block w-100" alt="...">
                       </div>
                       <div class="carousel-item">
                           <img src="images/banner3.jpg" class="d-block w-100" alt="...">
                       </div>
                       <div class="carousel-item">
                           <img src="images/banner4.jpg" class="d-block w-100" alt="...">
                       </div>
                       <div class="carousel-item">
                           <img src="images/banner5.webp" class="d-block w-100" alt="...">
                       </div>
                   </div>
                   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                       data-bs-slide="prev">
                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Previous</span>
                   </button>
                   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                       data-bs-slide="next">
                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Next</span>
                   </button>
               </div>
           </div>
           {{-- Berita Terbaru Section --}}
           <div class="container">
               <div class="row">
                   <div class="col-md-8">
                       <div class="content-title text-center rounded fw-bold">Berita Terbaru</div>
                       <div class="card-data">
                           <div class="row row-cols-1 row-cols-md-2 g-4">
                               @forelse ($artikel as $item)
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
                                                   <div class="card-news-title"> {{ Str::words($item->judul, 5, ' ...') }}
                                                   </div>
                                                   <div class="post-views mt-2"> <i class="fa-solid fa-eye"></i> <span
                                                           class="fw-bold">{{ $item->views }}</span>
                                                       Kali Dibaca</div>
                                               </div>
                                           </div>
                                       </a>

                                   </div>
                               @empty
                                   <div class="col-md-12 my-5">
                                       <div class="card-text text-center">~ Artikel Tidak Tersedia ~</div>
                                   </div>
                               @endforelse

                           </div>
                           <div class="row">
                               <div class="col-md-12 text-center d-flex justify-content-center align-items-center">
                                   {!! $artikel->links() !!}
                               </div>
                           </div>
                       </div>
                   </div>

                   {{-- Berita Populer Section --}}
                   <div class="col-md-4 mt-5">
                       <h3 class="content-title-2 text-center p-3 m-0">Berita <span
                               class="populer-underline fw-bold rounded">Populer</span>
                       </h3>
                       <div class="row d-flex justify-content-center align-items-top">
                           @foreach ($post_populer as $item)
                               <div class="col-md-8 col-6">
                                   <a href="{{ url('/berita/' . $item->slug) }}">
                                       <div class="card card-populer shadow">
                                           <div class="row">
                                               <div class="col d-flex justify-content-center align-items-center">
                                                   <img src="{{ asset('uploads/' . $item->gambar_artikel) }}"
                                                       class="card-news-img-populer mt-4 rounded-5"
                                                       alt="Gambar Artikel" />
                                               </div>
                                           </div>
                                           <div class="card-body">
                                               <div class="card-news-title-populer">
                                                   {{ Str::words($item->judul, 5, ' ...') }}</div>
                                               <div class="post-views mt-2"> <i class="fa-solid fa-eye"></i> <span
                                                       class="fw-bold">{{ $item->views }}</span>
                                                   Kali Dibaca</div>
                                           </div>
                                       </div>
                                   </a>
                               </div>
                           @endforeach

                       </div>

                   </div>
               </div>

           </div>

       </section>

       <script>
           $(document).ready(function() {
               $('#carouselExample').carousel({
                   interval: 5000, // Set the interval between slides (in milliseconds)
                   pause: 'hover' // Pause on hover
               });
           });
       </script>
   @endsection
