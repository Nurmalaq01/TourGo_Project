<?php

namespace App\Http\Controllers;

use App\Models\Tempat_Wisata;
use App\Models\Paket_Wisata;
use App\Http\Requests\StorePesanRequest;
use App\Http\Requests\UpdatePesanRequest;
use Illuminate\Http\Request;
use App\Models\Pesan;

class PesanController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                
               
                $twisata = Tempat_Wisata::all();
                $pwisata = Paket_Wisata::all();
                return view('pesan', ['t_wisata' => $twisata, 'p_wisata' => $pwisata]);
    }
    public function store(Request $request)
    {
        $pesan = rand(10,10000);
        //validate form
        $this->validate($request, [
            'nama'     => 'required',
            't_wisata'   => 'required',
            'tanggal' => 'required',
            'p_wisata' => 'required'

        ]);
        error_log($request->pelanggan);

        //create post
        Pesan::create([
            'pesan' => $pesan,
            'tempat_wisata'   => $request->t_wisata,
            'paket_wisata'   => $request->p_wisata,
            'guide' => "",
            'nama'     => $request->nama,
            'tanggal' => $request->tanggal,
            'user' => $request->user,
        ]);

        //redirect to index
        return redirect()->route('guide', ['id' => $pesan, 'paket' => $request->p_wisata])->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
