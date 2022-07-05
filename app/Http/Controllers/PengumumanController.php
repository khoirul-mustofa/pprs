<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePengumumanRequest;
use App\Http\Requests\UpdatePengumumanRequest;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pengumuman.index',[
            "title" => "pengumuman",
            "pengumuman" => Pengumuman::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePengumumanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePengumumanRequest $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'image' => 'image|file'
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('pengumuman-images');
        }

        Pengumuman::create($validateData);
        return redirect('/dashboard/pengumuman')->with('success', 'Pengumuman Baru Telah Ditambakhan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman $pengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengumuman $pengumuman)
    {
        return view('dashboard.pengumuman.edit', [
            'pengumuman' => $pengumuman
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePengumumanRequest  $request
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePengumumanRequest $request, Pengumuman $pengumuman)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'image' => 'image|file'
        ]);

        if ($request->file('image')){
            if ($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('pengumuman-images');
        }

        Pengumuman::where('id', $pengumuman->id)->update($validateData);
        return redirect('/dashboard/pengumuman')->with('success','Pengumuman Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        if ($pengumuman->image) {
            Storage::delete($pengumuman->image);
        }
        Pengumuman::destroy($pengumuman->id);
        return redirect('/dashboard/pengumuman')->with('success','Pengumuman berhasil dihapus!');
    }
}
