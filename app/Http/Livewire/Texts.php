<?php

namespace App\Http\Livewire;

use App\Models\Archivo;
use App\Traits\TextoBraiTrait;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Texts extends Component
{
    use TextoBraiTrait;

    public $archivos,$textos,$arch;

    public function mount($archivos){
        $this->arch = $archivos;
        

    }

    public function render()
    {
        $this->archivos = $this->arch;
        $contador =0;
        foreach ($this->archivos as $archivo) {
            if ($archivo->extension == '.txt') {
                $contenidoArchivo = Storage::get($archivo->hash);
                $this->textos[$contador] = $contenidoArchivo;
            }
            $contador++;
        }
        return view('livewire.texts',[
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
    public function borrarArchivoSinSweetAlert($archivo)
    {
        Storage::delete($archivo['hash']);
        Archivo::destroy($archivo['id']);

        //Refrescar la pagina
        $user = auth()->user();
        $archivos = $user->archivos()->get();
        $this->mount($archivos);
    }

    public function translateBraille($index){
        $user = auth()->user();
        $archivos = $user->archivos()->get();
        $texto = $this->convertirtexto(Storage::get($archivos[$index]->hash));
        $rutaArchivo = storage_path('app/braille/'.'Braille-'.$archivos[$index]->nombre);
        File::put($rutaArchivo,$texto);
        $rutaRelativa = str_replace(storage_path('app/'), '', $rutaArchivo);
        $user->archivos()->create([
            'nombre' => 'Braille-'. $archivos[$index]->nombre,
            'hash' => $rutaRelativa,
            'tipo' => 'braille',
            'mime' => $archivos[$index]->mime,
            'extension' => $archivos[$index]->extension,
        ]);

        $this->dispatchBrowserEvent('swal:alert',
            [
                'icon' => 'success',
                'title' => '¡Se tradujó el archivo con éxito!',
                'text' => 'Se tradujó el archivo correctamente',
            ]
        );

        //Refrescar la pagina
        $user = auth()->user();
        $archivos = $user->archivos()->get();
        $this->mount($archivos);


    }
}
