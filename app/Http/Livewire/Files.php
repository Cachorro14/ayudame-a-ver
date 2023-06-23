<?php

namespace App\Http\Livewire;

use App\Models\Archivo;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use thiagoalessio\TesseractOCR\TesseractOCR;
use Spatie\PdfToText\Pdf;
use Illuminate\Support\Facades\File;

class Files extends Component
{
    use WithFileUploads;

    public $files, $archivos,$isLoading = false, $texto, $archivo=false;

    public function rules()
{
    return [
        'texto' => 'required',

    ];
}

    public function render()
    {
        $user = auth()->user();
        $this->archivos = $user->archivos()->get();
	foreach ($this->archivos as $archivo) {
            if($archivo->extension != '.txt'){
                $this->archivo = true;
            }
        }
        return view('livewire.files');
    }

    public function saveFiles()
    {
        $user = auth()->user();

        $this->validate(['files.*' => 'required|file|max:10240|mimes:jpg,jpeg,png,pdf,txt',]);

        if ($this->files) {
            foreach ($this->files as $key => $file) {
                $user->archivos()->create([
                    'nombre' => $file->getClientOriginalName(),
                    'hash' => $file->store('archivos'),
                    'tipo' => $file->getClientOriginalExtension() == 'txt' ? 'texto' : 'otro',
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

    public function borrarArchivoSinSweetAlert($archivo)
    {
        Storage::delete($archivo['hash']);
        Archivo::destroy($archivo['id']);
        
        //Refrescar la pagina
        $user = auth()->user();
        $archivos = $user->archivos()->get();
        $this->mount($archivos);
    }

    public function madeTextFromImage($archivo)
    {

 
        $user = auth()->user();
        // Ruta a la imagen que deseas analizar
        $imagePath = storage_path('app/'.$archivo['hash']);

        // Crea una instancia de TesseractOCR y configúrala según sea necesario
        $ocr = new TesseractOCR('/usr/bin/tesseract');
        $ocr->setLanguage('spa');
         // Establece el idioma del texto en la imagen (en este caso, inglés)
        $ocr->image($imagePath);
        // Realiza el reconocimiento óptico de caracteres en la imagen
        $textoExtraido = $ocr->run();

        $extensiones = array(".pdf",".png",".jpg",".jpeg");

        $remplazos = array("","","","");


        $nombre = str_replace($extensiones, $remplazos, 'Texto-'.$archivo['nombre']);

        $nombre = $nombre . '.txt';
        
        
        $rutaArchivo = storage_path('app/texto/'.$nombre);
        
        File::put($rutaArchivo,$textoExtraido);

        $rutaRelativa = str_replace(storage_path('app/'), '', $rutaArchivo);
        
        $user->archivos()->create([
            'nombre' => $nombre,
            'hash' => $rutaRelativa,
            'tipo' => 'texto',
            'mime' => 'text/plain',
            'extension' => '.txt',
        ]);

        $this->dispatchBrowserEvent('swal:alert', [
            'icon' => 'success',
            'title' => '¡Se guardó el texto con éxito!',
            'text' => 'Se guardó todo el texto corretamente',

        ]);


        $this->borrarArchivoSinSweetAlert($archivo);
    }

    public function madeTextFromPdf($archivo){
        
        $user = auth()->user();
        
        $archivoPDF = storage_path('app/'.$archivo['hash']);
        $text = (new Pdf('/usr/bin/pdftotext'))
        ->setPdf($archivoPDF)
        ->text();

        $nombre = str_replace('.pdf', '', 'Texto-'.$archivo['nombre']);
        $nombre = $nombre . '.txt';
        $rutaArchivo = storage_path('app/texto/'.$nombre);
        
        File::put($rutaArchivo,$text);

        $rutaRelativa = str_replace(storage_path('app/'), '', $rutaArchivo);
        
        $user->archivos()->create([
            'nombre' => $nombre,
            'hash' => $rutaRelativa,
            'tipo' => 'texto',
            'mime' => 'text/plain',
            'extension' => '.txt',
        ]);

        $this->dispatchBrowserEvent('swal:alert', [
            'icon' => 'success',
            'title' => '¡Se guardó el texto con éxito!',
            'text' => 'Se guardó todo el texto corretamente',

        ]);

        $this->borrarArchivoSinSweetAlert($archivo);

    }
    public function saveText(){
        $this->validate();
        $user = auth()->user();

        $nombre = 'Texto escrito-'. count($user->archivos()->get()).'.txt';
        
        $rutaArchivo = storage_path('app/texto/'.$nombre);
        
        File::put($rutaArchivo,$this->texto);

        $rutaRelativa = str_replace(storage_path('app/'), '', $rutaArchivo);
        
        $user->archivos()->create([
            'nombre' => $nombre,
            'hash' => $rutaRelativa,
            'tipo' => 'texto',
            'mime' => 'text/plain',
            'extension' => '.txt',
        ]);

        $this->dispatchBrowserEvent('swal:alert', [
            'icon' => 'success',
            'title' => '¡Se guardó el texto con éxito!',
            'text' => 'Se guardó todo el texto corretamente',

        ]);

        $this->texto = null;
    }
}
