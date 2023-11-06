<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KegiatanController extends Controller
{
    public function index() {
    //mengambil data dari tabel
    $kegiatan = DB::table('tbl_kegiatan')->get();
    //mengirim data ke view 
    return view('kegiatan', ['kegiatan' => $kegiatan]);
    }
}
