<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.profil.index',[
            'title' => 'Profil',
            'profil' => Profil::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.profil.create',[
            'title' => 'Tambah Profil'
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
        $validateData = $request->validate([
            'title' => 'required',
            // 'slug' => 'required|unique:profils',
            'konten_first' => '',
            'konten'=> '',
            'image' => 'image|file',
        ]);

        if ($request->file('image')){
            $validateData['image'] = $request->file('image')->store('profil-images');
        }
        Profil::create($validateData);
        return redirect('/dashboard/profil')->with('success', 'Profil berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.profil.edit',[
            'profil' => Profil::find($id)
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
        $validateData = $request->validate([
            'title' => 'required',
            // 'slug' => 'required|unique:profils',
            'image' => 'image|file',
            'konten_first' => 'required',
            'konten' => 'required'
        ]);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('profil-images');
        }

        Profil::where('id', $id)->update($validateData);
        return redirect('/dashboard/profil')->with('success','Profil berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        if($profil->image){
            Storage::delete($profil->image);
        }
        Profil::destroy($profil->id);
        return redirect('/dashboard/profil')->with('success','Profil berhasil dihapus!');
    }
}
