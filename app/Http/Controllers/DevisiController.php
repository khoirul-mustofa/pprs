<?php

namespace App\Http\Controllers;

use App\Models\Devisi;
use App\Http\Requests\StoreDevisiRequest;
use App\Http\Requests\UpdateDevisiRequest;

class DevisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.devisi.index',[
            'data' => Devisi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.devisi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDevisiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDevisiRequest $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:devisis|min:2'
        ]);
        Devisi::create([
            'name' => $request->name
        ]);
        return redirect('/dashboard/devisi')->with('success','Data kategori berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Devisi  $devisi
     * @return \Illuminate\Http\Response
     */
    public function show(Devisi $devisi)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Devisi  $devisi
     * @return \Illuminate\Http\Response
     */
    public function edit(Devisi $devisi)
    {

        return view('dashboard.devisi.edit',[
            'data' => Devisi::find($devisi->id)
        ]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDevisiRequest  $request
     * @param  \App\Models\Devisi  $devisi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDevisiRequest $request, Devisi $devisi)
    {
        $validateData = $request->validate([
            'name' => 'required|unique:devisis|min:2'
        ]);
        Devisi::whereId($devisi->id)->update($validateData);
        return redirect('/dashboard/devisi')->with('success','Data Berhasil DiUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Devisi  $devisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Devisi $devisi)
    {
        Devisi::destroy($devisi->id);
        return redirect('/dashboard/devisi')->with('success','Data berhasil dihapus!');
    }
}
