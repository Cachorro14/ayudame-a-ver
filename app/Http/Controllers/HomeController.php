<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $created = false;
        return view('inicio',compact('created'));
    }

    public function logout()
    {
        
        Auth::logout();

        return redirect('');
    }
}
