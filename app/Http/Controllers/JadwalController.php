<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;
use App\Models\Paket_Wisata;
use Auth;
class JadwalController extends Controller
{
    public function index(Request $request){
        $id = Auth::user()->name;
        $pesan = Pesan::where('user', $id)->first();
        $p_wisata = Paket_Wisata::where('nama_paket', $pesan->paket_wisata)->first();
        return view('jadwal',['pesan' => $pesan,'p_wisata' => $p_wisata]);
    }
}
