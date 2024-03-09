<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOTools;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        SEOTools::setTitle('PKBM Harapan Bangsa');
        SEOTools::setDescription('PKBM Harapan Bangsa, Pusat Kegiatan Belajar Masyarakat Kabupaten Banyumas, Kejar Paket A, Setara SD, Kejar Paket B, Setara SMP, Kejar Paket C, Setara SMA');
        return view('welcome');
    }
}
