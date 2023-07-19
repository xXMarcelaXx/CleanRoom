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
use App\Models\Datoshoja;
use App\Models\Reverso;
use PDF;

class hojasTurno3 implements ShouldQueue
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
        $reversos = Reverso::all();
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('hojaschequeo.hojas5-7.F7-SETCS-ELE-20-L1-01-1.printreverso');
        $pdf->setPaper('b4','landscape');
        $pdfFilePath = '/prueba.pdf';
        Storage::disk('reportes')->put($pdfFilePath, $pdf->output());

    }
}
