<?php

namespace App\Http\Controllers;
use Artesaos\SEOTools\Facades\SEOTools;
use Laravel\Scout\Searchable;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    use Searchable;
    public function index(){
        SEOTools::setTitle('PKBM Harapan Bangsa');
        SEOTools::setDescription('PKBM Harapan Bangsa, Pusat Kegiatan Belajar Masyarakat Kabupaten Banyumas');
        return view('welcome');
    }
}
