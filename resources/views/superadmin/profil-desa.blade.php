<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/desacantik.png">
    <title> Admin Desa Cantik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="user/ssets/images/favicon.ico">

    <!-- third party css -->
    <link href="user/assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <!-- third party css end -->

    <!-- tabel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0//css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    <!-- App css -->
    <link href="user/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="user/assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
    <link href="user/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">

</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- sidebar -->
    @include('layout_admin.sidebar_sa')
    <!-- endsidebar -->

    <!-- Topbar -->
    @include('layout_admin.topbar')
    <!-- End Topbar-->

    <!-- start page title -->
    <div class="container mt-4">
        <h4>Tambah Data Profil Desa</h4>
        <form action="{{ route('profil-desa.profils') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select name="kategori" id="kategori" class="form-control" required onchange="updateOptions()">
                    <option value="">-- Pilih Kategori --</option>
                    <option value="UMUM">UMUM</option>
                    <option value="PERTANAHAN">PERTANAHAN</option>
                    <option value="KEPENDUDUKAN">KEPENDUDUKAN</option>
                    <option value="BIDANG PEMBANGUNAN">BIDANG PEMBANGUNAN</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="sub_kategori" class="form-label">Sub Kategori</label>
                <select name="sub_kategori" id="sub_kategori" class="form-control" required>
                    <option value="">-- Pilih Sub Kategori --</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="uraian" class="form-label">Uraian</label>
                <select name="uraian" id="uraian" class="form-control" required>
                    <option value="">-- Pilih Uraian --</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" name="jumlah" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <script>
            const data = {
                "UMUM": {
                    "Wilayah": ["Luas Kampung (Ha)"]
                },
                "PERTANAHAN": {
                    "Peruntukan": ["Jalan (Km)", "Ladang (Ha)", "Bangunan (Ha)", "Pemukiman (Ha)", "Pekuburan (Ha)"],
                    "Penggunaan": ["Industri (Ha)", "Pertokoan (Ha)", "Pertanian (Ha)", "Pasar Desa (Ha)", "Hutan Sagu (Ha)", "Perladangan (Ha)", "Perkebunan Negara (Ha)", "Perkebunan Swasta (Ha)", "Perkebunan Rakyat (Ha)", "Hutan (Ha)", "Rawa (Ha)"]
                },
                "KEPENDUDUKAN": {
                    "Jenis Kelamin": ["Laki-laki (Orang)", "Perempuan (Orang)"],
                    "Kepala Rumah Tangga": ["Kepala Rumah Tangga (Orang)"],
                    "Agama": ["Islam (Orang)", "Kristen (Orang)", "Katolik (Orang)", "Hindu (Orang)", "Budha (Orang)", "Konghucu (Orang)"],
                    "Kelompok Pendidikan": ["Umur 0-3 tahun (Orang)", "Umur 4-6 tahun (Orang)", "Umur 7-12 tahun (Orang)", "Umur 13-15 tahun (Orang)", "Umur 16-18 tahun (Orang)", "Umur 19+ tahun (Orang)"],
                    "Kelompok Tenaga Kerja": ["Umur 10-14 tahun (Orang)", "Umur 15-19 tahun (Orang)", "Umur 20-26 tahun (Orang)", "Umur 27-59 tahun (Orang)", "Umur 60+ tahun (Orang)"],
                    "Pendidikan": ["SD (Orang)", "SMP (Orang)", "SMA/SMK/STM (Orang)", "D1/D2/D3 (Orang)", "S1/S2/S3 (Orang)"],
                    "Pekerjaan": ["PNS (Orang)", "TNI/POLRI (Orang)", "Swasta (Orang)", "Tani (Orang)", "Wiraswasta (Orang)", "Pertukangan (Orang)", "Nelayan (Orang)", "Pensiunan (Orang)", "Jasa (Orang)"],
                    "Mobilitas": ["Lahir Laki-laki (Orang)", "Lahir Perempuan (Orang)", "Mati Laki-laki (Orang)", "Mati Perempuan (Orang)", "Datang Laki-laki (Orang)", "Datang Perempuan (Orang)", "Pergi Laki-laki (Orang)", "Pergi Perempuan (Orang)"]
                },
                "BIDANG PEMBANGUNAN": {
                    "Sarana Ibadah": ["Masjid (Buah)", "Gereja (Buah)", "Vihara (Buah)", "Pura (Buah)"],
                    "Sarana Kesehatan": ["Puskesmas (Buah)", "Pustu (Buah)", "Apotek (Buah)"],
                    "Sarana Pendidikan": ["TK (Buah)", "SD (Buah)", "SMP (Buah)", "SMA (Buah)"],
                    "Sarana Olahraga": ["Lapangan Sepakbola (Buah)", "Lapangan Voli (Buah)", "Lapangan Bulutangkis (Buah)"],
                    "Sarana Transportasi": ["Sepeda Motor (Unit)", "Mobil (Unit)", "Sampan (Unit)", "Ketinting (Unit)", "Longboat (Unit)", "Speedboat (Unit)"]
                }
            };

            function updateOptions() {
                const kategori = document.getElementById("kategori").value;
                const subKategori = document.getElementById("sub_kategori");
                const uraian = document.getElementById("uraian");

                // Kosongkan semua dulu
                subKategori.innerHTML = '<option value="">-- Pilih Sub Kategori --</option>';
                uraian.innerHTML = '<option value="">-- Pilih Uraian --</option>';

                if (kategori && data[kategori]) {
                    for (const sub in data[kategori]) {
                        const opt = document.createElement("option");
                        opt.value = sub;
                        opt.text = sub;
                        subKategori.appendChild(opt);
                    }
                }

                // Saat subKategori berubah, isi uraian
                subKategori.onchange = function() {
                    const selected = this.value;
                    uraian.innerHTML = '<option value="">-- Pilih Uraian --</option>';

                    if (data[kategori] && data[kategori][selected]) {
                        data[kategori][selected].forEach(item => {
                            const opt = document.createElement("option");
                            opt.value = item;
                            opt.text = item;
                            uraian.appendChild(opt);
                        });
                    }
                };
            }
        </script>

    </div>


    <!-- end page title -->

    <!-- CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Right sidebar-->
    @include('layout_admin.rightsidebar')
    <!-- End Right sidebar-->

    <!-- Footer-->
    @include('layout_admin.footer')
    <!-- End Footer-->

    <!-- bundle -->
    <script src="user/assets/js/vendor.min.js"></script>
    <script src="user/assets/js/app.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <!-- third party js -->
    <!-- <script src="assets/js/vendor/Chart.bundle.min.js"></script> -->
    <script src="user/assets/js/vendor/apexcharts.min.js"></script>
    <script src="user/assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="user/assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="user/assets/js/pages/demo.dashboard-analytics.js"></script>
    <!-- end demo js-->
</body>

</html>