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

    <!-- Table -->
    <link href="assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css" />

</head>
<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- sidebar -->
    @include('layout_admin.sidebar_sa')
    <!-- endsidebar -->

    
    <!-- Topbar -->
    @include('layout_admin.topbar')
    <!-- End Topbar-->
    
    <!-- Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                    </div>
                    <h4 class="page-title">Kelola Pengguna</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

    <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-body">
       <h4 class="header-title">Data Pengguna</h4>
        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama </th>
                    <th scope="col"> Role  </th>
                </tr>
            </thead>
              
            <tbody>
               <tr>
                @foreach ($user as $user)
                <td> {{ $loop->iteration }} </td>
                <td> {{ $user->name }} </td>
                <td> Admin </td>
                @endforeach
             <!--       <td> 
                        <a type="button" class="btn btn-outline-primary"><i class="dripicons-document-edit"></i> Edit </a>
                        <a type="button" class="btn btn-outline-danger "><i class="dripicons-trash"></i> Hapus </a>
                    </td> -->
               </tr>
            </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>                        

    <!-- End Content-->
        
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

        <!-- Datatables js -->
        <script src="assets/js/vendor/jquery.dataTables.min.js"></script>
        <script src="assets/js/vendor/dataTables.bootstrap5.js"></script>
        <script src="assets/js/vendor/dataTables.responsive.min.js"></script>
        <script src="assets/js/vendor/responsive.bootstrap5.min.js"></script>

        <!-- Datatable Init js -->
        <script src="assets/js/pages/demo.datatable-init.js"></script>
                                                

</body>
</html>