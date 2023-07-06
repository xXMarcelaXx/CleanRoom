<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Turno57;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class Turno57Controller extends Controller
{
    public function index()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.index')->with('turno57s',$turno57s);

    }

    public function borrarRegistros() {
        
        DB::table('registros')->update(['d1' => '-', 'd2' => '-', 'd3' => '-', 'd4' => '-', 'd5' => '-', 'd6' => '-', 
        'd7' => '-', 'd8' => '-', 'd9' => '-', 'd10' => '-', 'd11' => '-', 'd12'  => '-', 'd13'  => '-', 'd14'  => '-'
        , 'd15'  => '-', 'd16'  => '-', 'd17'  => '-', 'd18'  => '-', 'd19'  => '-', 'd20'  => '-', 'd21'  => '-', 'd22'  => '-'
        , 'd23'  => '-', 'd24'  => '-', 'd25'  => '-', 'd26'  => '-', 'd27'  => '-', 'd28'  => '-', 'd29'  => '-', 'd30'  => '-'
        , 'd31'  => '-']);
        DB::table('reversos')->delete();
        return redirect ('/Turno1');
    }

    public function create()
    {
        return view('turno.5-7.create');

    }

    public function store(Request $request)
    {
        $turno57s = new Turno57();
        $turno57s->DocumentoID = $request->get('documentoid');
        $turno57s->Titulo = $request->get('titulo');
        $turno57s->Operacion = $request->get('operacion');
        $turno57s->Descripcion = $request->get('descripcion');
        $turno57s->Numero =$request->get('numero');
        $turno57s->Ruta = $request->get('ruta');

        $turno57s->save();

        return redirect('/Turno1');
    }

    public function edit($id)
    {
        $turno57 = Turno57::find($id);
        return view('turno.5-7.edit')->with('turno57',$turno57);
    }

    public function update(Request $request, $id)
    {
        $turno57 = Turno57::find($id);
        $turno57->DocumentoID = $request->get('documentoid');
        $turno57->Titulo = $request->get('titulo');
        $turno57->Operacion = $request->get('operacion');
        $turno57->Descripcion = $request->get('descripcion');
        $turno57->Numero =$request->get('numero');
        $turno57->Ruta = $request->get('ruta');
        $turno57->save();

        return redirect('/Turno1');
    }

    public function destroy($id)
    {
        $turno57 = Turno57::find($id);
        $turno57->delete();
        return redirect('/Turno1');
    }

    public function operaciones()
    {
        return view('turno.5-7.operaciones');
    }

    public function op00()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-00.index')->with('turno57s',$turno57s);
    }

    public function op20()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-20.index')->with('turno57s',$turno57s);
    }

    public function op40()
    {
        return view('turno.5-7.op-40.index');
    }

    public function op40ponchadora1()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-40.ponchadora1.index')->with('turno57s',$turno57s);
    }

    public function op40ponchadora2()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-40.ponchadora2.index')->with('turno57s',$turno57s);
    }

    public function op40ponchadora3()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-40.ponchadora3.index')->with('turno57s',$turno57s);
    }

    public function op40ponchadora4()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-40.ponchadora4.index')->with('turno57s',$turno57s);
    }

    public function op40ponchadora5()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-40.ponchadora5.index')->with('turno57s',$turno57s);
    }

    public function op60()
    {
        return view('turno.5-7.op-60.index');
    }
    public function op60impresora1()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-60.impresora1.index')->with('turno57s',$turno57s);
    }
    public function op60impresora2()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-60.impresora2.index')->with('turno57s',$turno57s);
    }
    public function op60impresora3()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-60.impresora3.index')->with('turno57s',$turno57s);
    }
    public function op60impresora4()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-60.impresora4.index')->with('turno57s',$turno57s);
    }
    public function op60impresora5()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-60.impresora5.index')->with('turno57s',$turno57s);
    }
    public function op60impresora6()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-60.impresora6.index')->with('turno57s',$turno57s);
    }
    public function op60impresora7()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-60.impresora7.index')->with('turno57s',$turno57s);
    }


    public function op100()
    {
        return view('turno.5-7.op-100.index');
    }
    public function op100contencion1()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-100.contencion1.index')->with('turno57s',$turno57s);
    }
    public function op100contencion2()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-100.contencion2.index')->with('turno57s',$turno57s);
    }
    public function op100contencion3()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-100.contencion3.index')->with('turno57s',$turno57s);
    }
    public function op100contencion4()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-100.contencion4.index')->with('turno57s',$turno57s);
    }

    public function op103()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-103.index')->with('turno57s',$turno57s);
    }

    public function op107()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-107.index')->with('turno57s',$turno57s);
    }

    public function op120()
    {
        return view('turno.5-7.op-120.index');
    }    
    public function op120prensa1()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-120.prensa1.index')->with('turno57s',$turno57s);
    }    
    public function op120prensa2()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-120.prensa2.index')->with('turno57s',$turno57s);
    }
    public function op120prensa3()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-120.prensa3.index')->with('turno57s',$turno57s);
    }
    public function op120prensa4()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-120.prensa4.index')->with('turno57s',$turno57s);
    }
    public function op120prensa5()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-120.prensa5.index')->with('turno57s',$turno57s);
    }

    public function op140()
    {
        return view('turno.5-7.op-140.index');
    }    
    public function op140prensa1()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-140.prensa1.index')->with('turno57s',$turno57s);
    }
    public function op140prensa2()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-140.prensa2.index')->with('turno57s',$turno57s);
    }
    public function op140prensa3()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-140.prensa3.index')->with('turno57s',$turno57s);
    }  

    public function op160()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-160.index')->with('turno57s',$turno57s);
    }   
    
    public function op180()
    {
        $turno57s = Turno57::all();
        return view('turno.5-7.op-180.index')->with('turno57s',$turno57s);
    }   



}
