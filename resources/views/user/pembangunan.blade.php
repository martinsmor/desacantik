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
    <link href="/css/bootstrap.min.css" rel="stylesheet">

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
                <!-- BIDANG PEMBANGUNAN -->
                <tr>
                    <td>1</td>
                    <td rowspan="5"><strong>BIDANG PEMBANGUNAN</strong></td>
                    <td>Jumlah Sarana Ibadah</td>
                    <td>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td>a. Masjid</td>
                                <td>: {{ getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Ibadah', 'Masjid (Buah)') }} Buah</td>
                            </tr>
                            <tr>
                                <td>b. Gereja</td>
                                <td>: {{ getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Ibadah', 'Gereja (Buah)') }} Buah</td>
                            </tr>
                            <tr>
                                <td>c. Vihara</td>
                                <td>: {{ getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Ibadah', 'Vihara (Buah)') }} Buah</td>
                            </tr>
                            <tr>
                                <td>d. Pura</td>
                                <td>: {{ getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Ibadah', 'Pura (Buah)') }} Buah</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jumlah Sarana Kesehatan</td>
                    <td>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td>a. Puskesmas</td>
                                <td>: {{ getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Kesehatan', 'Puskesmas (Buah)') }} Buah</td>
                            </tr>
                            <tr>
                                <td>b. Pustu</td>
                                <td>: {{ getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Kesehatan', 'Pustu (Buah)') }} Buah</td>
                            </tr>
                            <tr>
                                <td>c. Apotek</td>
                                <td>: {{ getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Kesehatan', 'Apotek (Buah)') }} Buah</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jumlah Sarana Pendidikan</td>
                    <td>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td>a. TK</td>
                                <td>: {{ getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Pendidikan', 'TK (Buah)') }} Buah</td>
                            </tr>
                            <tr>
                                <td>b. SD</td>
                                <td>: {{ getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Pendidikan', 'SD (Buah)') }} Buah</td>
                            </tr>
                            <tr>
                                <td>c. SMP</td>
                                <td>: {{ getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Pendidikan', 'SMP (Buah)') }} Buah</td>
                            </tr>
                            <tr>
                                <td>d. SMA</td>
                                <td>: {{ getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Pendidikan', 'SMA (Buah)') }} Buah</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jumlah Sarana Olahraga</td>
                    <td>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td>a. Lapangan Sepakbola</td>
                                <td>: {{ getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Olahraga', 'Lapangan Sepakbola (Buah)') }} Buah</td>
                            </tr>
                            <tr>
                                <td>b. Lapangan Voli</td>
                                <td>: {{ getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Olahraga', 'Lapangan Voli (Buah)') }} Buah</td>
                            </tr>
                            <tr>
                                <td>c. Lapangan Bulutangkis</td>
                                <td>: {{ getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Olahraga', 'Lapangan Bulutangkis (Buah)') }} Buah</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jumlah Sarana Transportasi</td>
                    <td>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td>a. Sepeda Motor</td>
                                <td>: {{ getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Sepeda Motor (Unit)') }} Unit</td>
                            </tr>
                            <tr>
                                <td>b. Mobil</td>
                                <td>: {{ getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Mobil (Unit)') }} Unit</td>
                            </tr>
                            <tr>
                                <td>c. Sampan</td>
                                <td>: {{ getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Sampan (Unit)') }} Unit</td>
                            </tr>
                            <tr>
                                <td>d. Ketinting</td>
                                <td>: {{ getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Ketinting (Unit)') }} Unit</td>
                            </tr>
                            <tr>
                                <td>e. Longboat</td>
                                <td>: {{ getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Longboat (Unit)') }} Unit</td>
                            </tr>
                            <tr>
                                <td>f. Speedboat</td>
                                <td>: {{ getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Speedboat (Unit)') }} Unit</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>

        <h6 class="mt-4 text-center">Visualisasi Pembangunan</h6>

        <div style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap;">

            <!-- Chart Ibadah -->
            <div style="width: 300px; height: 300px;">
                <h6 class="text-center">Sarana Ibadah</h6>
                <canvas id="ibadahChart"></canvas>
            </div>

            <!-- Chart Kesehatan -->
            <div style="width: 300px; height: 300px;">
                <h6 class="text-center">Sarana Kesehatan</h6>
                <canvas id="kesehatanChart"></canvas>
            </div>

            <!-- Chart Sarana Pendidikan -->
            <div style="width: 300px; height: 300px;">
                <h6 class="text-center">Sarana Pendidikan</h6>
                <canvas id="spendidikanChart"></canvas>
            </div>

            <!-- Chart Olahraga -->
            <div style="width: 300px; height: 300px;">
                <h6 class="text-center">Sarana Olahraga</h6>
                <canvas id="olahragaChart"></canvas>
            </div>

            <!-- Chart Transportasi -->
            <div style="width: 300px; height: 300px;">
                <h6 class="text-center">Sarana Transportasi</h6>
                <canvas id="transportasiChart"></canvas>
            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        @php
        $dataIbadah = [
        getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Ibadah', 'Masjid (Buah)'),
        getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Ibadah', 'Gereja (Buah)'),
        getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Ibadah', 'Vihara (Buah)'),
        getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Ibadah', 'Pura (Buah)'),
        ];
        @endphp

        <script>
            const ctxIbadah = document.getElementById('ibadahChart').getContext('2d');
            const dataIbadah = <?php echo json_encode($dataIbadah); ?>;

            const ibadahChart = new Chart(ctxIbadah, {
                type: 'pie',
                data: {
                    labels: ['Masjid', 'Gereja', 'Vihara', 'Pura'],
                    datasets: [{
                        label: 'Sarana Ibadah',
                        data: dataIbadah,
                        backgroundColor: [
                            '#4e73df', // PNS
                            '#1cc88a', // TNI/POLRI
                            '#36b9cc', // Swasta
                            '#e74a3b'
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
        $dataKesehatan = [
        getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Kesehatan', 'Puskesmas (Buah)'),
        getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Kesehatan', 'Pustu (Buah)'),
        getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Kesehatan', 'Apotek (Buah)'),
        ];
        @endphp

        <script>
            const ctxKesehatan = document.getElementById('kesehatanChart').getContext('2d');
            const dataKesehatan = <?php echo json_encode($dataKesehatan); ?>;

            const kesehatanChart = new Chart(ctxKesehatan, {
                type: 'bar',
                data: {
                    labels: ['Puskesmas', 'Pustu', 'Apotek'],
                    datasets: [{
                        label: 'Sarana Kesehatan',
                        data: dataKesehatan,
                        backgroundColor: [
                            '#4e73df', // PNS
                            '#1cc88a', // TNI/POLRI
                            '#e74a3b'
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
        $dataSPendidikan = [
        getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Pendidikan', 'TK (Buah)'),
        getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Pendidikan', 'SD (Buah)'),
        getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Pendidikan', 'SMP (Buah)'),
        getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Pendidikan', 'SMA (Buah)'),
        ];
        @endphp

        <script>
            const ctxSPendidikan = document.getElementById('spendidikanChart').getContext('2d');
            const dataSPendidikan = <?php echo json_encode($dataSPendidikan); ?>;

            const spendidikanChart = new Chart(ctxSPendidikan, {
                type: 'bar',
                data: {
                    labels: ['TK', 'SD', 'SMP', 'SMA'],
                    datasets: [{
                        label: 'Sarana Pendidikan',
                        data: dataSPendidikan,
                        backgroundColor: [
                            '#4e73df', // PNS
                            '#1cc88a', // TNI/POLRI
                            '#36b9cc', // Swasta
                            '#e74a3b'
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
        $dataOlahraga = [
        getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Olahraga', 'Lapangan Sepakbola (Buah)'),
        getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Olahraga', 'Lapangan Voli (Buah)'),
        getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Olahraga', 'Lapangan Bulutangkis (Buah)'),
        ];
        @endphp

        <script>
            const ctxOlahraga = document.getElementById('olahragaChart').getContext('2d');
            const dataOlahraga = <?php echo json_encode($dataOlahraga); ?>;

            const olahragaChart = new Chart(ctxOlahraga, {
                type: 'bar',
                data: {
                    labels: ['Sepakbola', 'Voli', 'Bulutangkis'],
                    datasets: [{
                        label: 'Sarana Olahraga',
                        data: dataOlahraga,
                        backgroundColor: [
                            '#4e73df', // PNS
                            '#36b9cc', // Swasta
                            '#e74a3b'
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
        $dataTransportasi = [
        getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Sepeda Motor (Unit)'),
        getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Mobil (Unit)'),
        getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Sampan (Unit)'),
        getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Ketinting (Unit)'),
        getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Longboat (Unit)'),
        getJumlah($pembangunan, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Speedboat (Unit)'),
        ];
        @endphp

        <script>
            const ctxTransportasi = document.getElementById('transportasiChart').getContext('2d');
            const dataTransportasi = <?php echo json_encode($dataTransportasi); ?>;

            const transportasiChart = new Chart(ctxTransportasi, {
                type: 'pie',
                data: {
                    labels: ['Motor', 'Mobil', 'Sampan', 'Ketinting', 'Longboat', 'Speedboat'],
                    datasets: [{
                        label: 'Sarana Transportasi',
                        data: dataTransportasi,
                        backgroundColor: [
                            '#4e73df', // PNS
                            '#1cc88a', // TNI/POLRI
                            '#36b9cc', // Swasta
                            '#e74a3b', // Wiraswasta
                            '#f6c23e', // Tani
                            '#6f42c1' // Jasa
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