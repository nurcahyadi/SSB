<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('viewuser.gallery');
    }
    public function daftar()
    {
        return view('viewuser.daftar');
    }
    public function profpemain()
    {
        return view('viewuser.profilepemain');
    }
    public function profpelatih()
    {
        return view('viewuser.profilepelatih');
    }
    public function about()
    {
        return view('viewuser.about');
    }
}
