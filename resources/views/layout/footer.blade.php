<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-4 mt-2 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-4">
        <div class="row g-4">
            <!-- Pintasan -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Pintasan</h4>
                <a class="btn btn-link" href="/profildesa">Tentang Kami</a>
                <a class="btn btn-link" href="/contact">Kontak</a>
            </div>

            <!-- Kontak -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Kontak</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Raya Kampung Korano Jaya, RT.008 - RW.02</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>koranojayasp2@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Galeri -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Galeri</h4>
                <div class="row g-2 pt-2">
                    <div class="col-4"><img class="img-fluid bg-light p-1" src="img/cat-2.jpg" alt=""></div>
                    <div class="col-4"><img class="img-fluid bg-light p-1" src="img/cat-6.jpg" alt=""></div>
                    <div class="col-4"><img class="img-fluid bg-light p-1" src="img/cat-3.jpg" alt=""></div>
                    <div class="col-4"><img class="img-fluid bg-light p-1" src="img/cat-7.jpg" alt=""></div>
                    <div class="col-4"><img class="img-fluid bg-light p-1" src="img/cat-3.jpg" alt=""></div>
                    <div class="col-4"><img class="img-fluid bg-light p-1" src="img/cat-2.jpg" alt=""></div>
                </div>
            </div>

            <!-- Kotak Saran -->
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Komentar</h4>
                <p>Berikan saran dan komentar menggunakan layanan dibawah</p>
                <form method="POST" action="{{ route('komentar.store') }}">
                    @csrf
                    <div class="mb-2">
                        <input name="nama" class="form-control border-0 py-2 px-3" type="text" placeholder="Nama Anda (opsional)">
                    </div>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input name="isi" class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Kirim saran">
                        <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                    </div>
                </form>
                @if(session('success'))
                <div class="text-success mt-2">{{ session('success') }}</div>
                @endif
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="container mt-3">
        <div class="copyright border-top pt-3">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                    &copy; Designed By <a class="border-bottom" href="https://telukbintunikab.bps.go.id/">BPS Teluk Bintuni</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!-- <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->