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
    <link href="css/style.css" rel="stylesheet">
    <style>
        .grid-view .berita-item {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .card-title {
            font-weight: 700;
            border-left: 4px solid #0d6efd;
            padding-left: 12px;
        }

        .list-group-item {
            background-color: #f8f9fa;
            font-size: 16px;
        }
    </style>

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
                    <h1 class="display-3 text-white animated slideInDown">VISI & MISI</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Visi Misi Start -->
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="section-title bg-light text-primary d-inline-block px-4 py-2 rounded">Visi & Misi Kampung Korano Jaya SP2</h2>
        </div>

        <!-- VISI -->
        <div class="card shadow-sm mb-5 border-0">
            <div class="card-body">
                <h4 class="card-title text-primary"><i class="fas fa-eye me-2"></i>Visi Kampung</h4>
                <p class="card-text fs-5 mt-3">"MEWUJUDKAN KAMPUNG KORANO JAYA YANG HARMONIS, PRODUKTIFITAS, DAN SEJAHTERA"</p>
            </div>
        </div>

        <!-- MISI -->
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h4 class="card-title text-success"><i class="fas fa-bullseye me-2"></i>Misi Kampung</h4>
                <ul class="list-group list-group-flush mt-3">
                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Melaksanakan Roda Pemerintahan Kampung yang Transparan dan Akuntabel Berasaskan Musyawarah</li>
                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Meningkatkan Sarana Prasarana Kampung yang Memadai dan Merata dalam Wilayah Kampung Korano Jaya</li>
                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Meningkatkan Pemberdayaan Ekonomi Masyarakat</li>
                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Mempererat Kerukunan Sesama Warga Kampung dan Antar Kampung</li>
                    <li class="list-group-item"><i class="bi bi-check-circle-fill text-success me-2"></i> Menggerakkan Menghidupkan Kembali Semua Kelembagaan Sosial Masyarakat</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Visi Misi End -->



    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">ORGANISASI</h6>
                <h1 class="mb-5">Pengurus Kampung SP2 Korano Jaya</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-1.png" alt="">
                        </div>
                        {{-- <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div> --}}
                        <div class="text-center p-4">
                            <h5 class="mb-0">SIMON D.KARTO</h5>
                            <small>KEPALA KAMPUNG</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/boy.png" alt="">
                        </div>
                        {{-- <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div> --}}
                        <div class="text-center p-4">
                            <h5 class="mb-0">RICLOF KARTO</h5>
                            <small>KASI PEMERINTAHAN</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/girl.png" alt="">
                        </div>
                        {{-- <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div> --}}
                        <div class="text-center p-4">
                            <h5 class="mb-0">AMBARSARI</h5>
                            <small>KAUR KEUANGAN</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-5.png" alt="">
                        </div>
                        {{-- <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div> --}}
                        <div class="text-center p-4">
                            <h5 class="mb-0">EDDY PRAMONO</h5>
                            <small>KAUR UMUM</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

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