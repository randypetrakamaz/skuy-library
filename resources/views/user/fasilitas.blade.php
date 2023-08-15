<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Skuy | Fasilitas</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('my_assets/img/favicon/skuyfav.ico') }}" rel="icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('template/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('template//vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('my_assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <a href="/"><img src="{{ asset('my_assets/img/logo.png') }}" alt=""></a>
            </div>

            <!-- Navbar -->
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="active " href="/">Beranda</a></li>
                    <li class="dropdown"><a href="/cari"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/cari">Cari Buku</a></li>
                            <li><a href="/pinjam">Peminjaman Buku</a></li>
                            <li><a href="/kembali">Pengembalian Buku</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/visimisi">Visi dan Misi</a></li>
                            <li><a href="/jamlayanan">Jam Layanan</a></li>
                            <li><a href="/fasilitas" class="nav-link disabled active">Fasilitas</a></li>
                            <li><a href="jeniskoleksi">Jenis Koleksi</a></li>
                            <li><a href="/profile">Profil</a></li>
                        </ul>
                    </li>
                    <li><a href="/faq">FAQ</a></li>
                    <li class="nav-item">
                        <a class="nav-link " href="/login"><i class="bi bi-box-arrow-in-right"></i>Admin</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- end navbar -->

        </div>
    </header><!-- End Header -->


    <main id="main">
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h1><strong>Fasilitas</strong></h1>
                </div>
            </div>
        </section>
        <section class="features">
            <div class="container">
                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="assets/img/features-2.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3>Fasilitas Perpustakaan SKUY</h3>
                        <p>Dalam upaya menciptakan kenyamanan dan mendukung fungsi Perpustakaan
                            sebagai tempat berkegiatan para pengunjungnya, perpustakaan SKUY menyediakan fasilitas
                            sebagai berikut</p>

                        <h5>A. Mushola</h5>
                        <p>Mushola berada di lantai dasar (basement) dan Lantai 4 dilengkapi dengan toilet dan tempat
                            wudhu.</p>
                        <br>
                        <h5>B. Toko Buku</h5>
                        <p>Toko buku yang terletak di lobby gedung perpustakaan ini menyediakan berbagai text book
                            maupun buku-buku popular.</p>
                        <br>
                        <h5>C. Ruang Serbaguna</h5>
                        <p>Terletak di Lantai 1 merupakan ruangan untuk kegiatan komunitas perpustakaan dan Sobat SKUY.
                            Ruangan
                            dilengkapi projector, layar, dan sound system. Ruang Serbaguna juga merupakan lokasi
                            penyimpanan koleksi kerja sama (Sampoerna Corner, Indonesia Nation Building Corner, dan
                            Goethe Institut).</p>
                        <br>
                        <h5>D. Ruang Audio Visual</h5>
                        <p>Ruang Audio Visual merupakan ruangan pelatihan teknologi informasi di perpustakaan yang
                            dilengkapi dengan komputer dekstop, projector, layar, dan sound system. Ruang pelatihan
                            teknologi informasi
                            ini dimanfaatkan pula untuk aktivitas layanan internet mahasiswa di perpustakaan yang
                            terletak di Lantai 4.</p>
                        <br>
                        <h5>E. Toilet</h5>
                        <p>Perpustakaan SKUY mempunyai fasilitas toilet untuk kenyamanan pengunjung</p>


                        <!-- <ul>
                    <li><i class="bi bi-dot"></i> Senin s/d Kamis Pukul 08:00-17:00</li>
                    <li><i class="bi bi-dot"></i> Jum'at s/d Sabtu Pukul 08:00-12:00</li>
                    
                </ul>
                <br><br><br><br> -->
                        <!-- <h3>Misi</h3>
                
                <ul>
                    <li><i class="bi bi-dot"></i> Menunjang keberhasilan Misi SKUY dengan memberikan layanan informasi secara efektif dan efisien.</li>
                    <li><i class="bi bi-dot"></i> Menjadi mitra profesional bagi para peneliti dan pendidik.</li>
                    <li><i class="bi bi-dot"></i> Mengembangkan, mengorganisasi, dan mendayagunakan koleksi ilmu pengetahuan, sains dan teknologi serta humaniora sebagai 
                    bahan rujukan bagi sivitas akademika dan masyarakat sehingga tercipta masyarakat produsen informasi.</li>
                    <li><i class="bi bi-dot"></i> Menyebarluaskan informasi, khususnya intellectual capital SKUY, agar dapat dimanfaatkan oleh Sobat SKUY,
                     dan juga masyarakat di seluruh dunia dengan memanfaatkan teknologi informasi yang ada dan yang akan ada.</li>
                    <li><i class="bi bi-dot"></i> Menjalin kerja sama dengan berbagai institusi di dalam dan luar negeri untuk memperoleh informasi yang dibutuhkan oleh sivitas akademika dan masyarakat.</li>
                </ul> -->


                    </div>
                </div>


        </section><!-- End Features Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <div data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0d2735" fill-opacity="1"
                d="M0,128L80,144C160,160,320,192,480,218.7C640,245,800,267,960,266.7C1120,267,1280,245,1360,234.7L1440,224L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>

        <footer id="footer">

            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 footer-info">
                            <img src="{{ asset('my_assets/img/logo2.png') }}" alt="" class="w-50 mb-4">
                            <h5>Skuy Library</h5>
                            <p>Karangkidul, Kec. Semarang Tengah, Kota <br>Semarang, Jawa Tengah, 50241</p>
                            <p><i class="bi bi-telephone"></i>&nbsp Telepon: (0274) 513163</p>
                            <p><i class="bi bi-envelope"></i>&nbsp E-mail: library@skuy.ac.id</p>
                            <p><i class="bi bi-whatsapp"></i>&nbsp Whatsapp: 0811 2944 064</p>
                            <div class="social-links mt-4">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Jam Operasional</h4>
                            <p><i class="bx bx-chevron-right"></i>Senin - Kamis</p>
                            <p>&nbsp&nbsp&nbsp 08.00-16.00 WIB</p>
                            <p><i class="bx bx-chevron-right"></i>Jumat</p>
                            <p>&nbsp&nbsp&nbsp 08.00-11.00 WIB</p>
                            <p>&nbsp&nbsp&nbsp 13.00-16.00 WIB</p>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Link Terkait</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="/cari">Cari Buku</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="/pinjam">Pinjam Buku</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="/kembali">Kembalikan Buku</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="/berita">Berita</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-contact">
                            <h4>Google Maps</h4>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7920.32913046509!2d110.42355507238167!3d-6.9898888806761645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ca736e32dfd%3A0xd645c6e3bc004f4d!2sKarangkidul%2C%20Kec.%20Semarang%20Tengah%2C%20Kota%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1670302530871!5m2!1sid!2sid"
                                tyle="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade" class="w-100 h-75"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </footer>
    </div><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('template/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('template/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('template/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('template/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('template/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('template/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('template/js/main.js') }}"></script>
</body>

</html>