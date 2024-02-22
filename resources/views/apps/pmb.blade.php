<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>PMB | POLIBANG</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="{{ asset('images/favicon.png') }}" rel="icon">
    <link href="{{ asset('images/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <i class="icofont-clock-time"></i> Senin - Ahad, 08.00 - 15.00
            </div>
            <div class="d-flex align-items-center">
                <i class="icofont-phone"></i> Hubungi Kami +62 856-4111-1267
            </div>
        </div>
    </div>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="{{ url('') }}" class="logo mr-auto"><img src="{{ asset('images/logo.png') }}"
                    alt=""></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="logo mr-auto"><a href="index.html">Medicio</a></h1> -->
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="#visi_misi">visi misi</a></li>
                    <li><a href="#panduan">panduan</a></li>
                    <li><a href="#beasiswa">beasiswa</a></li>
                    <li><a href="#prodi">prodi</a></li>
                    <li><a href="#biaya">biaya</a></li>
                    <li><a href="#fasilitas">fasilitas</a></li>
                    <li><a href="#testimoni">testimoni</a></li>
                    <li><a href="#info">info</a></li>
                </ul>
            </nav><!-- .nav-menu -->
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" class="appointment-btn scrollto">HOME</a>
                @else
                    <a href="{{ route('login') }}" class="appointment-btn scrollto">LOGIN</a>
                @endauth
            @endif
        </div>
    </header><!-- End Header -->
    <!-- ======= Hero Section ======= -->

    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                @foreach ($slidings as $sliding)
                @if ($sliding->id==1)
                    <div class="carousel-item active" style="background-image: url({{ asset ('storage/sliding/'.$sliding->foto) }})"></div>
                @endif
                @if ($sliding->id==2)
                    <div class="carousel-item" style="background-image: url({{ asset ('storage/sliding/'.$sliding->foto) }})"></div>
                @endif
                @if ($sliding->id==3)
                    <div class="carousel-item" style="background-image: url({{ asset ('storage/sliding/'.$sliding->foto) }})"></div>
                @endif
                @endforeach
            </div>
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Visi Misi ======= -->
        <section id="visi_misi" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Visi dan Misi</h2><br>
                </div>
                <div class="row">
                    @foreach ($visis as $visi)
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="{{ asset ('storage/visi/'.$visi->foto) }}" class="img-fluid">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>Visi</h3>
                        <p class="font-italic">{{ $visi->hastag }}</p>
                        <h3>Misi</h3>
                        {!! $visi->isi !!}
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- ======= Panduan Pendaftaran ======= -->
        <section id="panduan" class="featured-services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Panduan Pendaftaran</h2><br>
                    <p>Pendaftaran mahasiswa baru Politeknik Balekambang Jepara dapat melihat jadwal dan alur
                        pendaftaran berikut:</p>
                </div>
                @foreach ($panduans as $panduan)
                <div class="row">
                    <div class="col-md-12 col-lg-12 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset ('storage/panduan/'.$panduan->foto) }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>
                </div>
                <br>
                @endforeach
            </div>
        </section>
        <!-- ======= Beasiswa ======= -->
        <section id="beasiswa" class="counts">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Beasiswa Kuliah</h2><br>
                    <p>Bagi Lulusan SMA/MA/SMK yang masih pusing cari kuliah/kerja? Yuk gabung bersama kami di POLIBANG
                        JEPARA
                        <b>
                            <h6>buruan ambil <u>KESEMPATAN EMAS</u> ini</h6>
                        </b>
                    </p>
                </div>
                <div class="row no-gutters">
                    @foreach ($beasiswas as $beasiswa)
                    <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="icofont-{{ $beasiswa->ikon }}"></i>
                            <span>
                                <h4>{{ $beasiswa->judul }}</h4>
                            </span>
                            {!! $beasiswa->isi !!}
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="cta">
            <div class="buat_akun" data-aos="zoom-in">
                <div class="text-center">
                    <h3>Tersedia juga beasiswa KIP - Kuliah</h3>
                    <a class="cta-btn scrollto" href="https://kip-kuliah.kemdikbud.go.id/">KIP - Kuliah</a>
                </div>
            </div>
        </section>
        <!-- ======= Program Studi ======= -->
        <section id="prodi" class="departments">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Progam Studi</h2><br>
                    <p>Program studi yang dimiliki Politeknik Balekambang Jepara</p>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <ul class="nav nav-tabs flex-column">
                            @foreach ($prodis as $prodi)
                                @if ($prodi->judul=='Rekayasa Perangkat Lunak')
                                <li class="nav-item">
                                    <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                                        <h4>{{ $prodi->nama }}</h4>
                                        <p>{{ $prodi->keterangan }}</p>
                                    </a>
                                </li>
                                @endif
                                @if ($prodi->judul=='Administrasi Bisnis Internasional')
                                <li class="nav-item mt-2">
                                    <a class="nav-link" data-toggle="tab" href="#tab-2">
                                        <h4>{{ $prodi->nama }}</h4>
                                        <p>{{ $prodi->keterangan }}</p>
                                    </a>
                                </li>
                                @endif
                                @if ($prodi->judul=='Akuntansi Keuangan Publik')
                                <li class="nav-item mt-2">
                                    <a class="nav-link" data-toggle="tab" href="#tab-3">
                                        <h4>{{ $prodi->nama }}</h4>
                                        <p>{{ $prodi->keterangan }}</p>
                                    </a>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content">
                            @foreach ($prodis as $prodi)
                                @if ($prodi->judul=='Rekayasa Perangkat Lunak')
                                <div class="tab-pane active show" id="tab-1">
                                    <h3>R{{ $prodi->judul }}</h3>
                                    <p class="font-italic">{{ $prodi->hastag }}</p>
                                    <img src="{{ asset ('storage/prodi/'.$prodi->foto) }}" alt="" class="img-fluid">
                                    {!! $prodi->isi !!}
                                </div>
                                @endif
                                @if ($prodi->judul=='Administrasi Bisnis Internasional')
                                <div class="tab-pane active show" id="tab-2">
                                    <h3>R{{ $prodi->judul }}</h3>
                                    <p class="font-italic">{{ $prodi->hastag }}</p>
                                    <img src="{{ asset ('storage/prodi/'.$prodi->foto) }}" alt="" class="img-fluid">
                                    {!! $prodi->isi !!}
                                </div>
                                @endif
                                @if ($prodi->judul=='Administrasi Bisnis Internasional')
                                <div class="tab-pane active show" id="tab-3">
                                    <h3>R{{ $prodi->judul }}</h3>
                                    <p class="font-italic">{{ $prodi->hastag }}</p>
                                    <img src="{{ asset ('storage/prodi/'.$prodi->foto) }}" alt="" class="img-fluid">
                                    {!! $prodi->isi !!}
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= Biaya Perkuliahan ======= -->
        <section id="biaya" class="pricing">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Biaya Pendaftaran</h2><br>
                    <p>Tabel biaya registrasi awal setelah calon mahasiswa dinyatakan lulus sesuai jalur yang dipilih
                    </p>
                </div>
                <div class="row">
                    @foreach ($biayas as $biaya)
                    <div class="col-lg-4 col-md-6">
                        <div class="box featured" data-aos="fade-up" data-aos-delay="100">
                            <h3>{{ $biaya->judul }}</h3>
                            <h4><sup>Rp. </sup>{{ $biaya->total }}</h4>
                            <ul>
                                <li>Sumbangan Pengembangan Institusi<br>(Rp. {{ $biaya->sumbangan }})</li>
                                <li>Biaya Perkuliahan/Semester<br>(Rp. {{ $biaya->semester }})</li>
                                <li>Jas Almamater<br>(Rp. {{ $biaya->jas }})</li>
                                <li>Pekan Orientasi Studi Mahasiswa<br>(Rp. {{ $biaya->posma }})</li>
                                <li>Sarung Batik Polibang<br>(Rp. {{ $biaya->sarung }})</li>
                                <li class="{{ $biaya->class }}">Biaya Operasional/Bulan<br>(Rp. {{ $biaya->bulanan }})</li>
                                <li class="{{ $biaya->class }}">Almari (Hak Pakai Selama di Pondok)<br>(Rp. {{ $biaya->almari }})</li>
                                <li class="{{ $biaya->class }}">Loundry/Bulan<br>(Rp. {{ $biaya->loundry }})</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="https://pmb.polibang.ac.id/proof" class="btn-buy">Registrasi</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- ======= Buat Akun ======= -->
        <section id="akun" class="cta">
            <div class="buat_akun" data-aos="zoom-in">
                <div class="text-center">
                    <h3>Belum Punya Akun?</h3>
                    <a class="cta-btn scrollto" href="https://pmb.polibang.ac.id/auth/register.php">Buat Akun</a>
                </div>
            </div>
        </section>
        <!-- ======= Fasilitas ======= -->
        <section id="fasilitas" class="doctors section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Fasilitas</h2><br>
                    <p>Fasilitas-faslitas pendukung Pembelajaran di Politeknik Balakembang Jepara</p>
                </div>
                <div class="row">
                    @foreach ($facilities as $facility)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset ('storage/fasilitas/'.$facility->foto) }}" class="img-fluid">
                            </div>
                            <div class="member-info">
                                <h4>{{ $facility->judul }}</h4>
                                <span>{{ $facility->keterangan }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ======= Testimoni ======= -->
        <section id="testimoni" class="testimonials">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Testimoni</h2><br>
                    <p>Berikut merupakan testimoni dari beberapa tokoh yang pernah hadir di Politeknik Balekambang
                        Jepara</p>
                </div>
                <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="100">
                    @foreach ($testimonis as $testimoni)
                    <div class="testimonial-item">
                        <p><i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {!! $testimoni->isi !!}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{ asset ('storage/testimoni/'.$testimoni->foto) }}" class="testimonial-img">
                        <h3>{{ $testimoni->nama }}</h3>
                        <h4>{{ $testimoni->jabatan }}</h4>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- ======= Gallery ======= -->
        <section id=" galeri" class="gallery">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Galeri</h2><br>
                    <p>Beberapa kegiatan Politeknik Balekambang Jepara</p>
                </div>
                <div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ asset('images/gallery/gallery-1.png') }}" class="venobox"
                        data-gall="gallery-carousel"><img src="{{ asset('images/gallery/gallery-1.png') }}"
                            alt=""></a>
                    <a href="{{ asset('images/gallery/gallery-2.jpg') }}" class="venobox"
                        data-gall="gallery-carousel"><img src="{{ asset('images/gallery/gallery-2.jpg') }}"
                            alt=""></a>
                    <a href="{{ asset('images/gallery/gallery-3.jpg') }}" class="venobox"
                        data-gall="gallery-carousel"><img src="{{ asset('images/gallery/gallery-3.jpg') }}"
                            alt=""></a>
                    <a href="{{ asset('images/gallery/gallery-4.jpg') }}" class="venobox"
                        data-gall="gallery-carousel"><img src="{{ asset('images/gallery/gallery-4.jpg') }}"
                            alt=""></a>
                    <a href="{{ asset('images/gallery/gallery-5.jpg') }}" class="venobox"
                        data-gall="gallery-carousel"><img src="{{ asset('images/gallery/gallery-5.jpg') }}"
                            alt=""></a>
                    <a href="{{ asset('images/gallery/gallery-6.png') }}" class="venobox"
                        data-gall="gallery-carousel"><img src="{{ asset('images/gallery/gallery-6.png') }}"
                            alt=""></a>
                    <a href="{{ asset('images/gallery/gallery-7.png') }}" class="venobox"
                        data-gall="gallery-carousel"><img src="{{ asset('images/gallery/gallery-7.png') }}"
                            alt=""></a>
                    <a href="{{ asset('images/gallery/gallery-8.png') }}" class="venobox"
                        data-gall="gallery-carousel"><img src="{{ asset('images/gallery/gallery-8.png') }}"
                            alt=""></a>
                    <a href="{{ asset('images/gallery/gallery-9.png') }}" class="venobox"
                        data-gall="gallery-carousel"><img src="{{ asset('images/gallery/gallery-9.png') }}"
                            alt=""></a>
                    <a href="{{ asset('images/gallery/gallery-10.png') }}" class="venobox"
                        data-gall="gallery-carousel"><img src="{{ asset('images/gallery/gallery-10.png') }}"
                            alt=""></a>
                </div>
            </div>
        </section>
        <!-- ======= info ======= -->
        <section id="info" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2>Informasi</h2><br>
                    <p>Pertanyaan lebih lanjut dapat menghubungi kami melalui saluran-saluran berikut</p>
                </div>
            </div>
            <div class="container">
                <div>
                    <iframe style="border:0; width: 100%; height: 350px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15849.40573451385!2d110.77185855!3d-6.726904350000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb3c2ba4e447cc93f!2sPoliteknik%20Balekambang!5e0!3m2!1sid!2sid!4v1609402928957!5m2!1sid!2sid"
                        frameborder="0" allowfullscreen></iframe>
                </div>
                <br></br>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                            <a
                                href="https://www.google.com/maps/place/Ponpes+Balekambang/@-6.7323187,110.775492,15z/data=!4m5!3m4!1s0x0:0xfec585f7e219bffe!8m2!3d-6.7301476!4d110.7780862"><i
                                    class="bx bx-map"></i></a>
                            <h3>Alamat</h3>
                            <p>Balekambang, Gemiring Lor, Nalumsari, Jepara Regency, Central Java 59466</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info-box mt-4">
                            <a href="https://www.polibang.ac.id/" class="youtube"><i class="bx bx-world"></i></a>
                            <h3>Website</h3>
                            <strong>
                                <p><a href="https://www.polibang.ac.id/">www.polibang.ac.id</a></p>
                            </strong>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info-box mt-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email</h3>
                            <strong>
                                <p>pmb@polibang.ac.id</p>
                            </strong>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info-box mt-4">
                            <a href="https://www.youtube.com/channel/UCpqNI0TmjPTDbIg9H83d99g" class="youtube"><i
                                    class="bx bxl-youtube"></i></a>
                            <a href="https://www.facebook.com/politbang/" class="facebook"><i
                                    class="bx bxl-facebook"></i></a>
                            <a href="https://www.instagram.com/politeknikbalekambang/" class="instagram"><i
                                    class="bx bxl-instagram"></i></a>
                            <a href="https://www.tiktok.com/@polibangjepara" class="instagram"><i
                                    class="bx bxs-music"></i></a>
                            <h3>Sosial Media</h3>
                            <strong>
                                <p>Politeknik Balekambang Jepara</p>
                            </strong>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="info-box mt-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Kontak Kami</h3>
                            <strong>
                                <p>+62 856-4111-1267 (M. Ali Subkan)</p>
                                <p>+62 857-4252-9468 (Ahmad Mubais)</p>
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>POLITEKNIK BALEKAMBANG JEPARA</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <b><a href="https://pmb.polibang.ac.id/">PMB | POLIBANG</a></b>
            </div>
        </div>
    </footer>
    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
