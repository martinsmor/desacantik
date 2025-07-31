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

        <h4 class="mt-5">Kondisi Geografis</h4>
        <p>
            Kampung Bumi Ajo merupakan salah satu dari 7 (Tujuh) kampung yang termasuk dalam wilayah administrasi Distrik Moswaren, Kabupaten Sorong Selatan.
            Kampung Bumi Ajo merupakan daerah tropis yang terletak di dataran rendah sekitar 15 – 25 M di atas permukaan air laut dengan luas wilayah persawahan 150 Ha yang dialiri oleh sungai yaitu sungai <strong>Syata</strong> dengan anak sungai yaitu sungai <strong>Heh</strong>.
            Luas Kampung Bumi Ajo diperkirakan ± <strong>377,5</strong> Ha.
            Untuk lebih jelasnya dapat dilihat dalam Tabel 3:
        </p>

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
                <tr>
                    <td>1</td>
                    <td rowspan="2"><strong>UMUM</strong></td>
                    <td>Luas Kampung</td>
                    <td>{{ getJumlah($profildesa, 'UMUM', 'Wilayah', 'Luas Kampung (Ha)') }} Ha</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Batas Wilayah</td>
                    <td>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td>Utara</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>Bumi Saniari</td>
                            </tr>
                            <tr>
                                <td>Selatan</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>Kali Muturi</td>
                            </tr>
                            <tr>
                                <td>Barat</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>Tirasai</td>
                            </tr>
                            <tr>
                                <td>Timur</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>Pasamai</td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- PERTANAHAN -->
                <tr>
                    <td>2</td>
                    <td rowspan="2"><strong>PERTANAHAN</strong></td>
                    <td>Peruntukan</td>
                    <td>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td>Jalan</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($profildesa, 'PERTANAHAN', 'Peruntukan', 'Jalan (Km)') }} Km</td>
                            </tr>
                            <tr>
                                <td>Ladang</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($profildesa, 'PERTANAHAN', 'Peruntukan', 'Ladang (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td>Bangunan</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($profildesa, 'PERTANAHAN', 'Peruntukan', 'Bangunan (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td>Pemukiman</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($profildesa, 'PERTANAHAN', 'Peruntukan', 'Pemukiman (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td>Pekuburan</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($profildesa, 'PERTANAHAN', 'Peruntukan', 'Pekuburan (Ha)') }} Ha</td>
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
                                <td>{{ getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Industri (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td>b. Pertokoan</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Pertokoan (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td>c. Pertanian</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Pertanian (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td>d. Pasar Desa</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Pasar Desa (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td>e. Hutan Sagu</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Hutan Sagu (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td>f. Taman Kering : </td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ (int)getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Perladangan (Ha)') + 
                    (int)getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Perkebunan Negara (Ha)') + (int)getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Perkebunan Swasta (Ha)') + (int)getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Perkebunan Rakyat (Ha)')
                }} Ha</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">- Perladangan</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Perladangan (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">- Perkebunan Negara</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Perkebunan Negara (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">- Perkebunan Swasta</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Perkebunan Swasta (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">- Perkebunan Rakyat</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Perkebunan Rakyat (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td>g. Tanah Belum Dikelola : </td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ (int)getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Hutan (Ha)') + 
                    (int)getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Rawa (Ha)')
                }} Ha</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">- Hutan</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Hutan (Ha)') }} Ha</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">- Rawa</td>
                                <td style="padding: 0 5px;">:</td>
                                <td>{{ getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Rawa (Ha)') }} Ha</td>
                            </tr>
                        </table>
                    </td>
                </tr>


                <!-- KEPENDUDUKAN -->
                <tr>
                    <td>3</td>
                    <td rowspan="7"><strong>KEPENDUDUKAN</strong></td>
                    <td>Jumlah Penduduk Menurut Jenis Kelamin</td>
                    <td>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td style="padding-right: 1em;">a. Jenis Kelamin</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">Laki-laki</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Jenis Kelamin', 'Laki-laki (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">Perempuan</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Jenis Kelamin', 'Perempuan (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">Jumlah</td>
                                <td>: {{
                    (int)getJumlah($profildesa, 'KEPENDUDUKAN', 'Jenis Kelamin', 'Laki-laki (Orang)') + 
                    (int)getJumlah($profildesa, 'KEPENDUDUKAN', 'Jenis Kelamin', 'Perempuan (Orang)')
                }} Orang</td>
                            </tr>
                            <tr>
                                <td>b. Kepala Rumah Tangga</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Kepala Rumah Tangga', 'Kepala Rumah Tangga (Orang)') }} Orang</td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>Jumlah Penduduk Menurut Agama</td>
                    <td>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td style="padding-right: 1em;">Islam</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Agama', 'Islam (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>Kristen</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Agama', 'Kristen (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>Katolik</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Agama', 'Katolik (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>Hindu</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Agama', 'Hindu (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>Budha</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Agama', 'Budha (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>Konghucu</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Agama', 'Konghucu (Orang)') }} Orang</td>
                            </tr>
                        </table>

                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jumlah Penduduk Menurut Kelompok Pendidikan</td>
                    <td>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td style="padding-right: 1em;">Umur 0-3 tahun</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Pendidikan', 'Umur 0-3 tahun (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>Umur 4-6 tahun</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Pendidikan', 'Umur 4-6 tahun (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>Umur 7-12 tahun</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Pendidikan', 'Umur 7-12 tahun (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>Umur 13-15 tahun</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Pendidikan', 'Umur 13-15 tahun (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>Umur 16-18 tahun</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Pendidikan', 'Umur 16-18 tahun (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>Umur 19+ tahun</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Pendidikan', 'Umur 19+ tahun (Orang)') }} Orang</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jumlah Penduduk Menurut Kelompok Tenaga Kerja</td>
                    <td>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td style="padding-right: 1em;">Umur 10-14 tahun</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Tenaga Kerja', 'Umur 10-14 tahun (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>Umur 15-19 tahun</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Tenaga Kerja', 'Umur 15-19 tahun (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>Umur 20-26 tahun</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Tenaga Kerja', 'Umur 20-26 tahun (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>Umur 27-59 tahun</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Tenaga Kerja', 'Umur 27-59 tahun (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>Umur 60+ tahun</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Tenaga Kerja', 'Umur 60+ tahun (Orang)') }} Orang</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jumlah Penduduk Menurut Pendidikan</td>
                    <td>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td style="padding-right: 1em;">SD</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Pendidikan', 'SD (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>SMP</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Pendidikan', 'SMP (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>SMA/SMK/STM</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Pendidikan', 'SMA/SMK/STM (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>D1/D2/D3</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Pendidikan', 'D1/D2/D3 (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>S1/S2/S3</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Pendidikan', 'S1/S2/S3 (Orang)') }} Orang</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jumlah Penduduk Menurut Pekerjaan</td>
                    <td>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td style="padding-right: 1em;">PNS</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Pekerjaan', 'PNS (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>TNI/POLRI</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Pekerjaan', 'TNI/POLRI (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>Swasta</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Pekerjaan', 'Swasta (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>Tani</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Pekerjaan', 'Tani (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>Wiraswasta</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Pekerjaan', 'Wiraswasta (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>Pertukangan</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Pekerjaan', 'Pertukangan (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>Nelayan</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Pekerjaan', 'Nelayan (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>Pensiunan</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Pekerjaan', 'Pensiunan (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td>Jasa</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Pekerjaan', 'Jasa (Orang)') }} Orang</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>Jumlah Penduduk Menurut Mobilitas</td>
                    <td>
                        <table style="border-collapse: collapse;">
                            {{-- a. Lahir --}}
                            <tr>
                                <td colspan="2"><strong>a. Lahir</strong></td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em; padding-right: 1em;">Laki-laki</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Mobilitas', 'Lahir Laki-laki (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">Perempuan</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Mobilitas', 'Lahir Perempuan (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">Jumlah</td>
                                <td>: {{
                    (int)getJumlah($profildesa, 'KEPENDUDUKAN', 'Mobilitas', 'Lahir Laki-laki (Orang)') + 
                    (int)getJumlah($profildesa, 'KEPENDUDUKAN', 'Mobilitas', 'Lahir Perempuan (Orang)')
                }} Orang</td>
                            </tr>

                            {{-- b. Mati --}}
                            <tr>
                                <td colspan="2"><strong>b. Mati</strong></td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">Laki-laki</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Mobilitas', 'Mati Laki-laki (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">Perempuan</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Mobilitas', 'Mati Perempuan (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">Jumlah</td>
                                <td>: {{
                    (int)getJumlah($profildesa, 'KEPENDUDUKAN', 'Mobilitas', 'Mati Laki-laki (Orang)') + 
                    (int)getJumlah($profildesa, 'KEPENDUDUKAN', 'Mobilitas', 'Mati Perempuan (Orang)')
                }} Orang</td>
                            </tr>

                            {{-- c. Datang --}}
                            <tr>
                                <td colspan="2"><strong>c. Datang</strong></td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">Laki-laki</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Mobilitas', 'Datang Laki-laki (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">Perempuan</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Mobilitas', 'Datang Perempuan (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">Jumlah</td>
                                <td>: {{
                    (int)getJumlah($profildesa, 'KEPENDUDUKAN', 'Mobilitas', 'Datang Laki-laki (Orang)') + 
                    (int)getJumlah($profildesa, 'KEPENDUDUKAN', 'Mobilitas', 'Datang Perempuan (Orang)')
                }} Orang</td>
                            </tr>

                            {{-- d. Pergi --}}
                            <tr>
                                <td colspan="2"><strong>d. Pergi</strong></td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">Laki-laki</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Mobilitas', 'Pergi Laki-laki (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">Perempuan</td>
                                <td>: {{ getJumlah($profildesa, 'KEPENDUDUKAN', 'Mobilitas', 'Pergi Perempuan (Orang)') }} Orang</td>
                            </tr>
                            <tr>
                                <td style="padding-left: 2em;">Jumlah</td>
                                <td>: {{
                    (int)getJumlah($profildesa, 'KEPENDUDUKAN', 'Mobilitas', 'Pergi Laki-laki (Orang)') + 
                    (int)getJumlah($profildesa, 'KEPENDUDUKAN', 'Mobilitas', 'Pergi Perempuan (Orang)')
                }} Orang</td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- BIDANG PEMBANGUNAN -->
                <tr>
                    <td>4</td>
                    <td rowspan="5"><strong>BIDANG PEMBANGUNAN</strong></td>
                    <td>Jumlah Sarana Ibadah</td>
                    <td>
                        <table style="border-collapse: collapse;">
                            <tr>
                                <td>a. Masjid</td>
                                <td>: {{ getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Ibadah', 'Masjid (Buah)') }} Buah</td>
                            </tr>
                            <tr>
                                <td>b. Gereja</td>
                                <td>: {{ getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Ibadah', 'Gereja (Buah)') }} Buah</td>
                            </tr>
                            <tr>
                                <td>c. Vihara</td>
                                <td>: {{ getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Ibadah', 'Vihara (Buah)') }} Buah</td>
                            </tr>
                            <tr>
                                <td>d. Pura</td>
                                <td>: {{ getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Ibadah', 'Pura (Buah)') }} Buah</td>
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
                                <td>: {{ getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Kesehatan', 'Puskesmas (Buah)') }} Buah</td>
                            </tr>
                            <tr>
                                <td>b. Pustu</td>
                                <td>: {{ getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Kesehatan', 'Pustu (Buah)') }} Buah</td>
                            </tr>
                            <tr>
                                <td>c. Apotek</td>
                                <td>: {{ getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Kesehatan', 'Apotek (Buah)') }} Buah</td>
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
                                <td>: {{ getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Pendidikan', 'TK (Buah)') }} Buah</td>
                            </tr>
                            <tr>
                                <td>b. SD</td>
                                <td>: {{ getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Pendidikan', 'SD (Buah)') }} Buah</td>
                            </tr>
                            <tr>
                                <td>c. SMP</td>
                                <td>: {{ getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Pendidikan', 'SMP (Buah)') }} Buah</td>
                            </tr>
                            <tr>
                                <td>d. SMA</td>
                                <td>: {{ getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Pendidikan', 'SMA (Buah)') }} Buah</td>
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
                                <td>: {{ getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Olahraga', 'Lapangan Sepakbola (Buah)') }} Buah</td>
                            </tr>
                            <tr>
                                <td>b. Lapangan Voli</td>
                                <td>: {{ getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Olahraga', 'Lapangan Voli (Buah)') }} Buah</td>
                            </tr>
                            <tr>
                                <td>c. Lapangan Bulutangkis</td>
                                <td>: {{ getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Olahraga', 'Lapangan Bulutangkis (Buah)') }} Buah</td>
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
                                <td>: {{ getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Sepeda Motor (Unit)') }} Unit</td>
                            </tr>
                            <tr>
                                <td>b. Mobil</td>
                                <td>: {{ getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Mobil (Unit)') }} Unit</td>
                            </tr>
                            <tr>
                                <td>c. Sampan</td>
                                <td>: {{ getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Sampan (Unit)') }} Unit</td>
                            </tr>
                            <tr>
                                <td>d. Ketinting</td>
                                <td>: {{ getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Ketinting (Unit)') }} Unit</td>
                            </tr>
                            <tr>
                                <td>e. Longboat</td>
                                <td>: {{ getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Longboat (Unit)') }} Unit</td>
                            </tr>
                            <tr>
                                <td>f. Speedboat</td>
                                <td>: {{ getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Speedboat (Unit)') }} Unit</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>

        <h6 class="mt-4 text-center">Visualisasi Jumlah Penduduk</h6>

        <div style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap;">

            <!-- Chart Peruntukan -->
            <div style="width: 300px; height: 300px;">
                <h6 class="text-center">Peruntukan Lahan</h6>
                <canvas id="peruntukanChart"></canvas>
            </div>

            <!-- Chart Penggunaan -->
            <div style="width: 300px; height: 300px;">
                <h6 class="text-center">Penggunaan Lahan</h6>
                <canvas id="penggunaanChart"></canvas>
            </div>

            <!-- Chart Jenis Kelamin -->
            <div style="width: 300px; height: 300px;">
                <h6 class="text-center">Jenis Kelamin</h6>
                <canvas id="jenisKelaminChart"></canvas>
            </div>

            <!-- Chart Pendidikan -->
            <div style="width: 300px; height: 300px;">
                <h6 class="text-center">Kelompok Pendidikan</h6>
                <canvas id="kpendidikanChart"></canvas>
            </div>

            <!-- Chart Tenaga Kerja -->
            <div style="width: 300px; height: 300px;">
                <h6 class="text-center">Kelompok Tenaga Kerja</h6>
                <canvas id="tenagaKerjaChart"></canvas>
            </div>

            <!-- Chart Agama -->
            <div style="width: 300px; height: 300px;">
                <h6 class="text-center">Menurut Agama</h6>
                <canvas id="agamaChart"></canvas>
            </div>

            <!-- Chart Pendidikan -->
            <div style="width: 300px; height: 300px;">
                <h6 class="text-center">Pendidikan</h6>
                <canvas id="pendidikanChart"></canvas>
            </div>

            <!-- Chart Pekerjaan -->
            <div style="width: 300px; height: 300px;">
                <h6 class="text-center">Menurut Pekerjaan</h6>
                <canvas id="pekerjaanChart"></canvas>
            </div>

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
        $dataAgama = [
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Agama', 'Islam (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Agama', 'Kristen (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Agama', 'Katolik (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Agama', 'Hindu (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Agama', 'Budha (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Agama', 'Konghucu (Orang)'),
        ];
        @endphp

        <script>
            const ctx = document.getElementById('agamaChart').getContext('2d');
            const dataAgama = <?php echo json_encode($dataAgama); ?>;

            const agamaChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Konghucu'],
                    datasets: [{
                        label: 'Jumlah Penduduk',
                        data: dataAgama,
                        backgroundColor: [
                            '#4e73df',
                            '#1cc88a',
                            '#36b9cc',
                            '#f6c23e',
                            '#e74a3b',
                            '#858796'
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
        $dataPekerjaan = [
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Pekerjaan', 'PNS (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Pekerjaan', 'TNI/POLRI (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Pekerjaan', 'Swasta (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Pekerjaan', 'Tani (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Pekerjaan', 'Wiraswasta (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Pekerjaan', 'Pertukangan (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Pekerjaan', 'Nelayan (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Pekerjaan', 'Pensiunan (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Pekerjaan', 'Jasa (Orang)'),
        ];
        @endphp

        <script>
            const ctxPekerjaan = document.getElementById('pekerjaanChart').getContext('2d');
            const dataPekerjaan = <?php echo json_encode($dataPekerjaan); ?>;

            const pekerjaanChart = new Chart(ctxPekerjaan, {
                type: 'pie',
                data: {
                    labels: ['PNS', 'TNI/POLRI', 'Swasta', 'Tani', 'Wiraswasta', 'Pertukangan', 'Nelayan', 'Pensiunan', 'Jasa'],
                    datasets: [{
                        label: 'Jumlah Penduduk',
                        data: dataPekerjaan,
                        backgroundColor: [
                            '#4e73df', // PNS
                            '#1cc88a', // TNI/POLRI
                            '#36b9cc', // Swasta
                            '#f6c23e', // Tani
                            '#e74a3b', // Wiraswasta
                            '#858796', // Pertukangan
                            '#fd7e14', // Nelayan
                            '#20c997', // Pensiunan
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

        @php
        $dataPeruntukan = [
        getJumlah($profildesa, 'PERTANAHAN', 'Peruntukan', 'Ladang (Ha)'),
        getJumlah($profildesa, 'PERTANAHAN', 'Peruntukan', 'Bangunan (Ha)'),
        getJumlah($profildesa, 'PERTANAHAN', 'Peruntukan', 'Pemukiman (Ha)'),
        getJumlah($profildesa, 'PERTANAHAN', 'Peruntukan', 'Pekuburan (Ha)'),
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
        getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Industri (Ha)'),
        getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Pertokoan (Ha)'),
        getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Pertanian (Ha)'),
        getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Pasar Desa (Ha)'),
        getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Hutan Sagu (Ha)'),
        (int)getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Perladangan (Ha)') +
        (int)getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Perkebunan Negara (Ha)') + (int)getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Perkebunan Swasta (Ha)') + (int)getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Perkebunan Rakyat (Ha)'),
        (int)getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Hutan (Ha)') + (int)getJumlah($profildesa, 'PERTANAHAN', 'Penggunaan', 'Rawa (Ha)'),
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

        @php
        $dataKelamin = [
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Jenis Kelamin', 'Laki-laki (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Jenis Kelamin', 'Perempuan (Orang)'),
        ];
        @endphp

        <script>
            const ctxKelamin = document.getElementById('jenisKelaminChart').getContext('2d');
            const dataKelamin = <?php echo json_encode($dataKelamin); ?>;

            const kelaminChart = new Chart(ctxKelamin, {
                type: 'pie',
                data: {
                    labels: ['Laki-laki', 'Perempuan'],
                    datasets: [{
                        label: 'Jenis Kelamin',
                        data: dataKelamin,
                        backgroundColor: [
                            '#4e73df', // PNS
                            '#1cc88a' // TNI/POLRI
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
        $dataKPendidikan = [
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Pendidikan', 'Umur 0-3 tahun (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Pendidikan', 'Umur 4-6 tahun (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Pendidikan', 'Umur 7-12 tahun (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Pendidikan', 'Umur 13-15 tahun (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Pendidikan', 'Umur 16-18 tahun (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Pendidikan', 'Umur 19+ tahun (Orang)'),
        ];
        @endphp

        <script>
            const ctxKPendidikan = document.getElementById('kpendidikanChart').getContext('2d');
            const dataKPendidikan = <?php echo json_encode($dataKPendidikan); ?>;

            const kpendidikanChart = new Chart(ctxKPendidikan, {
                type: 'pie',
                data: {
                    labels: ['0-3', '4-6', '7-12', '13-15', '16-18', '19+'],
                    datasets: [{
                        label: 'Kelompok Pendidikan',
                        data: dataKPendidikan,
                        backgroundColor: [
                            '#4e73df', // PNS
                            '#1cc88a', // TNI/POLRI
                            '#36b9cc', // Swasta
                            '#f6c23e', // Tani
                            '#e74a3b', // Wiraswasta
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

        @php
        $dataTenagaKerja = [
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Tenaga Kerja', 'Umur 10-14 tahun (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Tenaga Kerja', 'Umur 15-19 tahun (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Tenaga Kerja', 'Umur 20-26 tahun (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Tenaga Kerja', 'Umur 27-59 tahun (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Kelompok Tenaga Kerja', 'Umur 60+ tahun (Orang)'),
        ];
        @endphp

        <script>
            const ctxTenagaKerja = document.getElementById('tenagaKerjaChart').getContext('2d');
            const dataTenagaKerja = <?php echo json_encode($dataTenagaKerja); ?>;

            const tenagakerjaChart = new Chart(ctxTenagaKerja, {
                type: 'pie',
                data: {
                    labels: ['10-14', '15-19', '20-26', '27-59', '60+'],
                    datasets: [{
                        label: 'Kelompok Tenaga Kerja',
                        data: dataTenagaKerja,
                        backgroundColor: [
                            '#4e73df', // PNS
                            '#1cc88a', // TNI/POLRI
                            '#36b9cc', // Swasta
                            '#f6c23e', // Tani
                            '#e74a3b' // Wiraswasta

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
        $dataPendidikan = [
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Pendidikan', 'SD (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Pendidikan', 'SMP (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Pendidikan', 'SMA/SMK/STM (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Pendidikan', 'D1/D2/D3 (Orang)'),
        getJumlah($profildesa, 'KEPENDUDUKAN', 'Pendidikan', 'S1/S2/S3 (Orang)'),
        ];
        @endphp

        <script>
            const ctxPendidikan = document.getElementById('pendidikanChart').getContext('2d');
            const dataPendidikan = <?php echo json_encode($dataPendidikan); ?>;

            const pendidikanChart = new Chart(ctxPendidikan, {
                type: 'pie',
                data: {
                    labels: ['SD', 'SMP', 'SMA/SMK/STM', 'D1,D2,D3', 'S1/S2/S3'],
                    datasets: [{
                        label: 'Pendidikan',
                        data: dataPendidikan,
                        backgroundColor: [
                            '#4e73df', // PNS
                            '#1cc88a', // TNI/POLRI
                            '#36b9cc', // Swasta
                            '#f6c23e', // Tani
                            '#e74a3b' // Wiraswasta

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
        $dataIbadah = [
        getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Ibadah', 'Masjid (Buah)'),
        getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Ibadah', 'Gereja (Buah)'),
        getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Ibadah', 'Vihara (Buah)'),
        getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Ibadah', 'Pura (Buah)'),
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
        getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Kesehatan', 'Puskesmas (Buah)'),
        getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Kesehatan', 'Pustu (Buah)'),
        getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Kesehatan', 'Apotek (Buah)'),
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
        getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Pendidikan', 'TK (Buah)'),
        getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Pendidikan', 'SD (Buah)'),
        getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Pendidikan', 'SMP (Buah)'),
        getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Pendidikan', 'SMA (Buah)'),
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
        getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Olahraga', 'Lapangan Sepakbola (Buah)'),
        getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Olahraga', 'Lapangan Voli (Buah)'),
        getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Olahraga', 'Lapangan Bulutangkis (Buah)'),
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
        getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Sepeda Motor (Unit)'),
        getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Mobil (Unit)'),
        getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Sampan (Unit)'),
        getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Ketinting (Unit)'),
        getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Longboat (Unit)'),
        getJumlah($profildesa, 'BIDANG PEMBANGUNAN', 'Sarana Transportasi', 'Speedboat (Unit)'),
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