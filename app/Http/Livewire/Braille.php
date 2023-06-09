<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Braille extends Component
{


    public $archivos,$textos,$arch;


    public function mount($archivos){
        $this->arch = $archivos;
        

    }
    
    public function render()
    {$this->archivos = $this->arch;
        $contador =0;
        foreach ($this->archivos as $archivo) {
            if ($archivo->extension == '.txt') {
                $contenidoArchivo = Storage::get($archivo->hash);
                $this->textos[$contador] = $contenidoArchivo;
            }
            $contador++;
        }
        return view('livewire.braille',[
            'archivos' => $this->archivos
        ]);
    }
}
