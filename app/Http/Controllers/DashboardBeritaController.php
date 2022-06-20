<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DashboardBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.berita.index',[
            'semuaBerita' => Berita::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.berita.create',[
            'categories' => Kategori::all()
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
        $validateData = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'kategori_id' => 'required',
            'konten' => 'required'
         ]);
         $validateData['user_id'] = auth()->user()->id;
         $validateData['excerpt'] = Str::limit(strip_tags ($request->konten), 200, '...');
         Berita::create($validateData);
         return redirect('/dashboard/berita')->with('success', 'New berita has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        return view('dashboard.berita.show',[
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
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
        Berita::destroy($berita->id);
        return redirect('/dashboard/berita')->with('success_delete', 'Berita berhasil dihapus!');
    }

    // public function checkSlug(Request $request)
    // {
    //     $slug = SlugService::createSlug(Berita::class, 'slug', $request->title);
    //     return response()->json(['slug' => $slug]);
    // }
}
