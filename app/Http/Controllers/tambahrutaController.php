<?php

namespace App\Http\Controllers;

use App\Models\bahanbakarmasak;
use App\Models\bansos;
use App\Models\blok6;
use App\Models\blok7;
use App\Models\daya;
use App\Models\desa_kelurahan;
use App\Models\fasilitasmasak;
use App\Models\hakmiliksertif;
use App\Models\hasilcacah;
use App\Models\hubungankeluarga;
use App\Models\jenisatap;
use App\Models\jenisdinding;
use App\Models\jenislahan;
use App\Models\jenislantai;
use App\Models\jenislintang;
use App\Models\kabupaten;
use App\Models\keberadaansppt;
use App\Models\kecamatan;
use App\Models\kepemilikan_a;
use App\Models\kepemilikan_b;
use App\Models\klasifikasi;
use App\Models\kloset;
use App\Models\kondisi;
use App\Models\partisipasi;
use App\Models\pekerjaanutama;
use App\Models\penyakitkronis;
use App\Models\perolehminum;
use App\Models\pilihan;
use App\Models\provinsi;
use App\Models\sumberminum;
use App\Models\sumberpenerangan;
use App\Models\tpa;
use App\Models\user;
use App\Models\warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

//use Illuminate\Support\Facades\DB;

class tambahrutaController extends Controller
{
    public function index ()
    {
        $prov = provinsi::all();
        $kab = kabupaten::all();
        $kec = kecamatan::all();
        $desa_kel = desa_kelurahan::all();
        $kla = klasifikasi::all();
        $lintang = jenislintang::all();
        $cacah = hasilcacah::all();
        $milik_a = kepemilikan_a::all();
        $milik_b = kepemilikan_b::all();
        $jenislantai = jenislantai::all();
        $jenisdinding = jenisdinding::all();
        $kondisi = kondisi::all();
        $atap = jenisatap::all();
        $sumberminum = sumberminum::with('warga')->get();
        $perolehminum = perolehminum::with('warga')->get();
        $penerangan = sumberpenerangan::with('warga')->get();
        $daya = daya::with('warga')->get();
        $bahanmasak = bahanbakarmasak::with('warga')->get();
        $fasilitasmasak = fasilitasmasak::with('warga')->get();
        $kloset = kloset::with('warga')->get();
        $tpa = tpa::with('warga')->get();
        $pilihan = pilihan::with('warga')->get();
        //$jenislahan = jenislahan::with('warga')->get();
        //$sppt = keberadaansppt::with('blok6')->get();
        //$sertif = hakmiliksertif::with('warga')->get();

        return view('admin.tambahruta', compact(
            'prov',
            'kab',
            'kec',
            'desa_kel',
            'kla',
            'lintang',
            'cacah',
            'milik_a',
            'milik_b',
            'jenislantai',
            'jenisdinding',
            'kondisi',
            'atap',
            'sumberminum',
            'perolehminum',
            'penerangan',
            'daya',
            'bahanmasak',
            'fasilitasmasak',
            'kloset',
            'tpa',
            'pilihan',
            //'jenislahan',
            //'sppt',
            //'sertif',
        )); 
    } 

    public function kartukeluarga()
    {
       $warga =  warga::with
        ( 'provinsi',
          'kabupaten',
          'kecamatan',
          'kepemilikan_a',
          'jenislantai',
          'jenisdinding',
          'jenisatap',
          'sumberminum',
          'penerangan',
          'tpa',
          )->get(); 


        $provinsi = provinsi::with('warga')->get();
        $kabupaten = kabupaten::with('warga')->get();
        $kecamatan = kecamatan::with('warga')->get();
        $kepemilikan_a = kepemilikan_a::with('warga')->get();
        $jenislantai = jenislantai::with('warga')->get();
        $jenisdinding = jenisdinding::with('warga')->get();
        $jenisatap = jenisatap::with('warga')->get();
        $sumberminum = sumberminum::with('warga')->get();
        $penerangan = sumberpenerangan::with('warga')->get();
        $tpa = tpa::with('warga')->get(); 


        $warga = warga::limit(20)->get();

        $data = warga::where('kecamatan_id', Auth::user()->kecamatan_id)->get();
        //dd($data);
        
        return view('admin.kartukeluarga',
            compact ('data',
                 'warga',
                 'provinsi',
                 'kabupaten',
                 'kecamatan',
                 'kepemilikan_a',
                 'jenislantai',
                 'jenisdinding',
                 'jenisatap',
                 'sumberminum',
                 'penerangan',
                 'tpa' )); 
    }

    public function json()
    {
        return DataTables::of(warga::limit(20))->make(true);
    } 

    public function store (Request $request)
    {
        $tambahruta = $request->all();
        //dd($tambahruta);
        
        $warga = new warga;
        $warga->provinsi_id = $tambahruta['provinsi_id'];
        $warga->kabupaten_id = $tambahruta['kabupaten_id'];
        $warga-> kecamatan_id = $tambahruta['kecamatan_id'];
        $warga-> desa_kel_id = $tambahruta['desa_kel_id'];
        $warga-> klasifikasi_id = $tambahruta['klasifikasi_id'];
        $warga-> kode_sls = $tambahruta['kode_sls'];
        $warga-> nama_sls = $tambahruta['nama_sls'];
        $warga-> nama_dusun = $tambahruta['nama_dusun'];
        $warga-> kode_sls = $tambahruta['kode_sls'];
        $warga-> nama_sls = $tambahruta['nama_sls'];
        $warga-> alamat = $tambahruta['alamat'];
        $warga-> lattitude = $tambahruta['lattitude'];
        $warga-> jenis_lintang_id = $tambahruta['jenis_lintang_id'];
        $warga-> longitude = $tambahruta['longitude'];
        $warga-> nubtt = $tambahruta['nubtt'];
        $warga-> no_kk = $tambahruta['no_kk'];
        $warga-> nukhp = $tambahruta['nukhp'];
        $warga-> kepala_keluarga = $tambahruta['kepala_keluarga'];
        $warga-> jumlah_anggota = $tambahruta['jumlah_anggota'];
        $warga-> tanggal_cacah = $tambahruta['tanggal_cacah'];
        $warga-> nama_cacah = $tambahruta['nama_cacah'];
        $warga-> kode_cacah = $tambahruta['kode_cacah'];
        $warga-> tgl_periksa = $tambahruta['tgl_periksa'];
        $warga-> nama_periksa = $tambahruta['nama_periksa'];
        $warga-> kode_periksa = $tambahruta['kode_periksa'];
        $warga-> hasilcacah_id = $tambahruta['hasilcacah_id'];
        $warga-> kepemilikan_a_id = $tambahruta['kepemilikan_a_id'];
        $warga-> kepemilikan_b_id = $tambahruta['kepemilikan_b_id'];
        $warga-> luas_lantai = $tambahruta['luas_lantai'];
        $warga-> jenislantai_id = $tambahruta['jenislantai_id'];
        $warga-> jenis_dinding_id = $tambahruta['jenis_dinding_id'];
        $warga-> kondisi_dinding_id = $tambahruta['kondisi_dinding_id'];
        $warga-> jenis_atap_id = $tambahruta['jenis_atap_id'];
        $warga-> kondisi_atap_id = $tambahruta['kondisi_atap_id'];
        $warga-> jumlah_kamar = $tambahruta['jumlah_kamar'];
        $warga-> sumber_minum_id = $tambahruta['sumber_minum_id'];
        $warga-> peroleh_minum_id = $tambahruta['peroleh_minum_id'];
        $warga-> penerangan_id = $tambahruta['penerangan_id'];
        $warga-> daya_id = $tambahruta['daya_id'];
        $warga-> bahanmasak_id = $tambahruta['bahanmasak_id'];
        $warga-> fasilitasmasak_id = $tambahruta['fasilitasmasak_id'];
        $warga-> kloset_id = $tambahruta['kloset_id'];
        $warga-> tpa_id = $tambahruta['tpa_id'];
        $warga-> pekerjaan = $tambahruta['pekerjaan'];
        $warga-> kode_lapangan_usaha = $tambahruta['kode_lapangan_usaha'];
        $warga-> pendapatan = $tambahruta['pendapatan'];
        $warga-> gas_id = $tambahruta['gas_id'];
        $warga-> lemari_id = $tambahruta['lemari_id'];
        $warga-> ac_id = $tambahruta['ac_id'];
        $warga-> pemanas_id = $tambahruta['pemanas_id'];
        $warga-> pstn_id = $tambahruta['pstn_id'];
        $warga-> tv_id = $tambahruta['tv_id'];
        $warga-> emas_id = $tambahruta['emas_id'];
        $warga-> laptop_id = $tambahruta['laptop_id'];
        $warga-> sepeda_id = $tambahruta['sepeda_id'];
        $warga-> motor_id = $tambahruta['motor_id'];
        $warga-> mobil_id = $tambahruta['mobil_id'];
        $warga-> perahu_id = $tambahruta['perahu_id'];
        $warga-> motortempel_id = $tambahruta['motortempel_id'];
        $warga-> perahumotor_id = $tambahruta['perahumotor_id'];
        $warga-> kapal_id = $tambahruta['kapal_id'];
        $warga-> nomor_hp = $tambahruta['nomor_hp'];
        $warga-> jumlah_tv = $tambahruta['jumlah_tv'];
        $warga-> lahan_id = $tambahruta['lahan_id'];
        $warga-> lahan_meter = $tambahruta['lahan_meter'];
        $warga-> rumahlain_id = $tambahruta['rumahlain_id'];
        $warga-> sapi = $tambahruta['sapi'];
        $warga-> kerbau = $tambahruta['kerbau'];
        $warga-> kuda = $tambahruta['kuda'];
        $warga-> babi = $tambahruta['babi'];
        $warga-> kambing = $tambahruta['kambing'];
        $warga->save();

        $warga_id = $request-> warga_id;
        $nama_lahan = $request-> nama_lahan;
        $jenislahan_id = $request-> jenislahan_id;
        $sppt_id = $request-> sppt_id;
        $nomor_pajak = $request-> nomor_pajak;
        $luas_lahan = $request-> luas_lahan;
        $hakmiliksertif_id = $request-> hakmiliksertif_id;
        $nama_hakmilik = $request-> nama_hakmilik;

        for ($i=0; $i<count($nama_lahan) ; $i++) { 
            $blok6 = [
                'warga_id' => $warga->id,
                'nama_lahan' => $nama_lahan[$i],
                'jenislahan_id' => $jenislahan_id[$i],
                'sppt_id' => $sppt_id[$i],
                'nomor_pajak' => $nomor_pajak[$i],
                'luas_lahan' => $luas_lahan[$i],
                'hakmiliksertif_id' => $hakmiliksertif_id[$i],
                'nama_hakmilik' => $nama_hakmilik[$i],
            ];
            DB::table('blok6')->insert($blok6);
        }  

       
        $id_warga = $request->id_warga;
        $nomor_urut = $request->nomor_urut;
        $nama_anggota = $request->nama_anggota;
        $nik = $request->nik;
       $hubungan_keluarga_id = $request->hubungan_keluarga_id;
        $keberadaan_id = $request->keberadaan_id;
        $jenis_kelamin_id = $request->jenis_kelamin_id;
        $tanggal_lahir = $request->tanggal_lahir;
        $umur = $request->umur;
        $agama_id = $request->agama_id;
        $suku_id = $request->suku_id;
        $domisili_id = $request->domisili_id;
        $bansos_id = $request->bansos_id;
        $status_kawin_id = $request->status_kawin_id;
        $kepemilikan_bukunikah_id = $request->kepemilikan_bukunikah_id;
        $KK_id = $request->KK_id;
        $identitas_id = $request->identitas_id;
        $kehamilan_id = $request->kehamilan_id;
        $KB_id = $request->KB_id;
        $sekolah_id = $request->sekolah_id;
        $jenjang_sekolah_id = $request->jenjang_sekolah_id;
        $kelas_id = $request->kelas_id;
        $ijazah_id = $request->ijazah_id;
        $pensiunan_id = $request->pensiunan_id;
        $bekerja_id = $request->bekerja_id;
        $lamabekerja_id = $request->lamabekerja_id;
        $pekerjaan_utama_id = $request->pekerjaan_utama_id;
        $status_pekerjaan_id = $request->status_pekerjaan_id;
        $NPWP_id = $request->NPWP_id;
        $transaksi_id = $request->transaksi_id;
        $usaha_id = $request->usaha_id;
        $lapangan_usaha = $request->lapangan_usaha;
        $pekerja_dibayar = $request->pekerja_dibayar;
        $pekerja_tidakdibayar = $request->pekerja_tidakdibayar;
        $perizinan_usaha = $request->perizinan_usaha;
        $tempat_usaha_id = $request->tempat_usaha_id;
        $omset_id = $request->omset_id;
        $internet_id = $request->internet_id;
        $cacat_id = $request->cacat_id;
        $penyakitkronis_id = $request->penyakitkronis_id;
        $golongandarah_id = $request->golongandarah_id;
        $kondisigizi_id = $request->kondisigizi_id; 

         for ($i=0; $i<count($nomor_urut) ; $i++) { 
            $blok7 = [
                'id_warga' => $warga->id,
                'nomor_urut' => $nomor_urut[$i],
                'nama_anggota' => $nama_anggota[$i],
                'nik' => $nik[$i],
                'hubungan_keluarga_id' => $hubungan_keluarga_id[$i],
                'keberadaan_id' => $keberadaan_id[$i],
                'jenis_kelamin_id' => $jenis_kelamin_id[$i],
                'tanggal_lahir' => $tanggal_lahir[$i],
                'umur' => $umur[$i],
                'agama_id' => $agama_id[$i],
                'suku_id' => $suku_id[$i],
                'domisili_id' => $domisili_id[$i],
                'bansos_id' => $bansos_id[$i],
                'status_kawin_id' => $status_kawin_id[$i],
                'kepemilikan_bukunikah_id' => $kepemilikan_bukunikah_id[$i],
                'KK_id' => $KK_id[$i],
                'identitas_id' => $identitas_id[$i],
                'kehamilan_id' => $kehamilan_id[$i],
                'KB_id' => $KB_id[$i],
                'sekolah_id' => $sekolah_id[$i],
                'jenjang_sekolah_id' => $jenjang_sekolah_id[$i],
                'kelas_id' => $kelas_id[$i],
                'ijazah_id' => $ijazah_id[$i],
                'pensiunan_id' => $pensiunan_id[$i],
                'bekerja_id' => $bekerja_id[$i],
                'lamabekerja_id' => $lamabekerja_id[$i],
                'pekerjaan_utama_id' => $pekerjaan_utama_id[$i],
                'status_pekerjaan_id' => $status_pekerjaan_id[$i],
                'NPWP_id' => $NPWP_id[$i],
                'transaksi_id' => $transaksi_id[$i],
                'usaha_id' => $usaha_id[$i],
                'lapangan_usaha' => $lapangan_usaha[$i],
                'pekerja_dibayar' => $pekerja_dibayar[$i],
                'pekerja_tidakdibayar' => $pekerja_tidakdibayar[$i],
                'perizinan_usaha' => $perizinan_usaha[$i],
                'tempat_usaha_id' => $tempat_usaha_id[$i],
                'omset_id' => $omset_id[$i],
                'internet_id' => $internet_id[$i],
                'cacat_id' => $cacat_id[$i],
                'penyakitkronis_id' => $penyakitkronis_id[$i],
                'golongandarah_id' => $golongandarah_id[$i],
                'kondisigizi_id' => $kondisigizi_id[$i],  
            ];
            DB::table('blok7')->insert($blok7); 
        } 

        return redirect('/tambahruta');
    } 

    public function detailruta($id)
    {
        //$warga = warga::all();
        $warga = warga::with(
                    'provinsi',
                    'kabupaten',
                    'desa_kelurahan',
                    'kepemilikan_a',
                    'jenislantai',
                    'jenisdinding',
                    'jenisatap',
                    'sumberminum',
                    'penerangan',
                    'tpa',
                )->get();

        $provinsi = provinsi::with('warga')->get();
        $kabupaten = kabupaten::with('warga')->get();
        $warga = warga::with('kecamatan')->where('id',$id)->first();
        $warga = warga::with('desa_kelurahan')->where('id',$id)->first();
        $warga = warga::with('kepemilikan_a')->where('id',$id)->first();
        $warga = warga::with('jenislantai')->where('id',$id)->first();
        $warga = warga::with('jenisdinding')->where('id',$id)->first();
        $warga = warga::with('jenisatap')->where('id',$id)->first();
        $warga = warga::with('sumberminum')->where('id',$id)->first();
        $warga = warga::with('penerangan')->where('id',$id)->first();
        $warga = warga::with('tpa')->where('id',$id)->first();
        $warga = warga::with('blok6')->where('id', $id)->first();
        
        return view('admin.detailruta', compact ('warga','provinsi','kabupaten'))->with('status','Data Berhasil Disimpan'); 

    }

    public function editruta($id)
    {
        $warga = warga::find($id);

        $provinsi = provinsi::all();
        $kabupaten = kabupaten::all();
        $kecamatan = kecamatan::all();
        $desa_kel = desa_kelurahan::all();
        $klasifikasi = klasifikasi::all();
        $hasilcacah = hasilcacah::all();

        $blok6 = blok6::find($id);

        $warga = warga::with('blok6')->find($id);
 
        //dd($warga);

    return view('admin.editruta', compact(
                'warga',
                'provinsi',
                'kabupaten',
                'kecamatan',  
                'desa_kel',  
                'klasifikasi',
                'hasilcacah',
                ));
    }

    public function updateruta($id, Request $request)
    {
        //$warga = warga::find($id);
        
        $warga = warga::with('blok6')->find($id);

        blok6::where('warga_id', $id)->delete();

        $warga_id = $request-> warga_id;
        $nama_lahan = $request-> nama_lahan;
        $jenislahan_id = $request-> jenislahan_id;
        $sppt_id = $request-> sppt_id;
        $nomor_pajak = $request-> nomor_pajak;
        $luas_lahan = $request-> luas_lahan;
        $hakmiliksertif_id = $request-> hakmiliksertif_id;
        $nama_hakmilik = $request-> nama_hakmilik; 

        for ($i=0; $i<count($nama_lahan) ; $i++) { 
            $blok6 = [
                'warga_id' => $warga->id,
                'nama_lahan' => $nama_lahan[$i],
                'jenislahan_id' => $jenislahan_id[$i],
                'sppt_id' => $sppt_id[$i],
                'nomor_pajak' => $nomor_pajak[$i],
                'luas_lahan' => $luas_lahan[$i],
                'hakmiliksertif_id' => $hakmiliksertif_id[$i],
                'nama_hakmilik' => $nama_hakmilik[$i], 
            ];
            DB::table('blok6')->insert($blok6);
        }  

        $warga->update($request->all());

        //dd($warga);
        return redirect('/kartukeluarga');
    }

    public function destroy($id)
    {
        $warga = warga::find($id);
        $warga->delete();

        return redirect('/kartukeluarga')->with('status', 'Data berhasil dihapus');
    }

}

