<?php

namespace App\Http\Controllers;

use App\Models\Devisi;
use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Pengurus::all()->count()) {
            $response = view('dashboard.pengurus.index', [
                'title' => 'Data Pengurus',
                // 'semuaPengurus' => Pengurus::all()
                'semuaPengurus' => Pengurus::first()->filter(request(['search', 'devisi']))->paginate(20)->withQueryString()
            ]);
        } else {
            $response = view('dashboard.pengurus.index', [
                'title' => 'Data Pengurus',
                // 'semuaPengurus' => Pengurus::all()
                'semuaPengurus' => Pengurus::paginate(20)
            ]);
        }



        return $response;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengurus.create', [
            'title' => 'Tambah Pengurus',
            'devisi' => Devisi::all(),
            'pengurus' => [
                'Putra',
                'Putri'
            ]
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
            'name' => 'required',
            'devisi_id' => 'required',
            'genre' => 'required',
            'image' => 'image|file'
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('pengurus-images');
        }
        // dd($validateData);

        Pengurus::create($validateData);
        return redirect('/dashboard/pengurus')->with('success', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.pengurus.show', [
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
        return view('dashboard.pengurus.edit', [
            'pengurus' => Pengurus::find($id),
            'devisi' => Devisi::all(),
            'pengurusGenre' => [
                'Putra',
                'Putri'
            ]
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
            'devisi_id' => 'required',
            'image' => 'image|file'
        ];
        $validateData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('pengurus-images');
        }



        Pengurus::where('id', $id)->update($validateData);

        return redirect('/dashboard/pengurus')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Pengurus::find($id)->image) {
            Storage::delete(Pengurus::find($id)->image);
        }

        Pengurus::destroy($id);
        return redirect('/dashboard/pengurus')->with('success', 'Data berhasil dihapus!');
    }
}
