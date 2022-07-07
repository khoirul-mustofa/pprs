<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Status;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pendaftar.index',[
            'pendaftaran' => Pendaftaran::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request )
    {
        return view('dashboard.pendaftar.create',[
            'title' => 'pendaftaran-santri',
            'jenisKelamin' => ['laki-laki','perempuan'],
            'statusAnak' => ['kandung','asuh','tiri']
        ]);
    }

    public function daftar(Request $request)
    {
        return view('pendaftaran',[
            'title' => 'pendaftaran-santri'
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
        $this->validate($request,[
            'nik' => 'required|unique:pendaftarans|max:16|min:16',
            'email' => 'required|email:dns'
        ]);

         Pendaftaran::create([
            'status_id' => $request->status,
            'nama' => $request->nama,
            'templahir' => $request->tempatLahir,
            'tgllahir' => $request->tglLahir,
            'jkl' => $request->jenisKelamin,
            'statusa' => $request->statusAnak,
            'nik' => $request->nik,
            'desa' => $request->desa,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'provinsi' => $request->provinsi,
            'email' => $request->email,
            'riwayat' => $request->riwayatMedis,
            'ayah' => $request->nmaAyah,
            'pekerjaanA' => $request->krjAyah,
            'ibu' => $request->nmaIbu,
            'pekerjaanI' => $request->krjIbu,
            'hp' => $request->noHp,
            'sekolah' => $request->nmSekolah,
            'alamat' => $request->almtSekolah,
            'ijazah' => $request->ijazahTerakhir,
            'menyetujui' => $request->pernyataan
         ]);
        if(auth()->user()) {
            $redirect = redirect('/dashboard/pendaftaran-santri')->with('success','Data Berhasil ditambah!');
        }else{
            $redirect = redirect('/pendaftaran-santri/detail')->with('success','Selamat anda Berhasil Mendaftar!');
        }
        return $redirect;
    }

    public function detailUser()
    {

        return view('showPendaftaran',[
            'title' => 'Detail Pendaftar',
            'detailPendaftar' => Pendaftaran::latest()->first()
        ]);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.pendaftar.show',[
            "title" => "Detail Pendaftar",
            "detailPendaftar" => Pendaftaran::find($id)

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
        // dd(Pendaftaran::find($id));
        return view('dashboard.pendaftar.edit',[
            'pendaftar' => Pendaftaran::find($id),
            'jenisKelamin' => ['laki-laki','perempuan'],
            'statusAnak' => ['asuh','kandung','tiri'],
            'ijazah' => ['RA/TK','MI/SD','MTS/SMP','MA/SMK/SMA'],
            'status' => Status::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        // dd($request);
        // $this->validate($request, [
        //     'nama' => 'required|max:30|min:3',
        //     'tempatLahir' => 'required|max:200|min:3',
        //     'tglLahir' => 'required|max:200|min:3',
        //     'jenisKelamin' => 'required|max:200|min:3',
        //     'statusa' => 'max:200|min:3',
        //     'nik' => 'required|max:16|min:16',
        //     'desa' => 'required|max:200|min:3',
        //     'kecamatan' => 'required|max:200|min:3',
        //     'kabupaten' => 'required|max:200|min:3',
        //     'provinsi' => 'required|max:200|min:3',
        //     'email' => 'required|max:200|min:3',
        //     'riwayatMedis' => 'max:200|min:3',
        //     'nmaAyah' => 'required|max:200|min:3',
        //     'krjAyah' => 'required|max:200|min:3',
        //     'nmaIbu' => 'required|max:200|min:3',
        //     'krjIbu' => 'required|max:200|min:3',
        //     'noHp' => 'required|max:14|min:3',
        //     'nmSekolah' => 'required|max:200|min:3',
        //     'almtSekolah' => 'required|max:200|min:3',
        //     'ijazahTerakhir' => 'required|max:200|min:3',
        //     'pernyataan' => 'required|max:200'
        // ]);
        $data = [
            'status_id' => $request->status,
            'nama' => $request->nama,
            'templahir' => $request->tempatLahir,
            'tgllahir' => $request->tglLahir,
            'jkl' => $request->jenisKelamin,
            'statusa' => $request->statusa,
            'nik' => $request->nik,
            'desa' => $request->desa,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
            'provinsi' => $request->provinsi,
            'email' => $request->email,
            'riwayat' => $request->riwayatMedis,
            'ayah' => $request->nmaAyah,
            'pekerjaanA' => $request->krjAyah,
            'ibu' => $request->nmaIbu,
            'pekerjaanI' => $request->krjIbu,
            'hp' => $request->noHp,
            'sekolah' => $request->nmSekolah,
            'alamat' => $request->almtSekolah,
            'ijazah' => $request->ijazahTerakhir,
            'menyetujui' => $request->pernyataan
            ];

        Pendaftaran::whereId($id)->update($data);


        return redirect('/dashboard/pendaftaran-santri')->with('success','Data Berhasil DiUpdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pendaftaran::destroy($id);

        return redirect('/dashboard/pendaftaran-santri')->with('success','Data berhasil dihapus!');
    }
}
