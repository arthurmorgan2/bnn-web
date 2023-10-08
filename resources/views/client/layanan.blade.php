@extends('layouts.client.main')


@section('content')
    <div class="container-fluid layanan-container">
        {{-- Pengaduan Layanan --}}
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col card-layanan d-flex flex-column justify-content-center align-items-center" type="button"
                        data-bs-toggle="collapse" data-bs-target="#service1">
                        <i class="fa-solid fa-triangle-exclamation fa-2xl" style="color: white"></i>
                        <br>
                        <div class="layanan-title">
                            Pengaduan Masyarakat
                        </div>
                        <br>
                        <i class="fa-solid fa-arrow-down fa-bounce fa-xl" style="color: white"></i>

                    </div>
                </div>

                <div id="service1" class="collapse">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row layanan-child-container pt-2">
                                    <div class="col-md-6">
                                        <div class="card-layanan-child">
                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center text-center py-4">
                                                <i class="fa-solid fa-triangle-exclamation fa-lg" style="color: white"></i>
                                                <br>
                                                <div class="layanan-title-child">
                                                    Pengaduan Masyarakat
                                                </div>
                                            </div>
                                            <div class="collapse">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center">
                                                    <div class="layanan-text p-1 mb-3 text-center">
                                                        Aduan penyalahgunaan dan peredaran gelap Narkotika di sekitar kita
                                                    </div>
                                                    <div class="layanan-button rounded px-3 py-2 mb-4">
                                                        <a href="https://www.lapor.go.id/" target="_blank">Layanan
                                                            Online</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-layanan-child">
                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center text-center py-4">
                                                <i class="fa-solid fa-shop fa-lg" style="color: #ffffff;"></i>
                                                <br>
                                                <div class="layanan-title-child">
                                                    Pengaduan Online Marketplace
                                                </div>
                                            </div>
                                            <div class="collapse">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center">
                                                    <div class="layanan-text p-1 mb-3 text-center">
                                                        Aduan kejahatan narkoba yang terjadi di platform marketplace
                                                    </div>
                                                    <div class="layanan-button rounded px-3 py-2 mb-4">
                                                        <a href="https://boss.bnn.go.id//layanan_pengaduan_mp/ketentuan_pengaduan_mp"
                                                            target="_blank">Layanan Online</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row layanan-child-container">
                                    <div class="col-md-6">
                                        <div class="card-layanan-child">
                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center text-center py-4">
                                                <i class="fa-solid fa-circle-xmark fa-lg" style="color: #ffffff;"></i>
                                                <br>
                                                <div class="layanan-title-child">
                                                    Whistleblower
                                                </div>
                                            </div>
                                            <div class="collapse">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center">
                                                    <div class="layanan-text p-1 mb-3 text-center">
                                                        Aduan pelanggaran yang dilakukan oleh petugas Badan Narkotika
                                                        Nasional
                                                    </div>
                                                    <div class="layanan-button rounded px-3 py-2 mb-4">
                                                        <a href="https://bnn.go.id/satuan-kerja/ittama/pengaduan/"
                                                            target="_blank">Layanan Online</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-layanan-child">
                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center text-center py-4">
                                                <i class="fa-solid fa-hand-holding-dollar fa-lg"
                                                    style="color: #ffffff;"></i>
                                                <br>
                                                <div class="layanan-title-child">
                                                    Pengaduan Gratifikasi
                                                </div>
                                            </div>
                                            <div class="collapse">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center">
                                                    <div class="layanan-text p-1 mb-3 text-center">
                                                        Aduan pelanggaran gratifikasi yang dilakukan oleh petugas Badan
                                                        Narkotika Nasional
                                                    </div>
                                                    <div class="layanan-button rounded px-3 py-2 mb-4">
                                                        <a href="https://bnn.go.id/satuan-kerja/ittama/pelaporan-gratifikasi/"
                                                            target="_blank">Layanan Online</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>



                    </div>
                </div>
            </div>
            {{-- Rehabilitasi Layanan --}}
            <div class="col-md-6">
                <div class="row">
                    <div class="col card-layanan d-flex flex-column justify-content-center align-items-center"
                        type="button" data-bs-toggle="collapse" data-bs-target="#service2">
                        <i class="fa-regular fa-hospital fa-2xl" style="color: white"></i>
                        <br>
                        <div class="layanan-title">
                            Rehabilitiasi
                        </div>
                        <br>
                        <i class="fa-solid fa-arrow-down fa-bounce fa-xl" style="color: white"></i>

                    </div>
                </div>

                <div id="service2" class="collapse">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row layanan-child-container pt-2">
                                    <div class="col-md-6">
                                        <div class="card-layanan-child">
                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center text-center py-4">
                                                <i class="fa-regular fa-hospital fa-lg" style="color: white"></i>
                                                <br>
                                                <div class="layanan-title-child">
                                                    Rehabilitasi Gratis
                                                </div>
                                            </div>
                                            <div class="collapse">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center">
                                                    <div class="layanan-text p-1 mb-3 text-center">
                                                        Rehabilitasi gratis untuk pecandu narkotika
                                                    </div>
                                                    <div class="layanan-button rounded px-3 py-2 mb-4">
                                                        <a href="https://sirena.bnn.go.id/public/user/register"
                                                            target="_blank">Layanan
                                                            Online</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-layanan-child">
                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center text-center py-4">
                                                <i class="fa-solid fa-house-medical fa-lg" style="color: #ffffff;"></i>
                                                <br>
                                                <div class="layanan-title-child">
                                                    Rehabilitasi Swasta
                                                </div>
                                            </div>
                                            <div class="collapse">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center">
                                                    <div class="layanan-text p-1 mb-3 text-center">
                                                        Lembaga rehabilitasi yang diperkuat oleh BNN
                                                    </div>
                                                    <div class="layanan-button rounded px-3 py-2 mb-4">
                                                        <a href="https://boss.bnn.go.id/layanan/menu_km"
                                                            target="_blank">Informasi Layanan</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row layanan-child-container">
                                    <div class="col-md-6">
                                        <div class="card-layanan-child">
                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center text-center py-4">
                                                <i class="fa-solid fa-briefcase-medical fa-lg"
                                                    style="color: #ffffff;"></i>
                                                <br>
                                                <div class="layanan-title-child">
                                                    Pasca Rehabilitasi
                                                </div>
                                            </div>
                                            <div class="collapse">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center">
                                                    <div class="layanan-text p-1 mb-3 text-center">
                                                        Program lanjutan rehabilitasi untuk mempertahankan pemulihannya
                                                    </div>
                                                    <div class="layanan-button rounded px-3 py-2 mb-4">
                                                        <a href="https://boss.bnn.go.id/layanan/menu_pasca"
                                                            target="_blank">Informasi Layanan</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-layanan-child">
                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center text-center py-4">
                                                <i class="fa-solid fa-hospital-user fa-lg" style="color: #ffffff;"></i>
                                                <br>
                                                <div class="layanan-title-child">
                                                    Self Assessment
                                                </div>
                                            </div>
                                            <div class="collapse">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center">
                                                    <div class="layanan-text p-1 mb-3 text-center">
                                                        Wawancara singkat tentang pengalaman menggunakan alkohol, tembakau
                                                        dan zat atau obat-obatan lain
                                                    </div>
                                                    <div class="layanan-button rounded px-3 py-2 mb-4">
                                                        <a href="https://selfassessment.bnn.go.id/"
                                                            target="_blank">Layanan Online</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Tes Urine Layanan --}}
            <div class="col-md-6">
                <div class="row">
                    <div class="col card-layanan d-flex flex-column justify-content-center align-items-center"
                        type="button" data-bs-toggle="collapse" data-bs-target="#service3">
                        <i class="fa-solid fa-prescription-bottle fa-2xl" style="color: #ffffff;"></i>
                        <br>
                        <div class="layanan-title">
                            Tes Urine
                        </div>
                        <br>
                        <i class="fa-solid fa-arrow-down fa-bounce fa-xl" style="color: white"></i>

                    </div>
                </div>

                <div id="service3" class="collapse">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row layanan-child-container pt-2">
                                    <div class="col-md-6">
                                        <div class="card-layanan-child">
                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center text-center py-4">
                                                <i class="fa-solid fa-user fa-lg" style="color: #ffffff;"></i>
                                                <br>
                                                <div class="layanan-title-child">
                                                    SKHPN
                                                </div>
                                            </div>
                                            <div class="collapse">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center">
                                                    <div class="layanan-text p-1 mb-3 text-center">
                                                        Pembuatan Surat Keterangan Hasil Pemeriksaan Narkotika
                                                    </div>
                                                    <div class="layanan-button rounded px-3 py-2 mb-4">
                                                        <a href="https://boss.bnn.go.id/layanan/menu_urine_perorangan"
                                                            target="_blank">Informasi Layanan
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-layanan-child">
                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center text-center py-4">
                                                <i class="fa-solid fa-users fa-lg" style="color: #ffffff;"></i>
                                                <br>
                                                <div class="layanan-title-child">
                                                    Kolektif
                                                </div>
                                            </div>
                                            <div class="collapse">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center">
                                                    <div class="layanan-text p-1 mb-3 text-center">
                                                        Permohonan pengujian tes narkotika bagi lembaga publik dan non
                                                        publik
                                                    </div>
                                                    <div class="layanan-button rounded px-3 py-2 mb-4">
                                                        <a href="https://boss.bnn.go.id/layanan/menu_urine_kolektif"
                                                            target="_blank">Informasi Layanan</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Uji Lab dan Perizinan Prekursor Layanan --}}
            <div class="col-md-6">
                <div class="row">
                    <div class="col card-layanan d-flex flex-column justify-content-center align-items-center"
                        type="button" data-bs-toggle="collapse" data-bs-target="#service4">
                        <i class="fa-solid fa-flask-vial fa-2xl" style="color: #ffffff;"></i>
                        <br>
                        <div class="layanan-title text-center">
                            Uji Lab dan Perizinan Prekursor
                        </div>
                        <br>
                        <i class="fa-solid fa-arrow-down fa-bounce fa-xl" style="color: white"></i>

                    </div>
                </div>

                <div id="service4" class="collapse">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row layanan-child-container pt-2">
                                    <div class="col-md-6">
                                        <div class="card-layanan-child">
                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center text-center py-4">
                                                <i class="fa-solid fa-vials fa-lg" style="color: #ffffff;"></i>
                                                <br>
                                                <div class="layanan-title-child">
                                                    Uji Lab
                                                </div>
                                            </div>
                                            <div class="collapse">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center">
                                                    <div class="layanan-text p-1 mb-3 text-center">
                                                        Layanan uji lab diperuntukan bagi instansi berwenang yang ingin
                                                        mengetahui kandungan narkoba
                                                    </div>
                                                    <div class="layanan-button rounded px-3 py-2 mb-4">
                                                        <a href="https://laboratorium.bnn.go.id/" target="_blank">Layanan
                                                            Online
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-layanan-child">
                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center text-center py-4">
                                                <i class="fa-solid fa-pills fa-lg" style="color: #ffffff;"></i>
                                                <br>
                                                <div class="layanan-title-child">
                                                    Perizinan Prekursor
                                                </div>
                                            </div>
                                            <div class="collapse">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center">
                                                    <div class="layanan-text p-1 mb-3 text-center">
                                                        Layanan perizinan import/eksport prekursor bagi perusahaan
                                                        importir/eksportir prekursor
                                                    </div>
                                                    <div class="layanan-button rounded px-3 py-2 mb-4">
                                                        <a href="https://boss.bnn.go.id/auth/login"
                                                            target="_blank">Layanan Online</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Informasi dan Edukasi --}}
            <div class="col-md-6">
                <div class="row">
                    <div class="col card-layanan d-flex flex-column justify-content-center align-items-center"
                        type="button" data-bs-toggle="collapse" data-bs-target="#service5">
                        <i class="fa-solid fa-book-open fa-2xl" style="color: #ffffff;"></i>
                        <br>
                        <div class="layanan-title">
                            Informasi dan Edukasi
                        </div>
                        <br>
                        <i class="fa-solid fa-arrow-down fa-bounce fa-xl" style="color: white"></i>

                    </div>
                </div>

                <div id="service5" class="collapse">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row layanan-child-container pt-2">
                                    <div class="col-md-3">
                                        <div class="card-layanan-child">
                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center text-center py-4">
                                                <i class="fa-solid fa-school-flag fa-lg" style="color: #ffffff;"></i>
                                                <br>
                                                <div class="layanan-title-child">
                                                    Rumah Edukasi Anti Narkotika
                                                </div>
                                            </div>
                                            <div class="collapse">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center">
                                                    <div class="layanan-text p-1 mb-3 text-center">
                                                        Media informasi dan edukasi yang dikemas dalam bentuk inovatif
                                                        dengan tujuan sebagai jejaring belajar, berbagi cerita dan inspirasi
                                                    </div>
                                                    <div class="layanan-button rounded px-3 py-2 mb-4">
                                                        <a href="https://rean.bnn.go.id/" target="_blank">Layanan
                                                            Online
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card-layanan-child">
                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center text-center py-4">
                                                <i class="fa-solid fa-book fa-lg" style="color: #ffffff;"></i>
                                                <br>
                                                <div class="layanan-title-child">
                                                    Perpustakaan
                                                </div>
                                            </div>
                                            <div class="collapse">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center">
                                                    <div class="layanan-text p-1 mb-3 text-center">
                                                        Kumpulan Buku, Infografis dan karya ilmiah seputar narkotika
                                                    </div>
                                                    <div class="layanan-button rounded px-3 py-2 mb-4">
                                                        <a href="https://perpustakaan.bnn.go.id/id"
                                                            target="_blank">Layanan Online</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card-layanan-child">
                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center text-center py-4">
                                                <i class="fa-solid fa-users fa-lg" style="color: #ffffff;"></i>
                                                <br>
                                                <div class="layanan-title-child">
                                                    Layanan Sosialisasi
                                                </div>
                                            </div>
                                            <div class="collapse">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center">
                                                    <div class="layanan-text p-1 mb-3 text-center">
                                                        Permohonan kepada BNN untuk menjadi narasumber sosialisasi Narkoba
                                                        dalam acara kemasyarakatan, instansi pemerintah atau sekolah
                                                    </div>
                                                    <div class="layanan-button rounded px-3 py-2 mb-4">
                                                        <a href="https://boss.bnn.go.id/auth/login"
                                                            target="_blank">Layanan Online</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card-layanan-child">
                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center text-center py-4">
                                                <i class="fa-solid fa-circle-info fa-lg" style="color: #ffffff;"></i>
                                                <br>
                                                <div class="layanan-title-child">
                                                    Layanan Informasi Publik
                                                </div>
                                            </div>
                                            <div class="collapse">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center">
                                                    <div class="layanan-text p-1 mb-3 text-center">
                                                        Form permintaan informasi yang dapat diakses publik untuk
                                                        mendapatkan informasi tentang BNN
                                                    </div>
                                                    <div class="layanan-button rounded px-3 py-2 mb-4">
                                                        <a href="https://ppid.bnn.go.id/form/" target="_blank">Layanan
                                                            Online</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col card-layanan d-flex flex-column justify-content-center align-items-center"
                        type="button" data-bs-toggle="collapse" data-bs-target="#service6">
                        <i class="fa-solid fa-scale-balanced fa-2xl" style="color: #ffffff;"></i>
                        <br>
                        <div class="layanan-title">
                            Konsultasi Hukum Gratis
                        </div>
                        <br>
                        <i class="fa-solid fa-arrow-down fa-bounce fa-xl" style="color: white"></i>

                    </div>
                </div>

                <div id="service6" class="collapse">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row layanan-child-container pt-2">
                                    <div class="col-md-12">
                                        <div class="card-layanan-child">
                                            <div
                                                class="d-flex flex-column justify-content-center align-items-center text-center py-4">
                                                <i class="fa-solid fa-folder-tree fa-lg" style="color: #ffffff;"></i>
                                                <br>
                                                <div class="layanan-title-child">
                                                    Alur Konsultasi
                                                    <br> Hukum Gratis
                                                </div>
                                            </div>
                                            <div class="collapse">
                                                <div
                                                    class="card-body d-flex flex-column justify-content-center align-items-center">
                                                    <div class="layanan-text p-1 mb-3 text-center">
                                                        Pelaksanaan tugas dan fungsi di bidang pencegahan, pemberantasan,
                                                        penyalahgunaan, dan peredaran gelap narkotika dan prekursor
                                                        narkotaika (P4GN).
                                                    </div>
                                                    <div class="layanan-button rounded px-3 py-2 mb-4">
                                                        <a href="https://boss.bnn.go.id/auth/login"
                                                            target="_blank">Informasi
                                                            Online
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
        // Add a hover effect on custom-card
        $(".card-layanan-child").hover(function() {
            $(this).find(".collapse").collapse("show");
        }, function() {
            $(this).find(".collapse").collapse("hide");
        });
    </script> --}}
@endsection
