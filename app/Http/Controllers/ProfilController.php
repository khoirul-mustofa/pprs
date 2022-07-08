<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

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
            'profil' => Profil::all()
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
        $validateData = $request->validate([
            'title' => 'required',
            // 'slug' => 'required|unique:profils',
            'image' => 'image|file',
            'body' => 'rquired'
        ]);

        if ($request->file('image')){
            $validateData['image'] = $request->file('image')->store('profil-images');
        }
        Profil::create($validateData);
        return Route::redirect('/dashboard/profil')->with('success', 'Profil berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.profil.show',[
            'title' => 'Detail Profil',
            'profil' => $id
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
        return view('dashboard.profil.edit',[
            'profil' => $id
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
        $rules = [
            'title' => 'required',
            // 'slug' => 'required|unique:profils',
            'image' => 'image|file',
            'body' => 'required'
        ];

        $validateData = $request->validate($rules);

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
