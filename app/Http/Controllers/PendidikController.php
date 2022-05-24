<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePendidikRequest;
use App\Http\Requests\UpdatePendidikRequest;
use App\Models\Pendidik;

class PendidikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePendidikRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePendidikRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendidik  $pendidik
     * @return \Illuminate\Http\Response
     */
    public function show(Pendidik $pendidik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendidik  $pendidik
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendidik $pendidik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePendidikRequest  $request
     * @param  \App\Models\Pendidik  $pendidik
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePendidikRequest $request, Pendidik $pendidik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendidik  $pendidik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendidik $pendidik)
    {
        //
    }
}
