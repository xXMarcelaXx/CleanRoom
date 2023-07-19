<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\Turno3;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Turno3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turno3s = Turno3::all();
        return view('turno.3.index')->with('turno3s',$turno3s);

    }

    public function create()
    {
        return view('turno.3.create');

    }

    public function store(Request $request)
    {
        $turno3s = new Turno3();        
        $turno3s->DocumentoID = $request->get('documentoid');
        $turno3s->Titulo = $request->get('titulo');
        $turno3s->Operacion = $request->get('operacion');
        $turno3s->Descripcion = $request->get('descripcion');
        $turno3s->Numero =$request->get('numero');
        $turno3s->Ruta = $request->get('ruta');

        $turno3s->save();

        return redirect('/operacionesTurno3');
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('turno.3.operaciones');
    }

    public function update(Request $request, $id)
    {
        $turno3 = Turno3::find($id);
        $turno3->DocumentoID = $request->get('documentoid');
        $turno3->Titulo = $request->get('titulo');
        $turno3->Operacion = $request->get('operacion');
        $turno3->Descripcion = $request->get('descripcion');
        $turno3->Numero =$request->get('numero');
        $turno3->Ruta = $request->get('ruta');
        $turno3->save();

        return redirect('/operacionesTurno3');
    }

    public function destroy($id)
    {
        $turno3 = Turno3::find($id);
        $turno3->delete();
        return redirect('/operacionesTurno3');
    }

    public function operaciones()
    {
        return view('turno.3.operaciones');
    }

    public function op00()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-00.index')->with('turno3s',$turno3s);
    }

    public function op20()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-20.index')->with('turno3s',$turno3s);
    }

    public function op40()
    {
        return view('turno.3.op-40.index');
    }

    public function op40ponchadora1()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-40.ponchadora1.index')->with('turno3s',$turno3s);
    }

    public function op40ponchadora2()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-40.ponchadora2.index')->with('turno3s',$turno3s);
    }

    public function op40ponchadora3()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-40.ponchadora3.index')->with('turno3s',$turno3s);
    }

    public function op40ponchadora4()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-40.ponchadora4.index')->with('turno3s',$turno3s);
    }

    public function op40ponchadora5()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-40.ponchadora5.index')->with('turno3s',$turno3s);
    }

    public function op60()
    {
        return view('turno.3.op-60.index');
    }
    public function op60impresora1()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-60.impresora1.index')->with('turno3s',$turno3s);
    }
    public function op60impresora2()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-60.impresora2.index')->with('turno3s',$turno3s);
    }
    public function op60impresora3()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-60.impresora3.index')->with('turno3s',$turno3s);
    }
    public function op60impresora4()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-60.impresora4.index')->with('turno3s',$turno3s);
    }
    public function op60impresora5()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-60.impresora5.index')->with('turno3s',$turno3s);
    }
    public function op60impresora6()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-60.impresora6.index')->with('turno3s',$turno3s);
    }
    public function op60impresora7()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-60.impresora7.index')->with('turno3s',$turno3s);
    }


    public function op100()
    {
        return view('turno.3.op-100.index');
    }
    public function op100contencion1()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-100.contencion1.index')->with('turno3s',$turno3s);
    }
    public function op100contencion2()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-100.contencion2.index')->with('turno3s',$turno3s);
    }
    public function op100contencion3()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-100.contencion3.index')->with('turno3s',$turno3s);
    }
    public function op100contencion4()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-100.contencion4.index')->with('turno3s',$turno3s);
    }

    public function op103()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-103.index')->with('turno3s',$turno3s);
    }

    public function op107()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-107.index')->with('turno3s',$turno3s);
    }

    public function op120()
    {
        return view('turno.3.op-120.index');
    }    
    public function op120prensa1()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-120.prensa1.index')->with('turno3s',$turno3s);
    }    
    public function op120prensa2()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-120.prensa2.index')->with('turno3s',$turno3s);
    }
    public function op120prensa3()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-120.prensa3.index')->with('turno3s',$turno3s);
    }
    public function op120prensa4()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-120.prensa4.index')->with('turno3s',$turno3s);
    }
    public function op120prensa5()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-120.prensa5.index')->with('turno3s',$turno3s);
    }

    public function op140()
    {
        return view('turno.3.op-140.index');
    }    
    public function op140prensa1()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-140.prensa1.index')->with('turno3s',$turno3s);
    }
    public function op140prensa2()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-140.prensa2.index')->with('turno3s',$turno3s);
    }
    public function op140prensa3()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-140.prensa3.index')->with('turno3s',$turno3s);
    }  

    public function op160()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-160.index')->with('turno3s',$turno3s);
    }   
    
    public function op180()
    {
        $turno3s = Turno3::all();
        return view('turno.3.op-180.index')->with('turno3s',$turno3s);
    }   


}
