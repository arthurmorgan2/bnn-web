   @extends('layouts.main')


   @section('content')
       {{-- News Content Section --}}
       <section class="news-content">
           {{-- Carousel Section --}}
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
                       <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(15).webp" class="d-block w-100"
                           alt="Sunset Over the City" />

                   </div>

                   <!-- Single item -->
                   <div class="carousel-item">
                       <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp" class="d-block w-100"
                           alt="Canyon at Nigh" />

                   </div>

                   <!-- Single item -->
                   <div class="carousel-item">
                       <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(23).webp" class="d-block w-100"
                           alt="Cliff Above a Stormy Sea" />

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
           <!-- Carousel wrapper -->
           {{-- Berita Terbaru Section --}}
           <div class="container-fluid bg-success">
               <div class="row">
                   <div class="col-md-9">
                       <div class="content-title text-center">Berita Terbaru</div>
                       <div class="row row-cols-1 row-cols-md-2 g-4">
                           <div class="col m-0">
                               <div class="card">
                                   <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top"
                                       alt="Hollywood Sign on The Hill" />
                                   <div class="card-body">
                                       <h5 class="card-title">Card title</h5>
                                       <p class="card-text">
                                           This is a longer card with supporting text below as a natural lead-in to
                                           additional content. This content is a little bit longer.
                                       </p>
                                   </div>
                               </div>
                           </div>
                           <div class="col m-0">
                               <div class="card">
                                   <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top"
                                       alt="Hollywood Sign on The Hill" />
                                   <div class="card-body">
                                       <h5 class="card-title">Card title</h5>
                                       <p class="card-text">
                                           This is a longer card with supporting text below as a natural lead-in to
                                           additional content. This content is a little bit longer.
                                       </p>
                                   </div>
                               </div>
                           </div>
                           <div class="col m-0">
                               <div class="card">
                                   <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top"
                                       alt="Hollywood Sign on The Hill" />
                                   <div class="card-body">
                                       <h5 class="card-title">Card title</h5>
                                       <p class="card-text">
                                           This is a longer card with supporting text below as a natural lead-in to
                                           additional content. This content is a little bit longer.
                                       </p>
                                   </div>
                               </div>
                           </div>
                           <div class="col m-0">
                               <div class="card">
                                   <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top"
                                       alt="Hollywood Sign on The Hill" />
                                   <div class="card-body">
                                       <h5 class="card-title">Card title</h5>
                                       <p class="card-text">
                                           This is a longer card with supporting text below as a natural lead-in to
                                           additional content. This content is a little bit longer.
                                       </p>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-3 bg-danger">
                       <h3 class="content-title-2 text-center p-3 m-0">Berita Populer</h3>
                       <div class="row card-populer">
                           <div class="col d-flex justify-content-center align-items-center">
                               <div class="card m-0 w-75">
                                   <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top"
                                       alt="Hollywood Sign on The Hill" />
                                   <div class="card-body">
                                       <h5 class="card-title">Card title</h5>
                                       <p class="card-text">
                                           This is a longer card with supporting
                                       </p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="row card-populer">
                           <div class="col d-flex justify-content-center align-items-center">
                               <div class="card m-0 w-75">
                                   <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class="card-img-top"
                                       alt="Hollywood Sign on The Hill" />
                                   <div class="card-body">
                                       <h5 class="card-title">Card title</h5>
                                       <p class="card-text">
                                           This is a longer card with supporting
                                       </p>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="container-fluid w-100 bg-warning">
               <h1>Next Content Container</h1>
           </div>
       </section>
   @endsection
