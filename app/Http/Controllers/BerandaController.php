<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Berita;
use App\Models\Pengurus;
use App\Models\Sambutan;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('beranda', [
            "title" => "beranda",
            "headLine" => Berita::all(),
            "pengurus" => Pengurus::all(),
            "sambutan" => Sambutan::all(),
            "banner" => Banner::all()
        ]);
    }
}
