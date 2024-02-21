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
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="{{ asset('images/visi/about.png') }}" class="img-fluid">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>Visi</h3>
                        <p class="font-italic">Menjadi Politeknik yang Berdaya Saing Global, Professional dan beraqidah
                            Ahlus Sunnah Wal Jama’ah.</p>
                        <h3>Misi</h3>
                        <ol>
                            <li>Menyelenggarakan dan mengembangkan pendidikan yang mampu berdaya saing dalam era
                                globalisasi;</li>
                            <li>Menyelenggarakan pendidikan yang profesional sesuai dengan prinsip <i>Good University
                                    Governance</i>;</li>
                            <li>Membangun komunitas yang ikhlas, toleransi, moderat dan religi dalam menjaga Negara
                                Kesatuan Republik Indonesia;</li>
                            <li>Melaksanakan tri dharma peguruan tinggi. </li>
                        </ol>
                    </div>
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
                <div class="row">
                    <div class="col-md-12 col-lg-12 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('images/panduan/waktu pendaftaran.png') }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 col-lg-12 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('images/panduan/panduan pendaftaran.png') }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>
                </div>
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
                    <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="icofont-book"></i>
                            <span>
                                <h4>Beasiswa Tahfidz (Hafal Al-Qur'an)</h4>
                            </span>
                            <p>Bagi kalian yang Hafal Al-Qur'an<br></br>
                                <strong>10 Juz GRATIS 2 SEMESTER</strong><br>
                                <strong>15 Juz GRATIS 4 SEMESTER</strong><br>
                                <strong>20 Juz GRATIS 6 SEMESTER</strong><br>
                                <strong>30 Juz GRATIS 8 SEMESTER</strong><br></br>
                                (dibuktikan dengan test hafalan)
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="icofont-read-book"></i>
                            <span>
                                <h4>Beasiswa Baca Kitab Kuning</h4>
                            </span>
                            <p>Bagi kalian yang mampu Membaca dan Memahami isi kandung <strong>KITAB FATHUL MU`IN GRATIS
                                    8 SEMESTER</strong><br></br>
                                (dibuktikan dengan test membaca kitab kuning)</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="icofont-brainstorming"></i>
                            <span>
                                <h4>Beasiswa Prestasi Akademik</h4>
                            </span>
                            <p>Bagi kalian yang memiliki Prestasi Akademik pada tingkat berikut :<br></br>
                                <strong>KABUPATEN GRATIS 1 SEMESTER</strong><br>
                                <strong>PROVINSI GRATIS 2 SEMESTER</strong><br>
                                <strong>NASIONAL GRATIS 4 SEMESTER</strong><br></br>
                                (dibuktikan dengan piagam kejuaraan asli)
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="icofont-medal"></i>
                            <span>
                                <h4>Beasiswa Prestasi Non Akademik</h4>
                            </span>
                            <p>Bagi kalian yang memiliki Prestasi Non Akademik pada tingkat berikut :<br></br>
                                <strong>KABUPATEN GRATIS 1 SEMESTER</strong><br>
                                <strong>PROVINSI GRATIS 2 SEMESTER</strong><br>
                                <strong>NASIONAL GRATIS 4 SEMESTER</strong><br></br>
                                (dibuktikan dengan piagam kejuaraan asli)
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="icofont-certificate-alt-1"></i>
                            <span>
                                <h4>Beasiswa Prestasi Kelas</h4>
                            </span>
                            <p>Bagi kalian yang memiliki Rangking Pararel<br></br>
                                <strong>RANGKING 1 GRATIS 4 SEMESTER</strong><br>
                                <strong>RANGKING 2 GRATIS 2 SEMESTER</strong><br>
                                <strong>RANGKING 3 GRATIS 1 SEMESTER</strong><br></br>
                                (dibuktikan dengan Raport Asli & Surat Keterangan dari sekolah)
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="icofont-graduate-alt"></i>
                            <span>
                                <h4>Alumni Balekambang</h4>
                            </span>
                            <p>Bagi alumni Balekambang yang memiliki <strong>RANGKING 1/2/3 PARAREL GRATIS 8
                                    SEMESTER</strong> selain kategori diatas <strong>GRATIS 1 SEMESTER</strong></p>
                        </div>
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
                            <li class="nav-item">
                                <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                                    <h4>D4 Rekayasa Perangkat Lunak</h4>
                                    <p>Lulusan Prodi RPL merupakan Sarjana Terapan Komputer (S.Tr.Kom.)</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-toggle="tab" href="#tab-2">
                                    <h4>D4 Administrasi Bisnis Internasional</h4>
                                    <p>Lulusan Prodi ABI merupakan Sarjana Terapan Administrasi Bisnis (S.Tr.A.B.)</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-toggle="tab" href="#tab-3">
                                    <h4>D4 Akuntansi Keuangan Publik</h4>
                                    <p>Lulusan Prodi AKP merupakan Sarjana Terapan Akuntansi (S.Tr.Ak.)</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <h3>Rekayasa Perangkat Lunak</h3>
                                <p class="font-italic">Menjadi Program Studi Vokasi dibidang Rekayasa Perangkat Lunak
                                    yang Berdaya Saing Global, Profesional, Religius dan berjiwa Technopreunership</p>
                                <img src="{{ asset('images/prodi/rpl.jpg') }}" alt="" class="img-fluid">
                                <p>RPL merupakan domain Bidang Ilmu Informatika & Komputer dalam aspek pengembangan
                                    software mulai dari tahap awal spesifikasi, desain, konstruksi, testing sampai
                                    pemeliharaan</p>
                                <p>Profesi-profesi lulusan RPL antara lain Programmer, System Analyst, Software Quality
                                    Assurance Engineer (SQAE), Database Administrator, Software Architect, Software
                                    Support, Konsultan IT, Web Designer.</p>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <h3>Administrasi Bisnis Internasional</h3>
                                <p class="font-italic">Menjadi program studi vokasi bidang Administrasi bisnis
                                    internasional yang berdaya saing global, profesional, dan religius berdasar aqidah
                                    Ahlus Sunnah Wal Jama’ah</p>
                                <img src="{{ asset('images/prodi/administrasi.jpg') }}" alt=""
                                    class="img-fluid">
                                <p>Merupakan program studi yang fokus pada tantangan yang dihadapi oleh dunia bisnis di
                                    pasar internasional. Mahasiswa akan mempelajari etika dan hukum bisnis dalam skala
                                    internasional</p>
                                <p>Selain itu, akan dilatih untuk berpikir secara global dalam menciptakan ide dan
                                    solusi dalam permasalahan ekonomi dan bisnis di lingkup internasional</p>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <h3>Akuntansi Keuangan Publik</h3>
                                <p class="font-italic">Menjadi rujukan pendidikan vokasi bidang Akuntansi Keuangan
                                    Publik yang unggul berdasar aqidah Ahlus Sunnah Wal Jama’ah</p>
                                <img src="{{ asset('images/prodi/akuntansi.jpg') }}" alt=""
                                    class="img-fluid">
                                <p>Program Studi Akuntansi Keuangan Publik Mengajarkan ilmu akuntansi dalam ruang
                                    lingkup organisasi sektor publik</p>
                                <p>Sektor publik tersebut antara lain seperti organisasi pemerintahan pusat dan daerah,
                                    Lembaga Swadaya Masyarakat (LSM), Rumah Sakit, dan Pendidikan</p>
                            </div>
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
                    <div class="col-lg-4 col-md-6">
                        <div class="box featured" data-aos="fade-up" data-aos-delay="100">
                            <h3>Kelas Reguler</h3>
                            <h4><sup>Rp. </sup>4.675.000</h4>
                            <ul>
                                <li>Sumbangan Pengembangan Institusi<br>(Rp. 1.500.000)</li>
                                <li>Biaya Perkuliahan/Semester<br>(Rp. 2.500.000)</li>
                                <li>Jas Almamater<br>(Rp. 200.000)</li>
                                <li>Pekan Orientasi Studi Mahasiswa<br>(Rp. 350.000)</li>
                                <li>Sarung Batik Polibang<br>(Rp. 125.000)</li>
                                <li class="na">Biaya Operasional/Bulan<br>(Rp. 650.000)</li>
                                <li class="na">Almari (Hak Pakai Selama di Pondok)<br>(Rp. 600.000)</li>
                                <li class="na">Loundry/Bulan<br>(Rp. 70.000)</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="https://pmb.polibang.ac.id/proof" class="btn-buy">Registrasi</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="box featured" data-aos="fade-up" data-aos-delay="200">
                            <h3>Kelas Karyawan</h3>
                            <h4><sup>Rp. </sup>5.175.000</h4>
                            <ul>
                                <li>Sumbangan Pengembangan Institusi<br>(Rp. 1.500.000)</li>
                                <li>Biaya Perkuliahan/Semester<br>(Rp. 3.000.000)</li>
                                <li>Jas Almamater<br>(Rp. 200.000)</li>
                                <li>Pekan Orientasi Studi Mahasiswa<br>(Rp. 350.000)</li>
                                <li>Sarung Batik Polibang<br>(Rp. 125.000)</li>
                                <li class="na">Biaya Operasional/Bulan<br>(Rp. 650.000)</li>
                                <li class="na">Almari (Hak Pakai Selama di Pondok)<br>(Rp. 600.000)</li>
                                <li class="na">Loundry/Bulan<br>(Rp. 70.000)</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="https://pmb.polibang.ac.id/proof" class="btn-buy">Registrasi</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="box featured" data-aos="fade-up" data-aos-delay="300">
                            <h3>Kelas Reguler + Mondok</h3>
                            <h4><sup>Rp. </sup>5.995.000</h4>
                            <ul>
                                <li>Sumbangan Pengembangan Institusi<br>(Rp. 1.500.000)</li>
                                <li>Biaya Perkuliahan/Semester<br>(Rp. 2.500.000)</li>
                                <li>Jas Almamater<br>(Rp. 200.000)</li>
                                <li>Pekan Orientasi Studi Mahasiswa<br>(Rp. 350.000)</li>
                                <li>Sarung Batik Polibang<br>(Rp. 125.000)</li>
                                <li>Biaya Operasional/Bulan<br>(Rp. 650.000)</li>
                                <li>Almari (Hak Pakai Selama di Pondok)<br>(Rp. 600.000)</li>
                                <li>Loundry/Bulan<br>(Rp. 70.000)</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="https://pmb.polibang.ac.id/proof" class="btn-buy">Registrasi</a>
                            </div>
                        </div>
                    </div>
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
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ asset('images/fasilitas/gedung.jpg') }}" class="img-fluid">
                            </div>
                            <div class="member-info">
                                <h4>Gedung Utama</h4>
                                <span>Gedung Pembelajaran</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="{{ asset('images/fasilitas/aula.jpg') }}" class="img-fluid">
                            </div>
                            <div class="member-info">
                                <h4>Aula</h4>
                                <span>Gedung Serba Guna</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="{{ asset('images/fasilitas/bisnis.jpg') }}" class="img-fluid">
                            </div>
                            <div class="member-info">
                                <h4>Unit Bisnis</h4>
                                <span>Gedung Bisnis</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-img">
                                <img src="{{ asset('images/fasilitas/lab1.png') }}" class="img-fluid">
                            </div>
                            <div class="member-info">
                                <h4>Lab Programmer</h4>
                                <span>Laboratorium Komputer Rekayasa Perangkat Lunak</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="500">
                            <div class="member-img">
                                <img src="{{ asset('images/fasilitas/lab2.jpeg') }}" class="img-fluid">
                            </div>
                            <div class="member-info">
                                <h4>Lab Bisnis</h4>
                                <span>Laboratorium Komputer Administrasi Bisnis Internasional</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="600">
                            <div class="member-img">
                                <img src="{{ asset('images/fasilitas/homestay.jpg') }}" class="img-fluid">
                            </div>
                            <div class="member-info">
                                <h4>Homestay</h4>
                                <span>Tempat Penginapan</span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="600">
                            <div class="member-img">
                                <img src="{{ asset('images/fasilitas/kelas.jpeg') }}" class="img-fluid">
                            </div>
                            <div class="member-info">
                                <h4>Ruang Perkuliahan</h4>
                                <span>Ruangan Belajar Mengajar</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="600">
                            <div class="member-img">
                                <img src="{{ asset('images/fasilitas/image.jpg') }}" class="img-fluid">
                            </div>
                            <div class="member-info">
                                <h4>Ruang Perpustakaan</h4>
                                <span>Anesthesiologist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="600">
                            <div class="member-img">
                                <img src="{{ asset('images/fasilitas/image.jpg') }}" class="img-fluid">
                            </div>
                            <div class="member-info">
                                <h4>.....</h4>
                                <span>Anesthesiologist</span>
                            </div>
                        </div>
                    </div> -->
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
                    <div class="testimonial-item">
                        <p><i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Politeknik Balekambang Jepara adalah salah satu tempat yang terbaik di Indonesia untuk
                            mengembangkan Kompetensi dan Karakter.<br>
                            Saya Berharap mahasiswa politeknik menjadi orang-orang sukses, baik dan kompeten.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{ asset('images/testimonials/wikan.jpg') }}" class="testimonial-img">
                        <h3>Wikan Sakarinto, ST.,M.Sc.,Ph.D.,</h3>
                        <h4>Direktur Jendral Pendidikan Vokasi</h4>
                    </div>
                    <div class="testimonial-item">
                        <p><i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Pendidikan Politeknik Balekambang Jepara merupakan program pemerintah untuk menciptakan SDM
                            yang memiliki keahlian baik. <br>
                            Disini anda bisa belajar agama dan juga pendidikan keahlian. Mari kuliah di Politeknik
                            Balekambang Jepara.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="{{ asset('images/testimonials/andang.jpg') }}" class="testimonial-img"">
                        <h3>Andang Wahyu Triyanto,SE.,MM.,</h3>
                        <h4>Anggota DPRD Provinsi Jawa Tengah</h4>
                    </div>
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
