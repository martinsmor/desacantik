<?php

namespace App\Http\Controllers;
use App\Models\bansos;
use App\Models\blok7;
use App\Models\hubungankeluarga;
use App\Models\partisipasi;
use App\Models\pekerjaanutama;
use App\Models\penyakitkronis;
use App\Models\pilihan;
use App\Models\warga;
use App\Models\provinsi;
use App\Models\kabupaten;
use App\Models\kecamatan;
use App\Models\kepemilikan_a;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class anggotarutaController extends Controller
{
    public function anggotaruta()
    {
         $blok7 = blok7::join('warga','warga.id','=','blok7.id_warga')
        ->join('kecamatan','kecamatan.id','=','kecamatan_id')
        ->where('kecamatan.id',Auth::user()->kecamatan_id)->get();  

       $hubungankeluarga = hubungankeluarga::with('blok7')->get();
       $penyakitkronis = penyakitkronis::with('blok7')->get();
       $penyakitkronis = penyakitkronis::with('blok7')->get();
       $partisipasi = partisipasi::with('blok7')->get();
       $pilihan = pilihan::with('blok7')->get();
       $bansos = bansos::with('blok7')->get();
        
        //dd($blok7);       

        $warga = warga::limit(20)->get();
       
        return view('admin.anggotaruta',
            compact ('blok7')); 
    }

    public function jsonruta()
    {
        return DataTables::of(warga::limit(20))->make(true);
    } 


    public function editanggota($id)
    {
        $warga = warga::with('blok7')->where('id',$id)->find($id);

        //dd($warga);

        return view('admin.editanggota', compact('warga'));
    }

    public function updateanggota($id, Request $request)
    {
       // $blok7 = blok7::find($id);
       // $blok7->update($request->all());

       $warga = warga::with('blok7')->where('id',$id)->find($id);

       blok7::where('id_warga', $id)->delete();

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

        $warga->update($request->all());       

        //dd($warga);

        return redirect('/anggotaruta');
    }
}
