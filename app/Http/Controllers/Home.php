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

//import model suplier
use App\M_Suplier;


class Home extends Controller{
    //
    public function index(){
        $key = env('APP_KEY');
        $token = Session::get('token');
        $tokenDb = M_Suplier::where('token', $token) ->count ();
        if($tokenDb > 0){
             $data['token'] = $token; 
        }else{
            $data['token'] = "kosong"; 
        }   
        return view('home.home', $data);
    }
}
