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
                <h4 class="page-title">Edit Data</h4>
            </div>
        </div>
    </div>     
    <!-- end page title -->   

     <!-- Content -->
    <form method="POST" action="/edit/{{ $warga->id }}">
        {{ csrf_field() }}

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
                <label for="kec_id" class="form-label w-full flex flex-col sm:flex-row"> 101 - Provinsi  </label>
                <select class="form-select" name="provinsi_id" id="provinsi_id">
                    <option value=""> Pilih Provinsi</option>
                    @foreach ($provinsi as $p)
                        <option value="{{ $p->id }}" {{ old('provinsi_id', $warga->provinsi_id) == $p->id ? 'selected' : null }}> {{ $p->nama_prov }}</option>
                    @endforeach
                </select>
            </div> 
            
            <div class="mt-3 col-md-6">
                <label for="" class="form-label w-full flex flex-col sm:flex-row"> 102 - Kabupaten </label> 
                <select class="form-select" name="kabupaten_id" id="kabupaten_id">
                    @foreach ($kabupaten as $k)
                    <option value="{{ $k->id }}" {{ old('kabupaten_id', $warga->kabupaten_id) == $k->id ? 'selected' : null }}> {{ $k->nama_kab }}</option>
                    @endforeach
                </select>
            </div> 

            <div class="mt-3">
                <label for="kec_id" class="form-label w-full flex flex-col sm:flex-row"> 103 - Kecamatan </label>
                <select class="form-select" name="kecamatan_id" id="kecamatan_id">
                    <option value=""> Pilih Kecamatan</option>
                    @foreach ($kecamatan as $ke)
                        <option value="{{ $ke->id }}" {{ old('kecamatan_id', $warga->kecamatan_id) == $ke->id ? 'selected' : null }}> {{ $ke->nama_kec }}</option>                     
                    @endforeach
                </select>
            </div>  

            <div class="mt-3">
                <label for="kec_id" class="form-label w-full flex flex-col sm:flex-row"> 104 - Desa / Kelurahan </label>
                <select class="form-select" name="desa_kel_id" id="desa_kel_id">
                    <option value=""> Pilih Desa / Kelurahan</option>
                    @foreach ($desa_kel as $dk)
                        <option value="{{ $dk->id }}" {{ old('desa_kel_id', $warga->desa_kel_id) == $dk->id ? 'selected' : null }}> {{ $dk->desa_kel }}</option>                       
                    @endforeach
                </select>
            </div>  

            <div class="mt-3">
                <label for="klasifikasi_id" class="form-label w-full flex flex-col sm:flex-row"> 105 - Klasifikasi Desa / Kelurahan </label>
                <input type="text" class="form-control" name="klasifikasi_id" value="{{ $warga->klasifikasi_id }}">    
              </div> 
    
            <div class="mt-2">
                <label for="nama_dusun" class="form-label w-full flex flex-col sm:flex-row"> Nama dusun </label>
                <input type="text" class="form-control" name="nama_dusun" value="{{ $warga->nama_dusun }}">
            </div> 

            <div class="mt-3">
                <label for="kode_sls" class="form-label w-full flex flex-col sm:flex-row"> 107 - Kode SLS / Non SLS </label>
                <input type="text" class="form-control" name="kode_sls" value="{{ $warga->kode_sls }}">
            </div> 
            
            <div class="mt-3">
                <label for="nama_sls" class="form-label w-full flex flex-col sm:flex-row"> 108 - Nama SLS / Non SLS </label>
                <input type="text" class="form-control" name="nama_sls" value="{{ $warga->nama_sls }}">
            </div>

            <div class="mt-3">
                <label for="alamat" class="form-label w-full flex flex-col sm:flex-row"> 109 - Alamat (Jalan / Gang, Nomor Rumah) </label>
               <input type="text" class="form-control" name="alamat" value="{{ $warga->alamat }}">
           </div>
   
           <div class="mt-3">
               <label class="form-label w-full flex flex-col sm:flex-row">
                   110 - Koordinat Lokasi
               </label>
           </div>

            <div class="mt-2 col-md-4">
                <label for="lattitude" class="form-label w-full flex flex-col sm:flex-row"> a. Lattitude (Lintang) </label>
                <input type="text" class="form-control"  name="lattitude" value="{{ $warga->lattitude }}">
            </div>

            <div class="mt-2 col-md-4">
                <label for="jenis_lintang_id" class="form-label w-full flex flex-col sm:flex-row"> b. Jenis Lintang </label>
                <input type="text" class="form-control" name="jenis_lintang_id" value="{{ $warga->jenis_lintang_id }}">
            </div>

            <div class="mt-2 col-md-4">
                <label for="longitude" class="form-label w-full flex flex-col sm:flex-row"> c. Longitude (Bujur) </label>
                <input type="text" class="form-control" name="longitude" value="{{ $warga->longitude }}">
            </div>

            <div class="mt-3"> 
                <label for="nubtt" class="form-label w-full flex flex-col sm:flex-row"> 111 - Nomor urut bangunan tempat tinggal </label>
                <input type="text" class="form-control" name="nubtt" value="{{ $warga->nubtt }}">
            </div>
    
            <div class="mt-3">      
                <label for="no_kk" class="form-label w-full flex flex-col sm:flex-row"> 112 - Nomor Kartu Keluarga </label>
                <input type="text" class="form-control" name="no_kk" value="{{ $warga->no_kk }}">
            </div>
    
            <div class="mt-3">
                <label for="nukhp" class="form-label w-full flex flex-col sm:flex-row"> 113 - Nomor urut keluarga hasil pemutakhiran </label>
               <input type="text" class="form-control" name="nukhp" value="{{ $warga->nukhp }}">
            </div>
    
            <div class="mt-3">
                <label for="kepala_keluarga" class="form-label w-full flex flex-col sm:flex-row"> 114 - Nama Kepala Keluarga / Pasangan </label>
               <input type="text" class="form-control" name="kepala_keluarga" value="{{ $warga->kepala_keluarga }}">
            </div>
    
            <div class="mt-3">
                <label for="jumlah_anggota" class="form-label w-full flex flex-col sm:flex-row"> 115 - Jumlah Anggota Keluarga </label>
               <input class="form-control" type="text" name="jumlah_anggota" value="{{ $warga->jumlah_anggota }}">
            </div> 
                                                 
        </div>
        </div>
        </div>
        </div>
        <!-- End Block 1 -->

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
                    <input type="date" class="form-control" name="tanggal_cacah" value="{{ $warga->tanggal_cacah }}">
                 </div>
        
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        202 - Nama Pencacah
                    </label>
                    <input type="text" class="form-control" name="nama_cacah" value="{{ $warga->nama_cacah }}">
                </div>
        
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        Kode Pencacah
                    </label>
                    <input type="text" class="form-control" name="kode_cacah" value="{{ $warga->kode_cacah }}">
                </div>
        
                <div class="mt-3">
                    <label class="form-label">203 - Tanggal Pemeriksaan</label>
                    <input type="date" class="form-control" name="tgl_periksa" value="{{ $warga->tgl_periksa }}">
                </div>
        
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        204 - Nama Pemeriksa 
                    </label>
                    <input type="text" class="form-control" name="nama_periksa" value="{{ $warga->nama_periksa }}">
                </div>
        
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        Kode Pemeriksa
                    </label>
                    <input type="text" class="form-control" name="kode_periksa" value="{{ $warga->kode_periksa }}">
                </div>
        
                <div class="input-form mt-2">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        205 - Hasil Pencacahan Keluarga
                    </label>
                    <select class="form-select" name="hasilcacah_id" id="hasilcacah_id">
                        <option value=""> Pilih Desa / Kelurahan</option>
                        @foreach ($hasilcacah as $hc)
                        <option value="{{ $hc->id }}" {{ old('hasilcacah_id', $warga->hasilcacah_id) == $hc->id ? 'selected' : null }}> {{ $hc->hasilcacah }}</option>                       
                        @endforeach
                    </select>
                </div>
    
            </div>
            </div>
            </div> <!-- end col -->
            </div> <!-- end row  -->
            <!-- end Block 2 -->

            <!-- block 3-->
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
                <input type="text" class="form-control" name="kepemilikan_a_id" value="{{ $warga->kepemilikan_a_id }}">
            </div>
                
            <div class=" col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    b. Jika 1a berkode 1, status lahan tempat tinggal yang ditempati
                </label>
                <input type="text" class="form-control" name="kepemilikan_b_id" value="{{ $warga->kepemilikan_b_id }}">
            </div>
                        
            <div class="mt-3">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    302 - Luas lantai bangunan tempat tinggal
                </label> 
                <input class="form-control" type="text" name="luas_lantai" value="{{ $warga->luas_lantai }}">
            </div> 
                
            <div class="mt-3">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    303 - Jenis lantai terluas   
                </label>
                <input class="form-control" type="text" name="jenislantai_id" value="{{ $warga->jenislantai_id }}">
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
                <input type="text" class="form-control" name="jenis_dinding_id" value="{{ $warga->jenis_dinding_id }}">
            </div>
                
            <div class="col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    b. Jika 4a berkode 1,2, atau 3, kondisi dinding  
                </label>
                <input type="text" class="form-control" name="kondisi_dinding_id" value="{{ $warga->kondisi_dinding_id }}">
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
                <input type="text" class="form-control" name="jenis_atap_id" value="{{ $warga->jenis_atap_id }}">
            </div>
                
            <div class="col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    b. Jika 4a berkode 1,2,3,4,5,6, atau 7, kondisi atap  
                </label> 
                <input type="text" class="form-control" name="kondisi_atap_id" value="{{ $warga->kondisi_atap_id }}">
            </div>
                
            <div class="mt-3">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    306 - Jumlah kamar tidur
                </label>
                <input class="form-control" type="text" name="jumlah_kamar" value="{{ $warga->jumlah_kamar }}">
            </div> 
                
            <div class="mt-3">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    307 - Sumber air minum utama 
                </label>
                <input class="form-control" type="text" name="sumber_minum_id" value="{{ $warga->sumber_minum_id }}">
            </div> 
                
            <div class="mt-3">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    308 - Cara memperoleh air minum
                </label>
                <input class="form-control" type="text" name="peroleh_minum_id" value="{{ $warga->peroleh_minum_id }}">
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
                <input type="text" class="form-control" name="penerangan_id" value="{{ $warga->penerangan_id }}">
            </div>
                
            <div class="col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    b. Jika 4a berkode 1, daya terpasang  
                </label> 
                <input type="text" class="form-control" name="daya_id" value="{{ $warga->daya_id }}">
            </div>
                
                        <div class="mt-3">
                            <label class="form-label w-full flex flex-col sm:flex-row">
                                310 - Bahan bakar/ energi utama untuk memasak   
                            </label>
                            <input class="form-control" type="text" name="bahanmasak_id" value="{{ $warga->bahanmasak_id }}">
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
                            <input type="text" class="form-control" name="fasilitasmasak_id" value="{{ $warga->fasilitasmasak_id }}">
                        </div>
                
                        <div class="col-md-6">
                            <label class="form-label w-full flex flex-col sm:flex-row">
                                b.  Jenis kloset 
                            </label> 
                            <input type="text" class="form-control" name="kloset_id" value="{{ $warga->kloset_id }}">
                        </div>
                        
                        <div class="mt-3">
                            <label class="form-label w-full flex flex-col sm:flex-row">
                                312 - Tempat pembuangan akhir tinja  
                            </label>
                            <input class="form-control" type="text" name="tpa_id" value="{{ $warga->tpa_id }}">
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
                    <input type="text" class="form-control" name="pekerjaan" value="{{ $warga->pekerjaan }}">
                </div>
    
                <div class="col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        Kode Lapangan usaha
                    </label> 
                    <input type="text" class="form-control" name="kode_lapangan_usaha" value="{{ $warga->kode_lapangan_usaha }}">
                    <span class="help-block">( isikan 00 jika menggunakan penerima bantuan )</span>
                </div>
    
                <div class="mt-3">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        402 - Pendapatan seluruh anggota keluarga perbulan (Rp)  
                    </label>
                    <input class="form-control" type="text" name="pendapatan" value="{{ $warga->pendapatan }}">
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
                    <input class="form-control" type="text" name="gas_id" value="{{ $warga->gas_id }}">
                </div>
                                                   
                <div class="input-form col-md-6 mt-2">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                         i. Sepeda
                    </label>
                    <input class="form-control" type="text" name="sepeda_id" value="{{ $warga->sepeda_id }}">
                </div>
        
                <div class="input-form col-md-6 mt-2 ">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        b. Lemari es / kulkas 
                    </label>
                    <input class="form-control" type="text" name="lemari_id" value="{{ $warga->lemari_id }}">
                </div>
        
                <div class="input-form col-md-6 mt-2 ">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        j. Sepeda Motor
                    </label>
                    <input class="form-control" type="text" name="motor_id" value="{{ $warga->motor_id }}">
                </div>
        
                <div class="input-form col-md-6 mt-2 ">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        c. AC
                    </label>
                    <input class="form-control" type="text" name="ac_id" value="{{ $warga->ac_id }}">
                </div>
        
                <div class="input-form col-md-6 mt-2 ">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        k. Mobil
                    </label>
                    <input class="form-control" type="text" name="mobil_id" value="{{ $warga->mobil_id }}">
                </div>
        
                <div class="input-form col-md-6 mt-2 ">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                       d. Pemanas air (water heater)
                    </label>
                    <input class="form-control" type="text" name="pemanas_id" value="{{ $warga->pemanas_id }}">
                </div>
        
                <div class="input-form col-md-6 mt-2 ">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        l.  Perahu
                    </label>
                    <input class="form-control" type="text" name="perahu_id" value="{{ $warga->perahu_id }}">
                </div>
        
                <div class="input-form col-md-6 mt-2 ">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                         e. Telepon rumah (PSTN)
                    </label>
                    <input class="form-control" type="text" name="pstn_id" value="{{ $warga->pstn_id }}">
                </div>
        
                <div class="input-form col-md-6 mt-2 ">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        m. Motor tempel
                    </label>
                    <input class="form-control" type="text" name="motortempel_id" value="{{ $warga->motortempel_id }}">
                </div>
        
                <div class="input-form col-md-6 mt-2 ">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        f. Televisi
                    </label>
                    <input class="form-control" type="text" name="tv_id" value="{{ $warga->tv_id }}">
                </div>
        
                <div class="input-form col-md-6 mt-2 ">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        n. Perahu motor
                    </label>
                    <input class="form-control" type="text" name="perahumotor_id" value="{{ $warga->perahumotor_id }}">
                </div>
        
                <div class="input-form col-md-6 mt-2 ">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        g. Emas/perhiasan & tabungan (senilai 10 gram emas) 
                    </label>
                    <input class="form-control" type="text" name="emas_id" value="{{ $warga->emas_id }}">
                </div>
        
                <div class="input-form col-md-6 mt-2 ">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        o. Kapal
                    </label>
                    <input class="form-control" type="text" name="kapal_id" value="{{ $warga->kapal_id }}">
                </div>
        
                <div class="input-form col-md-6 mt-2 ">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                       h. Komputer/laptop 
                    </label>
                    <input class="form-control" type="text" name="laptop_id" value="{{ $warga->laptop_id }}">
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
                    <input type="text" class="form-control" name="nomor_hp" value="{{ $warga->nomor_hp }}">
                </div>
                
                <div class="input-form mt-2 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        b. Jumlah TV layar datar minimal 30 inch yang dimiliki keluarga                                                       
                    </label>
                    <input type="text" class="form-control" name="jumlah_tv" value="{{ $warga->jumlah_tv }}">
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
                    <input type="text" class="form-control" name="lahan_id" value="{{ $warga->lahan_id }}">
                </div>   
        
                <div class="input-form mt-2 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                         Ya, ……………..m²                                                     
                    </label>
                    <input type="text" class="form-control" name="lahan_meter" value="{{ $warga->lahan_meter }}">
                </div>  
                
                <div class="input-form mt-2 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                         b. Rumah di tempat lain                                                     
                    </label>
                    <input type="text" class="form-control" name="rumahlain_id" value="{{ $warga->rumahlain_id }}">
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
                    <input type="text" class="form-control" name="sapi" value="{{ $warga->sapi }}">
                </div>   
                   
                <div class="input-form col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                         d.  Babi
                    </label>
                    <input type="text" class="form-control" name="babi" value="{{ $warga->babi }}">
                </div>
                                                                
                <div class="input-form mt-2 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        b. Kerbau
                    </label>
                    <input type="text" class="form-control" name="kerbau" value="{{ $warga->kerbau }}">
                </div>
                
                <div class="input-form mt-2 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                         e. Kambing/Domba
                    </label>
                    <input type="text" class="form-control" name="kambing" value="{{ $warga->kambing }}">
                </div>
                
                <div class="input-form mt-2 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                         c. Kuda
                    </label>
                    <input type="text" class="form-control" name="kuda"  value="{{ $warga->kuda }}">
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
            
            <div class="input-form mt-3">
                <a href="javascript:" class="addtambahlahan btn btn-primary"> Tambah Lahan </a>
            </div>

            @foreach ($warga->blok6 as $bl)
            <div class="input-form mt-3">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    <strong> 60{{ $loop->iteration }} </strong>
                </label>
            </div>
               
            <div class="input-form mt-2 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    (2) Nama lahan 
                </label>
                <input type="text" class="form-control" name="nama_lahan[]" value="{{ $bl->nama_lahan }}">           
            </div>  

            <div class="input-form mt-2 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    (3) Jenis Lahan    
                </label>
                <input type="text" class="form-control" name="jenislahan_id[]" value="{{ $bl->jenis_lahan }}">
            </div>
    
            <div class="input-form mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    (4) Keberadaan SPPT     
                </label>
                <input type="text" class="form-control" name="sppt_id[]" value="{{ $bl->sppt_id }}">
            </div>
    
            <div class="input-form mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    (5) Nomor Objek Pajak    
                </label>
                <input type="text" class="form-control" name="nomor_pajak[]" value="{{ $bl->nomor_pajak }}">
            </div>
    
            <div class="input-form mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    (6) Luas Lahan (m)    
                </label>
                <input type="text" class="form-control" name="luas_lahan[]" value="{{ $bl->luas_lahan }}">
            </div>
    
            <div class="input-form mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    (7) Hak Kepemilikian sertifikat     
                </label>
                <input type="text" class="form-control" name="hakmiliksertif_id[]" value="{{ $bl->hakmiliksertif_id }}">
            </div>
    
            <div class="input-form mt-3 col-md-6">
                <label class="form-label w-full flex flex-col sm:flex-row">
                    (8) Jika kolom (7) = 1 , Nama Hak Milik     
                </label>
                <input type="text" class="form-control" name="nama_hakmilik[]" value="{{ $bl->nama_hakmilik }}">
            </div>

            <div class="mt-2">
                ---------------------------------------------------------------------------------------------------------------------------------------------------------
            </div>
            @endforeach  

            <div class="d-grid mt-2">
                <button type="submit" class="btn btn-primary" value="update"> Ubah data </button>
            </div> 

        </div>
        </div> 
        </div> 
        </div>
        <!-- end Block 6 -->  
        

        <div class="mt-2">
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
        </div> <!-- end col -->
        </div> <!-- end row -->
        <!-- Halaman -->  
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
             var tambahlahan =
             '<div><div class="row"><div class="col-12"><div class="row mb-3"><div class="input-form mt-2"></div><div class="input-form mt-2 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">(2) Nama lahan</label><input type="text" class="form-control" name="nama_lahan[]" value="{{ old('nama_lahan') }}"></div><div class="input-form mt-2 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">(3) Jenis Lahan</label><input type="text" class="form-control" name="jenislahan_id[]" value="{{ old('jenislahan_id') }}"></div><div class="input-form mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">(4) Keberadaan SPPT</label><input type="text" class="form-control" name="sppt_id[]" value="{{ old('sppt_id') }}"></div><div class="input-form mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">(5) Nomor Objek Pajak</label><input type="text" class="form-control" name="nomor_pajak[]" value="{{ old('nomor_pajak') }}"></div><div class="input-form mt-3 col-md-6"> <label class="form-label w-full flex flex-col sm:flex-row">(6) Luas Lahan (m)</label><input type="text" class="form-control" name="luas_lahan[]" value="{{ old('luas_lahan') }}"></div><div class="input-form mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">(7) Hak Kepemilikian sertifikat</label><input type="text" class="form-control" name="hakmiliksertif_id[]" value="{{ old('hakmiliksertif_id') }}"></div><div class="input-form mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">(8) Jika kolom (7) = 1 , Nama Hak Milik</label><input type="text" class="form-control" name="nama_hakmilik[]" value="{{ old('nama_hakmilik') }}"></div><div class="input-form mt-3"><a href="javascript:" class="remove btn btn-danger"> Hapus </a></div></div></div></div></div>';
             $('.tambahlahan').append(tambahlahan);
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