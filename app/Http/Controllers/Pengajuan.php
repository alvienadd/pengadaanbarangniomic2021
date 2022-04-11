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

class Pengajuan extends Controller
{
    //
    public function pengajuan(){

        $key=env('APP_KEY');
        $token=Session::get('token');
        $tokenDb=M_Admin::where('token',$token)->count();

        if($tokenDb>0){
            return view('pengajuan.list');
        }else{
            return redirect('/masukAdmin')->with('gagal','Anda Login lebih dahulu');
        }
    }
}
