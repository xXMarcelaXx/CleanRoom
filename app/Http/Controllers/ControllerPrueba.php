<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use App\Models\option;
use App\Models\Reverso;
use Illuminate\Http\Request;
use App\Jobs\hojasTurno1;
use App\Jobs\hojasTurno2;
use App\Jobs\hojasTurno3;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\Datoshoja;
use App\Models\Registro;
use PDF;

class ControllerPrueba extends Controller
{
    
    public function prueba2()
    {
        // Establecer el tiempo máximo de ejecución a 300 segundos (5 minutos)
        ini_set('max_execution_time', 900);
        

        $carbon = Carbon::now('America/Monterrey');
        $fecha = $carbon->format('d');

        dd($fecha);
        $message = $fecha;
        Log::info($message);

        $opcion = "No Cumple";
        dd($opcion);

        return view('prueba', compact('opcion', 'fecha'));
    }

    public function pruebaBotones()
    {

        $carbon = Carbon::now('America/Monterrey');
        $diaString = $carbon->format('d');
        $dia = intval($diaString);

        $opcion = "NP";

        return view('prueba')->with('dia',$dia)->with('registro',$opcion);
    }

    public function pruebaPDF()
    {
        return view('pruebaPDF');
    }

   /* public function prueba()
    {
        $reversos = Reverso::all();
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('hojaschequeo.hojas5-7.F7-SETCS-ELE-20-L1-01-1.printreverso');
        $pdf->setPaper('b4','landscape');
        return $pdf-> stream('Reverso-F7-SETCS-ELE-20-L1-01-1.pdf');
    } */

    public function prueba()
    {
        hojasTurno1::dispatch();

        $message = 'entro al JOB';
        Log::info($message);
 
        $saludo = 'Saludo de prueba';
        return view('pruebaPDF')->with('saludo',$saludo);
    }


    public function pruebita()
    {
        $carbon = Carbon::now('America/Monterrey');
        $diaString = $carbon->format('d');
        $dia = intval($diaString);
 
        return view('pruebita')->with('dia',$dia);
    }





    

    
}
