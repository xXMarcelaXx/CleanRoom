<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\Reverso;
use App\Models\Datoshoja;
use PDF;
class Reversotpm120111Controller extends Controller
{
                               /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reversos = Reverso::all();
        $datoshojas = Datoshoja::all();
        return view('hojaschequeo.hojas5-7.F7-TPM-ELE-120-L1-01-1.indexreverso')
        ->with('reversos',$reversos)
        ->with('datoshojas',$datoshojas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hojaschequeo.hojas5-7.F7-TPM-ELE-120-L1-01-1.createreverso');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reversos = new Reverso();
        $reversos->fechahora = $request->get('fechahora');
        $reversos->falla = $request->get('falla');
        $reversos->proceso = $request->get('proceso');
        $reversos->porque = $request->get('porque');
        $reversos->confirmacion = $request->get('confirmacion');
        $reversos->dispocision = $request->get('dispocision');
        $reversos->Cantidad = $request->get('Cantidad');
        $reversos->nombre = $request->get('nombre');
        $reversos->causa = $request->get('causa');
        $reversos->accion = $request->get('accion');
        $reversos->responsable = $request->get('responsable');
        $reversos->turno = $request->get('turno');
        $reversos->documentoid = $request->get('documentoid');
        $reversos->mes = $request->get('mes');
        $reversos->año = $request->get('año');
        $reversos->save();
        return redirect('/reversoTPM120111');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reverso = Reverso::find($id);
        return view('hojaschequeo.hojas5-7.F7-TPM-ELE-120-L1-01-1.editreverso')->with('reverso',$reverso);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reverso = Reverso::find($id);
        $reverso->fechahora = $request->get('fechahora');
        $reverso->falla = $request->get('falla');
        $reverso->proceso = $request->get('proceso');
        $reverso->porque = $request->get('porque');
        $reverso->confirmacion = $request->get('confirmacion');
        $reverso->dispocision = $request->get('dispocision');
        $reverso->Cantidad = $request->get('Cantidad');
        $reverso->nombre = $request->get('nombre');
        $reverso->causa = $request->get('causa');
        $reverso->accion = $request->get('accion');
        $reverso->responsable = $request->get('responsable');
        $reverso->save();
        return redirect('/reversoTPM120111');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reverso = Reverso::find($id);
        $reverso->delete();
        return redirect('/reversoTPM120111');
    }
    public function pdfReverso()
    {
        $reversos = Reverso::all();
        view()-> share('reversos',$reversos);
        $pdf = PDF::loadView('hojaschequeo.hojas5-7.F7-TPM-ELE-120-L1-01-1.printreverso');
        $pdf->setPaper('b4','landscape');
        return $pdf-> download('Reverso-F7-TPM-ELE-120-L1-01-1-1.pdf');
    }
}
