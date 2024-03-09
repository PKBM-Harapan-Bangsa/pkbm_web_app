<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Carbon\Carbon;


class QRScannerController extends Controller
{
    public function showAbsentQr(Request $request){
        $qr = $request->input('idSiswa');
        $pieces = explode('-', $qr);
        
        if (empty($pieces[1])) {
            return back()->with('message', 'Error, Kode QR tidak Valid');
        }
        
        $siswaId = $pieces[0];
        $siswaName = $pieces[1];
                
        $data = Siswa::find($siswaId);
        
        if ($data) {
            if ($data->username == $siswaName) {
                if ($data != null) {
                    $siswa = ($data->kehadiran != null) ? $data->kehadiran : $data;
                } else {
                    // Atau Anda dapat menetapkan nilai default jika $data null
                    $siswa = $data;
                }
                
                date_default_timezone_set('Asia/Jakarta');
                // dd($request->all());
                $bulan = $request->input('bulan');
                if ($bulan) {
                    $nilaiBulan = \Carbon\Carbon::createFromFormat('n', $bulan)->startOfMonth();
                    // dd($request->all());
                } else {
                    $nilaiBulan = now();
                }
        
                $bulan = $nilaiBulan->format('n');
                
        
                $nama_siswa = $data->nama;
                $username = $data->username;
                $id = $data->id;
        
                return view('qr-scanner', compact('siswa', 'bulan', 'nama_siswa', 'username', 'id'));
            } else {
                return back()->with('message', 'Error, Kode QR tidak Valid');
            }
        } else {
            return back()->with('message', 'Error, Kode QR tidak Valid');
        }
        
        // dd($request->input('idSiswa'));
        // $data = Siswa::find(1);
        
       
    }
}
