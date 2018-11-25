<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\gallery;
use App\prestasi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function home()
    {
        return view('viewuser.home');
    }
    public function gallery()
    {
        $gallery = gallery::all();
        return view('viewuser.gallery')->with('gallery',$gallery);
    }
    public function daftar()
    {
        return view('viewuser.daftar');
    }
    public function profpemain()
    {
        $pemain = User::where('status','=','Accept')->get();
        // dd($pemain);
        return view('viewuser.profilepemain')->with('pemain',$pemain);
    }
    public function profpelatih()
    {
      $pelatih = User::where('role','=',3)->get();
        return view('viewuser.profilepelatih')->with('pelatih',$pelatih);
    }
    public function about()
    {
        return view('viewuser.about');
    }

    public function prestasi()
    {
        $prestasi = prestasi::all();
        return view('viewuser.prestasi')->with('prestasi',$prestasi);
    }

    public function tentangssb()
    {
        return view('viewuser.profilssb');
    }


}
