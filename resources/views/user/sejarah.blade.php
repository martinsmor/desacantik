<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Desa Cantik</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/desacantik.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
    <style>
        .grid-view .berita-item {
            flex: 0 0 50%;
            max-width: 50%;
        }
    </style>
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <script src="lib/wow/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    @include('layout.navbar')
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">SEJARAH</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="bg-light rounded p-4 shadow-sm wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4 text-center text-primary">Sejarah Kampung Korano Jaya SP2</h3>
                    <p style="text-align: justify; line-height: 1.8;">
                        Kampung Korano Jaya SP2 merupakan salah satu kampung yang terletak di Distrik Manimeri, Kabupaten Teluk Bintuni, Papua Barat. Kampung ini dibentuk melalui program transmigrasi yang bertujuan mengembangkan wilayah dan menyebarkan kepadatan penduduk ke daerah potensial namun belum berkembang maksimal.
                    </p>
                    <p style="text-align: justify; line-height: 1.8;">
                        Sejak awal, kampung ini dihuni oleh masyarakat dari berbagai etnis yang hidup berdampingan dengan masyarakat asli Papua dalam semangat gotong royong. Secara geografis, letaknya dekat pusat kota Teluk Bintuni sehingga memiliki akses layanan publik dan transportasi yang lebih baik dibanding kampung pedalaman.
                    </p>
                    <div class="row g-4 my-4">
                        <div class="col-md-6">
                            <div class="bg-white rounded p-3 h-100 border-start border-4 border-primary">
                                <h6><i class="fas fa-fish me-2 text-primary"></i> Potensi Ekonomi</h6>
                                <p class="mb-0 small">
                                    Sebagian besar masyarakat menggantungkan hidup dari sektor perikanan—sebagai nelayan, pembudidaya kepiting dan pencari udang—serta dari pertanian dan kebun rumah tangga.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="bg-white rounded p-3 h-100 border-start border-4 border-warning">
                                <h6><i class="fas fa-home me-2 text-warning"></i> Infrastruktur dan Bantuan</h6>
                                <p class="mb-0 small">
                                    Sejumlah rumah bantuan dibangun oleh pemerintah pusat melalui Kementerian PUPR pada 2018–2019, namun hingga kini belum dihuni karena kendala pendataan penerima dan belum adanya SK penetapan penghuni.
                                </p>
                            </div>
                        </div>
                    </div>
                    <p style="text-align: justify; line-height: 1.8;">
                        Masyarakat juga pernah mengusulkan pembangunan <strong>jeti apung</strong> di kawasan pesisir sebagai tempat berlabuh nelayan. Meski sudah ada inisiatif swadaya, pembangunan tersebut belum terealisasi karena kurangnya dukungan dari pihak terkait.
                    </p>
                    <p style="text-align: justify; line-height: 1.8;">
                        Dalam bidang sosial dan olahraga, kampung ini aktif mengadakan turnamen sepak bola lokal yang menjadi simbol integrasi sosial dan semangat persatuan. Lapangan kampung menjadi pusat interaksi antar generasi dan antar kampung.
                    </p>
                    <p style="text-align: justify; line-height: 1.8;">
                        Secara umum, Korano Jaya SP2 merupakan gambaran kampung yang sedang bertumbuh—dengan semangat masyarakat yang tinggi dan potensi ekonomi yang kuat, meski masih menghadapi tantangan administratif, distribusi bantuan, dan infrastruktur dasar.
                    </p>
                    <div class="text-center mt-4">
                        <i class="fas fa-seedling fa-2x text-success mb-2"></i>
                        <h6 class="text-muted small">Dengan partisipasi aktif masyarakat dan dukungan semua pihak, kampung ini berpeluang menjadi wilayah yang mandiri dan sejahtera.</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @include('layout.footer')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        function toggleBerita(index) {
            const preview = document.getElementById('preview-' + index);
            const full = document.getElementById('full-' + index);
            const btn = document.getElementById('toggleBtn-' + index);

            if (preview.classList.contains('d-none')) {
                preview.classList.remove('d-none');
                full.classList.add('d-none');
                btn.textContent = 'Lihat Selengkapnya';
            } else {
                preview.classList.add('d-none');
                full.classList.remove('d-none');
                btn.textContent = 'Tampilkan Lebih Sedikit';
            }
        }
    </script>

</body>

</html>