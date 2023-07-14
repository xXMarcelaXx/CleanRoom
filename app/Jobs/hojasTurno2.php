<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\Registro;
use App\Models\Datoshoja;
use App\Models\Reverso;
use PDF;

class hojasTurno2 implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $message = 'Se entro correctamente al job';
        Log::info($message);

        $reversos = Reverso::all();
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('hojaschequeo.hojas5-7.hojas_chequeo_5-7');
        $pdf->setPaper('b3','landscape');
        $nombrePDF = '/hojasT1.pdf';
        Storage::disk('reportes')->put($nombrePDF, $pdf->output());



        $message2 = 'Salio correctamente del job';
        Log::info($message2);
    }
}
