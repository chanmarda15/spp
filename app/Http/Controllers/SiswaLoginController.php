<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pembayaran;
use Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class SiswaLoginController extends Controller
{
    public function siswaLogin() {
        if(session('nama') != null) :
            return redirect('dashboard/siswa/histori');
          endif;

          return view('pages.siswa.login');
    }

    public function login(Request $request){

        $nisn = $request->nisn;
        $password = $request->password;

        $data = Siswa::where('nisn',$nisn)->first();

        if($data){ //apakah nisn tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('nama',$data->nama);
                Session::put('nisn',$data->nisn);
                Session::put('login',TRUE);
                return redirect('siswa/histori');
            }
            else{
                Alert::error('Gagal Login!', 'NISN dan password tidak sesuai');
                return back();
            }
        }
        else{
            Alert::error('Gagal Login!', 'NISN dan password tidak sesuai');
            return back();
        }
    }

   public function index() {
    if(!Session::get('login')){
        return redirect('login')->with('alert','Kamu harus login dulu');
    }
    else{
        $data = [
            'pembayaran' => Pembayaran::where('nisn', Session::get('nisn'))->orderBy('tanggal_bayar', 'desc')->paginate(10),
            'siswa' => Siswa::where('nisn', Session::get('nisn'))->get()
        ];

        return view('pages.siswa.index', $data);
    }


   }

   public function logout(){

    Session::flush();
    return redirect('login/siswa');

    }
}
