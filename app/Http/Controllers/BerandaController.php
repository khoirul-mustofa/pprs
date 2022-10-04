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
        if (Berita::all()->count() > 3) {
            $response = view('beranda', [
                "title" => "beranda",
                "headLine" => Berita::latest()->take(3)->get(),
                "pengurus" => Pengurus::first()->take(3)->get(),
                "sambutan" => Sambutan::all(),
                "banner" => Banner::all()
            ]);
        } else {
            $response = view('beranda', [
                "title" => "beranda",
                "headLine" => Berita::all(),
                "pengurus" => Pengurus::all(),
                "sambutan" => Sambutan::all(),
                "banner" => Banner::all()
            ]);
        }

        return $response;
    }
}
