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
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .chart-container {
            max-width: 3px;
            max-height: 3px;
            margin: auto;
            /* center */
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
                    <h1 class="display-3 text-white animated slideInDown">PROFIL DESA</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container-xl py-5 mb-5">
        @section('content')

        <table class="table table-bordered mt-3">
            <thead class="table-primary">
                <tr>
                    <th style="width: 5%;">No</th>
                    <th style="width: 20%;">Kategori</th>
                    <th style="width: 35%;">Sub-Kategori</th>
                    <th style="width: 40%;">Uraian</th>
                </tr>
            </thead>
            <tbody>
                @php
                function getJumlah($data, $kategori, $sub_kategori, $uraian) {
                return optional($data[$kategori][$sub_kategori] ?? collect())->firstWhere('uraian', $uraian)->jumlah ?? '';
                }
                @endphp

                <!-- PERTANAHAN -->
                <tr>
                    <td>1</td>
                    <td rowspan="2"><strong>PERTANAHAN</strong></td>
                    <td>Peruntukan</td>
                    <td>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td>Jalan</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($pertanahan, 'PERTANAHAN', 'Peruntukan', 'Jalan (Km)') }} Km</td>
                            </tr>
                            <tr>
                                <td>Ladang</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($pertanahan, 'PERTANAHAN', 'Peruntukan', 'Ladang (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td>Bangunan</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($pertanahan, 'PERTANAHAN', 'Peruntukan', 'Bangunan (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td>Pemukiman</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($pertanahan, 'PERTANAHAN', 'Peruntukan', 'Pemukiman (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td>Pekuburan</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($pertanahan, 'PERTANAHAN', 'Peruntukan', 'Pekuburan (Ha)') }} Ha</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Penggunaan</td>
                    <td>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td>a. Industri</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Industri (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td>b. Pertokoan</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Pertokoan (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td>c. Pertanian</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Pertanian (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td>d. Pasar Desa</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Pasar Desa (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td>e. Hutan Sagu</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Hutan Sagu (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td>f. Taman Kering : </td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ (int)getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Perladangan (Ha)') + 
                    (int)getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Perkebunan Negara (Ha)') + (int)getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Perkebunan Swasta (Ha)') + (int)getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Perkebunan Rakyat (Ha)')
                }} Ha</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">- Perladangan</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Perladangan (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">- Perkebunan Negara</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Perkebunan Negara (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">- Perkebunan Swasta</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Perkebunan Swasta (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">- Perkebunan Rakyat</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Perkebunan Rakyat (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td>g. Tanah Belum Dikelola : </td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ (int)getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Hutan (Ha)') + 
                    (int)getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Rawa (Ha)')
                }} Ha</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">- Hutan</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Hutan (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">- Rawa</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Rawa (Ha)') }} Ha</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>

        <h6 class="mt-4 text-center">Visualisasi Pertanahan</h6>

        <div style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap;">

            <!-- Chart Peruntukan -->
            <div style="width: 400px; height: 400px;">
                <h6 class="text-center">Peruntukan Lahan</h6>
                <canvas id="peruntukanChart"></canvas>
            </div>

            <!-- Chart Penggunaan -->
            <div style="width: 400px; height: 400px;">
                <h6 class="text-center">Penggunaan Lahan</h6>
                <canvas id="penggunaanChart"></canvas>
            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        @php
        $dataPeruntukan = [
        getJumlah($pertanahan, 'PERTANAHAN', 'Peruntukan', 'Ladang (Ha)'),
        getJumlah($pertanahan, 'PERTANAHAN', 'Peruntukan', 'Bangunan (Ha)'),
        getJumlah($pertanahan, 'PERTANAHAN', 'Peruntukan', 'Pemukiman (Ha)'),
        getJumlah($pertanahan, 'PERTANAHAN', 'Peruntukan', 'Pekuburan (Ha)'),
        ];
        @endphp

        <script>
            const ctxPeruntukan = document.getElementById('peruntukanChart').getContext('2d');
            const dataPeruntukan = <?php echo json_encode($dataPeruntukan); ?>;

            const peruntukanChart = new Chart(ctxPeruntukan, {
                type: 'pie',
                data: {
                    labels: ['Ladang', 'Bangunan', 'Pemukiman', 'Pekuburan'],
                    datasets: [{
                        label: 'Peruntukan',
                        data: dataPeruntukan,
                        backgroundColor: [
                            '#4e73df', // PNS
                            '#1cc88a', // TNI/POLRI
                            '#36b9cc', // Swasta
                            'red' // Tani
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                            labels: {
                                boxWidth: 10, // ukuran kotak warna
                                font: {
                                    size: 10
                                },
                                padding: 10
                            }
                        }
                    }
                }
            });
        </script>

        @php
        $dataPenggunaan = [
        getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Industri (Ha)'),
        getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Pertokoan (Ha)'),
        getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Pertanian (Ha)'),
        getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Pasar Desa (Ha)'),
        getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Hutan Sagu (Ha)'),
        (int)getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Perladangan (Ha)') +
        (int)getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Perkebunan Negara (Ha)') + (int)getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Perkebunan Swasta (Ha)') + (int)getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Perkebunan Rakyat (Ha)'),
        (int)getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Hutan (Ha)') + (int)getJumlah($pertanahan, 'PERTANAHAN', 'Penggunaan', 'Rawa (Ha)'),
        ];
        @endphp

        <script>
            const ctxPenggunaan = document.getElementById('penggunaanChart').getContext('2d');
            const dataPenggunaan = <?php echo json_encode($dataPenggunaan); ?>;

            const penggunaanChart = new Chart(ctxPenggunaan, {
                type: 'pie',
                data: {
                    labels: ['Industri', 'Pertokoan', 'Pertanian', 'Pasar Desa', 'Hutan Sagu', 'Taman Kering', 'Tanah Belum Dikelola'],
                    datasets: [{
                        label: 'Penggunaan',
                        data: dataPenggunaan,
                        backgroundColor: [
                            '#4e73df', // PNS
                            '#1cc88a', // TNI/POLRI
                            '#36b9cc', // Swasta
                            '#A52A2A', // Tani
                            '#e74a3b', // Wiraswasta
                            '#858796',
                            '#B8860B' // Pensiunan
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'top',
                            labels: {
                                boxWidth: 10, // ukuran kotak warna
                                font: {
                                    size: 10
                                },
                                padding: 10
                            }
                        }
                    }
                }
            });
        </script>


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