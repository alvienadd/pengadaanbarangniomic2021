<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import lib session
use Illuminate\Support\Facades\Session;

//import lib JWT
use \Firebase\JWT\JWT;

//import lib response
use Illuminate\Http\Response;

//import lib validator
use Illuminate\Support\Facades\Validator;

//import lib Enkripsi
use Illuminate\Contracts\Encryption\DecryptException;
//import model Admin
use App\M_Admin;
use App\M_Pengadaan;

class Pengadaan extends Controller
{
    //
    public function index(){
        $token=Session::get('token');

        $tokenDb=M_Admin::where('token',$token)->count();
        if($tokenDb>0){
            return view('pengadaan.list');
        }else{
            return redirect('/masukAdmin')->with('gagal','Anda sudah logout, silakan login kembali');
        }
    }

    public function tambahPengadaan(Request $request){
        $token=Session::get('token');

        $tokenDb=M_Admin::where('token',$token)->count();

        if($tokenDb>0){
            $this->validate($request,
            [
                'nama_pengadaan'=>'required',
                'deskripsi'=>'required',
                'gambar'=>'required|image|mimes:jpg,png,jpeg|max:10000',
                'anggaran'=>'required'
            ]
        );
        $path=$request->file('gambar')->store('public/gambar');
        if(M_Pengadaan::create([
            'nama_pengadaan'=>$request->nama_pengadaan,
            'deskripsi'=>$request->deskripsi,
            'gambar'=>$path,
            'anggaran'=>$request->anggaran
        ])){
            return redirect('/listPengadaan')->with('berhasil','Data berhasil disimpan');
        }else{
            return redirect('/listPengadaan')->with('gagal','Data gagal disimpan');
        }

        }else{
            return redirect('/masukAdmin')->with('gagal','Anda sudah logout, silakan login kembali');
        }

    }

}
