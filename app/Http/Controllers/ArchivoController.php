<?php

namespace App\Http\Controllers;

use App\Archivo;
use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->mi_archivo->isValid()) { //Valida carga

            //Guarda en storage/app/archivos_cargados
            $nombreHash = $request->mi_archivo->store('archivos_cargados');

            //Crea registro en tabla archivos
            Archivo::create([
                'nombre_original' => $request->archivo->getClientOriginalName(),
                'hash' => $nombreHash,
                'mime' => $request->archivo->getClientMimeType(),
                'tamaño' => $request->archivo->getClientSize(),
            ]);
        }

        return redirect()->back();
    }

    public function download(Archivo $archivo)
    {
        //Obtiene ruta del archivo
        $rutaArchivo = storage_path('app/' . $archivo->hash);

        //La respuesta contiene el archivo con el tipo de documento
        return response()->download($rutaArchivo, $archivo->original, ['Content-Type' => $archivo->mime]);
    }

    public function delete(Archivo $archivo)
    {
        $rutaArchivo = storage_path($archivo->hash);

        //Verifica la existencia del archivo
        if (\Storage::exists($archivo->hash)) {
            \Storage::delete($archivo->hash); //Elimina archivo
            $archivo->delete(); //Elimina registro en tabla
        }

        return redirect()->back();
    }


}
