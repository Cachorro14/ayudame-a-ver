<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class FormController extends Controller
{
    public function Update(Request $request){
        $archivo=Archivo::find($request['archivo']);
        Storage::delete($archivo->hash);
        $hash = storage_path('app/'.$archivo->hash);
        File::put($hash,$request['texto']);
        return redirect(route('textos'))->with('success', '¡Formulario enviado correctamente!');

    }
}
