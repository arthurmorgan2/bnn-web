   @extends('layouts.client.main')


   @section('content')
       {{-- News Content Section --}}
       <section class="news-content">
           {{-- Carousel Section --}}
           <div class="container carousel-container">
               <div id="carouselMaterialStyle" class="carousel slide carousel-fade" data-mdb-ride="carousel">
                   <!-- Indicators -->
                   <div class="carousel-indicators">
                       <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="0" class="active"
                           aria-current="true" aria-label="Slide 1"></button>
                       <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="1"
                           aria-label="Slide 2"></button>
                       <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="2"
                           aria-label="Slide 3"></button>
                   </div>

                   <!-- Inner -->
                   <div class="carousel-inner shadow-4-strong">
                       <!-- Single item -->
                       <div class="carousel-item active">
                           <img src="images/carousel1.jpeg" class="d-block w-100" alt="Sunset Over the City" />

                       </div>
                       <!-- Single item -->
                       <div class="carousel-item active">
                           <img src="images/carousel1.jpeg" class="d-block w-100" alt="Sunset Over the City" />

                       </div>
                       <!-- Single item -->
                       <div class="carousel-item active">
                           <img src="images/carousel1.jpeg" class="d-block w-100" alt="Sunset Over the City" />

                       </div>
                   </div>
                   <!-- Inner -->

                   <!-- Controls -->
                   <button class="carousel-control-prev" type="button" data-mdb-target="#carouselMaterialStyle"
                       data-mdb-slide="prev">
                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Previous</span>
                   </button>
                   <button class="carousel-control-next" type="button" data-mdb-target="#carouselMaterialStyle"
                       data-mdb-slide="next">
                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                       <span class="visually-hidden">Next</span>
                   </button>
               </div>
           </div>
           {{-- Berita Terbaru Section --}}
           <div class="container">
               <div class="row">
                   <div class="col-md-9">
                       <div class="content-title text-center rounded fw-bold">Berita Terbaru</div>
                       <div class="card-data">
                           <div class="row row-cols-1 row-cols-md-2 g-4">
                               @foreach ($artikel as $item)
                                   <a href="{{ url('/berita/' . $item->slug) }}" class="">
                                       <div class="col m-0">
                                           <div class="card">
                                               <img src="{{ asset('uploads/' . $item->gambar_artikel) }}"
                                                   class="card-img-top" alt="Gambar Artikel" />
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
                           <div class="row">
                               <div class="col-md-12 text-center d-flex justify-content-center align-items-center">
                                   {!! $artikel->links() !!}
                               </div>
                           </div>
                       </div>
                   </div>

                   {{-- Berita Populer Section --}}
                   <div class="col-md-3 mt-5 border-left-0">
                       <h3 class="content-title-2 text-center p-3 m-0">Berita <span
                               class="populer-underline fw-bold rounded">Populer</span>
                       </h3>
                       @foreach ($post_populer as $item)
                           <a href="{{ url('/berita/' . $item->slug) }}">
                               <div class="row card-populer">
                                   <div class="col d-flex justify-content-center align-items-center">
                                       <div class="card m-0 w-75">
                                           <img src="{{ asset('uploads/' . $item->gambar_artikel) }}" class="card-img-top"
                                               alt="Gambar Artikel" />
                                           <div class="card-body">
                                               <h5 class="card-title">{{ $item->judul }}</h5>
                                               <p class="card-text">
                                                   {{ Str::words($item->body, 5, ' ...') }}
                                               </p>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </a>
                       @endforeach


                   </div>
               </div>

           </div>

       </section>
       
   @endsection
