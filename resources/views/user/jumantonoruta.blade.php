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

    <!-- App css -->
    <link href="user/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="user/assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
    <link href="user/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">

</head>
<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    
    <!-- Begin page -->
 <div class="wrapper">
    <!-- ========== Left Sidebar Start ========== -->
    <div class="leftside-menu">

        <!-- LOGO -->
        <a href="index.html" class="logo text-center logo-light">
            <span class="logo-lg">
                <img src="assets/img/desacantik.png" width="30" height="30">   Admin Desa Cantik
            </span>
        </a>

       <!-- LOGO -->
         <a href="index.html" class="logo text-center logo-dark">
            <span class="logo-lg">
                <img src="assets/img/desacantik.png" width="30" height="30"> Admin Desa Cantik
            </span>
        </a>
          
        <div class="h-100" id="leftside-menu-container" data-simplebar="">

            <!--- Sidemenu -->
            <ul class="side-nav">
                
                <li class="side-nav-title side-nav-item">Kelola Rumah Tangga</li>
                <li class="side-nav-item">
                    <a href="/jumantono" class="side-nav-link">
                        <i class="dripicons-home"></i>
                        <span> Kartu Keluarga </span>
                    </a>
                </li>
                <li class="side-nav-item">
                    <a href=/jumantono_ruta class="side-nav-link">
                        <i class="dripicons-user-id"></i>
                        <span> Anggota Rumah Tangga </span>
                    </a>
                </li>

             
              <!-- End Sidebar -->

            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- Topbar -->
    @include('layout_admin.topbar')
    <!-- End Topbar-->

     <!-- start page title -->
     <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title text-center">Anggota Rumah Tangga</h4>
            </div>
        </div>
    </div>     
    <!-- end page title -->   
    
    <!-- Content -->
    <div class="row">
        <div class="col-12">
        <div class="card">
        <div class="card-body">
           
            <table id="example" class="display nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                                <th>Extn.</th>
                                <th>E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
            </div>
            </div>                                                       
        </div>
        </div>
    <!-- End Content -->
            
        
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
        <script type="text/javascript">
            $(document).ready(function () {
            $('#example').DataTable({
                scrollX: true,
            });
            });
        </script>

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