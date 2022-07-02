<?php

namespace App\Http\Controllers;

use App\Models\Devisi;
use App\Models\Pengurus;
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
            'title' => 'Tambah Pengurus',
            'devisi' => Devisi::all()
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
        Pengurus::create([
            'name' => $request->name,
            'devisi_id' => $request->devisi
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
            'detailPengurus' => Pengurus::find($id),
            'devisi' => Devisi::all()
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
            'pengurus' => Pengurus::find($id),
            'devisi' => Devisi::all()
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
        $validate = [
            'name' => $request->name,
            'devisi_id' => $request->devisi
        ];
        Pengurus::where('id',$id)->update($validate);

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
