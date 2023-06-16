<?php

namespace App\Http\Livewire;

use App\Models\Archivo;
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

    public function borrarArchivo($archivo)
    {
        Storage::delete($archivo['hash']);
        Archivo::destroy($archivo['id']);
        //Sweet alert 
        $this->dispatchBrowserEvent('swal:alert',
            [
                'icon' => 'success',
                'title' => '¡Se eliminó el archivo con éxito!',
                'text' => 'se eliminó el archivo correctamente',
            ]
        );
        //Refrescar la pagina
        $user = auth()->user();
        $archivos = $user->archivos()->get();
        $this->mount($archivos);
    }
}
