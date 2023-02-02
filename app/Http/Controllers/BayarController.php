<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;
use App\Models\Paket_Wisata;
class BayarController extends Controller
{
    public function index(Request $request){
        $id = $request->id;
        $p_wisata = $request->paket;
        $pesan = Pesan::where('pesan', $id)->first();
        $p_wisata = Paket_Wisata::where('nama_paket', $p_wisata)->first();
        return view('pembayaran',['pesan' => $pesan,'p_wisata' => $p_wisata]);
    }
}
