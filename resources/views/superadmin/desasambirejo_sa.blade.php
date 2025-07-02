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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
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
     <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title text-center">Desa Sambirejo</h4>
            </div>
        </div>
    </div>     
    <!-- end page title -->   
    
       <!-- Content -->
       <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
            <div class="card-header"> 
            <div class="card-body">            
    
                <div class="table-responsive">
                <table id="example" class="table table-bordered">
                   <thead>
                    <tr>
                        <th> No </th>
                        <th> Nama Provinsi </th>
                        <th> Nama Kabupaten </th>
                        <th> Nama Kecamatan </th>
                        <th> Nama Dusun </th>
                        <th> Aksi </th>
               <!--          <th> Nomor KK </th>
                        <th> Penguasaan bangunan tempat tinggal </th>
                        <th> Jenis Lantai </th>
                        <th> Jenis Dinding </th>
                        <td > Jenis Atap </td>
                        <td > Sumber Air Minum </td>
                        <td > Sumber Penerangan </td>
                        <td > TPA </td>
                       <td class=""> Aksi </td> -->
                    </tr>
                </thead>
                
                        <tbody>
                            <tr>
                            @foreach ($warga as $w)
                            <td>{{ $w->id }}</td>                                                  
                            <td>{{ $w->provinsi->nama_prov }}</td> 
                            <td>{{ $w->kabupaten->nama_kab}}</td>                                                      
                            <td>{{ $w->kecamatan->nama_kec}}</td>   
                            <td>{{ $w->nama_dusun}}</td>                                                      
                            <td>
                                <a href="{{ url('/detailruta'.$w->id) }}" class="btn btn-outline-success btn-sm"><i class="dripicons-document-new"></i> detail </a>  
                                <a href="{{ url('/editruta'.$w->id) }}" class="btn btn-outline-primary btn-sm"><i class=" dripicons-document-edit "></i> edit</a>  
                                <a href="{{ url('/delete/'.$w->id) }}" class="btn btn-outline-danger btn-sm"><i class="dripicons-trash"></i> hapus</a>
                            </td>                                                   
              <!--                                                                      
                            <td>{{ $w->desa_kel_id }}</td>                                                      
                            <td>{{ $w->klasifikasi_id}}</td>                                                      
                            <td>{{ $w->kode_sls}}</td>                                                      
                            <td>{{ $w->nama_sls}}</td>                                                      
                            <td>{{ $w->alamat}}</td> 
                            <td>{{ $w->lattitude }}</td>                                                  
                            <td>{{ $w->jenis_lintang_id}}</td>                                                      
                            <td>{{ $w->longitude}}</td>                                                      
                            <td>{{ $w->nubtt}}</td>                                                      
                            <td>{{ $w->no_kk}}</td>                                                      
                            <td>{{ $w->nukhp}}</td>                                                      
                            <td>{{ $w->kepala_keluarga}}</td>                                                      
                            <td>{{ $w->jumlah_anggota}}</td>                                                      
                            <td>{{ $w->tanggal_cacah}}</td>                                                      
                            <td>{{ $w->nama_cacah}}</td> 
                            <td>{{ $w->kode_cacah }}</td>                                                  
                            <td>{{ $w->tgl_periksa}}</td>                                                      
                            <td>{{ $w->nama_periksa}}</td>                                                      
                            <td>{{ $w->kode_periksa}}</td>                                                      
                            <td>{{ $w->hasilcacah_id}}</td>                                                      
                            <td>{{ $w->kepemilikan_a_id}}</td>                                                      
                            <td>{{ $w->kepemilikan_b_id}}</td>                                                      
                            <td>{{ $w->luas_lantai}}</td>                                                      
                            <td>{{ $w->jenislantai_id}}</td>                                                      
                            <td>{{ $w->jenis_dinding_id}}</td> 
                            <td>{{ $w->kondisi_dinding_id }}</td>                                                  
                            <td>{{ $w->jenis_atap_id}}</td>                                                      
                            <td>{{ $w->kondisi_atap_id}}</td>                                                      
                            <td>{{ $w->jumlah_kamar}}</td>                                                      
                            <td>{{ $w->sumber_minum_id}}</td>                                                      
                            <td>{{ $w->peroleh_minum_id}}</td>                                                      
                            <td>{{ $w->penerangan_id}}</td>                                                      
                            <td>{{ $w->daya_id}}</td>                                                      
                            <td>{{ $w->bahanmasak_id}}</td>                                                      
                            <td>{{ $w->fasilitasmasak_id}}</td> 
                            <td>{{ $w->kloset_id }}</td>                                                  
                            <td>{{ $w->tpa_id}}</td>                                                      
                            <td>{{ $w->pekerjaan}}</td>                                                      
                            <td>{{ $w->kode_lapangan_usaha}}</td>                                                      
                            <td>{{ $w->pendapatan}}</td>                                                      
                            <td>{{ $w->gas_id}}</td>                                                      
                            <td>{{ $w->lemari_id}}</td>                                                      
                            <td>{{ $w->ac_id}}</td>                                                      
                            <td>{{ $w->pemanas_id}}</td>                                                      
                            <td>{{ $w->pstn_id}}</td> 
                            <td>{{ $w->tv_id }}</td>                                                  
                            <td>{{ $w->emas_id}}</td>                                                      
                            <td>{{ $w->laptop_id}}</td>                                                      
                            <td>{{ $w->sepeda_id}}</td>                                                      
                            <td>{{ $w->motor_id}}</td>                                                      
                            <td>{{ $w->mobil_id}}</td>                                                      
                            <td>{{ $w->perahu_id}}</td>                                                      
                            <td>{{ $w->motortempel_id}}</td>                                                      
                            <td>{{ $w->perahumotor_id}}</td>                                                      
                            <td>{{ $w->kapal_id}}</td> 
                            <td>{{ $w->nomor_hp }}</td>                                                  
                            <td>{{ $w->jumlah_tv}}</td>                                                      
                            <td>{{ $w->lahan_id}}</td>                                                      
                            <td>{{ $w->lahan_meter}}</td>                                                      
                            <td>{{ $w->rumahlain_id}}</td>                                                      
                            <td>{{ $w->sapi}}</td>                                                      
                            <td>{{ $w->kerbau}}</td>                                                      
                            <td>{{ $w->kuda}}</td>                                                      
                            <td>{{ $w->babi}}</td>                                                      
                            <td>{{ $w->kambing}}</td>                                                      
                                            -->                                                                                           
                            
               <!--             <td class="col-2">
                                <a href="" class="btn btn-outline-primary btn-sm"><i class=" dripicons-document-edit "></i> edit</a>  
                                <a href="" class="btn btn-outline-danger btn-sm"><i class="dripicons-trash"></i> hapus</a>
                            </td> -->
                            </tr>
                            @endforeach
                        </tbody>                
                </table>
            </div>
    
            </div>
            </div>                                                       
            </div>
            </div>
            </div>
        </div>
        <!-- End Content -->          

    <!-- tabel -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>    
    <script type="text/javascript">
        $(document).ready(function () {
        $('#example').DataTable();
        });
    </script>

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