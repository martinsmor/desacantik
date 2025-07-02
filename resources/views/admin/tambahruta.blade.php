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
    <!-- third party css end -->

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
         <div class="row">
            <div class="col-12">
                <div class="page-title-box text-center">
                    <h4 class="page-title">Tambah Data</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->   

     <!-- Content -->
    <form method="POST" action="/tambahruta" class="tambahwarga">
        {{ csrf_field() }}

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                <i class="dripicons-checkmark me-2"></i>
            </div>
            {{ session('status') }}
            </div>
        @endif

    <!--  Halaman -->
    <div class="row">
    <div class="col-12 mt-2">
    <div class="card">
    <div class="card-body">
    <div id="basicwizard">

    <ul class="nav nav-pills nav-justified form-wizard-header mb-4">
        <li class="nav-item">
            <a href="#basictab1" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
                <span class="d-none d-sm-inline">Blok I</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#basictab2" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                <span class="d-none d-sm-inline">Blok II</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#basictab3" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                <span class="d-none d-sm-inline">Blok III</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#basictab4" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                <span class="d-none d-sm-inline">Blok IV</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#basictab5" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                <span class="d-none d-sm-inline">Blok V</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#basictab6" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                <span class="d-none d-sm-inline">Blok VI</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#basictab7" data-bs-toggle="tab" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                <span class="d-none d-sm-inline">Blok VII</span>
            </a>
        </li>
        </ul>

        <!--  Block 1 -->    
        <div class="tab-content b-0 mb-0">
        <div class="tab-pane" id="basictab1">
        <div class="row">
        <div class="col-12">
        <div class="row mb-3"> 
        
        <div class="form-section text-center">
            <label class="form-label w-full flex flex-col sm:flex-row">
                <strong> BLOK I - PENGENALAN TEMPAT </strong>
            </label>
        </div>
                                             
       <div class="mt-3 col-md-6">
            <label for="" class="form-label w-full flex flex-col sm:flex-row"> 101 - Provinsi </label> 
            <select class="form-select" name="provinsi_id" id="provinsi_id">
                @foreach ($prov as $p)
                    <option value="{{ $p->id }}">{{ $p->nama_prov }}</option>
                @endforeach
            </select>
        </div> 

        <div class="mt-3 col-md-6">
            <label for="" class="form-label w-full flex flex-col sm:flex-row"> 102 - Kabupaten </label> 
            <select class="form-select" name="kabupaten_id" id="kabupaten_id">
                @foreach ($kab as $k)
                    <option value="{{ $k->id }}">{{ $k->nama_kab }}</option>
                @endforeach
            </select>
        </div> 
                                    
        <div class="mt-3">
            <label for="kec_id" class="form-label w-full flex flex-col sm:flex-row"> 103 - Kecamatan </label>
            <select class="form-select" name="kecamatan_id" id="kecamatan_id">
                {{-- <option value=""> Pilih Kecamatan</option> --}}
                @foreach ($kec as $ke)
                    <option value="{{ $ke->id }}">{{ $ke->nama_kec }}</option>
                @endforeach
            </select>
        </div>  

       <div class="mt-3">
            <label for="desa_kel_id" class="form-label w-full flex flex-col sm:flex-row"> 104 - Desa / Kelurahan </label>
            <select class="form-select" name="desa_kel_id" id="desa_kel_id">
                {{-- <option value=""> Pilih Desa / Kelurahan</option> --}}
                @foreach ($desa_kel as $dk)
                    <option value="{{ $dk->id }}">{{ $dk->desa_kel }}</option>
                @endforeach
            </select>
        </div> 

        <div class="mt-3">
            <label for="klasifikasi_id" class="form-label w-full flex flex-col sm:flex-row"> 105 - Klasifikasi Desa / Kelurahan </label>
            <input type="text" class="form-control" name="klasifikasi_id" required>
        </div> 

        <div class="mt-3">
            <label for="nama_dusun" class="form-label w-full flex flex-col sm:flex-row"> 106 - Nama dusun </label>
            <input type="text" class="form-control" name="nama_dusun" required>
        </div> 

        <div class="mt-3">
            <label for="kode_sls" class="form-label w-full flex flex-col sm:flex-row"> 107 - Kode SLS / Non SLS </label>
            <input type="text" class="form-control" name="kode_sls" required>
        </div> 
        
        <div class="mt-3">
            <label for="nama_sls" class="form-label w-full flex flex-col sm:flex-row"> 108 - Nama SLS / Non SLS </label>
            <input type="text" class="form-control" name="nama_sls" required>
        </div>

        <div class="mt-3">
             <label for="alamat" class="form-label w-full flex flex-col sm:flex-row"> 109 - Alamat (Jalan / Gang, Nomor Rumah) </label>
            <input type="text" class="form-control" name="alamat" required>
        </div>

        <div class="mt-3">
            <label class="form-label w-full flex flex-col sm:flex-row">
                110 - Koordinat Lokasi
            </label>
        </div>
    
        <div class="mt-2 col-md-4">
            <label for="lattitude" class="form-label w-full flex flex-col sm:flex-row"> a. Lattitude (Lintang) </label>
            <input type="text" class="form-control"  name="lattitude" required>
        </div>

        <div class="mt-2 col-md-4">
            <label for="jenis_lintang_id" class="form-label w-full flex flex-col sm:flex-row"> b. Jenis Lintang </label>
            <input type="text" class="form-control" name="jenis_lintang_id" required>
        </div>

        <div class="mt-2 col-md-4">
            <label for="longitude" class="form-label w-full flex flex-col sm:flex-row"> c. Longitude (Bujur) </label>
            <input type="text" class="form-control" name="longitude" required>
        </div>

        <div class="mt-3"> 
            <label for="nubtt" class="form-label w-full flex flex-col sm:flex-row"> 111 - Nomor urut bangunan tempat tinggal </label>
            <input type="text" class="form-control" name="nubtt" required>
        </div>

        <div class="mt-3">      
            <label for="no_kk" class="form-label w-full flex flex-col sm:flex-row"> 112 - Nomor Kartu Keluarga </label>
            <input type="text" class="form-control" name="no_kk" required>
        </div>

        <div class="mt-3">
            <label for="nukhp" class="form-label w-full flex flex-col sm:flex-row"> 113 - Nomor urut keluarga hasil pemutakhiran </label>
           <input type="text" class="form-control" name="nukhp" required>
        </div>

        <div class="mt-3">
            <label for="kepala_keluarga" class="form-label w-full flex flex-col sm:flex-row"> 114 - Nama Kepala Keluarga / Pasangan </label>
           <input type="text" class="form-control" name="kepala_keluarga" required>
        </div>

        <div class="mt-3">
            <label for="jumlah_anggota" class="form-label w-full flex flex-col sm:flex-row"> 115 - Jumlah Anggota Keluarga </label>
           <input class="form-control" type="text" name="jumlah_anggota" required>
        </div> 

        </div>
        </div> 
        </div> <!-- end col -->
        </div> <!-- end row -->
        <!-- end Block 1 -->  

        <!-- Block 2 -->
        <div class="tab-pane" id="basictab2">
        <div class="row ">
        <div class="col-12">
        <div class="row mb-3">

            <div class="input-form text-center">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    <strong> II. KETERANGAN PETUGAS DAN RESPONDEN </strong>
                </label>
            </div>
    
            <div class="input-form mt-3">
                <label class="form-label"> 201 - Tanggal Pencacahan </label>
                <input type="date" class="form-control" name="tanggal_cacah">
             </div>
    
            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    202 - Nama Pencacah
                </label>
                <input type="text" class="form-control" name="nama_cacah">
            </div>
    
            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    Kode Pencacah
                </label>
                <input type="text" class="form-control" name="kode_cacah">
            </div>
    
            <div class="mt-3">
                <label class="form-label">203 - Tanggal Pemeriksaan</label>
                <input type="date" class="form-control" name="tgl_periksa">
            </div>
    
            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    204 - Nama Pemeriksa 
                </label>
                <input type="text" class="form-control" name="nama_periksa">
            </div>
    
            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    Kode Pemeriksa
                </label>
                <input type="text" class="form-control" name="kode_periksa">
            </div>
    
            <div class="input-form mt-2">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    205 - Hasil Pencacahan Keluarga
                </label>
                <select class="form-select" name="hasilcacah_id" id="hasilcacah_id">
                    <option value=""> Pilih Hasil Cacah</option>
                    @foreach ($cacah as $c)
                        <option value="{{ $c->id }}">{{ $c->hasilcacah }}</option>
                    @endforeach
                </select>
            </div>

            </div>
            </div>
            </div> <!-- end col -->
            </div> <!-- end row  -->
            <!-- end Block 2 -->

            <div class="tab-pane" id="basictab3">
            <div class="row">
            <div class="col-12">
            <div class="row mb-3">
    
                <div class="input-form text-center">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        <strong> III. KETERANGAN PERUMAHAN </strong>
                    </label>
                </div>   
        
                <div class="mt-3">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        301
                    </label> 
                </div>
                <div class="col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        a. Status penguasaan bangunan tempat tinggal yang ditempati 
                    </label> 
                    <input type="text" class="form-control" name="kepemilikan_a_id">
                </div>
        
                <div class=" col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        b. Jika 1a berkode 1, status lahan tempat tinggal yang ditempati
                    </label>
                    <input type="text" class="form-control" name="kepemilikan_b_id">
                </div>
                
                <div class="mt-3">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        302 - Luas lantai bangunan tempat tinggal
                    </label> 
                    <input class="form-control" type="text" name="luas_lantai">
                </div> 
        
                <div class="mt-3">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        303 - Jenis lantai terluas   
                    </label>
                    <input class="form-control" type="text" name="jenislantai_id">
                </div> 
        
                <div class="mt-3">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        304
                    </label> 
                </div>
                <div class="col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        a. Jenis dinding terluas  
                    </label> 
                    <input type="text" class="form-control" name="jenis_dinding_id">
                </div>
        
                <div class="col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        b. Jika 4a berkode 1,2, atau 3, kondisi dinding  
                    </label>
                    <input type="text" class="form-control" name="kondisi_dinding_id">
                </div>
        
                <div class="mt-3">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        305
                    </label> 
                </div>
                <div class="col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        a. Jenis atap terluas 
                    </label> 
                    <input type="text" class="form-control" name="jenis_atap_id">
                </div>
        
                <div class="col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        b. Jika 4a berkode 1,2,3,4,5,6, atau 7, kondisi atap  
                    </label> 
                    <input type="text" class="form-control" name="kondisi_atap_id">
                </div>
        
                <div class="mt-3">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        306 - Jumlah kamar tidur
                    </label>
                    <input class="form-control" type="text" name="jumlah_kamar">
                </div> 
        
                <div class="mt-3">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        307 - Sumber air minum utama 
                    </label>
                    <input class="form-control" type="text" name="sumber_minum_id">
                </div> 
        
                <div class="mt-3">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        308 - Cara memperoleh air minum
                    </label>
                    <input class="form-control" type="text" name="peroleh_minum_id">
                </div> 
        
                <div class="mt-3">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        309
                    </label> 
                </div>
                <div class="col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        a. Sumber Penerangan Utama 
                    </label> 
                    <input type="text" class="form-control" name="penerangan_id">
                </div>
        
                <div class="col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        b. Jika 4a berkode 1, daya terpasang  
                    </label> 
                    <input type="text" class="form-control" name="daya_id">
                </div>
        
                <div class="mt-3">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        310 - Bahan bakar/ energi utama untuk memasak   
                    </label>
                    <input class="form-control" type="text" name="bahanmasak_id">
                </div>
        
                <div class="mt-3">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        311
                    </label> 
                </div>
                <div class="col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        a. Penggunaan fasilitas utama untuk memasak
                    </label> 
                    <input type="text" class="form-control" name="fasilitasmasak_id">
                </div>
        
                <div class="col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        b.  Jenis kloset 
                    </label> 
                    <input type="text" class="form-control" name="kloset_id">
                </div>
                
                <div class="mt-3">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        312 - Tempat pembuangan akhir tinja  
                    </label>
                    <input class="form-control" type="text" name="tpa_id">
                </div>
        </div>
        </div>  <!-- end col  -->
        </div>  <!-- end row  -->
        </div>
        <!-- End Block 3 -->

        <!-- Block 4 -->
        <div class="tab-pane" id="basictab4">
            <div class="row">
            <div class="col-12">
            <div class="row mb-3">
    
            <div class="input-form text-center">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    <strong> IV. PENDAPATAN KELUARGA </strong>
                </label>
            </div> 
    
            <div class="mt-3">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    401
                </label> 
            </div>
            <div class="col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    Pekerjaan yang menghasilkan pendapatan terbesar
                </label> 
                <input type="text" class="form-control" name="pekerjaan">
            </div>
    
            <div class="col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    Kode Lapangan usaha
                </label> 
                <input type="text" class="form-control" name="kode_lapangan_usaha">
                <span class="help-block">( isikan 00 jika menggunakan penerima bantuan )</span>
            </div>
    
            <div class="mt-3">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    402 - Pendapatan seluruh anggota keluarga perbulan (Rp)  
                </label>
                <input class="form-control" type="text" name="pendapatan">
            </div>
    
        </div>
        </div> <!-- end col -->
        </div> <!-- end row  -->
        </div>
        <!-- end Block 4 -->

        <!-- Block 5 -->
        <div class="tab-pane" id="basictab5">
        <div class="row">
        <div class="col-12">
        <div class="row mb-3">
    
            <div class="input-form text-center">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    <strong> V. KEPEMILIKAN ASET DAN KEIKUTSERTAAN PROGRAM </strong>
                </label>
            </div> 
           
            <div class="input-form mt-3">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    501 - Keluarga memiliki sendiri aset bergerak sebagai berikut
                </label>
            </div>
    
            <div class="mt-2 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    a. Tabung gas 5,5 kg atau lebih  
                </label>
                <input class="form-control" type="text" name="gas_id">
            </div>
                                               
            <div class="input-form col-md-6 mt-2">
                <label class="form-label w-full flex flex-col sm:flex-row">
                     i. Sepeda
                </label>
                <input class="form-control" type="text" name="sepeda_id">
            </div>
    
            <div class="input-form col-md-6 mt-2 ">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    b. Lemari es / kulkas 
                </label>
                <input class="form-control" type="text" name="lemari_id">
            </div>
    
            <div class="input-form col-md-6 mt-2 ">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    j. Sepeda Motor
                </label>
                <input class="form-control" type="text" name="motor_id">
            </div>
    
            <div class="input-form col-md-6 mt-2 ">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    c. AC
                </label>
                <input class="form-control" type="text" name="ac_id">
            </div>
    
            <div class="input-form col-md-6 mt-2 ">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    k. Mobil
                </label>
                <input class="form-control" type="text" name="mobil_id">
            </div>
    
            <div class="input-form col-md-6 mt-2 ">
                <label class="form-label w-full flex flex-col sm:flex-row">
                   d. Pemanas air (water heater)
                </label>
                <input class="form-control" type="text" name="pemanas_id">
            </div>
    
            <div class="input-form col-md-6 mt-2 ">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    l.  Perahu
                </label>
                <input class="form-control" type="text" name="perahu_id">
            </div>
    
            <div class="input-form col-md-6 mt-2 ">
                <label class="form-label w-full flex flex-col sm:flex-row">
                     e. Telepon rumah (PSTN)
                </label>
                <input class="form-control" type="text" name="pstn_id">
            </div>
    
            <div class="input-form col-md-6 mt-2 ">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    m. Motor tempel
                </label>
                <input class="form-control" type="text" name="motortempel_id">
            </div>
    
            <div class="input-form col-md-6 mt-2 ">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    f. Televisi
                </label>
                <input class="form-control" type="text" name="tv_id">
            </div>
    
            <div class="input-form col-md-6 mt-2 ">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    n. Perahu motor
                </label>
                <input class="form-control" type="text" name="perahumotor_id">
            </div>
    
            <div class="input-form col-md-6 mt-2 ">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    g. Emas/perhiasan & tabungan (senilai 10 gram emas) 
                </label>
                <input class="form-control" type="text" name="emas_id">
            </div>
    
            <div class="input-form col-md-6 mt-2 ">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    o. Kapal
                </label>
                <input class="form-control" type="text" name="kapal_id">
            </div>
    
            <div class="input-form col-md-6 mt-2 ">
                <label class="form-label w-full flex flex-col sm:flex-row">
                   h. Komputer/laptop 
                </label>
                <input class="form-control" type="text" name="laptop_id">
            </div>
    
            <div class="input-form mt-3">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    502 
                </label>
            </div>
            
            <div class="input-form mt-2 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    a. Jumlah nomor HP aktif yang dimiliki oleh seluruh anggota keluarga                                                       
                </label>
                <input type="text" class="form-control" name="nomor_hp">
            </div>
            
            <div class="input-form mt-2 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    b. Jumlah TV layar datar minimal 30 inch yang dimiliki keluarga                                                       
                </label>
                <input type="text" class="form-control" name="jumlah_tv">
            </div>
    
            <div class="input-form mt-3">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    503 - Keluarga yang memiliki aset tidak bergerak sebagai berikut  
                </label>
            </div>
                                                            
            <div class="input-form mt-2 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                     a. Lahan                                                      
                </label>
                <input type="text" class="form-control" name="lahan_id">
            </div>   
    
            <div class="input-form mt-2 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                     Ya, ……………..m²                                                     
                </label>
                <input type="text" class="form-control" name="lahan_meter">
            </div>  
            
            <div class="input-form mt-2 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                     b. Rumah di tempat lain                                                     
                </label>
                <input type="text" class="form-control" name="rumahlain_id">
            </div>  
    
            <div class="input-form mt-3">
                <label class="form-label w-full flex flex-col sm:flex-row">
                        504 - Jumlah ternak yang dimiliki
                </label>
            </div>
            
            <div class="col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    a. Sapi
                </label>  
                <input type="text" class="form-control" name="sapi">
            </div>   
               
            <div class="input-form col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                     d.  Babi
                </label>
                <input type="text" class="form-control" name="babi">
            </div>
                                                            
            <div class="input-form mt-2 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    b. Kerbau
                </label>
                <input type="text" class="form-control" name="kerbau">
            </div>
            
            <div class="input-form mt-2 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                     e. Kambing/Domba
                </label>
                <input type="text" class="form-control" name="kambing">
            </div>
            
            <div class="input-form mt-2 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                     c. Kuda
                </label>
                <input type="text" class="form-control" name="kuda">
            </div>
           
        </div>
        </div> 
        </div> 
        </div>
        <!-- end Block 5 -->   

        <!-- Block 6 -->
        <div class="tab-pane" id="basictab6">
            <div class="row">
            <div class="col-12">
            <div class="row mb-3">
    
            <div class="input-form text-center">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    <strong> VI. SERTIFIKAT TANAH </strong>
                </label>
            </div>
    
            <div class="input-form mt-2">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    601
                </label>
            </div>
    
            <div class="input-form mt-2 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    (2) Nama lahan 
                </label>
                <input type="text" class="form-control" name="nama_lahan[]">
            </div>
    
            <div class="input-form mt-2 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    (3) Jenis Lahan    
                </label>
                <input type="text" class="form-control" name="jenislahan_id[]">
            </div>
    
            <div class="input-form mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    (4) Keberadaan SPPT     
                </label>
                <input type="text" class="form-control" name="sppt_id[]">
            </div>
    
            <div class="input-form mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    (5) Nomor Objek Pajak    
                </label>
                <input type="text" class="form-control" name="nomor_pajak[]">
            </div>
    
            <div class="input-form mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    (6) Luas Lahan (m)    
                </label>
                <input type="text" class="form-control" name="luas_lahan[]">
            </div>
    
            <div class="input-form mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    (7) Hak Kepemilikian sertifikat     
                </label>
                <input type="text" class="form-control" name="hakmiliksertif_id[]">
            </div>
    
            <div class="input-form mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    (8) Jika kolom (7) = 1 , Nama Hak Milik     
                </label>
                <input type="text" class="form-control" name="nama_hakmilik[]">
            </div>

            <div class="mt-2">
                ---------------------------------------------------------------------------------------------------------------------------------------------------------
            </div>
    
            <div class="input-form mt-3">
                <a href="#" class="addtambahlahan btn btn-primary"> Tambah Lahan </a>
            </div>
    
            <div class="tambahlahan"></div>  


        </div>
        </div> 
        </div> 
        </div>
        <!-- end Block 6 -->  

        <!-- Block 7  --> 
       <div class="tab-pane" id="basictab7">
        <div class="row">
        <div class="col-12">
        <div class="row mb-3">
               
            <div class="input-form text-center">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    <strong> VII. KETERANGAN SOSIAL EKONOMI ANGGOTA KELUARGA </strong>
                </label>
            </div> 
    
            <table class="table table-bordered border-primary table-centered mt-2">
                <tbody>
                    <tr> 
                        <td colspan="2" class="text-center"> 
                            <strong> A.KETERANGAN DEMOGRAFI </strong>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-2 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    701. Nomor urut anggota keluarga
               </label>
               <input type="text" class="form-control" name="nomor_urut[]">
            </div>

            <div class="mt-2 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                   702. Nama anggota keluarga
               </label>
               <input type="text" class="form-control" name="nama_anggota[]">
            </div>

            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                  703. Nomor Induk Kependudukan (NIK)
               </label>
                 <input type="text" class="form-control" name="nik[]">
            </div>

            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                  704. Hubungan dengan kepala keluarga
               </label>
                 <input type="text" class="form-control" name="hubungan_keluarga_id[]">
            </div>

            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                 705. Keterangan keberadaan anggota keluarga
               </label>
                <input type="text" class="form-control" name="keberadaan_id[]">
            </div>

            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                  706. Jenis kelamin
               </label>
                 <input type="text" class="form-control" name="jenis_kelamin_id[]">
            </div>
            
            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                  707. Tanggal Lahir
               </label>
                 <input type="date" class="form-control" name="tanggal_lahir[]">
            </div>

            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                 708. Umur
               </label>
                <input type="text" class="form-control" name="umur[]">
            </div>

            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                  709. Agama
               </label>
                 <input type="text" class="form-control" name="agama_id[]">
            </div>

            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                710. Suku
               </label>
                <input type="text" class="form-control" name="suku_id[]">
            </div>

            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                 711. Domisili
               </label>
                 <input type="text" class="form-control" name="domisili_id[]">
            </div>

            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                 712. Program bansos
               </label>
                  <input type="text" class="form-control" name="bansos_id[]">
            </div>

            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                 713. Status perkawinan
               </label>
               <input type="text" class="form-control" name="status_kawin_id[]">
            </div>

            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                     714. Kepemilikan akta/buku nikah atau akta cerai
               </label>
                <input type="text" class="form-control" name="kepemilikan_bukunikah_id[]">
            </div>

            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                     715. Tercantum dalam Kartu Keluarga (KK) di keluarga ini
               </label>
                 <input type="text" class="form-control" name="KK_id[]">
            </div>

            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                     716. Kepemilikan kartu identitas
               </label>
                 <input type="text" class="form-control" name="identitas_id[]">
            </div>

            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    717. Status Kehamilan
               </label>
                <input type="text" class="form-control" name="kehamilan_id[]">
            </div>

            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                   718. Alat KB
               </label>
                 <input type="text" class="form-control" name="KB_id[]">
            </div>   
            
            <table class="table table-bordered border-primary table-centered mt-3">
                <tbody>
                    <tr> 
                        <td colspan="4" class="text-center"> 
                            <strong> B. PENDIDIKAN (ANGGOTA KELUARGA USIA 5 TAHUN KE ATAS) </strong>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                   719. Partisipasi sekolah
               </label>
                 <input type="text" class="form-control" name="sekolah_id[]">
            </div>   

            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                   720. Jenjang dan jenis pendidikan tertinggi yang /sedang diduduki 
               </label>
                 <input type="text" class="form-control" name="jenjang_sekolah_id[]">
            </div>   

            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                  721. Kelas tertinggi yang pernah/sedang diduduki
               </label>
              <input type="text" class="form-control" name="kelas_id[]">
            </div>   

            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                  722. Ijazah tertinggi yang dimiliki
               </label>
                 <input type="text" class="form-control" name="ijazah_id[]">
            </div>   
    
            <table class="table table-bordered border-primary table-centered mt-3">
                <tbody>
                    <tr> 
                        <td colspan="4" class="text-center"> 
                            <strong> C. KETENAGAKERJAAN (ANGGOTA KELUARGA USIA 5 TAHUN KE ATAS) </strong>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-3 col-md-4">
                <label class="form-label w-full flex flex-col sm:flex-row">
                  723. Pensiunan
                </label>
               <input type="text" class="form-control" name="pensiunan_id[]">
            </div> 

            <div class="mt-3 col-md-4">
                <label class="form-label w-full flex flex-col sm:flex-row">
                  724. Bekerja/membantu bekerja
                </label>
                <input type="text" class="form-control" name="bekerja_id[]">
            </div> 

            <div class="mt-3 col-md-4">
                <label class="form-label w-full flex flex-col sm:flex-row">
                   725. Berapa jam bekerja?
                </label>
                 <input type="text" class="form-control" name="lamabekerja_id[]">
            </div> 
           
            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                  726. Lapangan usaha dan pekerjaan utama
                </label>
                <input type="text" class="form-control" name="pekerjaan_utama_id[]">
            </div> 
            
            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                   727. Status dalam pekerjaan utama
                </label>
                <input type="text" class="form-control" name="status_pekerjaan_id[]">
            </div> 
           
            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                  728. Apakah memiliki NPWP?
                </label>
                 <input type="text" class="form-control" name="NPWP_id[]">
            </div> 
            
            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                   729. Apakah ada transaksi secara online pada pekerjaan utama?
                </label>
                 <input type="text" class="form-control" name="transaksi_id[]">
            </div> 

            <table class="table table-bordered border-primary table-centered mt-3">
                <tbody>
                    <tr> 
                        <td colspan="4" class="text-center"> 
                            <strong> D. KEPEMILIKAN USAHA (ANGGOTA KELUARGA USIA 5 TAHUN KE ATAS) </strong>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    730. Apakah memiliki usaha sendiri/bersama?
                </label>
                 <input type="text" class="form-control" name="usaha_id[]">
            </div> 
                   
            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    731. Apakah lapangan usaha dari usaha tersebut? 
                </label>
                 <input type="text" class="form-control" name="lapangan_usaha[]">
            </div>
            
            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                   732. Jumlah pekerja yang dibayar  
                </label>
                 <input type="text" class="form-control" name="pekerja_dibayar[]">
            </div>
    
            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                   733. Jumlah pekerja yang tidak dibayar 
                </label>
                 <input type="text" class="form-control" name="pekerja_tidakdibayar[]">
            </div>
    
            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    734. Kepemilikan perizinan usaha
                </label>
                 <input type="text" class="form-control" name="perizinan_usaha[]">
            </div>
    
            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                   735. Tempat/lokasi usaha  
                </label>
                  <input type="text" class="form-control" name="tempat_usaha_id[]">
            </div>
    
            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                   736. Omset usaha perbulan (rupiah)
                </label>
                  <input type="text" class="form-control" name="omset_id[]">
            </div>
    
            <div class="mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                   737. Penggunaan internet dalam kegiatan usaha 
                </label>
                  <input type="text" class="form-control" name="internet_id[]">
            </div>
          
            <table class="table table-bordered border-primary table-centered mt-3">
                <tbody>
                    <tr> 
                        <td colspan="4" class="text-center"> 
                            <strong> E. KESEHATAN </strong>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-2 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                   738. Jenis Cacat
                </label>
                  <input type="text" class="form-control" name="cacat_id[]">
            </div>
                    
            <div class="mt-2 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                   739. Penyakit kronis/menahun
                </label>
                  <input type="text" class="form-control" name="penyakitkronis_id[]">
            </div>
                    
            <div class="mt-3">
                <label class="form-label w-full flex flex-col sm:flex-row">
                   740. Golongan darah
                </label>
                  <input type="text" class="form-control" name="golongandarah_id[]">
            </div>
                    
            <div class="mt-3">
                <label class="form-label w-full flex flex-col sm:flex-row">
                   741. Kondisi gizi berdasarkan pemeriksaan di posyandu/puskesmas/rumah sakit 3 bulan terakhir
                </label>
                  <input type="text" class="form-control" name="kondisigizi_id[]">
            </div>  

            <div class="mt-2">
                ---------------------------------------------------------------------------------------------------------------------------------------------------------
            </div>

            <div class="input-form mt-3">
                <a href="#" class="addtambahanggota btn btn-primary"> Tambah Anggota </a>
            </div>
    
            <div class="tambahanggota"></div>    

            <div class="d-grid mt-3">
                <button type="submit" name="simpan" class="btn btn-success" value="save">simpan</button>
            </div>
  
        </div>
        </div> 
        </div> 
        </div>  
        <!-- end Block 7   -->
     
        <div>
            <ul class="list-inline wizard mb-0">
                <li class="previous list-inline-item">
                    <a href="#" class="btn btn-info">Previous</a>
                </li>
                <li class="next list-inline-item float-end">
                    <a href="#" class="btn btn-info">Next</a>
                </li>
            </ul>
        </div>

        </div>
        </div>
        </div>
        </div> <!-- tab-content -->
        </div> <!-- end #basicwizard-->
        </form>
        
        </div> <!-- end card-body -->
        </div> <!-- end card-->
        </div> <!-- end col -->
        <!-- End content -->
                    
    <!-- Right sidebar-->
    @include('layout_admin.rightsidebar')
    <!-- End Right sidebar-->

    <!-- Footer-->
     <div class="mt-3">
    @include('layout_admin.footer')
    </div>
    <!-- End Footer-->  

    <!-- script -->
    
    <!-- Script blok VI -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script type="text/javascript">
        $('.addtambahlahan').on('click',function(){
            addtambahlahan();
        });
        function addtambahlahan(){
            var tambahlahan = '<div class="row"><div class="col-12"><div class="row mb-3"><div class="input-form mt-2"></div><div class="input-form mt-2 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">(2) Nama lahan</label><input type="text" class="form-control" name="nama_lahan[]"></div><div class="input-form mt-2 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">(3) Jenis Lahan</label><input type="text" class="form-control" name="jenislahan_id[]"></div><div class="input-form mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">(4) Keberadaan SPPT</label><input type="text" class="form-control" name="sppt_id[]"></div><div class="input-form mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">(5) Nomor Objek Pajak</label><input type="text" class="form-control" name="nomor_pajak[]"> </div><div class="input-form mt-3 col-md-6"> <label class="form-label w-full flex flex-col sm:flex-row">(6) Luas Lahan (m)</label><input type="text" class="form-control" name="luas_lahan[]"></div><div class="input-form mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">(7) Hak Kepemilikian sertifikat</label><input type="text" class="form-control" name="hakmiliksertif_id[]"></div><div class="input-form mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">(8) Jika kolom (7) = 1 , Nama Hak Milik</label><input type="text" class="form-control" name="nama_hakmilik[]"></div><div class="input-form mt-3"><a href="#" class="remove btn btn-danger"> Hapus </a></div><div class="mt-2">---------------------------------------------------------------------------------------------------------------------------------------------------------</div></div></div></div>';
            $('.tambahlahan').append(tambahlahan);
        };
        $('.remove').live('click', function(){
            $(this).parent().parent().parent().remove();
        })
    </script>

    <!-- Script blok VII -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script type="text/javascript">
        $('.addtambahanggota').on('click',function(){
            addtambahanggota();
        });
        function addtambahanggota(){
            var tambahanggota = 
            '<div class="row"><div class="col-12"><div class="row mb-3"><div class="input-form text-center"><label class="form-label w-full flex flex-col sm:flex-row"><strong> VII. KETERANGAN SOSIAL EKONOMI ANGGOTA KELUARGA </strong></label></div><table class="table table-bordered border-primary table-centered mt-2"><tbody><tr><td colspan="2" class="text-center"><strong> A.KETERANGAN DEMOGRAFI</strong></td></tr></tbody></table><div class="mt-2 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">701. Nomor urut anggota keluarga</label><input type="text" class="form-control" name="nomor_urut[]"></div><div class="mt-2 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">702. Nama anggota keluarga</label><input type="text" class="form-control" name="nama_anggota[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">703. Nomor Induk Kependudukan (NIK)</label><input type="text" class="form-control" name="nik[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">704. Hubungan dengan kepala keluarga</label><input type="text" class="form-control" name="hubungan_keluarga_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row"> 705. Keterangan keberadaan anggota keluarga</label><input type="text" class="form-control" name="keberadaan_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">706. Jenis kelamin</label><input type="text" class="form-control" name="jenis_kelamin_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">707. Tanggal Lahir</label><input type="date" class="form-control" name="tanggal_lahir[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">708. Umur</label><input type="text" class="form-control" name="umur[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">709. Agama</label><input type="text" class="form-control" name="agama_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">710. Suku</label><input type="text" class="form-control" name="suku_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">711. Domisili</label><input type="text" class="form-control" name="domisili_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">712. Program bansos</label><input type="text" class="form-control" name="bansos_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">713. Status perkawinan</label><input type="text" class="form-control" name="status_kawin_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">714. Kepemilikan akta/buku nikah atau akta cerai</label><input type="text" class="form-control" name="kepemilikan_bukunikah_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">715. Tercantum dalam Kartu Keluarga (KK) di keluarga ini</label><input type="text" class="form-control" name="KK_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">716. Kepemilikan kartu identitas</label><input type="text" class="form-control" name="identitas_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">717. Status Kehamilan</label><input type="text" class="form-control" name="kehamilan_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">718. Alat KB</label><input type="text" class="form-control" name="KB_id[]"></div><table class="table table-bordered border-primary table-centered mt-3"><tbody><tr><td colspan="4" class="text-center"><strong> B. PENDIDIKAN (ANGGOTA KELUARGA USIA 5 TAHUN KE ATAS) </strong></td></tr></tbody></table><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">719. Partisipasi sekolah</label><input type="text" class="form-control" name="sekolah_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row"> 720. Jenjang dan jenis pendidikan tertinggi yang /sedang diduduki</label><input type="text" class="form-control" name="jenjang_sekolah_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">721. Kelas tertinggi yang pernah/sedang diduduki</label><input type="text" class="form-control" name="kelas_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">722. Ijazah tertinggi yang dimiliki</label><input type="text" class="form-control" name="ijazah_id[]"></div> <table class="table table-bordered border-primary table-centered mt-3"><tbody><tr><td colspan="4" class="text-center"><strong> C. KETENAGAKERJAAN (ANGGOTA KELUARGA USIA 5 TAHUN KE ATAS) </strong></td> </tr></tbody></table> <div class="mt-3 col-md-4"><label class="form-label w-full flex flex-col sm:flex-row">723. Pensiunan</label><input type="text" class="form-control" name="pensiunan_id[]"></div><div class="mt-3 col-md-4"><label class="form-label w-full flex flex-col sm:flex-row">724. Bekerja/membantu bekerja</label><input type="text" class="form-control" name="bekerja_id[]"></div><div class="mt-3 col-md-4"><label class="form-label w-full flex flex-col sm:flex-row">725. Berapa jam bekerja?</label><input type="text" class="form-control" name="lamabekerja_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">726. Lapangan usaha dan pekerjaan utama</label><input type="text" class="form-control" name="pekerjaan_utama_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">727. Status dalam pekerjaan utama</label><input type="text" class="form-control" name="status_pekerjaan_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">728. Apakah memiliki NPWP?</label><input type="text" class="form-control" name="NPWP_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">729. Apakah ada transaksi secara online pada pekerjaan utama?</label><input type="text" class="form-control" name="transaksi_id[]"></div><table class="table table-bordered border-primary table-centered mt-3"><tbody><tr><td colspan="4" class="text-center"><strong> D. KEPEMILIKAN USAHA (ANGGOTA KELUARGA USIA 5 TAHUN KE ATAS) </strong></td></tr></tbody></table><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">730. Apakah memiliki usaha sendiri/bersama?</label><input type="text" class="form-control" name="usaha_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">731. Apakah lapangan usaha dari usaha tersebut?</label><input type="text" class="form-control" name="lapangan_usaha[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">732. Jumlah pekerja yang dibayar</label><input type="text" class="form-control" name="pekerja_dibayar[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">733. Jumlah pekerja yang tidak dibayar</label><input type="text" class="form-control" name="pekerja_tidakdibayar[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">734. Kepemilikan perizinan usaha</label><input type="text" class="form-control" name="perizinan_usaha[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">735. Tempat/lokasi usaha</label><input type="text" class="form-control" name="tempat_usaha_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row"> 736. Omset usaha perbulan (rupiah)</label><input type="text" class="form-control" name="omset_id[]"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row"> 737. Penggunaan internet dalam kegiatan usaha</label><input type="text" class="form-control" name="internet_id[]"></div><table class="table table-bordered border-primary table-centered mt-3"><tbody><tr><td colspan="4" class="text-center"><strong> E. KESEHATAN </strong></td></tr></tbody></table><div class="mt-2 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">738. Jenis Cacat</label><input type="text" class="form-control" name="cacat_id[]"></div><div class="mt-2 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">739. Penyakit kronis/menahun</label><input type="text" class="form-control" name="penyakitkronis_id[]"></div><div class="mt-3"><label class="form-label w-full flex flex-col sm:flex-row">740. Golongan darah</label><input type="text" class="form-control" name="golongandarah_id[]"></div> <div class="mt-3"> <label class="form-label w-full flex flex-col sm:flex-row">741. Kondisi gizi berdasarkan pemeriksaan di posyandu/puskesmas/rumah sakit 3 bulan terakhir </label><input type="text" class="form-control" name="kondisigizi_id[]"></div><div class="input-form mt-3"><a href="#" class="remove btn btn-danger"> Hapus </a></div><div class="mt-2">---------------------------------------------------------------------------------------------------------------------------------------------------------</div></div></div></div>'
            $('.tambahanggota').append(tambahanggota);
        };
        $('.remove').live('click', function(){
            $(this).parent().parent().parent().remove();
        })
    </script>

    <!-- bundle -->
    <script src="user/assets/js/vendor.min.js"></script>
    <script src="user/assets/js/app.min.js"></script>

    <!-- script wizard -->
    <script src="user/assets/js/pages/demo.form-wizard.js"></script>

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