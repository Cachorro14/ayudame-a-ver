<?php

namespace App\Http\Livewire;

use App\Models\Archivo;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use thiagoalessio\TesseractOCR\TesseractOCR;

class Files extends Component
{
    use WithFileUploads;

    public $files, $archivos;

    public function render()
    {
        $user = auth()->user();
        $this->archivos = $user->archivos()->get();
        return view('livewire.files');
    }

    public function saveFiles()
    {
        $user = auth()->user();
        $this->validate([
            'files.*' => 'required|file|max:10240|mimes:jpg,jpeg,png,pdf,txt',
        ]);
        if ($this->files) {
            foreach ($this->files as $key => $file) {
                $user->archivos()->create([
                    'nombre' => $file->getClientOriginalName(),
                    'hash' => $file->store('archivos'),
                    'tipo' => $file->getClientOriginalExtension() == 'txt' ? 'otro' : 'texto',
                    'mime' => $file->getMimeType(),
                    'extension' => '.' . $file->getClientOriginalExtension(),
                ]);
            }
            $this->dispatchBrowserEvent('swal:alert', [
                'icon' => 'success',
                'title' => '¡Se subieron los archivos con éxito!',
                'text' => 'Se subieron todos los archivos corretamente',

            ]);
        }
        $this->files = null;
    }

    public function borrarArchivo($archivo)
    {
        Storage::delete($archivo['hash']);
        Archivo::destroy($archivo['id']);
        $this->dispatchBrowserEvent('swal:alert',
            [
                'icon' => 'success',
                'title' => '¡Se eliminó el archivo con éxito!',
                'text' => 'se eliminó el archivo correctamente',
            ]
        );
    }

    public function madeText($archivo)
    {
        // Ruta a la imagen que deseas analizar
        $imagePath = storage_path($archivo['hash']);

        // Crea una instancia de TesseractOCR y configúrala según sea necesario
        $tesseract = new TesseractOCR($imagePath);
        $tesseract->setLanguage('es'); // Establece el idioma del texto en la imagen (en este caso, inglés)

        // Realiza el reconocimiento óptico de caracteres en la imagen
        $text = $tesseract->run();
        // dd($text);
    }
}