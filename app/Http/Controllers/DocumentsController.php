<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function documentos(){
        $users = User::all();
    return view('documentos',compact('users'));
    }
}
