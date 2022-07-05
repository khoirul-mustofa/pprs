<?php

namespace App\Http\Controllers;

use App\Models\Sambutan;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreSambutanRequest;
use App\Http\Requests\UpdateSambutanRequest;

class SambutanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.sambutan.show',[
            'sambutan' => Sambutan::all()
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
     * @param  \App\Http\Requests\StoreSambutanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSambutanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sambutan  $sambutan
     * @return \Illuminate\Http\Response
     */
    public function show(Sambutan $sambutan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sambutan  $sambutan
     * @return \Illuminate\Http\Response
     */
    public function edit(Sambutan $sambutan)
    {
        return view('dashboard.sambutan.edit',[
            'sambutan' => $sambutan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSambutanRequest  $request
     * @param  \App\Models\Sambutan  $sambutan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSambutanRequest $request, Sambutan $sambutan)
    {
        $rules = [
            'title' => 'required',
            'name' => 'required',
            'image' => 'image|file|max:5024',
            'konten' => 'required',
        ];

        $validateData = $request->validate($rules);

        //  Jika ada gambar baru
        if ($request->file('image')) {
            // jika gambar lamanya ada, maka hapus gambar
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            // jika tidak ada gambar lama, lakukan penyimpanan kestorage folder "berita-image"
            $validateData['image'] = $request->file('image')->store('sambutan-image');
        }
        Sambutan::where('id', $sambutan->id)
        ->update($validateData);
    return redirect('/dashboard/sambutan')->with('success', 'Sambutan berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sambutan  $sambutan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sambutan $sambutan)
    {

    }
}
