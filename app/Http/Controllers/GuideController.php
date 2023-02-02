<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use App\Http\Requests\StoreGuideRequest;
use App\Http\Requests\UpdateGuideRequest;
use Illuminate\Http\Request;
use App\Models\Pesan;


class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->id;
        $p_wisata = $request->paket;
        $guide = Guide::all();
        return view('guide', ['guide' => $guide,'id'=>$id,'p_wisata'=>$p_wisata]);

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'guide'     => 'required',
        ]);
        $guide           = Pesan::where('pesan', $request->id)
                            ->update(['guide' => $request->guide]);
        return redirect()->route('bayar', ['id' => $request->id, 'paket' => $request->p_wisata])->with(['success' => 'Data Berhasil Disimpan!']);
    }
  
}
