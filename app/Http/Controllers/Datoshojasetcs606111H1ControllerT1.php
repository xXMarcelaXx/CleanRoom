<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use PDF;
use App\Models\Datoshoja;
use App\Models\Registro;
use App\Models\option;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class Datoshojasetcs606111H1Controllert1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        return view('hojaschequeo.hojas5-7.F7-SETCS-ELE-60-L1-01.index')
        ->with('registros',$registros)
        ->with('datoshojas',$datoshojas);
    }
    public function printindex()
    {
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        return view('hojaschequeo.hojas5-7.F7-SETCS-ELE-60-L1-01.printindex')
        ->with('registros',$registros)
        ->with('datoshojas',$datoshojas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hojaschequeo.hojas5-7.F7-SETCS-ELE-60-L1-01.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
        $datoshojas = new Datoshoja();
        $datoshojas->titulo = $request->get('titulo');
        $datoshojas->subtitulo = $request->get('subtitulo');
        $datoshojas->documentoid = $request->get('documentoid');
        $datoshojas->numero_cambio = $request->get('numero_cambio');
        $datoshojas->fecha = $request->get('fecha');
        $datoshojas->revision = $request->get('revision');
        $datoshojas->meie = $request ->get('meie');
        $datoshojas->calidad = $request ->get('calidad');
        $datoshojas->manufactura = $request ->get('manufactura');
        $datoshojas->area = $request ->get('area');
        $datoshojas->linea = $request ->get('linea');
        $datoshojas->operacion = $request ->get('operacion');
        $datoshojas->lugar = $request ->get('lugar');
        $datoshojas->planta = $request ->get('planta');
        $datoshojas->departamento = $request ->get('departamento');
        $datoshojas->pagina = $request ->get('pagina');
        $datoshojas->numeroparte = $request ->get('numeroparte');
        $datoshojas->mes = $request ->get('mes');
        $datoshojas->año = $request ->get('año');
        $datoshojas->save();
    }
    public function store(Request $request)
    {
        $registros = new Registro();
        $registros->criterio = $request->get('criterio');
        $registros->d1 = $request->get('d1');
        $registros->d2 = $request->get('d2');
        $registros->d3 = $request->get('d3');
        $registros->d4 = $request->get('d4');
        $registros->d5 = $request->get('d5');
        $registros->d6 = $request->get('d6');
        $registros->d7 = $request->get('d7');
        $registros->d8 = $request->get('d8');
        $registros->d9 = $request->get('d9');
        $registros->d10 = $request->get('d10');
        $registros->d11 = $request->get('d11');
        $registros->d12 = $request->get('d12');
        $registros->d13 = $request->get('d13');
        $registros->d14 = $request->get('d14');
        $registros->d15 = $request->get('d15');
        $registros->d16 = $request->get('d16');
        $registros->d17 = $request->get('d17');
        $registros->d18 = $request->get('d18');
        $registros->d19 = $request->get('d19');
        $registros->d20 = $request->get('d20');
        $registros->d21 = $request->get('d21');
        $registros->d22 = $request->get('d22');
        $registros->d23 = $request->get('d23');
        $registros->d24 = $request->get('d24');
        $registros->d25 = $request->get('d25');
        $registros->d26 = $request->get('d26');
        $registros->d27 = $request->get('d27');
        $registros->d28 = $request->get('d28');
        $registros->d29 = $request->get('d29');
        $registros->d30 = $request->get('d30');
        $registros->d31 = $request->get('d31');
        $registros->turno = $request->get('turno');
        $registros->documentoid = $request->get('documentoid');
        $registros->partetabla = $request->get('partetabla');
        $registros->tipo = $request->get('tipo');
        $registros->valor1 = $request->get('valor1');
        $registros->valor2 = $request->get('valor2');
        $registros->mes = $request ->get('mes');
        $registros->año = $request ->get('año');
        $registros->save();
        return redirect ('/F7-SETCS-ELE-60-L1-01-T1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro = Registro::find($id);
        return view('hojaschequeo.hojas5-7.F7-SETCS-ELE-60-L1-01.edit')->with('registro',$registro);
    }
    public function edit2($documentoid)
    {
        $datoshoja = Datoshoja::find($documentoid);
        return view('hojaschequeo.hojas5-7.F7-SETCS-ELE-60-L1-01.edit2')->with('datoshoja',$datoshoja);
    }
    public function check(Request $request)
    {
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        $carbon = Carbon::now('America/Monterrey');
        $diaString = $carbon->format('d');
        $dia = intval($diaString);
        return view('hojaschequeo.hojas5-7.F7-SETCS-ELE-60-L1-01.check')
        ->with('registros',$registros)
        ->with('datoshojas',$datoshojas)
        ->with('dia',$dia);
    }

    public function finalcheck(Request $request,$id)
    {
        foreach ($request->registro as $key => $value) {
            $registro = Registro::find($value['id']);
            if ($registro) {
                for ($i = 1; $i <= 31; $i++) {
                    $fieldName = 'd' . $i;
                    if (isset($value[$fieldName])) {
                        $registro->$fieldName = $value[$fieldName];
                    }
                }
                $registro->save();
            }
        }
        return redirect ('/F7-SETCS-ELE-60-L1-01-T1');
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
        $registro = Registro::find($id);
        $registro->criterio = $request->get('criterio');
        $registro->turno = $request->get('turno');
        $registro->documentoid = $request->get('documentoid');
        $registro->partetabla = $request->get('partetabla');
        $registro->tipo = $request->get('tipo');
        $registro->valor1 = $request->get('valor1');
        $registro->valor2 = $request->get('valor2');
        $registro->save();
        return redirect ('/F7-SETCS-ELE-60-L1-01-T1');
    }

    public function update2(Request $request, $id)
    {
        $datoshojas = Datoshoja::find($id);
        $datoshojas->titulo = $request->get('titulo');
        $datoshojas->subtitulo = $request->get('subtitulo');
        $datoshojas->documentoid = $request->get('documentoid');
        $datoshojas->numero_cambio = $request->get('numero_cambio');
        $datoshojas->fecha = $request->get('fecha');
        $datoshojas->revision = $request->get('revision');
        $datoshojas->meie = $request ->get('meie');
        $datoshojas->calidad = $request ->get('calidad');
        $datoshojas->manufactura = $request ->get('manufactura');
        $datoshojas->area = $request ->get('area');
        $datoshojas->linea = $request ->get('linea');
        $datoshojas->operacion = $request ->get('operacion');
        $datoshojas->lugar = $request ->get('lugar');
        $datoshojas->planta = $request ->get('planta');
        $datoshojas->departamento = $request ->get('departamento');
        $datoshojas->pagina = $request ->get('pagina');
        $datoshojas->numeroparte = $request ->get('numeroparte');
        $datoshojas->mes = $request ->get('mes');
        $datoshojas->año = $request ->get('año');
        $datoshojas->save();
        return redirect ('/F7-SETCS-ELE-60-L1-01-T1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registro = Registro::find($id);
        $registro->delete();
        return redirect('/F7-SETCS-ELE-60-L1-01-T1');
    }
    public function pdfprint()
    {
        $registros = Registro::all();
        $datoshojas = Datoshoja::all();
        view()-> share('datoshojas',$datoshojas);
        view()-> share('registros',$registros);
        $pdf = PDF::loadView('hojaschequeo.hojas5-7.F7-SETCS-ELE-60-L1-01.printindex');
        $pdf->setPaper('b3','landscape');
        return $pdf-> download('F7-SETCS-ELE-60-L1-01-T1.pdf');
    }
}
