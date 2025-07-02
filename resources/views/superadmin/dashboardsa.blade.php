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
                <h4 class="page-title text-center">Kartu Keluarga</h4>
            </div>
        </div>
    </div>     
    <!-- end page title -->   
    
    <!-- Content -->
    <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-body">

    <!--  -->
    <div class="row">
    <div class="col-12">
    <div class="row mb-3"> 

        <div class="table-responsive mt-3 col-md-12">
            <table id="example" class="table table-bordered">
               <thead>
                <tr>
                    <th> No </th>
                    <th> Desa </th>
                    <th> Nama Kepala Keluarga </th>
                    <th> Nomor KK </th>
                    <th> Penguasaan Bangunan Tempat Tinggal </th>
                </tr>
            </thead>
            
                    <tbody>
                        <tr>
                        @foreach ($warga as $w)
                        <td>{{ $loop->iteration }}</td>                                                  
                        <td>{{ $w->desa_kelurahan->desa_kel }}</td> 
                        <td>{{ $w->kepala_keluarga }}</td> 
                        <td>{{ $w->no_kk}}</td>                                                                                   
                        <td>{{ $w->kepemilikan_a->kepemilikan_a ?? 'tidak ada kepemilikan' }} </td>                                                                                   

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