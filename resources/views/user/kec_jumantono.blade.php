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
                        <span> Dashboard </span>
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
                <h4 class="page-title text-center">Halaman Utama </h4>
            </div>
        </div>
    </div>     
    <!-- end page title -->   
    
    <!-- Content -->
    <div class="row">
        <div class="col-md-6">
            <div class="card-header text-white" style="background: rgba(148, 6, 6, 0.92)">
                Fasilitas Tempat BAB
            </div>
            <div id="piechart" style="width: 500px; height: 300px;"></div>
        </div> <!-- end col-->
    
        <div class="col-md-6">
            <div class="card-header text-white" style="background: rgba(6, 148, 117, 0.92)">
                Jenis Atap
            </div>
            <div id="piechart2" style="width: 500px; height: 300px;"></div>
        </div> <!-- end col-->
    
    
        <div class="col-md-6">
            <div class="card-header text-white" style="background: rgba(89, 6, 148, 0.92)">
                TPA
            </div>
            <div id="piechart3" style="width: 500px; height: 300px;"></div>
        </div> <!-- end col-->
        
        <div class="col-md-6">
            <div class="card-header text-white" style="background: rgba(224, 120, 8, 0.92)">
                Jenis dinding
            </div>
            <div id="piechart4" style="width: 500px; height: 300px;"></div>
        </div> <!-- end col-->
    
        <div class="col-md-6">
            <div class="card-header text-white bg-dark">
                Sumber Penerangan
            </div>
            <div id="piechart5" style="width: 500px; height: 300px;"></div>
        </div> <!-- end col-->
       
        <div class="col-md-6">
            <div class="card-header text-white" style="background: rgba(8, 171, 212, 0.9)">
                Bahan Bakar Energi / Utama Memasak
            </div>
            <div id="piechart6" style="width: 500px; height: 300px;"></div>
        </div> <!-- end col-->
    
        <div class="col-md-6">
            <div class="card-header text-white" style="background: darkblue">
                Jenis Lantai
            </div>
            <div id="piechart7" style="width: 500px; height: 300px;"></div>
        </div> <!-- end col-->
    
        <div class="col-md-6">
            <div class="card-header text-white" style="background: rgba(208, 7, 181, 0.92)">
                Sumber Minum
            </div>
            <div id="piechart8" style="width: 500px; height: 300px;"></div>
        </div> <!-- end col-->
    
      </div>
    <!-- End Content -->
            
        
    <!-- Right sidebar-->
    @include('layout_admin.rightsidebar')
    <!-- End Right sidebar-->

    <!-- Footer-->
    @include('layout_admin.footer')
    <!-- End Footer-->

    <!-- Script -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Sendiri', 60],
          ['Bersama', 10],
          ['Umum', 5],
          ['Tidak ada', 1],
        ]);

        var options = {};

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <!-- piechart 2 -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Jenis Atap', 'Speakers (in millions)'],
          [' Beton/genteng beton ', 13], ['Genteng keramik ', 83], ['Genteng metal ', 1.4],
          ['Genteng tanah liat ', 400], [' Asbes ', 46], ['Seng', 60],
          ['Sirap ', 38], ['Bambu', 5.5], ['Jerami/ijuk/daun-daunan/rumbia ', 5],
          [' Lainnya ', 20]
        ]);

        var options = {};

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
        chart.draw(data, options);
      }
    </script>

    <!-- piechart 3 -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['TPA', 'Speakers (in millions)'],
          ['Tangki', 13], ['SPAL', 83], ['Lubang Tanah', 1.4],
          ['Kolam/sawah/sungai/danau/ laut ', 2.3], [' Pantai/tanah lapang/kebun ', 46],
          [' Lainnya ', 20]
        ]);

        var options = {};

        var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
        chart.draw(data, options);
      }
    </script>

    <!-- piechart 4 -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Jenis Dinding', 'Speakers (in millions)'],
          ['Tembok', 13], ['Plesteran anyaman bambu/kawat', 83], ['Kayu', 1.4],
          ['Anyaman bambu', 2.3], ['Batang kayu', 46],
          ['Bambu', 20],['Lainnya',1]
        ]);

        var options = {};

        var chart = new google.visualization.PieChart(document.getElementById('piechart4'));
        chart.draw(data, options);
      }
    </script>

    <!-- piechart 5 -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Penerangan', 'Hours per Day'],
          ['Listrik PLN',     11],
          ['Listrik non PLN',      2],
          ['Bukan Listrik',  2],
        ]);

        var options = {};

        var chart = new google.visualization.PieChart(document.getElementById('piechart5'));

        chart.draw(data, options);
      }
    </script>

    <!-- piechart 6 -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Bahan Bakar Memasak', 'Speakers (in millions)'],
          ['Listrik', 13], ['Gas > 3 kg', 83], ['Gas 3 kg', 1.4],
          ['Gas kota/biogas', 2.3], ['Minyak tanah', 46],
          ['Briket', 20],['Arang', 11],['Kayu Bakar', 1], ['Tidak memasak dirumah', 2.3]
        ]);

        var options = {};

        var chart = new google.visualization.PieChart(document.getElementById('piechart6'));
        chart.draw(data, options);
      }
    </script>

    <!-- piechart 7 -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Jenis Lantai', 'Speakers (in millions)'],
          [' Marmer/granit ', 13], ['Keramik', 83], ['Parket/vinil/permadani', 1.4],
          ['Ubin/tegel/teraso', 2.3], ['Kayu/papan', 46],
          ['Semen/bata merah', 20],['Bambu', 11],['Tanah ', 1], ['Lainnya', 2.3]
        ]);

        var options = {};

        var chart = new google.visualization.PieChart(document.getElementById('piechart7'));
        chart.draw(data, options);
      }
    </script>

    <!-- piechart 8 -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Sumber Minum', 'Speakers (in millions)'],
          ['Air kemasan ber-merk ', 13], [' Air isi ulang', 83], ['Leding', 1.4],
          ['Sumur berpompa', 2.3], ['Sumur terlindung', 46],
          ['Sumur tak terlindung ', 20],[' Mata air terlindung ', 11],['Mata air tak terlindung ', 1], ['Air Permukaan (Sungai/danau/kolam/waduk/irigasi) ', 1.2],['air hujan', 2.1] ,['Lainnya', 2.3]
        ]);

        var options = {};

        var chart = new google.visualization.PieChart(document.getElementById('piechart8'));
        chart.draw(data, options);
      }
    </script>
    
    
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