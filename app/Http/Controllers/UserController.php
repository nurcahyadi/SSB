<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\User;
use Alert;

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
    $user = User::where('role', '=' , null)->orderBy('id', 'dsc')->get();
    // dd($article);
    return view('viewadmin.profile.homepemain',['user'=>$user]);
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
      if ($request->foto) {
        $path = Storage::disk('public')->put('foto',$request->foto);
      }
      if ($request->kartu_keluarga) {
        $pathkk = Storage::disk('public')->put('kartu_keluarga',$request->kartu_keluarga);
      }
      if ($request->akte_kelahiran) {
        $pathakte = Storage::disk('public')->put('akte_kelahiran',$request->akte_kelahiran);
      }
      if ($request->rapot) {
        $pathrapot = Storage::disk('public')->put('rapot',$request->rapot);
      }

      // $path = 'image/user';
      // $foto = $request->file('foto');

      $user = new User();

          $user->nama_lengkap = $request->input('nama_lengkap');
          $user->email=$request->input('email');
          $user->nama_ortu = $request->input('nama_ortu');
          $user->pekerjaan_ortu = $request->input('pekerjaan_ortu');
          if ($request->foto) {
            $user->foto = $path;
          }
          if ($request->kartu_keluarga) {
            $user->kartu_keluarga = $pathkk;
          }
          if ($request->akte_kelahiran) {
            $user->akte_kelahiran = $pathakte;
          }
          if ($request->rapot) {
            $user->rapot = $pathrapot;
          }
          $user->tempat_lahir = $request->input('tempat_lahir');
          $user->tanggal_lahir = $request->input('tanggal_lahir');
          $user->phone = $request->input('phone');
          $user->alamat_rumah = $request->input('alamat_rumah');
          $user->sekolah_asal = $request->input('sekolah_asal');
          $user->alamat_sekolah = $request->input('alamat_sekolah');
          $user->asal_ssb = $request->input('asal_ssb');
          $user->gol_darah = $request->input('gol_darah');
          $user->tinggi = $request->input('tinggi');
          $user->berat = $request->input('berat');
          $user->status = "Pending";
          $user->penyakit = $request->input('penyakit');
          $user->NISN = $request->input('NISN');
          $user->save();


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
      $user = User::findOrFail($id);
      // alert()->message('Message', 'Optional Title');
        return view('viewadmin.home.show')->with('user', $user);
        // dd($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $useredit = User::find($id);
        return view('viewadmin.home.edit')->with('useredit',$useredit);
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
      $user = User::find($id);
            if ($request->foto) {
          $path = Storage::disk('public')->put('foto',$request->foto);
        } else {
          $path = $user->foto;
        }

        if ($request->kartu_keluarga) {
          $pathkk = Storage::disk('public')->put('kartu_keluarga',$request->kartu_keluarga);
        } else {
          $pathkk = $user->kartu_keluarga;
        }

        if ($request->akte_kelahiran) {
          $pathakte = Storage::disk('public')->put('akte_kelahiran',$request->akte_kelahiran);
        } else {
          $pathakte = $user->akte_kelahiran;
        }

        if ($request->rapot) {
        $pathrapot = Storage::disk('public')->put('rapot',$request->rapot);
        } else {
        $pathrapot = $user->rapot;
        }
        // dd($user);

      $user->nama_lengkap = $request->nama_lengkap;
      $user->email = $request->email;
      $user->nama_ortu = $request->nama_ortu;
      $user->pekerjaan_ortu = $request->pekerjaan_ortu;
      $user->tempat_lahir = $request->tempat_lahir;
      $user->tanggal_lahir = $request->tanggal_lahir;
      $user->phone = $request->phone;
      $user->foto = $path;
      $user->alamat_rumah = $request->alamat_rumah;
      $user->sekolah_asal = $request->sekolah_asal;
      $user->alamat_sekolah = $request->alamat_sekolah;
      $user->asal_ssb = $request->asal_ssb;
      if ($request->gol_darah) {
        $user->gol_darah = $request->gol_darah;
      }
      $user->tinggi = $request->tinggi;
      $user->berat = $request->berat;
      $user->penyakit = $request->penyakit;
      $user->NISN = $request->NISN;
      $user->kartu_keluarga = $pathkk;
      $user->akte_kelahiran = $pathakte;
      $user->rapot = $pathrapot;
      $user->save();

      return redirect('/homepemainadmin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // swal("Hello world!");
      $user = User::find($id);
      $delete = $user->delete();
      // return redirect('/homeadmin');
      if ($delete) {
        alert()->success('Success Message', 'Optional Title');
        return redirect('/homepemainadmin');
      }

      // swal({
      //         title: "Are you sure?",
      //         text: "Once deleted, you will not be able to recover this imaginary file!",
      //         icon: "warning",
      //         buttons: true,
      //         dangerMode: true,
      //       }).then((willDelete) => {
      //         if (willDelete) {
      //           swal("Poof! Your imaginary file has been deleted!", {
      //             icon: "success",
      //             $user->delete();
      //             return redirect('/homeadmin');
      //           });
      //         } else {
      //           swal("Your imaginary file is safe!",{
      //             return redirect('/homeadmin');
      //           });
      //
      //         }
      //       });
    }

    public function konfirmasi(Request $request, $id){
      $user = User::find($id);
      $user->status = "Accept";
      $user->save();

      return redirect('/homepemainadmin');
    }

    public function indexpelatih()
    {
    $userpelatih = User::where('role', '=' , 3)->orderBy('id', 'dsc')->get();
    // dd($article);
    return view('viewadmin.pelatih.homepelatih',['userpelatih'=>$userpelatih]);
    }

    public function createpelatih()
    {
        return view('viewadmin.pelatih.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storepelatih(Request $request)
    {
      if ($request->foto) {
        $path = Storage::disk('public')->put('foto',$request->foto);
      }

      // $path = 'image/user';
      // $foto = $request->file('foto');

          $pelatih = new User();

          $pelatih->nama_lengkap = $request->input('nama_lengkap');
          $pelatih->email=$request->input('email');
          if ($request->foto) {
            $pelatih->foto = $path;
          }
          $pelatih->tempat_lahir = $request->input('tempat_lahir');
          $pelatih->tanggal_lahir = $request->input('tanggal_lahir');
          $pelatih->phone = $request->input('phone');
          $pelatih->alamat_rumah = $request->input('alamat_rumah');
          $pelatih->penyakit = $request->input('penyakit');
          $pelatih->role = 3;
          $pelatih->save();


        return redirect(route('homepelatihadmin'));
    }

    public function showpelatih($id)
    {
      $pelatih = User::findOrFail($id);
      // alert()->message('Message', 'Optional Title');
        return view('viewadmin.pelatih.view')->with('pelatih', $pelatih);
        // dd($user);
    }

    public function editpelatih($id)
    {
        $pelatih = User::find($id);
        return view('viewadmin.pelatih.edit')->with('pelatih',$pelatih);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatepelatih(Request $request, $id)
    {
      $pelatih = User::find($id);
        if ($request->foto) {
          $path = Storage::disk('public')->put('foto',$request->foto);
        } else {
          $path = $pelatih->foto;
        }
        // dd($user);

      $pelatih->nama_lengkap = $request->nama_lengkap;
      $pelatih->email = $request->email;
      $pelatih->tempat_lahir = $request->tempat_lahir;
      $pelatih->tanggal_lahir = $request->tanggal_lahir;
      $pelatih->phone = $request->phone;
      $pelatih->foto = $path;
      $pelatih->alamat_rumah = $request->alamat_rumah;

      $pelatih->save();

      return redirect('/homepelatihadmin');
    }
    public function destroypelatih($id){
      $pelatih = User::find($id);
      $delete = $pelatih->delete();
      // return redirect('/homeadmin');
      if ($delete) {
        alert()->success('Success Message', 'Optional Title');
        return redirect('/homepelatihadmin');
      }
    }





}
