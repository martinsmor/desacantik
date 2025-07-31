<?php

use App\Http\Controllers\anggotarutaController;
use App\Http\Controllers\bpsController;
use App\Http\Controllers\chartController;
use App\Http\Controllers\superadminController;
use App\Http\Controllers\tambahrutaController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fotoController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\ListBeritaController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KomentarController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.index');
});

// admin // 

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin', [chartController::class, 'piechart']);

Route::get('/kelolapengguna_admin', function () {
    return view('admin.kelolapengguna_admin');
});

Route::get('/kelolapengguna_admin', [tambahrutaController::class, 'kelola']);

Route::get('/tambahruta', [tambahrutaController::class, 'index']);

Route::get('/kartukeluarga', [tambahrutaController::class, 'kartukeluarga']);

Route::get('/kartukeluarga/json', [tambahrutaController::class, 'json']);

Route::post('/tambahruta', [tambahrutaController::class, 'store']);

Route::get('/detailruta{id}', [tambahrutaController::class, 'detailruta']);

Route::get('/editruta{id}', [tambahrutaController::class, 'editruta']);

Route::post('/edit/{id}', [tambahrutaController::class, 'updateruta']);

Route::get('/delete/{id}', [tambahrutaController::class, 'destroy']);

Route::get('/anggotaruta', [anggotarutaController::class, 'anggotaruta']);

Route::get('/anggotaruta/json', [anggotarutaController::class, 'jsonruta']);

Route::get('/editanggota{id}', [anggotarutaController::class, 'editanggota']);

Route::post('/editanggota/{id}', [anggotarutaController::class, 'updateanggota']);

// user // 
Route::get('/user', [chartController::class, 'piechartuser']);

Route::get('/jatiyoso', function () {
    return view('user.kec_jatiyoso');
});

Route::get('/jatiyoso_ruta', function () {
    return view('user.jatiyosoruta');
});

Route::get('/jumantono', function () {
    return view('user.kec_jumantono');
});

Route::get('/jumantono_ruta', function () {
    return view('user.jumantonoruta');
});

Route::get('/tawangmangu', function () {
    return view('user.tawangmangu');
});

Route::get('/tawangmangu_ruta', function () {
    return view('user.tawangmanguruta');
});

Route::get('/karangpandan', function () {
    return view('user.karangpandan');
});

Route::get('/karangpandan_ruta', function () {
    return view('user.karangpandanruta');
});

Route::get('/kebakkramat', function () {
    return view('user.kebakkramat');
});

Route::get('/kebakkramat_ruta', function () {
    return view('user.kebakkramatruta');
});

Route::get('/chart', function () {
    return view('user.chart');
});

// login - logout //

Route::get('/login', [userController::class, 'login']);

Route::post('/login', [userController::class, 'login_action']);

Route::get('/register', [userController::class, 'register']);

Route::post('/regis', [userController::class, 'register_action']);

Route::get('/ubahpass', [userController::class, 'password']);

Route::post('/password', [userController::class, 'password_action']);

Route::post('/logout', [userController::class, 'logout'])->name('logout');

//superadmin

Route::get('/superadmin', [bpsController::class, 'index']);
Route::get('/kelolapengguna', [bpsController::class, 'kelola']);

Route::get("/createfoto", [fotoController::class, "create"]);
Route::post("foto", [fotoController::class, "galeri"])->name("foto.galeri");
Route::get("/berita", [beritaController::class, "berita"]);
Route::post("berita", [beritaController::class, "tambahberita"])->name("berita.tambahberita");

Route::get("/listberita", [beritaController::class, "listberita"])->name("list.berita");
Route::get("/galerifoto", [fotoController::class, "galerifoto"])->name("galeri.foto");

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

// Route::get('/test-email', function () {
//     Mail::raw('Halo! Ini adalah email percobaan dari Laravel.', function ($mail) {
//         $mail->to('martinsimamora23@gmail.com')->subject('Tes Email Laravel');
//     });

//     return 'Email sudah dikirim!';
// });

Route::get('/visimisi', [VisiMisiController::class, 'index'])->name('visimisi');
Route::get('/sejarah', [SejarahController::class, 'index'])->name('sejarah');
Route::get("/profil-desa", [ProfilController::class, "profil"])->name("profil-desa.profil");
Route::post("profil-desa", [ProfilController::class, "store"])->name("profil-desa.profils");
Route::get('/profildesa', [ProfilController::class, 'index'])->name('profildesa');
// Route::get("/profil-desa", [ProfilController::class, "profil2"])->name("profil-desa.profil2");
// Route::post("profil-desa", [ProfilController::class, "store2"])->name("profil-desa.profils2");
Route::get('/pembangunan', [ProfilController::class, 'index3'])->name('pembangunan');
Route::get('/pertanahan', [ProfilController::class, 'index2'])->name('pertanahan');
Route::get('/penduduk', [ProfilController::class, 'index4'])->name('penduduk');

Route::post('/komentar', [KomentarController::class, 'store'])->name('komentar.store');
Route::get('/komentar', [KomentarController::class, 'index'])->name('komentar.index');

Route::get('/komentars', [KomentarController::class, 'komentars'])->name('komentars');
Route::delete('/komentars/{id}', [KomentarController::class, 'destroy'])->name('superadmin.komentar.destroy');
