<?php

namespace App\Http\Controllers;

use App\Transaksi;
use Illuminate\Http\Request;
use App\User;
use Alert;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $transaksi = Transaksi::all();
      // dd($transaksi);
    return view('viewadmin.pembayaran.home',['transaksi'=>$transaksi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $transaksi = User::where('role', '=' , null)->get();

        // dd($transaksi);
        return view('viewadmin.pembayaran.create')->with('transaksi',$transaksi);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Transaksi::create([
      'user_id'=>$request->nama,
      'tanggal_pembayaran' => $request->tanggal_pembayaran,
      'total_pembayaran'=>$request->total_pembayaran,
      'keterangan'=>$request->keterangan,
      'status_pembayaran' => $request->status_pembayaran,
      'ket_lainlain' => $request->ket_lainlain,

    ]);

    return redirect(route('homepembayaran'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($transaksi)
    {
        $transaksiedit = Transaksi::find($transaksi);
        // dd($transaksiedit);
        return view('viewadmin.pembayaran.edit')->with('transaksiedit',$transaksiedit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $transaksi)
    {
      $transaksiupdate = Transaksi::find($transaksi);

      // dd($transaksi);
      $transaksiupdate->tanggal_pembayaran = $request->tanggal_pembayaran;
      $transaksiupdate->total_pembayaran = $request->total_pembayaran;
      if ($request->keterangan) {
        $transaksiupdate->keterangan = $request->keterangan;
      }
      if ($request->status_pembayaran) {
        $transaksiupdate->status_pembayaran = $request->status_pembayaran;
      }
      $aa = $transaksiupdate->save();
      if ($aa) {
        // Alert::success('Good job!')->persistent("Close");
        alert()->success('You have been logged out.', 'Good bye!');
      }
      return redirect('/homepembayaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }


}
