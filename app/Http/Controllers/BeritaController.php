<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Berita;
use App\Models\Kategori;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('semuaBerita',[
            "title" => "Semua Berita",
            // "semuaBerita" => Berita::all()
            // menampilkan semau berita dari yang terakhir di uploud
            "semuaBerita"=> Berita::latest()->get()
        ]);
    }

    // menampilkan semua postingan dari user yang ditentukan
    // berdasarkan author atau user
    public function userBerita(User $user){
        return view('semuaBerita',[
            "title" => "Berita Berdasarkan : $user->name",
            "semuaBerita"=> $user->berita->load('kategori', 'user'),
        ]);
    }

    public function cariBerita(){
        return view('semuaBerita',[
            "title" => "Semua Berita",
            // "semuaBerita" => Berita::all()
            // menampilkan semau berita dari yang terakhir di uploud
            "semuaBerita"=> Berita::latest()->Filter(['search'])->get()
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBeritaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBeritaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */

    //  $berita harus sama dengan 'berita/{berita}' pada route nya
    public function show(Berita $berita)
    {
        return view('detailBerita',[
            // Detail Berita
            "title"=> "Detail Berita",
            "detailBerita" => $berita,
            "semuaKategori"=>Kategori::all(),

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBeritaRequest  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBeritaRequest $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        //
    }
}
