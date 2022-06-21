<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('pendaftaran',[
        //     'title' => 'pendaftaran-santri'
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('pendaftaran',[
            'title' => 'pendaftaran-santri'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request,[
            'nik' => 'required|unique:pendaftarans|max:16|min:16',
            'email' => 'required|email:dns'
        ]);

         Pendaftaran::create([
            'nama' => $request->nama,
            'templahir' => $request->tempatLahir,
            'tgllahir' => $request->tglLahir,
            'jkl' => $request->jenisKelamin,
            'statusa' => $request->statusAnak,
            'nik' => $request->nik,
            'desa' => $request->desa,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'provinsi' => $request->provinsi,
            'email' => $request->email,
            'riwayat' => $request->riwayatMedis,
            'ayah' => $request->nmaAyah,
            'pekerjaanA' => $request->krjAyah,
            'ibu' => $request->nmaIbu,
            'pekerjaanI' => $request->krjIbu,
            'hp' => $request->noHp,
            'sekolah' => $request->nmSekolah,
            'alamat' => $request->almtSekolah,
            'ijazah' => $request->ijazahTerakhir,
            'menyetujui' => $request->pernyataan
         ]);
        return redirect('/pendaftaran-santri/create')->with('success','Selamat Berhasil Mendaftar!');
    }

    public function detailUser()
    {
        return view('showPendaftaran');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
