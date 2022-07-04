<?php

namespace App\Http\Controllers;

use App\Models\Sambutan;
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sambutan  $sambutan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sambutan $sambutan)
    {
        //
    }
}
