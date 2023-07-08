   @extends('layouts.main')


   @section('content')
       {{-- News Content Section --}}
       <section class="news-content">
           <div class="container  bg-success">
               <div class="row">
                   <div class="col-md-9">
                       <h1 class="content-title">News</h1>
                       <div class="row">
                           <div class=" col card-container bg-dark">
                               <div class="card" style="width: 18rem;">
                                   <img src="https://fakeimg.pl/300/" class="card-img-top" alt="...">
                                   <div class="card-body">
                                       <h5 class="card-title">Card title</h5>
                                       <p class="card-text">Some quick example text to build on the card title and make up
                                           the bulk
                                           of the
                                           card's content.</p>
                                       <a href="#" class="btn btn-primary">Go somewhere</a>
                                   </div>
                               </div>
                           </div>
                           <div class=" col card-container bg-dark">
                               <div class="card" style="width: 18rem;">
                                   <img src="https://fakeimg.pl/300/" class="card-img-top" alt="...">
                                   <div class="card-body">
                                       <h5 class="card-title">Card title</h5>
                                       <p class="card-text">Some quick example text to build on the card title and make up
                                           the bulk
                                           of the
                                           card's content.</p>
                                       <a href="#" class="btn btn-primary">Go somewhere</a>
                                   </div>
                               </div>
                           </div>
                           <div class=" col card-container bg-dark">
                               <div class="card" style="width: 18rem;">
                                   <img src="https://fakeimg.pl/300/" class="card-img-top" alt="...">
                                   <div class="card-body">
                                       <h5 class="card-title">Card title</h5>
                                       <p class="card-text">Some quick example text to build on the card title and make up
                                           the bulk
                                           of the
                                           card's content.</p>
                                       <a href="#" class="btn btn-primary">Go somewhere</a>
                                   </div>
                               </div>
                           </div>
                           <div class=" col card-container bg-dark">
                               <div class="card" style="width: 18rem;">
                                   <img src="https://fakeimg.pl/300/" class="card-img-top" alt="...">
                                   <div class="card-body">
                                       <h5 class="card-title">Card title</h5>
                                       <p class="card-text">Some quick example text to build on the card title and make up
                                           the bulk
                                           of the
                                           card's content.</p>
                                       <a href="#" class="btn btn-primary">Go somewhere</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-3 bg-danger">
                       <h5 class="content-title-2">Artikel Populer</h5>
                       <div class="row">
                           <div class="col card-container-2 bg-warning d-flex justify-content-center">
                               <div class="card" style="width: 12rem; height: auto;">
                                   <img src="https://fakeimg.pl/50/" class="card-img-top img-fluid" alt="...">
                                   <div class="card-body populer-news-card">
                                       <h5 class="card-title populer-news-title">Card title</h5>
                                       <p class="card-text populer-news-text">Some quick example text to build on the card
                                           title and make up
                                           the
                                           bulk of the card's content.</p>
                                       <a href="#" class="btn btn-primary">Go somewhere</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col">
                       <h1>Next Content...</h1>
                   </div>
               </div>
           </div>
       </section>
   @endsection
