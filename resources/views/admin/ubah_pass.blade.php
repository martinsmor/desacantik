<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="icon" type="image/png" sizes="96x96" href="assets/img/desacantik.png">
        <title>Desa Cantik</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />


        <!-- App css -->
        <link href="user/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="user/assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
        <link href="user/assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>

        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">
                            <!-- Logo-->
                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 fw-bold">Ubah Password</h4>
                                    </div>
                                @if(session('success'))
                                <p class="alert-alert-success"> {{ session('success') }}</p>
                                @endif
                                @if ($errors->any())
                                    @foreach($errors->all() as $err)
                                    <p class="alert alert-danger"> {{ $err }}</p>
                                    @endforeach
                                @endif

                                <form action="/password" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label>Password lama</label>
                                        <input type="password" name="password_lama" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Password baru</label>
                                        <input type="password" name="password_baru" class="form-control">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label>Konfirmasi password baru</label>
                                        <input type="password" name="password_baru_konfirmasi" class="form-control">
                                    </div>

                                    <div class="mb-3 text-center">
                                        <button class="btn btn-primary"> Ubah Password </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2018 - 2021 © Hyper - Coderthemes.com
        </footer>

        <!-- bundle -->
        <script src="user/assets/js/vendor.min.js"></script>
        <script src="user/assets/js/app.min.js"></script>
        
    </body>
</html>
