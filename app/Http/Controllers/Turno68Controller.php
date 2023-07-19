<?php
namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Turno68;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Turno68Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.index')->with('turno68s',$turno68s);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('turno.6-8.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $turno68s = new Turno68();
        $turno68s->DocumentoID = $request->get('documentoid');
        $turno68s->Titulo = $request->get('titulo');
        $turno68s->Operacion = $request->get('operacion');
        $turno68s->Descripcion = $request->get('descripcion');
        $turno68s->Numero =$request->get('numero');
        $turno68s->Ruta = $request->get('ruta');

        $turno68s->save();

        return redirect('/Turno2');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turno68 = Turno68::find($id);
        return view('turno.6-8.edit')->with('turno68',$turno68);
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
        $turno68 = Turno68::find($id);

        $turno68->DocumentoID = $request->get('documentoid');
        $turno68->Titulo = $request->get('titulo');
        $turno68->Operacion = $request->get('operacion');
        $turno68->Descripcion = $request->get('descripcion');
        $turno68->Numero =$request->get('numero');
        $turno68->Ruta = $request->get('ruta');

        $turno68->save();

        return redirect('/Turno2');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turno68 = Turno68::find($id);
        $turno68->delete();
        return redirect('/Turno2');
    }

    public function operaciones()
    {
        return view('turno.6-8.operaciones');
    }

    public function op00()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-00.index')->with('turno68s',$turno68s);
    }

    public function op20()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-20.index')->with('turno68s',$turno68s);
    }
    public function op40()
    {
        return view('turno.6-8.op-40.index');
    }

    public function op40ponchadora1()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-40.ponchadora1.index')->with('turno68s',$turno68s);
    }

    public function op40ponchadora2()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-40.ponchadora2.index')->with('turno68s',$turno68s);
    }

    public function op40ponchadora3()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-40.ponchadora3.index')->with('turno68s',$turno68s);
    }

    public function op40ponchadora4()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-40.ponchadora4.index')->with('turno68s',$turno68s);
    }

    public function op40ponchadora5()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-40.ponchadora5.index')->with('turno68s',$turno68s);
    }

    public function op60()
    {
        return view('turno.6-8.op-60.index');
    }
    public function op60impresora1()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-60.impresora1.index')->with('turno68s',$turno68s);
    }
    public function op60impresora2()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-60.impresora2.index')->with('turno68s',$turno68s);
    }
    public function op60impresora3()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-60.impresora3.index')->with('turno68s',$turno68s);
    }
    public function op60impresora4()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-60.impresora4.index')->with('turno68s',$turno68s);
    }
    public function op60impresora5()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-60.impresora5.index')->with('turno68s',$turno68s);
    }
    public function op60impresora6()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-60.impresora6.index')->with('turno68s',$turno68s);
    }
    public function op60impresora7()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-60.impresora7.index')->with('turno68s',$turno68s);
    }


    public function op100()
    {
        return view('turno.6-8.op-100.index');
    }
    public function op100contencion1()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-100.contencion1.index')->with('turno68s',$turno68s);
    }
    public function op100contencion2()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-100.contencion2.index')->with('turno68s',$turno68s);
    }
    public function op100contencion3()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-100.contencion3.index')->with('turno68s',$turno68s);
    }
    public function op100contencion4()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-100.contencion4.index')->with('turno68s',$turno68s);
    }

    public function op103()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-103.index')->with('turno68s',$turno68s);
    }

    public function op107()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-107.index')->with('turno68s',$turno68s);
    }

    public function op120()
    {
        return view('turno.6-8.op-120.index');
    }    
    public function op120prensa1()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-120.prensa1.index')->with('turno68s',$turno68s);
    }    
    public function op120prensa2()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-120.prensa2.index')->with('turno68s',$turno68s);
    }
    public function op120prensa3()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-120.prensa3.index')->with('turno68s',$turno68s);
    }
    public function op120prensa4()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-120.prensa4.index')->with('turno68s',$turno68s);
    }
    public function op120prensa5()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-120.prensa5.index')->with('turno68s',$turno68s);
    }

    public function op140()
    {
        return view('turno.6-8.op-140.index');
    }    
    public function op140prensa1()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-140.prensa1.index')->with('turno68s',$turno68s);
    }
    public function op140prensa2()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-140.prensa2.index')->with('turno68s',$turno68s);
    }
    public function op140prensa3()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-140.prensa3.index')->with('turno68s',$turno68s);
    }  

    public function op160()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-160.index')->with('turno68s',$turno68s);
    }   
    
    public function op180()
    {
        $turno68s = Turno68::all();
        return view('turno.6-8.op-180.index')->with('turno68s',$turno68s);
    }   
}

