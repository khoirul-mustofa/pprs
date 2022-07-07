<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kategori.index',[
            "title" => "Kategori",
            "semuaKategori" => Kategori::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kategori.create',[
            'title' => 'kategori create'
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
        $this->validate($request,[
            'name' => 'required|unique:kategoris|min:2',
            'slug' => 'required|unique:kategoris|min:2'
        ]);
        Kategori::create([
            'name' => $request->name,
            'slug' => $request->slug
        ]);
        return redirect('/dashboard/kategori')->with('success','Data kategori berhasil ditambah!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {

    }

    public function kategoriShow(Kategori $kategori)
    {
        
        return view('semuaBerita',[
            'title' => "Semua Berita Berdasarkan Kategori : $kategori->name",
            'semuaBerita' => $kategori->semuaBerita->load('user','kategori')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.kategori.edit',[
            'kategori' => Kategori::find($id)
        ]);
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
        $data =[
            'name' => $request->name,
            'slug' => $request->slug
        ];
        Kategori::whereId($id)->update($data);
        return redirect('/dashboard/kategori')->with('success','Data Berhasil DiUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kategori::destroy($id);
        return redirect('/dashboard/kategori')->with('success','Data berhasil dihapus!');
    }
}
