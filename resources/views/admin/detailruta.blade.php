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
              <h4 class="page-title">Detail Ruta</h4>
          </div>
      </div>
    </div>     
    <!-- end page title -->  

      <!--  Halaman -->
      <div class="row">
      <div class="col-12">
      <div class="card">
      <div class="card-body">

      <!-- Detail -->
      <div class="row">
      <div class="col-12">
      <div class="row mb-3"> 

        <table class="table table-bordered border-dark table-centered mt-2">
          <tbody>
              <tr> 
                  <td class="col-md-2"> Nama Provinsi </td> 
                  @foreach ($provinsi as $p)             
                    <td class="col-md-6">
                      {{ $p->nama_prov }}
                    </td>
                  @endforeach
              </tr>

              <tr> 
                <td class="col-md-2"> Nama Kabupaten </td> 
                  @foreach ($kabupaten as $k)             
                  <td class="col-md-6">
                    {{ $k->nama_kab }}
                  </td>
                  @endforeach
            </tr>

            <tr> 
              <td class="col-md-2"> Nama Kecamatan </td>
              <td class="col-md-6">
                {{ $warga->kecamatan->nama_kec }}
              </td> 
          </tr>

          <tr> 
            <td class="col-md-2"> Desa / Kelurahan </td>
            <td class="col-md-6">
              {{ $warga->desa_kelurahan->desa_kel }}
            </td> 
        </tr>

          <tr> 
            <td class="col-md-2"> Nama Dusun </td>
            <td class="col-md-6">
              {{ $warga->nama_dusun }}
            </td> 
        </tr>
          
        <tr> 
            <td class="col-md-2"> Kepala Keluarga </td>
            <td class="col-md-6">
              {{ $warga->kepala_keluarga }}
            </td> 
        </tr>

        <tr> 
            <td class="col-md-2"> Nomor KK </td>
            <td class="col-md-6">
              {{ $warga->no_kk }}
            </td> 
        </tr>

        <tr> 
            <td class="col-md-2"> Penguasaan Bangunan Tempat Tinggal  </td>
            <td class="col-md-6">
              {{ $warga->kepemilikan_a->kepemilikan_a }}
            </td> 
        </tr>

        <tr> 
          <td class="col-md-2"> Jenis Lantai </td>
          <td class="col-md-6">
            {{ $warga->jenislantai->jenis_lantai }}
          </td> 
      </tr>

        <tr> 
          <td class="col-md-2"> Jenis Dinding  </td>
          <td class="col-md-6">
            {{ $warga->jenisdinding->jenis_dinding}}
          </td> 
      </tr>

        <tr> 
          <td class="col-md-2"> Jenis Atap  </td>
          <td class="col-md-6">
            {{ $warga->jenisatap->jenis_atap}}
          </td> 
      </tr>

        <tr> 
          <td class="col-md-2"> Sumber air minum  </td>
          <td class="col-md-6">
            {{ $warga->sumberminum->sumber_minum}}
          </td> 
      </tr>

      <tr> 
        <td class="col-md-2"> Sumber penerangan  </td>
        <td class="col-md-6">
          {{ $warga->penerangan->sumber_penerangan}}
        </td> 
    </tr>

    <tr> 
      <td class="col-md-2"> Tempat Pembuangan Akhir Tinja  </td>
      <td class="col-md-6">
        {{ $warga->tpa->tpa}}
      </td> 
    </tr>
      
          </tbody>
        </table>

        <div class="mt-3">
          <a href="/kartukeluarga" class="btn btn-danger"> Kembali </a>
        </div>

      </div>
      </div>
      </div>  
      <!-- End detail -->

      </div>
      </div>
      </div>
      </div>  
      <!-- end halaman -->
        
    <!-- Right sidebar-->
    @include('layout_admin.rightsidebar')
    <!-- End Right sidebar-->

    <!-- Footer-->
    @include('layout_admin.footer')
    <!-- End Footer-->
    
        <!-- bundle -->
        <script src="user/assets/js/vendor.min.js"></script>
        <script src="user/assets/js/app.min.js"></script>

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