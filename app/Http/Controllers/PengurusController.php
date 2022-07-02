<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pengurus.index', [
            'title' => 'Data Pengurus',
            'semuaPengurus' => Pengurus::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengurus.create',[
            'title' => 'Tambah Pengurus'
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
            'name' => 'required',
            'devisi' => 'required'
        ]);
        Pengurus::create([
            'name' => $request->name,
            'devisi' => $request->devisi
        ]);
        return redirect('/dashboard/pengurus')->with('success','Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.pengurus.show',[
            'title' => 'Detail Pengurus',
            'detailPengurus' => Pengurus::find($id)
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
        return view('dashboard.pengurus.edit',[
            'pengurus' => Pengurus::find($id)
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
            'name' => 'required',
            'devisi' => 'required'
        ];
        Pengurus::where('id', $id)->update($rules);

        return redirect('/dashboard/pengurus')->with('success','Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengurus::destroy($id);
        return redirect('/dashboard/pengurus')->with('success','Data berhasil dihapus!');
    }
}
