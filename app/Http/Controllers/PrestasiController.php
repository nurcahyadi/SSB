<?php

namespace App\Http\Controllers;

use App\prestasi;
use Illuminate\Http\Request;
use Storage;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasi = prestasi::all();
        return view('viewadmin.about.home')->with('prestasi',$prestasi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viewadmin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $path = Storage::disk('public')->put('prestasi',$request->foto_prestasi);

          prestasi::create([
          'nama_prestasi' => $request->nama_prestasi,
          'foto_prestasi' => $path,
          'tanggal' => $request->tanggal,
          'deskripsi' => $request->deskripsi
        ]);

      return redirect(route('homeaboutadmin'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function show(prestasi $id)
    {
        return view('viewadmin.about.view',['aboutshow'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function edit(prestasi $id)
    {
        return view('viewadmin.about.edit',['editabout'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $prestasi = prestasi::find($id);
      if ($request->foto_prestasi) {
          $path = Storage::disk('public')->put('prestasi',$request->foto_prestasi);
        } else {
          $path = $prestasi->foto_prestasi;
        }

      $prestasi->nama_prestasi = $request->nama_prestasi;
      $prestasi->deskripsi = $request->deskripsi;
      $prestasi->foto_prestasi = $path;
      $prestasi->tanggal = $request->tanggal;
      $prestasi->save();

      return redirect(route('homeaboutadmin'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $prestasi = prestasi::find($id);
      $delete= $prestasi->delete();
      if ($delete) {
        alert()->success('Success Message', 'Optional Title');
        return redirect('/homeaboutadmin');
      }
    }
}
