@extends('layouts.masterLanding')
@section('title', 'BAYES | Landing')
@section('content')


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('{{ asset('landing') }}/assets/img/naga1.jpg') ;background-size: cover;  background-position: center;">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h4 class="h1 text-white text-center">SISTEM PAKAR DIAGNOSA PENYAKIT TANAMAN BUAH NAGA
                        MENGGUNAKAN METODE BAYES BERBASIS WEB</h4>
                </div>
                {{-- <div class="col-lg-6 order-1 order-lg-2 cara.jpg">
                    <img src="{{ asset('landing') }}/assets/img/naga1.jpg" class="img-fluid" alt=""
                    class="img-fluid" style="height:400px; width:600px;">
                    
                </div> --}}
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">



        <!-- ======= Services Section ======= -->
        <section id="about" class="services section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Tentang Buah Naga</h2>

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="icon-box">
                            {{-- <div class="icon"><i class="fa-brands fa-laravel" style="color:#F22B1E;"></i></div> --}}
                            <h4 class="title"><a target="_blank" href="https://id.wikipedia.org/wiki/Buah_naga">Pengertian
                                    Buah Naga</a></h4>
                            <p class="description">
                                Buah naga merupakan buah tropis yang berasal dari jenis kaktus dari marga Selenicereus dan
                                Hylocereus.
                                Saat ini, buah naga banyak dibudidayakan di negara-negara Asia, seperti Indonesia, Taiwan,
                                Vietnam, Malaysia, dan Filipina.
                                Terdapat beberapa varietas buah naga, salah satu yang sangat populer dan banyak ditemukan di
                                Indonesia adalah buah naga merah atau Hylocereus polyrhizus.
                            </p>
                            <h4 class="title mt-3">
                                <a target="_blank" href="https://id.wikipedia.org/wiki/Buah_naga">Jenis Buah
                                    Naga</a>
                            </h4>
                            <p class="description">Buah naga yang di kembangkan di Indonesia yaitu:
                            <ul>

                                <li class="ms-5">
                                    <div class="d-flex">
                                        <a target="_blank"
                                            href="https://www.google.com/search?q=Hylocereus+polyrhizus&rlz=1C1CHWL_enID1050ID1050&ei=5VE-ZMn4FeOVseMP4LWX4AM&ved=0ahUKEwiJ_4fp_rL-AhXjSmwGHeDaBTwQ4dUDCA4&uact=5&oq=Hylocereus+polyrhizus&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIHCAAQgAQQEzIHCAAQgAQQEzIHCAAQgAQQEzIHCAAQgAQQEzIHCAAQgAQQEzIHCAAQgAQQEzIHCAAQgAQQEzIHCAAQgAQQEzIHCAAQgAQQEzIHCAAQgAQQE0oECEEYAFAAWABgogVoAHABeACAAZACiAGQApIBAzItMZgBAKABAqABAcABAQ&sclient=gws-wiz-serp">
                                            <span class="fw-bold" style="color:#ff0202;">Hylocereus polyrhizus</span></a>
                                        <p class="description ms-2"> ( yang
                                            buahnya berwarna
                                            merah
                                            muda dengan daging buah merah ).
                                        </p>
                                    </div>
                                </li>

                            </ul>
                            <h4 class="title"><a target="_blank" href="https://id.wikipedia.org/wiki/Buah_naga">Morfologi
                                    Buah Naga</a></h4>
                            <p class="description">Morfologi tanaman Buah Naga termasuk tanaman yang tidak
                                lengkap karena tidak memiliki daun. Untuk beradaptasi dengan lingkungan gurun,
                                tanaman buah naga memilki duri disepanjang batang dan cabangnya. Tanaman
                                buah naga merupakan tanaman memanjat dan bersifat empifit. Di habitat aslinya
                                tanaman ini tanaman ini memanjat tanaman lain untuk tumbuh. Meskipun akarnya
                                yang didalam tanah dicabut, tanaman buah naga masih bisa bertahan hidup karena
                                terdapat akar yang tumbuh di batang. Akar udara tersebut mampu menyerap
                                cadangan makanan dari udara.</p>
                        </div>
                    </div>


                    <!-- ======= Gallery Section ======= -->
                    <section id="gallery" class="gallery">
                        <div class="container">

                            <div class="section-title">
                                <h2>Galeri</h2>
                                <p>Terpesona oleh keajaiban dan keunikan buah naga melalui galeri seni yang memikat di sini.
                                </p>
                            </div>

                            <div class="row no-gutters justify-content-center">

                                <div class="col-lg-4 col-md-4">
                                    <div class="gallery-item">
                                        <a data-gallery="gallery-item">
                                            <img src="{{ asset('landing') }}/assets/img/gallery/naga1.jpg" alt=""
                                                class="img-fluid" style="height:225px; width:500px;">
                                            <p class="mt-2">Kolam budidaya ikan air tawar yang dikelola di dalam lokasi
                                                Kebun
                                                Percontohan Kampung Daun, Desa Baumata, Kecamatan Taebenu, Kabupaten Kupang
                                            </p>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <div class="gallery-item">
                                        <a data-gallery="gallery-item">
                                            <img src="{{ asset('landing') }}/assets/img/gallery/buah-naga-1.jpeg"
                                                alt="" class="img-fluid">
                                            <p class="mt-2">Kelompok Mahasiwa Politeknik Pertanian Negeri Kupang
                                                menunjukkan hasil panen
                                                dari Kebun Percontohan "Kampung Daun" yang terletak di Desa Baumata,
                                                Kecamatan Taebenu, Kabupaten Kupang</p>

                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <div class="gallery-item">
                                        <a data-gallery="gallery-item">
                                            <img src="{{ asset('landing') }}/assets/img/gallery/naga3.jpg" alt=""
                                                class="img-fluid" style="height:225px; width:500px;">
                                            <p class="mt-2">Pak zainal dan Istri foto bersama karyawan dan menikmati jus
                                                hasil panen
                                                buah-buahan </p>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <div class="gallery-item">
                                        <a data-gallery="gallery-item">
                                            <img src="{{ asset('landing') }}/assets/img/gallery/naga2.jpg" alt=""
                                                class="img-fluid" style="height:225px; width:500px;">
                                            <p class="mt-2">Sejumlah tanaman pangan yang ada di Kebun Percontohan Kampung
                                                Daun, Desa
                                                Baumata, Kecamatan Taebenu, Kabupaten Kupang</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <div class="gallery-item">
                                        <a data-gallery="gallery-item">
                                            <img src="{{ asset('landing') }}/assets/img/gallery/buah-naga-2.jpeg"
                                                alt="" class="img-fluid">
                                            <p class="mt-2">Kunjungan Istri Gubernur Provinsi NTT Di Kampung Daun Baumata
                                                Kupang NTT
                                            </p>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <div class="gallery-item">
                                        <a data-gallery="gallery-item">
                                            <img src="{{ asset('landing') }}/assets/img/gallery/buah-naga-3.jpeg"
                                                alt="" class="img-fluid" style="height:225px; width:500px;">
                                            <p class="mt-2">Kunjungi Kebun Percontohan Poktan Kampung Daun Baumata,
                                                Gubernur NTT Panen
                                                Pisang dan Buah Naga</p>
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </section><!-- End Gallery Section -->

                    <section id="pakar" class="gallery">
                        <div class="container">


                            <div class="section-title">
                                <h2>Pakar</h2>
                                <p>Kenali profil pakar kami yang berpengalaman, mereka siap memberikan wawasan dan solusi
                                    terbaik yang sesuai dengan kebutuhan Anda.
                                </p>
                            </div>
                            <div class="row no-gutters justify-content-center">
                                <div class="col-lg-3 col-md-3">
                                    <div class="gallery-item">
                                        <a data-gallery="gallery-item">
                                            <img src="{{ asset('landing') }}/assets/img/gallery/1.jpg" alt=""
                                                class="img-fluid" style="height:200px; width:200px;">
                                            <p class="mt-2">Dr. Ir. Zainal Arifin,MP</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <div class="gallery-item">
                                        <a data-gallery="gallery-item">
                                            <img src="{{ asset('landing') }}/assets/img/gallery/2.jpg" alt=""
                                                class="img-fluid" style="height:200px; width:200px;">
                                            <p class="mt-2">Adrianto D Lajar </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <div class="row no-gutters">
                        <!-- ======= End Pakar Section ======= -->

                        <!-- ======= Contact Section ======= -->
                        <section id="contact" class="contact">
                            <div class="container">

                                <div class="section-title">
                                    <h2>Hubungi Kami</h2>
                                    <p>User dapat menghubungi pihak kelompok tani kampung daun baumata dengan media
                                        tertera dibawah ini.</p>
                                </div>


                                <div class="row text-center">
                                    <div class="col-lg-10">
                                        <iframe style="border:0; width: 100%; height: 290px;"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.799446312483!2d123.6839130733404!3d-10.196935910218958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c5685350f501eb3%3A0x32c0010eecf634c1!2sKELOMPOK%20Ad%20Mahow%20(%20budidaya%20sayuran%20dan%20buah%20segar%20organik)!5e0!3m2!1sid!2sid!4v1687187814245!5m2!1sid!2sid"
                                            width="600" height="450" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>

                                    <div class="col-lg-2">
                                        <div class="">
                                            <div class="address">
                                                <i class="bi bi-geo-alt" style="font-size: 40px;color:#e94949;"></i>
                                                {{-- <h4>Location:</h4> --}}
                                                <p>KELOMPOK Ad Mahow </p>
                                            </div>

                                            <div class="email">
                                                <i class="bi bi-envelope" style="font-size: 40px;color:#e94949;"></i>
                                                {{-- <h4>Email:</h4> --}}
                                                <p>kelompoktanikampungdaun@gmail.com</p>
                                            </div>

                                            <div class="phone">
                                                <i class="bi bi-phone" style="font-size: 40px;color:#49e94e;"></i>
                                                {{-- <h4>Call:</h4> --}}
                                                <p>+6287760469781</p>
                                            </div>

                                        </div>

                                    </div>



                                </div>

                            </div>
                        </section><!-- End Contact Section -->

    </main><!-- End #main -->


@endsection
