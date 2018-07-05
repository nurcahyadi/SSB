<?php

namespace App\Http\Controllers;

use App\gallery;
use Illuminate\Http\Request;
use Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = gallery::all();

        return view('viewadmin.gallery.home',['gallery'=>$gallery]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viewadmin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $path = Storage::disk('public')->put('gallery',$request->foto_gallery);

    gallery::create([
    'nama_gallery' => $request->nama_gallery,
    'foto_gallery' => $path,
    'deskripsi' => $request->deskripsi

  ]);

  return redirect(route('homegalleryadmin'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(gallery $id)
    {
      // $gallerya = gallery::find($id);
      // dd($gallerya);
      // alert()->message('Message', 'Optional Title');
        return view('viewadmin.gallery.view',['galleryshow'=>$id]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(gallery $id)
    {

      return view('viewadmin.gallery.edit',['editgallery'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      $gallery = gallery::find($id);  
      if ($request->foto_gallery) {
          $path = Storage::disk('public')->put('gallery',$request->foto_gallery);
        } else {
          $path = $gallery->foto_gallery;
        }

      $gallery->nama_gallery = $request->nama_gallery;
      $gallery->deskripsi = $request->deskripsi;
      $gallery->foto_gallery = $path;
      $gallery->save();

      return redirect(route('homegalleryadmin'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // dd($id);
      $gallerya = gallery::find($id);
      $delete= $gallerya->delete();
      if ($delete) {
        alert()->success('Success Message', 'Optional Title');
        return redirect('/homegalleryadmin');
      }
    }
}
