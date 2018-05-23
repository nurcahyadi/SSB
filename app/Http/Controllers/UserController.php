<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // public function __construct()
     // {
     //     $this->middleware('auth');
     // }


    public function index()
    {
      $user = User::all();
    // dd($article);
    return view('viewadmin.home',['user'=>$user]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $path = Storage::disk('public')->put('foto',$request->foto);
      // $path = 'image/user';
      // $foto = $request->file('foto');


          User::create([
          'nama_lengkap' => $request->nama_lengkap,
          'email'=>$request->email,
          'nama_ortu' => $request->nama_ortu,
          'pekerjaan_ortu' => $request->pekerjaan_ortu,
          'foto' => $path,
          'tempat_lahir' => $request->tempat_lahir,
          'tanggal_lahir' => $request->tanggal_lahir,
          'phone' => $request->phone,
          'alamat_rumah' => $request->alamat_rumah,
          'sekolah_asal' => $request->sekolah_asal,
          'alamat_sekolah' => $request->alamat_sekolah,
          'asal_ssb' => $request->asal_ssb,
          'gol_darah' => $request->gol_darah,
          'tinggi' => $request->tinggi,
          'berat' => $request->berat,
          'penyakit' => $request->penyakit,
          'kelas' => $request->kelas

        ]);

        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
