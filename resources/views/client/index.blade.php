   @extends('layouts.main')


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
           <div class="container-fluid bg-success">
               <div class="row">
                   <div class="col-md-9">
                       <div class="content-title text-center">Berita Terbaru</div>
                       <div class="row row-cols-1 row-cols-md-2 g-4">
                           <div class="col m-0">
                               <div class="card">
                                   <img src="images/BNN.webp" class="card-img-top" alt="Hollywood Sign on The Hill" />
                                   <div class="card-body">
                                       <h5 class="card-title fw-bold">Pembekalan Bagi Agen Pemulihan IBM Kalurahan sariharjo
                                       </h5>
                                       <p class="card-text">
                                           BNN Sleman – Sebagai Kalurahan Bersinar yang belum lama dikukuhkan, Agen
                                           Pemulihan (AP) Intervensi Berbasis Masyarakat (IBM) di Kalurahan Sariharjo perlu
                                           diberikan berbagai informasi dan pemahaman, salah satunya adalah terkait tugas
                                           dan tanggung jawab masing-masing AP. Melalui upaya tersebut diharapkan program
                                           P4GN di Kalurahan Bersinar Sariharjo akan berjalan dengan baik dan memberikan
                                           dampak positif bagi masyarakat.
                                       </p>
                                   </div>
                               </div>
                           </div>
                           <div class="col m-0">
                               <div class="card">
                                   <img src="images/BNN2.webp" class="card-img-top" alt="Hollywood Sign on The Hill" />
                                   <div class="card-body">
                                       <h5 class="card-title fw-bold">Dialog Interaktif Remaja Bagi Desa BERSINAR Sariharjo
                                       </h5>
                                       <p class="card-text">
                                           BNN Sleman – Untuk mendukung pelaksanaan program P4GN pada Kalurahan Bersih
                                           Narkoba (BERSINAR) di Kalurahan Sariharjo, BNN Kabupaten Sleman menyelenggarakan
                                           kegiatan Dialog Interaktif Remaja di The Kharma Villas Sleman. Kegiatan tersebut
                                           akan diselenggarakan selama 5 kali pertemuan, mulai 03 Juli 2023 hingga 07 Juli
                                           2023 dengan melibatkan 10 perwakilan remaja dari Kalurahan Sariharjo.
                                       </p>
                                   </div>
                               </div>
                           </div>
                           <div class="col m-0">
                               <div class="card">
                                   <img src="images/BNN4.webp" class="card-img-top"
                                       alt="Hollywood Sign on The Hill" />
                                   <div class="card-body">
                                       <h5 class="card-title fw-bold">Tes Urin dan Razia Kamar Hunian WBP Lapas IIB Sleman</h5>
                                       <p class="card-text">
                                       BNN Sleman – BNN Kabupaten Sleman kembali bersinergi dengan Lembaga Pemasyarakatan Kelas IIB
                                        Sleman dalam rangka tes urin dan penggeledahan kamar hunian Warga Binaan Pemasyarakatan
                                         (WBP) (23/06/2023). Kegiatan diawali dengan melakukan tes urin kepada 15 WBP serta 5 pegawai Lapas.
                                       </p>
                                   </div>
                               </div>
                           </div>
                           <div class="col m-0">
                               <div class="card">
                                   <img src="images/BNN3.webp" class="card-img-top"
                                       alt="Hollywood Sign on The Hill" />
                                   <div class="card-body">
                                       <h5 class="card-title fw-bold">Rekor dan Sinkronisasi Pelaporan Inpres Nomor 2 Tahun 2020 Bagi OPD Pemkab Sleman
                                       </h5>
                                       <p class="card-text">
                                           BNN Sleman – BNN Kabupaten Sleman kembali melaksanakan rapat koordinasi dan sinkronisasi
                                           dalam rangka pelaporan Rencana Aksi Nasional (RAN) P4GN sebagaimana Instruksi Presiden 
                                           Nomor 2 tahun 2020 (04/07/2023). Kegiatan ini diselenggarakan di Ruang Rapat Sembada
                                           Setda Sleman dengan melibatkan 30 PIC perwakilan Organisasi Perangkat Daerah (OPD) 
                                           di lingkungan Pemerintah Kabupaten Sleman. Selain untuk mengetahui progres pelaksanaan 
                                           RAN P4GN, kegiatan ini juga bertujuan untuk menjalin sinergi antara Pemerintah Kabupaten
                                           Sleman dengan BNN Kabupaten Sleman dalam hal P4GN. Sesuai Inpres Nomor 2 tahun 2020, 
                                           tugas BNN adalah melakukan pembinaan, pengawasan, pemantauan, dan evaluasi terhadap 
                                           pelaksanaan RAN P4GN oleh Pemerintah Daerah.
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

       </section>
   @endsection
