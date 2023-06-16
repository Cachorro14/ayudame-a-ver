<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        if(Auth::check()){
            return view('main-pages/dashboard');
        }else{
            return view('layouts/landing-page');
        }
    }

    public function texts(){
        $user =auth()->user();
        $archivos = $user->archivos()->get();
        return view('main-pages/textos',compact('user','archivos'));
    }
    public function braille(){
        $user =auth()->user();
        $archivos = $user->archivos()->get();
        return view('main-pages/braille',compact('user','archivos'));
    }
}
