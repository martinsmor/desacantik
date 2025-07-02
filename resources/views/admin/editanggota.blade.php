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
     <form method="POST" action="/editanggota/{{ $warga->id }}">
        {{ csrf_field() }}

         <!--  Halaman -->
        <div class="row">
        <div class="col-12 mt-2">
        <div class="card">
        <div class="card-body">
        <div id="basicwizard">

        <!-- Block 7  --> 
        <div class="tab-pane" id="basictab7">
            <div class="row">
            <div class="col-12">
            <div class="row mb-3">
                   
                <div class="input-form text-center">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        <strong> VII. KETERANGAN SOSIAL EKONOMI ANGGOTA KELUARGA </strong>
                    </label>
                </div> 
    
              <table class="table table-bordered border-primary table-centered mt-2">
                    <tbody>
                        <tr> 
                            <td colspan="2" class="text-center"> 
                                <strong> A.KETERANGAN DEMOGRAFI </strong>
                            </td>
                        </tr>
                    </tbody>
                </table>

            @foreach ($warga->blok7 as $wb)

                <div class="mt-2 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        701. Nomor urut anggota keluarga
                   </label>
                   <input type="text" class="form-control" name="nomor_urut[]" value="{{ $wb->nomor_urut }}">
                </div>

                  <div class="mt-2 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                       702. Nama anggota keluarga
                   </label>
                   <input type="text" class="form-control" name="nama_anggota[]" value="{{ $wb->nama_anggota }}">
                </div>
    
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                      703. Nomor Induk Kependudukan (NIK)
                   </label>
                     <input type="text" class="form-control" name="nik[]" value="{{ $wb->nik }}">
                </div>
    
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                      704. Hubungan dengan kepala keluarga
                   </label>
                     <input type="text" class="form-control" name="hubungan_keluarga_id[]" value="{{ $wb->hubungan_keluarga_id }}">
                </div>
    
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                     705. Keterangan keberadaan anggota keluarga
                   </label>
                    <input type="text" class="form-control" name="keberadaan_id[]" value="{{ $wb->keberadaan_id }}">
                </div>
    
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                      706. Jenis kelamin
                   </label>
                     <input type="text" class="form-control" name="jenis_kelamin_id[]" value="{{ $wb->jenis_kelamin_id }}">
                </div>
                
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                      707. Tanggal Lahir
                   </label>
                     <input type="date" class="form-control" name="tanggal_lahir[]" value="{{ $wb->tanggal_lahir }}">
                </div>
    
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                     708. Umur
                   </label>
                    <input type="text" class="form-control" name="umur[]" value="{{ $wb->umur }}">
                </div>
    
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                      709. Agama
                   </label>
                     <input type="text" class="form-control" name="agama_id[]" value="{{ $wb->agama_id }}">
                </div>
    
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                    710. Suku
                   </label>
                    <input type="text" class="form-control" name="suku_id[]" value="{{ $wb->suku_id }}">
                </div>
    
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                     711. Domisili
                   </label>
                     <input type="text" class="form-control" name="domisili_id[]" value="{{ $wb->domisili_id }}">
                </div>
    
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                     712. Program bansos
                   </label>
                      <input type="text" class="form-control" name="bansos_id[]" value="{{ $wb->bansos_id }}">
                </div>
    
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                     713. Status perkawinan
                   </label>
                   <input type="text" class="form-control" name="status_kawin_id[]" value="{{ $wb->status_kawin_id }}">
                </div>
    
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                         714. Kepemilikan akta/buku nikah atau akta cerai
                   </label>
                    <input type="text" class="form-control" name="kepemilikan_bukunikah_id[]" value="{{ $wb->kepemilikan_bukunikah_id }}">
                </div>
    
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                         715. Tercantum dalam Kartu Keluarga (KK) di keluarga ini
                   </label>
                     <input type="text" class="form-control" name="KK_id[]" value="{{ $wb->KK_id }}">
                </div>
    
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                         716. Kepemilikan kartu identitas
                   </label>
                     <input type="text" class="form-control" name="identitas_id[]" value="{{ $wb->identitas_id }}">
                </div>
    
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        717. Status Kehamilan
                   </label>
                    <input type="text" class="form-control" name="kehamilan_id[]" value="{{ $wb->kehamilan_id }}">
                </div>
    
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                       718. Alat KB
                   </label>
                     <input type="text" class="form-control" name="KB_id[]" value="{{ $wb->KB_id }}">
                </div>   
                
                <table class="table table-bordered border-primary table-centered mt-3">
                    <tbody>
                        <tr> 
                            <td colspan="4" class="text-center"> 
                                <strong> B. PENDIDIKAN (ANGGOTA KELUARGA USIA 5 TAHUN KE ATAS) </strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
    
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                       719. Partisipasi sekolah
                   </label>
                     <input type="text" class="form-control" name="sekolah_id[]" value="{{ $wb->sekolah_id }}">
                </div>   
    
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                       720. Jenjang dan jenis pendidikan tertinggi yang /sedang diduduki 
                   </label>
                     <input type="text" class="form-control" name="jenjang_sekolah_id[]" value="{{ $wb->jenjang_sekolah_id }}">
                </div>   
    
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                      721. Kelas tertinggi yang pernah/sedang diduduki
                   </label>
                  <input type="text" class="form-control" name="kelas_id[]" value="{{ $wb->kelas_id }}">
                </div>   
    
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                      722. Ijazah tertinggi yang dimiliki
                   </label>
                     <input type="text" class="form-control" name="ijazah_id[]" value="{{ $wb->ijazah_id }}">
                </div>   
        
                <table class="table table-bordered border-primary table-centered mt-3">
                    <tbody>
                        <tr> 
                            <td colspan="4" class="text-center"> 
                                <strong> C. KETENAGAKERJAAN (ANGGOTA KELUARGA USIA 5 TAHUN KE ATAS) </strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
    
                <div class="mt-3 col-md-4">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                      723. Pensiunan
                    </label>
                   <input type="text" class="form-control" name="pensiunan_id[]" value="{{ $wb->pensiunan_id }}">
                </div> 
    
                <div class="mt-3 col-md-4">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                      724. Bekerja/membantu bekerja
                    </label>
                    <input type="text" class="form-control" name="bekerja_id[]" value="{{ $wb->bekerja_id }}">
                </div> 
    
                <div class="mt-3 col-md-4">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                       725. Berapa jam bekerja?
                    </label>
                     <input type="text" class="form-control" name="lamabekerja_id[]" value="{{ $wb->lamabekerja_id }}">
                </div> 
               
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                      726. Lapangan usaha dan pekerjaan utama
                    </label>
                    <input type="text" class="form-control" name="pekerjaan_utama_id[]" value="{{ $wb->pekerjaan_utama_id }}">
                </div> 
                
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                       727. Status dalam pekerjaan utama
                    </label>
                    <input type="text" class="form-control" name="status_pekerjaan_id[]" value="{{ $wb->status_pekerjaan_id }}">
                </div> 
               
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                      728. Apakah memiliki NPWP?
                    </label>
                     <input type="text" class="form-control" name="NPWP_id[]" value="{{ $wb->NPWP_id }}">
                </div> 
                
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                       729. Apakah ada transaksi secara online pada pekerjaan utama?
                    </label>
                     <input type="text" class="form-control" name="transaksi_id[]" value="{{ $wb->transaksi_id }}">
                </div> 
    
                <table class="table table-bordered border-primary table-centered mt-3">
                    <tbody>
                        <tr> 
                            <td colspan="4" class="text-center"> 
                                <strong> D. KEPEMILIKAN USAHA (ANGGOTA KELUARGA USIA 5 TAHUN KE ATAS) </strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
    
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        730. Apakah memiliki usaha sendiri/bersama?
                    </label>
                     <input type="text" class="form-control" name="usaha_id[]" value="{{ $wb->usaha_id }}">
                </div> 
                       
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        731. Apakah lapangan usaha dari usaha tersebut? 
                    </label>
                     <input type="text" class="form-control" name="lapangan_usaha[]" value="{{ $wb->lapangan_usaha }}">
                </div>
                
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                       732. Jumlah pekerja yang dibayar  
                    </label>
                     <input type="text" class="form-control" name="pekerja_dibayar[]" value="{{ $wb->pekerja_dibayar }}">
                </div>
        
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                       733. Jumlah pekerja yang tidak dibayar 
                    </label>
                     <input type="text" class="form-control" name="pekerja_tidakdibayar[]" value="{{ $wb->pekerja_tidakdibayar }}">
                </div>
        
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                        734. Kepemilikan perizinan usaha
                    </label>
                     <input type="text" class="form-control" name="perizinan_usaha[]" value="{{ $wb->perizinan_usaha }}">
                </div>
        
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                       735. Tempat/lokasi usaha  
                    </label>
                      <input type="text" class="form-control" name="tempat_usaha_id[]" value="{{ $wb->tempat_usaha_id }}">
                </div>
        
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                       736. Omset usaha perbulan (rupiah)
                    </label>
                      <input type="text" class="form-control" name="omset_id[]" value="{{ $wb->omset_id }}">
                </div>
        
                <div class="mt-3 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                       737. Penggunaan internet dalam kegiatan usaha 
                    </label>
                      <input type="text" class="form-control" name="internet_id[]" value="{{ $wb->internet_id }}">
                </div>
              
                <table class="table table-bordered border-primary table-centered mt-3">
                    <tbody>
                        <tr> 
                            <td colspan="4" class="text-center"> 
                                <strong> E. KESEHATAN </strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
    
                <div class="mt-2 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                       738. Jenis Cacat
                    </label>
                      <input type="text" class="form-control" name="cacat_id[]" value="{{ $wb->cacat_id }}">
                </div>
                        
                <div class="mt-2 col-md-6">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                       739. Penyakit kronis/menahun
                    </label>
                      <input type="text" class="form-control" name="penyakitkronis_id[]" value="{{ $wb->penyakitkronis_id }}">
                </div>
                        
                <div class="mt-3">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                       740. Golongan darah
                    </label>
                      <input type="text" class="form-control" name="golongandarah_id[]" value="{{ $wb->golongandarah_id }}">
                </div>
                        
                <div class="mt-3">
                    <label class="form-label w-full flex flex-col sm:flex-row">
                       741. Kondisi gizi berdasarkan pemeriksaan di posyandu/puskesmas/rumah sakit 3 bulan terakhir
                    </label>
                      <input type="text" class="form-control" name="kondisigizi_id[]" value="{{ $wb->kondisigizi_id }}">
                </div> 
               
                <div class="mt-2">
                    ---------------------------------------------------------------------------------------------------------------------------------------------------------
                </div>

            @endforeach

            <div class="input-form mt-3">
                <a href="#" class="addtambahanggota btn btn-primary"> Tambah Anggota </a>
            </div>
    
            <div class="tambahanggota"></div>                           
    
            <div class="d-grid mt-2">
                <button type="submit" class="btn btn-success" value="update"> Ubah data </button>
            </div> 
    
            </div>
            </div> 
            </div> 
            </div>
            <!-- end Block 7   -->
         

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

         <!-- Script blok VII -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
        <script type="text/javascript">
            $('.addtambahanggota').on('click',function(){
                addtambahanggota();
            });
            function addtambahanggota(){
                var tambahanggota = 
                '<div><div class="row"><div class="col-12"><div class="row mb-3"><div class="mt-2 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">701. Nomor urut anggota keluarga</label><input type="text" class="form-control" name="nomor_urut[]" value="{{ old('nomor_urut') }}"></div><div class="mt-2 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">702. Nama anggota keluarga</label><input type="text" class="form-control" name="nama_anggota[]" value="{{ old('nama_anggota') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">703. Nomor Induk Kependudukan (NIK)</label><input type="text" class="form-control" name="nik[]" value="{{ old('nik') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">704. Hubungan dengan kepala keluarga</label><input type="text" class="form-control" name="hubungan_keluarga_id[]" value="{{ old('hubungan_keluarga_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row"> 705. Keterangan keberadaan anggota keluarga</label><input type="text" class="form-control" name="keberadaan_id[]" value="{{ old('keberadaan_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">706. Jenis kelamin</label><input type="text" class="form-control" name="jenis_kelamin_id[]" value="{{ old('jenis_kelamin_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">707. Tanggal Lahir</label><input type="date" class="form-control" name="tanggal_lahir[]" value="{{ old('tanggal_lahir') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">708. Umur</label><input type="text" class="form-control" name="umur[]" value="{{ old('umur') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">709. Agama</label><input type="text" class="form-control" name="agama_id[]" value="{{ old('agama_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">710. Suku</label><input type="text" class="form-control" name="suku_id[]" value="{{ old('suku_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">711. Domisili</label><input type="text" class="form-control" name="domisili_id[]" value="{{ old('domisili_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">712. Program bansos</label><input type="text" class="form-control" name="bansos_id[]" value="{{ old('bansos_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">713. Status perkawinan</label><input type="text" class="form-control" name="status_kawin_id[]" value="{{ old('status_kawin_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">714. Kepemilikan akta/buku nikah atau akta cerai</label><input type="text" class="form-control" name="kepemilikan_bukunikah_id[]" value="{{ old('kepemilikan_bukunikah_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">715. Tercantum dalam Kartu Keluarga (KK) di keluarga ini</label><input type="text" class="form-control" name="KK_id[]" value="{{ old('KK_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">716. Kepemilikan kartu identitas</label><input type="text" class="form-control" name="identitas_id[]" value="{{ old('identitas_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">717. Status Kehamilan</label><input type="text" class="form-control" name="kehamilan_id[]" value="{{ old('kehamilan_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">718. Alat KB</label><input type="text" class="form-control" name="KB_id[]" value="{{ old('KB_id') }}"></div><table class="table table-bordered border-primary table-centered mt-3"><tbody><tr><td colspan="4" class="text-center"><strong> B. PENDIDIKAN (ANGGOTA KELUARGA USIA 5 TAHUN KE ATAS) </strong></td></tr></tbody></table><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">719. Partisipasi sekolah</label><input type="text" class="form-control" name="sekolah_id[]" value="{{ old('sekolah_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row"> 720. Jenjang dan jenis pendidikan tertinggi yang /sedang diduduki</label><input type="text" class="form-control" name="jenjang_sekolah_id[]" value="{{ old('jenjang_sekolah_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">721. Kelas tertinggi yang pernah/sedang diduduki</label><input type="text" class="form-control" name="kelas_id[]" value="{{ old('kelas_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">722. Ijazah tertinggi yang dimiliki</label><input type="text" class="form-control" name="ijazah_id[]" value="{{ old('ijazah_id') }}"></div> <table class="table table-bordered border-primary table-centered mt-3"><tbody><tr><td colspan="4" class="text-center"><strong> C. KETENAGAKERJAAN (ANGGOTA KELUARGA USIA 5 TAHUN KE ATAS) </strong></td> </tr></tbody></table> <div class="mt-3 col-md-4"><label class="form-label w-full flex flex-col sm:flex-row">723. Pensiunan</label><input type="text" class="form-control" name="pensiunan_id[]" value="{{ old('pensiunan_id') }}"></div><div class="mt-3 col-md-4"><label class="form-label w-full flex flex-col sm:flex-row">724. Bekerja/membantu bekerja</label><input type="text" class="form-control" name="bekerja_id[]" value="{{ old('bekerja_id') }}"></div><div class="mt-3 col-md-4"><label class="form-label w-full flex flex-col sm:flex-row">725. Berapa jam bekerja?</label><input type="text" class="form-control" name="lamabekerja_id[]" value="{{ old('lamabekerja_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">726. Lapangan usaha dan pekerjaan utama</label><input type="text" class="form-control" name="pekerjaan_utama_id[]" value="{{ old('pekerjaan_utama_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">727. Status dalam pekerjaan utama</label><input type="text" class="form-control" name="status_pekerjaan_id[]" value="{{ old('status_pekerjaan_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">728. Apakah memiliki NPWP?</label><input type="text" class="form-control" name="NPWP_id[]" value="{{ old('NPWP_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">729. Apakah ada transaksi secara online pada pekerjaan utama?</label><input type="text" class="form-control" name="transaksi_id[]" value="{{ old('transaksi_id') }}"></div><table class="table table-bordered border-primary table-centered mt-3"><tbody><tr><td colspan="4" class="text-center"><strong> D. KEPEMILIKAN USAHA (ANGGOTA KELUARGA USIA 5 TAHUN KE ATAS) </strong></td></tr></tbody></table><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">730. Apakah memiliki usaha sendiri/bersama?</label><input type="text" class="form-control" name="usaha_id[]" value="{{ old('usaha_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">731. Apakah lapangan usaha dari usaha tersebut?</label><input type="text" class="form-control" name="lapangan_usaha[]" value="{{ old('lapangan_usaha') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">732. Jumlah pekerja yang dibayar</label><input type="text" class="form-control" name="pekerja_dibayar[]" value="{{ old('pekerja_dibayar') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">733. Jumlah pekerja yang tidak dibayar</label><input type="text" class="form-control" name="pekerja_tidakdibayar[]" value="{{ old('pekerja_tidakdibayar') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">734. Kepemilikan perizinan usaha</label><input type="text" class="form-control" name="perizinan_usaha[]" value="{{ old('perizinan_usaha') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">735. Tempat/lokasi usaha</label><input type="text" class="form-control" name="tempat_usaha_id[]" value="{{ old('tempat_usaha_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row"> 736. Omset usaha perbulan (rupiah)</label><input type="text" class="form-control" name="omset_id[]" value="{{ old('omset_id') }}"></div><div class="mt-3 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row"> 737. Penggunaan internet dalam kegiatan usaha</label><input type="text" class="form-control" name="internet_id[]" value="{{ old('internet_id') }}"></div><table class="table table-bordered border-primary table-centered mt-3"><tbody><tr><td colspan="4" class="text-center"><strong> E. KESEHATAN </strong></td></tr></tbody></table><div class="mt-2 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">738. Jenis Cacat</label><input type="text" class="form-control" name="cacat_id[]"value="{{ old('cacat_id') }}"></div><div class="mt-2 col-md-6"><label class="form-label w-full flex flex-col sm:flex-row">739. Penyakit kronis/menahun</label><input type="text" class="form-control" name="penyakitkronis_id[]"value="{{ old('penyakitkronis_id') }}"></div><div class="mt-3"><label class="form-label w-full flex flex-col sm:flex-row">740. Golongan darah</label><input type="text" class="form-control" name="golongandarah_id[]"value="{{ old('golongandarah_id') }}"></div> <div class="mt-3"> <label class="form-label w-full flex flex-col sm:flex-row">741. Kondisi gizi berdasarkan pemeriksaan di posyandu/puskesmas/rumah sakit 3 bulan terakhir </label><input type="text" class="form-control" name="kondisigizi_id[]"value="{{ old('kondisigizi_id') }}"></div><div class="input-form mt-3"><a href="javascript:" class="remove btn btn-danger"> Hapus </a></div><div class="mt-2">---------------------------------------------------------------------------------------------------------------------------------------------------------</div></div></div></div></div>'
                $('.tambahanggota').append(tambahanggota);
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