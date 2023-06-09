<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class ArchivoController extends Controller
{
    public function show($hash)
    {
        $documento = Archivo::where('hash', base64_decode($hash))->first();
        if(!$documento){
            abort(404);
        }

        $response = Response::make(Storage::get($documento->hash), 200, ['Content-Type' => $documento->mime]);
        
        return $response;

        
    }
    
    public function download($hash)
    {
        $documento = Archivo::where('hash', base64_decode($hash))->first();
        if(!$documento){
            abort(404);
        }
        return response()->download(storage_path('app/'.$documento->hash), $documento->nombre);
        
    }
}
