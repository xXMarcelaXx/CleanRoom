<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerPrueba;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DatoshojaController;
use App\Http\Controllers\DatoshojaController2;
use App\Http\Controllers\ReversoController00;
use App\Http\Controllers\Reversosetcs20Controller;
use App\Http\Controllers\Reversosetcs201Controller;
use App\Http\Controllers\Datoshojasetcs20Controller;
use App\Http\Controllers\Datoshojasetcs201Controller;
use App\Http\Controllers\Reversosetcs2031Controller;
use App\Http\Controllers\Datoshojasetcs2031Controller;
use App\Http\Controllers\Reversosetcs40111Controller;
use App\Http\Controllers\Datoshojasetcs40111Controller;
use App\Http\Controllers\Reversosetcs40112Controller;
use App\Http\Controllers\Datoshojasetcs40112Controller;
use App\Http\Controllers\Reversosetcs40113Controller;
use App\Http\Controllers\Datoshojasetcs40113Controller;
use App\Http\Controllers\Reversosetcs40114Controller;
use App\Http\Controllers\Datoshojasetcs40114Controller;
use App\Http\Controllers\Reversosetcs40115Controller;
use App\Http\Controllers\Datoshojasetcs40116Controller;
use App\Http\Controllers\Reversosetcs40116Controller;
use App\Http\Controllers\Datoshojasetcs40115Controller;
use App\Http\Controllers\Reversosetcs40211Controller;
use App\Http\Controllers\Datoshojasetcs40211Controller;
use App\Http\Controllers\Reversosetcs40212Controller;
use App\Http\Controllers\Datoshojasetcs40212Controller;
use App\Http\Controllers\Reversosetcs40213Controller;
use App\Http\Controllers\Datoshojasetcs40213Controller;
use App\Http\Controllers\Reversosetcs40214Controller;
use App\Http\Controllers\Datoshojasetcs40214Controller;
use App\Http\Controllers\Reversosetcs40215Controller;
use App\Http\Controllers\Datoshojasetcs40215Controller;
use App\Http\Controllers\Datoshojasetcs40216Controller;
use App\Http\Controllers\Reversosetcs40216Controller;
use App\Http\Controllers\Reversosetcs606111Controller;
use App\Http\Controllers\Datoshojasetcs606111Controller;
use App\Http\Controllers\Reversosetcs606121Controller;
use App\Http\Controllers\Datoshojasetcs606121Controller;
use App\Http\Controllers\Reversosetcs606211Controller;
use App\Http\Controllers\Datoshojasetcs606211Controller;
use App\Http\Controllers\Reversosetcs606221Controller;
use App\Http\Controllers\Datoshojasetcs606221Controller;
use App\Http\Controllers\Reversosetcs606311Controller;
use App\Http\Controllers\Datoshojasetcs606311Controller;
use App\Http\Controllers\Reversosetcs606321Controller;
use App\Http\Controllers\Datoshojasetcs606321Controller;
use App\Http\Controllers\Reversosetcs606411Controller;
use App\Http\Controllers\Datoshojasetcs606411Controller;
use App\Http\Controllers\Reversosetcs606421Controller;
use App\Http\Controllers\Datoshojasetcs606421Controller;
use App\Http\Controllers\Reversosetcs606511Controller;
use App\Http\Controllers\Datoshojasetcs606511Controller;
use App\Http\Controllers\Reversosetcs606521Controller;
use App\Http\Controllers\Datoshojasetcs606521Controller;
use App\Http\Controllers\Reversosetcs606611Controller;
use App\Http\Controllers\Datoshojasetcs606611Controller;
use App\Http\Controllers\Reversosetcs606621Controller;
use App\Http\Controllers\Datoshojasetcs606621Controller;
use App\Http\Controllers\Reversosetcs606711Controller;
use App\Http\Controllers\Datoshojasetcs606711Controller;
use App\Http\Controllers\Reversosetcs6081Controller;
use App\Http\Controllers\Datoshojasetcs6081Controller;
use App\Http\Controllers\Reversosetcs100111Controller;
use App\Http\Controllers\Datoshojasetcs100111Controller;
use App\Http\Controllers\Reversosetcs100121Controller;
use App\Http\Controllers\Datoshojasetcs100121Controller;
use App\Http\Controllers\Reversosetcs100131Controller;
use App\Http\Controllers\Datoshojasetcs100131Controller;
use App\Http\Controllers\Reversosetcs10021Controller;
use App\Http\Controllers\Datoshojasetcs10021Controller;
use App\Http\Controllers\Reversosetcs10031Controller;
use App\Http\Controllers\Datoshojasetcs10031Controller;
use App\Http\Controllers\Reversosetcs107111Controller;
use App\Http\Controllers\Datoshojasetcs107111Controller;
use App\Http\Controllers\Reversosetcs107121Controller;
use App\Http\Controllers\Datoshojasetcs107121Controller;
use App\Http\Controllers\Reversosetcs107131Controller;
use App\Http\Controllers\Datoshojasetcs107131Controller;
use App\Http\Controllers\Reversosetcs10721Controller;
use App\Http\Controllers\Datoshojasetcs10721Controller;
use App\Http\Controllers\Reversosetcs120111Controller;
use App\Http\Controllers\Datoshojasetcs120111Controller;
use App\Http\Controllers\Reversosetcs120121Controller;
use App\Http\Controllers\Datoshojasetcs120121Controller;
use App\Http\Controllers\Reversosetcs120131Controller;
use App\Http\Controllers\Datoshojasetcs120131Controller;
use App\Http\Controllers\Reversosetcs120141Controller;
use App\Http\Controllers\Datoshojasetcs120141Controller;
use App\Http\Controllers\Reversosetcs120151Controller;
use App\Http\Controllers\Datoshojasetcs120151Controller;
use App\Http\Controllers\Reversosetcs140111Controller;
use App\Http\Controllers\Datoshojasetcs140111Controller;
use App\Http\Controllers\Reversosetcs140121Controller;
use App\Http\Controllers\Datoshojasetcs140121Controller;
use App\Http\Controllers\Reversosetcs140131Controller;
use App\Http\Controllers\Datoshojasetcs140131Controller;
use App\Http\Controllers\Reversosetcs16011Controller;
use App\Http\Controllers\Datoshojasetcs16011Controller;
use App\Http\Controllers\Reversosetcs18011Controller;
use App\Http\Controllers\Datoshojasetcs18011Controller;
use App\Http\Controllers\Reversotpm4011Controller;
use App\Http\Controllers\Datoshojastpm4011Controller;
use App\Http\Controllers\Reversotpm6011Controller;
use App\Http\Controllers\Datoshojastpm6011Controller;
use App\Http\Controllers\Reversotpm10011Controller;
use App\Http\Controllers\Datoshojastpm10011Controller;
use App\Http\Controllers\Reversotpm10711Controller;
use App\Http\Controllers\Datoshojastpm10711Controller;
use App\Http\Controllers\Reversotpm120111Controller;
use App\Http\Controllers\Datoshojastpm120111Controller;
use App\Http\Controllers\Reversotpm120121Controller;
use App\Http\Controllers\Datoshojastpm120121Controller;
use App\Http\Controllers\Reversotpm14011Controller;
use App\Http\Controllers\Datoshojastpm14011Controller;
use App\Http\Controllers\Reversotpm16011Controller;
use App\Http\Controllers\Datoshojastpm16011Controller;
use App\Http\Controllers\Reversotpm18011Controller;
use App\Http\Controllers\Datoshojastpm18011Controller;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

//TUNRNO 2
use App\Http\Controllers\Turno_2\Controller;
use App\Http\Controllers\Turno_2\DatoshojaControllerT2;
use App\Http\Controllers\Turno_2\ReversoController00T2;
use App\Http\Controllers\Turno_2\Datoshojasetcs20ControllerT2;
use App\Http\Controllers\Turno_2\Reversosetcs20ControllerT2;


use App\Http\Controllers\Turno3Controller;
use App\Http\Controllers\Turno57Controller;
use App\Http\Controllers\Turno68Controller;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Rutas de navegacion(rutas protegidas)
Route::get('/reverso', function () {
  return view('reverso');
});

Route::view('/welcome',"welcome")->middleware('auth')->name('welcome');
Route::view('/turnos',"login.turnos")->middleware('auth')->name('turnos');

//Pruebas 
Route::get('/prueba',[ControllerPrueba::class,'prueba'])->name('prueba');
Route::get('/pruebaPDF',[ControllerPrueba::class,'pruebaPDF'])->name('pruebaPDF');

Route::get('/prueba2',[ControllerPrueba::class,'prueba2'])->name('prueba2');
Route::get('/pruebaBotones',[ControllerPrueba::class,'pruebaBotones'])->name('pruebaBotones');

Route::get('/pruebita',[ControllerPrueba::class,'pruebita'])->name('pruebita');


//Rutas de los turnos
Route::middleware(['auth'])->group(function () {
Route::resource('Turno1','App\Http\Controllers\Turno57Controller');     
Route::resource('Turno2','App\Http\Controllers\Turno68Controller');  
Route::resource('Turno3','App\Http\Controllers\Turno3Controller'); 
Route::post('/borrar-registros', 'App\Http\Controllers\Turno57Controller@borrarRegistros')->name('borrar-registros');
});

//Rutas de opreraciones 
Route::middleware(['auth'])->group(function () {

   //------------------------CAMBIAR FECHA--------------------------------------
   Route::get('/cambiarFecha',[Turno57Controller::class,'cambiarFecha'])->name('cambiarFecha');
   Route::post('/updateFecha',[Turno57Controller::class,'updateFecha'])->name('updateFecha');


   //----------------------------
   Route::get('/reportes',[ControllerPrueba::class,'reportes'])->name('reportes');



    //-----------------------------operaciones TURNO 3---------------------------------------------
Route::get('/operacionesTurno3',[Turno3Controller::class,'operaciones'])->name('operacionesTurno3');
    //op 00
Route::get('/op00-t3',[Turno3Controller::class,'op00'])->name('op00-t3');
    //op 20
Route::get('/op20-t3',[Turno3Controller::class,'op20'])->name('op20-t3');
    //op 40
Route::get('/op40-t3',[Turno3Controller::class,'op40'])->name('op40-t3');
       // PONCHADORA-1
    Route::get('/op40-ponchadora1-t3',[Turno3Controller::class,'op40ponchadora1'])->name('op40-ponchadora1-t3');
       // PONCHADORA-2
    Route::get('/op40-ponchadora2-t3',[Turno3Controller::class,'op40ponchadora2'])->name('op40-ponchadora2-t3');
       // PONCHADORA-3
    Route::get('/op40-ponchadora3-t3',[Turno3Controller::class,'op40ponchadora3'])->name('op40-ponchadora3-t3');
       // PONCHADORA-4
    Route::get('/op40-ponchadora4-t3',[Turno3Controller::class,'op40ponchadora4'])->name('op40-ponchadora4-t3');
       // PONCHADORA-5
    Route::get('/op40-ponchadora5-t3',[Turno3Controller::class,'op40ponchadora5'])->name('op40-ponchadora5-t3');
    //op 60
Route::get('/op60-t3',[Turno3Controller::class,'op60'])->name('op60-t3');
       // IMPRESORA -1
    Route::get('/op60-impresora1-t3',[Turno3Controller::class,'op60impresora1'])->name('op60-impresora1-t3');
       // IMPRESORA -2
    Route::get('/op60-impresora2-t3',[Turno3Controller::class,'op60impresora2'])->name('op60-impresora2-t3');
       // IMPRESORA -3
    Route::get('/op60-impresora3-t3',[Turno3Controller::class,'op60impresora3'])->name('op60-impresora3-t3');
       // IMPRESORA -4
    Route::get('/op60-impresora4-t3',[Turno3Controller::class,'op60impresora4'])->name('op60-impresora4-t3');
       // IMPRESORA -5
    Route::get('/op60-impresora5-t3',[Turno3Controller::class,'op60impresora5'])->name('op60-impresora5-t3');
       // IMPRESORA -6
    Route::get('/op60-impresora6-t3',[Turno3Controller::class,'op60impresora6'])->name('op60-impresora6-t3');
       // IMPRESORA -7
    Route::get('/op60-impresora7-t3',[Turno3Controller::class,'op60impresora7'])->name('op60-impresora7-t3');
    //op 100
Route::get('/op100-t3',[Turno3Controller::class,'op100'])->name('op100-t3');
       // CONTENCION-1
    Route::get('/op100-contencion1-t3',[Turno3Controller::class,'op100contencion1'])->name('op100-contencion1-t3');
       // CONTENCION-2
    Route::get('/op100-contencion2-t3',[Turno3Controller::class,'op100contencion2'])->name('op100-contencion2-t3');
       // CONTENCION-3
    Route::get('/op100-contencion3-t3',[Turno3Controller::class,'op100contencion3'])->name('op100-contencion3-t3');
       // CONTENCION-4
    Route::get('/op100-contencion4-t3',[Turno3Controller::class,'op100contencion4'])->name('op100-contencion4-t3');
    //op 103
Route::get('/op103-t3',[Turno3Controller::class,'op103'])->name('op103-t3');
    //op 107
Route::get('/op107-t3',[Turno3Controller::class,'op107'])->name('op107-t3');
    //op 120
Route::get('/op120-t3',[Turno3Controller::class,'op120'])->name('op120-t3');
       // PRENSA-1
    Route::get('/op120-prensa1-t3',[Turno3Controller::class,'op120prensa1'])->name('op120-prensa1-t3');
       // PRENSA-2
    Route::get('/op120-prensa2-t3',[Turno3Controller::class,'op120prensa2'])->name('op120-prensa2-t3');
       // PRENSA-3
    Route::get('/op120-prensa3-t3',[Turno3Controller::class,'op120prensa3'])->name('op120-prensa3-t3');
       // PRENSA-4
    Route::get('/op120-prensa4-t3',[Turno3Controller::class,'op120prensa4'])->name('op120-prensa4-t3');
       // PRENSA-5
    Route::get('/op120-prensa5-t3',[Turno3Controller::class,'op120prensa5'])->name('op120-prensa5-t3');
    //op 140
Route::get('/op140-t3',[Turno3Controller::class,'op140'])->name('op140-t3');
       // PRENSA-1
    Route::get('/op140-prensa1-t3',[Turno3Controller::class,'op140prensa1'])->name('op140-prensa1-t3');
       // PRENSA-2
    Route::get('/op140-prensa2-t3',[Turno3Controller::class,'op140prensa2'])->name('op140-prensa2-t3');
       // PRENSA-3
    Route::get('/op140-prensa3-t3',[Turno3Controller::class,'op140prensa3'])->name('op140-prensa3-t3');
    //op 160
Route::get('/op160-t3',[Turno3Controller::class,'op160'])->name('op160-t3');
    //op 180
Route::get('/op180-t3',[Turno3Controller::class,'op180'])->name('op180-t3');



    //-----------------------------operaciones TURNO 5-7 ---------------------------------------------
    Route::get('/operacionesTurno57',[Turno57Controller::class,'operaciones'])->name('operacionesTurno57');
    //op 00
Route::get('/op00-t57',[Turno57Controller::class,'op00'])->name('op00-t57');
    //op 20
Route::get('/op20-t57',[Turno57Controller::class,'op20'])->name('op20-t57');
    //op 40
Route::get('/op40-t57',[Turno57Controller::class,'op40'])->name('op40-t57');
       // PONCHADORA-1
    Route::get('/op40-ponchadora1-t57',[Turno57Controller::class,'op40ponchadora1'])->name('op40-ponchadora1-t57');
       // PONCHADORA-2
    Route::get('/op40-ponchadora2-t57',[Turno57Controller::class,'op40ponchadora2'])->name('op40-ponchadora2-t57');
       // PONCHADORA-3
    Route::get('/op40-ponchadora3-t57',[Turno57Controller::class,'op40ponchadora3'])->name('op40-ponchadora3-t57');
       // PONCHADORA-4
    Route::get('/op40-ponchadora4-t57',[Turno57Controller::class,'op40ponchadora4'])->name('op40-ponchadora4-t57');
       // PONCHADORA-5
    Route::get('/op40-ponchadora5-t57',[Turno57Controller::class,'op40ponchadora5'])->name('op40-ponchadora5-t57');
    //op 60
Route::get('/op60-t57',[Turno57Controller::class,'op60'])->name('op60-t57');
       // IMPRESORA -1
    Route::get('/op60-impresora1-t57',[Turno57Controller::class,'op60impresora1'])->name('op60-impresora1-t57');
       // IMPRESORA -2
    Route::get('/op60-impresora2-t57',[Turno57Controller::class,'op60impresora2'])->name('op60-impresora2-t57');
       // IMPRESORA -3
    Route::get('/op60-impresora3-t57',[Turno57Controller::class,'op60impresora3'])->name('op60-impresora3-t57');
       // IMPRESORA -4
    Route::get('/op60-impresora4-t57',[Turno57Controller::class,'op60impresora4'])->name('op60-impresora4-t57');
       // IMPRESORA -5
    Route::get('/op60-impresora5-t57',[Turno57Controller::class,'op60impresora5'])->name('op60-impresora5-t57');
       // IMPRESORA -6
    Route::get('/op60-impresora6-t57',[Turno57Controller::class,'op60impresora6'])->name('op60-impresora6-t57');
       // IMPRESORA -7
    Route::get('/op60-impresora7-t57',[Turno57Controller::class,'op60impresora7'])->name('op60-impresora7-t57');
    //op 100
Route::get('/op100-t57',[Turno57Controller::class,'op100'])->name('op100-t57');
       // CONTENCION-1
    Route::get('/op100-contencion1-t57',[Turno57Controller::class,'op100contencion1'])->name('op100-contencion1-t57');
       // CONTENCION-2
    Route::get('/op100-contencion2-t57',[Turno57Controller::class,'op100contencion2'])->name('op100-contencion2-t57');
       // CONTENCION-3
    Route::get('/op100-contencion3-t57',[Turno57Controller::class,'op100contencion3'])->name('op100-contencion3-t57');
       // CONTENCION-4
    Route::get('/op100-contencion4-t57',[Turno57Controller::class,'op100contencion4'])->name('op100-contencion4-t57');
    //op 103
Route::get('/op103-t57',[Turno57Controller::class,'op103'])->name('op103-t57');
    //op 107
Route::get('/op107-t57',[Turno57Controller::class,'op107'])->name('op107-t57');
    //op 120
Route::get('/op120-t57',[Turno57Controller::class,'op120'])->name('op120-t57');
       // PRENSA-1
    Route::get('/op120-prensa1-t57',[Turno57Controller::class,'op120prensa1'])->name('op120-prensa1-t57');
       // PRENSA-2
    Route::get('/op120-prensa2-t57',[Turno57Controller::class,'op120prensa2'])->name('op120-prensa2-t57');
       // PRENSA-3
    Route::get('/op120-prensa3-t57',[Turno57Controller::class,'op120prensa3'])->name('op120-prensa3-t57');
       // PRENSA-4
    Route::get('/op120-prensa4-t57',[Turno57Controller::class,'op120prensa4'])->name('op120-prensa4-t57');
       // PRENSA-5
    Route::get('/op120-prensa5-t57',[Turno57Controller::class,'op120prensa5'])->name('op120-prensa5-t57');
    //op 140
Route::get('/op140-t57',[Turno57Controller::class,'op140'])->name('op140-t57');
       // PRENSA-1
    Route::get('/op140-prensa1-t57',[Turno57Controller::class,'op140prensa1'])->name('op140-prensa1-t57');
       // PRENSA-2
    Route::get('/op140-prensa2-t57',[Turno57Controller::class,'op140prensa2'])->name('op140-prensa2-t57');
       // PRENSA-3
    Route::get('/op140-prensa3-t57',[Turno57Controller::class,'op140prensa3'])->name('op140-prensa3-t57');
    //op 160
Route::get('/op160-t57',[Turno57Controller::class,'op160'])->name('op160-t57');
    //op 180
Route::get('/op180-t57',[Turno57Controller::class,'op180'])->name('op180-t57');




    //-----------------------------operaciones TURNO 6-8 ---------------------------------------------
    Route::get('/operacionesTurno68',[Turno68Controller::class,'operaciones'])->name('operacionesTurno68');
    //op 00
Route::get('/op00-t68',[Turno68Controller::class,'op00'])->name('op00-t68');
    //op 20
Route::get('/op20-t68',[Turno68Controller::class,'op20'])->name('op20-t68');
    //op 40
Route::get('/op40-t68',[Turno68Controller::class,'op40'])->name('op40-t68');
       // PONCHADORA-1
    Route::get('/op40-ponchadora1-t68',[Turno68Controller::class,'op40ponchadora1'])->name('op40-ponchadora1-t68');
       // PONCHADORA-2
    Route::get('/op40-ponchadora2-t68',[Turno68Controller::class,'op40ponchadora2'])->name('op40-ponchadora2-t68');
       // PONCHADORA-3
    Route::get('/op40-ponchadora3-t68',[Turno68Controller::class,'op40ponchadora3'])->name('op40-ponchadora3-t68');
       // PONCHADORA-4
    Route::get('/op40-ponchadora4-t68',[Turno68Controller::class,'op40ponchadora4'])->name('op40-ponchadora4-t68');
       // PONCHADORA-5
    Route::get('/op40-ponchadora5-t68',[Turno68Controller::class,'op40ponchadora5'])->name('op40-ponchadora5-t68');
    //op 60
Route::get('/op60-t68',[Turno68Controller::class,'op60'])->name('op60-t68');
       // IMPRESORA -1
    Route::get('/op60-impresora1-t68',[Turno68Controller::class,'op60impresora1'])->name('op60-impresora1-t68');
       // IMPRESORA -2
    Route::get('/op60-impresora2-t68',[Turno68Controller::class,'op60impresora2'])->name('op60-impresora2-t68');
       // IMPRESORA -3
    Route::get('/op60-impresora3-t68',[Turno68Controller::class,'op60impresora3'])->name('op60-impresora3-t68');
       // IMPRESORA -4
    Route::get('/op60-impresora4-t68',[Turno68Controller::class,'op60impresora4'])->name('op60-impresora4-t68');
       // IMPRESORA -5
    Route::get('/op60-impresora5-t68',[Turno68Controller::class,'op60impresora5'])->name('op60-impresora5-t68');
       // IMPRESORA -6
    Route::get('/op60-impresora6-t68',[Turno68Controller::class,'op60impresora6'])->name('op60-impresora6-t68');
       // IMPRESORA -7
    Route::get('/op60-impresora7-t68',[Turno68Controller::class,'op60impresora7'])->name('op60-impresora7-t68');
    //op 100
Route::get('/op100-t68',[Turno68Controller::class,'op100'])->name('op100-t68');
       // CONTENCION-1
    Route::get('/op100-contencion1-t68',[Turno68Controller::class,'op100contencion1'])->name('op100-contencion1-t68');
       // CONTENCION-2
    Route::get('/op100-contencion2-t68',[Turno68Controller::class,'op100contencion2'])->name('op100-contencion2-t68');
       // CONTENCION-3
    Route::get('/op100-contencion3-t68',[Turno68Controller::class,'op100contencion3'])->name('op100-contencion3-t68');
       // CONTENCION-4
    Route::get('/op100-contencion4-t68',[Turno68Controller::class,'op100contencion4'])->name('op100-contencion4-t68');
    //op 103
Route::get('/op103-t68',[Turno68Controller::class,'op103'])->name('op103-t68');
    //op 107
Route::get('/op107-t68',[Turno68Controller::class,'op107'])->name('op107-t68');
    //op 120
Route::get('/op120-t68',[Turno68Controller::class,'op120'])->name('op120-t68');
       // PRENSA-1
    Route::get('/op120-prensa1-t68',[Turno68Controller::class,'op120prensa1'])->name('op120-prensa1-t68');
       // PRENSA-2
    Route::get('/op120-prensa2-t68',[Turno68Controller::class,'op120prensa2'])->name('op120-prensa2-t68');
       // PRENSA-3
    Route::get('/op120-prensa3-t68',[Turno68Controller::class,'op120prensa3'])->name('op120-prensa3-t68');
       // PRENSA-4
    Route::get('/op120-prensa4-t68',[Turno68Controller::class,'op120prensa4'])->name('op120-prensa4-t68');
       // PRENSA-5
    Route::get('/op120-prensa5-t68',[Turno68Controller::class,'op120prensa5'])->name('op120-prensa5-t68');
    //op 140
Route::get('/op140-t68',[Turno68Controller::class,'op140'])->name('op140-t68');
       // PRENSA-1
    Route::get('/op140-prensa1-t68',[Turno68Controller::class,'op140prensa1'])->name('op140-prensa1-t68');
       // PRENSA-2
    Route::get('/op140-prensa2-t68',[Turno68Controller::class,'op140prensa2'])->name('op140-prensa2-t68');
       // PRENSA-3
    Route::get('/op140-prensa3-t68',[Turno68Controller::class,'op140prensa3'])->name('op140-prensa3-t68');
    //op 160
Route::get('/op160-t68',[Turno68Controller::class,'op160'])->name('op160-t68');
    //op 180
Route::get('/op180-t68',[Turno68Controller::class,'op180'])->name('op180-t68');



});   


//Rutas de hojas de chequeo 1
Route::middleware(['auth',])->group(function () {
//Rutas F7-SETCS-ELE-CR-L1-01
Route::resource('F7-SETCS-ELE-CR-L1-01-57', 'App\Http\Controllers\DatoshojaController');
Route::resource('reverso', 'App\Http\Controllers\ReversoController00');
Route::get('/check',[DatoshojaController::class,'check'])->name('check');
Route::put('/show',[DatoshojaController::class,'show'])->name('show');
Route::put('/finalcheck/{id}',[DatoshojaController::class,'finalcheck'])->name('finalcheck');
Route::get('/edit2/{id}',[DatoshojaController::class,'edit2'])->name('edit2');
Route::put('/update2/{id}',[DatoshojaController::class,'update2'])->name('update2');
Route::get('/pdfprint',[DatoshojaController::class,'pdfprint'])->name('pdfprint');
Route::get('/printindex',[DatoshojaController::class,'printindex'])->name('printindex');
Route::get('/printreverso',[ReversoController00::class,'printreverso'])->name('printreverso');
Route::get('/pdfprintReversoF7SETCSELECRL1011',[ReversoController00::class,'pdfprintReversoF7SETCSELECRL1011'])->name('pdfprintReversoF7SETCSELECRL1011');
//Rutas F7-SETCS-ELE-CR-L1-01
Route::resource('F7-SETCS-ELE-CR-L1-01-57-2', 'App\Http\Controllers\DatoshojaController2');
Route::resource('reverso2', 'App\Http\Controllers\ReversoController002');
Route::get('/check2',[DatoshojaController2::class,'check'])->name('check2');
Route::put('/show2',[DatoshojaController2::class,'show'])->name('show2');
Route::put('/finalcheck2/{id}',[DatoshojaController2::class,'finalcheck'])->name('finalcheck2');
Route::get('/edit22/{id}',[DatoshojaController2::class,'edit2'])->name('edit22');
Route::put('/update22/{id}',[DatoshojaController2::class,'update2'])->name('update22');
Route::get('/pdfprint2',[DatoshojaController2::class,'pdfprint'])->name('pdfprint2');
Route::get('/printindex2',[DatoshojaController2::class,'printindex'])->name('printindex2');
Route::get('/printreverso2',[ReversoController002::class,'printreverso'])->name('printreverso2');
Route::get('/pdfprintReversoF7SETCSELECRL1012',[ReversoController002::class,'pdfprintReversoF7SETCSELECRL1011'])->name('pdfprintReversoF7SETCSELECRL1012');
//Rutas F7-SETCS-ELE-20-L1-01-1
Route::resource('F7-SETCS-ELE-20-L1-01-1-1', 'App\Http\Controllers\Datoshojasetcs20Controller');
Route::resource('reversoSETCS20', 'App\Http\Controllers\Reversosetcs20Controller');
Route::get('/checkSETCS20',[Datoshojasetcs20Controller::class,'check'])->name('checkSETCS20');
Route::put('/finalcheckSETCS20/{id}',[Datoshojasetcs20Controller::class,'finalcheck'])->name('finalcheckSETCS20');
Route::get('/edit2SETCS20/{id}',[Datoshojasetcs20Controller::class,'edit2'])->name('edit2SETCS20');
Route::put('/update2SETCS20/{id}',[Datoshojasetcs20Controller::class,'update2'])->name('update2SETCS20');
Route::get('/pdfprintSETCS20',[Datoshojasetcs20Controller::class,'pdfprint'])->name('pdfprintSETCS20');
Route::get('/printindexSETCS20',[Datoshojasetcs20Controller::class,'printindex'])->name('printindexSETCS20');
Route::get('/printreversoSETCS20',[Reversosetcs20Controller::class,'printreverso'])->name('printreversoSETCS20');
Route::get('/pdfReversoSETCS20',[Reversosetcs20Controller::class,'pdfReverso'])->name('pdfReversoSETCS20');
//Rutas F7-SETCS-ELE-20-L1-01-2
Route::resource('F7-SETCS-ELE-20-L1-01-2-1', 'App\Http\Controllers\Datoshojasetcs201Controller');
Route::resource('reversoSETCS201', 'App\Http\Controllers\Reversosetcs201Controller');
Route::get('/checkSETCS201',[Datoshojasetcs201Controller::class,'check'])->name('checkSETCS201');
Route::put('/finalcheckSETCS201/{id}',[Datoshojasetcs201Controller::class,'finalcheck'])->name('finalcheckSETCS201');
Route::get('/edit2SETCS201/{id}',[Datoshojasetcs201Controller::class,'edit2'])->name('edit2SETCS201');
Route::put('/update2SETCS201/{id}',[Datoshojasetcs201Controller::class,'update2'])->name('update2SETCS201');
Route::get('/pdfprintSETCS201',[Datoshojasetcs201Controller::class,'pdfprint'])->name('pdfprintSETCS201');
Route::get('/printindexSETCS201',[Datoshojasetcs201Controller::class,'printindex'])->name('printindexSETCS201');
Route::get('/printreversoSETCS201',[Reversosetcs201Controller::class,'printreverso'])->name('printreversoSETCS201');
Route::get('/pdfReversoSETCS201',[Reversosetcs201Controller::class,'pdfReverso'])->name('pdfReversoSETCS201');
//Rutas F7-SETCS-ELE-20-L1-01-3
Route::resource('F7-SETCS-ELE-20-L1-01-2-1C3', 'App\Http\Controllers\Datoshojasetcs201ControllerC3');
Route::resource('reversoSETCS201C3', 'App\Http\Controllers\Reversosetcs201ControllerC3');
Route::get('/checkSETCS201C3',[App\Http\Controllers\Datoshojasetcs201ControllerC3::class,'check'])->name('checkSETCS201C3');
Route::put('/finalcheckSETCS201C3/{id}',[App\Http\Controllers\Datoshojasetcs201ControllerC3::class,'finalcheck'])->name('finalcheckSETCS201C3');
Route::get('/edit2SETCS201C3/{id}',[App\Http\Controllers\Datoshojasetcs201ControllerC3::class,'edit2'])->name('edit2SETCS201C3');
Route::put('/update2SETCS201C3/{id}',[App\Http\Controllers\Datoshojasetcs201ControllerC3::class,'update2'])->name('update2SETCS201C3');
Route::get('/pdfprintSETCS201C3',[App\Http\Controllers\Datoshojasetcs201ControllerC3::class,'pdfprint'])->name('pdfprintSETCS201C3');
Route::get('/printindexSETCS201C3',[App\Http\Controllers\Datoshojasetcs201ControllerC3::class,'printindex'])->name('printindexSETCS201C3');
Route::get('/printreversoSETCS201C3',[App\Http\Controllers\Reversosetcs201ControllerC3::class,'printreverso'])->name('printreversoSETCS201C3');
Route::get('/pdfReversoSETCS201C3',[App\Http\Controllers\Reversosetcs201ControllerC3::class,'pdfReverso'])->name('pdfReversoSETCS201C3');
//Rutas F7-SETCS-ELE-20-L1-01-4
Route::resource('F7-SETCS-ELE-20-L1-01-2-1C4', 'App\Http\Controllers\Datoshojasetcs201ControllerC4');
Route::resource('reversoSETCS201C4', 'App\Http\Controllers\Reversosetcs201ControllerC4');
Route::get('/checkSETCS201C4',[App\Http\Controllers\Datoshojasetcs201ControllerC4::class,'check'])->name('checkSETCS201C4');
Route::put('/finalcheckSETCS201C4/{id}',[App\Http\Controllers\Datoshojasetcs201ControllerC4::class,'finalcheck'])->name('finalcheckSETCS201C4');
Route::get('/edit2SETCS201C4/{id}',[App\Http\Controllers\Datoshojasetcs201ControllerC4::class,'edit2'])->name('edit2SETCS201C4');
Route::put('/update2SETCS201C4/{id}',[App\Http\Controllers\Datoshojasetcs201ControllerC4::class,'update2'])->name('update2SETCS201C4');
Route::get('/pdfprintSETCS201C4',[App\Http\Controllers\Datoshojasetcs201ControllerC4::class,'pdfprint'])->name('pdfprintSETCS201C4');
Route::get('/printindexSETCS201C4',[App\Http\Controllers\Datoshojasetcs201ControllerC4::class,'printindex'])->name('printindexSETCS201C4');
Route::get('/printreversoSETCS201C4',[App\Http\Controllers\Reversosetcs201ControllerC4::class,'printreverso'])->name('printreversoSETCS201C4');
Route::get('/pdfReversoSETCS201C4',[App\Http\Controllers\Reversosetcs201ControllerC4::class,'pdfReverso'])->name('pdfReversoSETCS201C4');
//Rutas F7-SETCS-ELE-20-L1-03
Route::resource('F7-SETCS-ELE-20-L1-03-1', 'App\Http\Controllers\Datoshojasetcs2031Controller');
Route::resource('reversoSETCS2031', 'App\Http\Controllers\Reversosetcs2031Controller');
Route::get('/checkSETCS2031',[Datoshojasetcs2031Controller::class,'check'])->name('checkSETCS2031');
Route::put('/finalcheckSETCS2031/{id}',[Datoshojasetcs2031Controller::class,'finalcheck'])->name('finalcheckSETCS2031');
Route::get('/edit2SETCS2031/{id}',[Datoshojasetcs2031Controller::class,'edit2'])->name('edit2SETCS2031');
Route::put('/update2SETCS2031/{id}',[Datoshojasetcs2031Controller::class,'update2'])->name('update2SETCS2031');
Route::get('/pdfprintSETCS2031',[Datoshojasetcs2031Controller::class,'pdfprint'])->name('pdfprintSETCS2031');
Route::get('/printindexSETCS2031',[Datoshojasetcs2031Controller::class,'printindex'])->name('printindexSETCS2031');
Route::get('/printreversoSETCS2031',[Reversosetcs2031Controller::class,'printreverso'])->name('printreversoSETCS2031');
Route::get('/pdfReversoSETCS2031',[Reversosetcs2031Controller::class,'pdfReverso'])->name('pdfReversoSETCS2031');
//Rutas F7-SETCS-ELE-20-L1-03-2
Route::resource('F7-SETCS-ELE-20-L1-03-2', 'App\Http\Controllers\Datoshojasetcs2031ControllerC2');
Route::resource('reversoSETCS2031C2', 'App\Http\Controllers\Reversosetcs2031ControllerC2');
Route::get('/checkSETCS2031C2',[App\Http\Controllers\Datoshojasetcs2031ControllerC2::class,'check'])->name('checkSETCS2031C2');
Route::put('/finalcheckSETCS2031C2/{id}',[App\Http\Controllers\Datoshojasetcs2031ControllerC2::class,'finalcheck'])->name('finalcheckSETCS2031C2');
Route::get('/edit2SETCS2031C2/{id}',[App\Http\Controllers\Datoshojasetcs2031ControllerC2::class,'edit2'])->name('edit2SETCS2031C2');
Route::put('/update2SETCS2031C2/{id}',[App\Http\Controllers\Datoshojasetcs2031ControllerC2::class,'update2'])->name('update2SETCS2031C2');
Route::get('/pdfprintSETCS2031C2',[App\Http\Controllers\Datoshojasetcs2031ControllerC2::class,'pdfprint'])->name('pdfprintSETCS2031C2');
Route::get('/printindexSETCS2031C2',[App\Http\Controllers\Datoshojasetcs2031ControllerC2::class,'printindex'])->name('printindexSETCS2031C2');
Route::get('/printreversoSETCS2031C2',[App\Http\Controllers\Reversosetcs2031ControllerC2::class,'printreverso'])->name('printreversoSETCS2031C2');
Route::get('/pdfReversoSETCS2031C2',[App\Http\Controllers\Reversosetcs2031ControllerC2::class,'pdfReverso'])->name('pdfReversoSETCS2031C2');
//Rutas F7-SETCS-ELE-40-L1-01-1
Route::resource('F7-SETCS-ELE-40-L1-01-1-1', 'App\Http\Controllers\Datoshojasetcs40111Controller');
Route::resource('reversoSETCS40111', 'App\Http\Controllers\Reversosetcs40111Controller');
Route::get('/checkSETCS40111',[Datoshojasetcs40111Controller::class,'check'])->name('checkSETCS40111');
Route::put('/finalcheckSETCS40111/{id}',[Datoshojasetcs40111Controller::class,'finalcheck'])->name('finalcheckSETCS40111');
Route::get('/edit2SETCS40111/{id}',[Datoshojasetcs40111Controller::class,'edit2'])->name('edit2SETCS40111');
Route::put('/update2SETCS40111/{id}',[Datoshojasetcs40111Controller::class,'update2'])->name('update2SETCS40111');
Route::get('/pdfprintSETCS40111',[Datoshojasetcs40111Controller::class,'pdfprint'])->name('pdfprintSETCS40111');
Route::get('/printindexSETCS40111',[Datoshojasetcs40111Controller::class,'printindex'])->name('printindexSETCS40111');
Route::get('/printreversoSETCS40111',[Reversosetcs40111Controller::class,'printreverso'])->name('printreversoSETCS40111');
Route::get('/pdfReversoSETCS40111',[Reversosetcs40111Controller::class,'pdfReverso'])->name('pdfReversoSETCS40111');
//Rutas F7-SETCS-ELE-40-L1-01-2
Route::resource('F7-SETCS-ELE-40-L1-01-1-2', 'App\Http\Controllers\Datoshojasetcs40112Controller');
Route::resource('reversoSETCS40112', 'App\Http\Controllers\Reversosetcs40112Controller');
Route::get('/checkSETCS40112',[Datoshojasetcs40112Controller::class,'check'])->name('checkSETCS40112');
Route::put('/finalcheckSETCS40112/{id}',[Datoshojasetcs40112Controller::class,'finalcheck'])->name('finalcheckSETCS40112');
Route::get('/edit2SETCS40112/{id}',[Datoshojasetcs40112Controller::class,'edit2'])->name('edit2SETCS40112');
Route::put('/update2SETCS40112/{id}',[Datoshojasetcs40112Controller::class,'update2'])->name('update2SETCS40112');
Route::get('/pdfprintSETCS40112',[Datoshojasetcs40112Controller::class,'pdfprint'])->name('pdfprintSETCS40112');
Route::get('/printindexSETCS40112',[Datoshojasetcs40112Controller::class,'printindex'])->name('printindexSETCS40112');
Route::get('/printreversoSETCS40112',[Reversosetcs40112Controller::class,'printreverso'])->name('printreversoSETCS40112');
Route::get('/pdfReversoSETCS40112',[Reversosetcs40112Controller::class,'pdfReverso'])->name('pdfReversoSETCS40112');
//Rutas F7-SETCS-ELE-40-L1-01-3
Route::resource('F7-SETCS-ELE-40-L1-01-1-3', 'App\Http\Controllers\Datoshojasetcs40113Controller');
Route::resource('reversoSETCS40113', 'App\Http\Controllers\Reversosetcs40113Controller');
Route::get('/checkSETCS40113',[Datoshojasetcs40113Controller::class,'check'])->name('checkSETCS40113');
Route::put('/finalcheckSETCS40113/{id}',[Datoshojasetcs40113Controller::class,'finalcheck'])->name('finalcheckSETCS40113');
Route::get('/edit2SETCS40113/{id}',[Datoshojasetcs40113Controller::class,'edit2'])->name('edit2SETCS40113');
Route::put('/update2SETCS40113/{id}',[Datoshojasetcs40113Controller::class,'update2'])->name('update2SETCS40113');
Route::get('/pdfprintSETCS40113',[Datoshojasetcs40113Controller::class,'pdfprint'])->name('pdfprintSETCS40113');
Route::get('/printindexSETCS40113',[Datoshojasetcs40113Controller::class,'printindex'])->name('printindexSETCS40113');
Route::get('/printreversoSETCS40113',[Reversosetcs40113Controller::class,'printreverso'])->name('printreversoSETCS40113');
Route::get('/pdfReversoSETCS40113',[Reversosetcs40113Controller::class,'pdfReverso'])->name('pdfReversoSETCS40113');
//Rutas F7-SETCS-ELE-40-L1-01-4
Route::resource('F7-SETCS-ELE-40-L1-01-1-4', 'App\Http\Controllers\Datoshojasetcs40114Controller');
Route::resource('reversoSETCS40114', 'App\Http\Controllers\Reversosetcs40114Controller');
Route::get('/checkSETCS40114',[Datoshojasetcs40114Controller::class,'check'])->name('checkSETCS40114');
Route::put('/finalcheckSETCS40114/{id}',[Datoshojasetcs40114Controller::class,'finalcheck'])->name('finalcheckSETCS40114');
Route::get('/edit2SETCS40114/{id}',[Datoshojasetcs40114Controller::class,'edit2'])->name('edit2SETCS40114');
Route::put('/update2SETCS40114/{id}',[Datoshojasetcs40114Controller::class,'update2'])->name('update2SETCS40114');
Route::get('/pdfprintSETCS40114',[Datoshojasetcs40114Controller::class,'pdfprint'])->name('pdfprintSETCS40114');
Route::get('/printindexSETCS40114',[Datoshojasetcs40114Controller::class,'printindex'])->name('printindexSETCS40114');
Route::get('/printreversoSETCS40114',[Reversosetcs40114Controller::class,'printreverso'])->name('printreversoSETCS40114');
Route::get('/pdfReversoSETCS40114',[Reversosetcs40114Controller::class,'pdfReverso'])->name('pdfReversoSETCS40114');
//Rutas F7-SETCS-ELE-40-L1-01-5
Route::resource('F7-SETCS-ELE-40-L1-01-1-5', 'App\Http\Controllers\Datoshojasetcs40115Controller');
Route::resource('reversoSETCS40115', 'App\Http\Controllers\Reversosetcs40115Controller');
Route::get('/checkSETCS40115',[Datoshojasetcs40115Controller::class,'check'])->name('checkSETCS40115');
Route::put('/finalcheckSETCS40115/{id}',[Datoshojasetcs40115Controller::class,'finalcheck'])->name('finalcheckSETCS40115');
Route::get('/edit2SETCS40115/{id}',[Datoshojasetcs40115Controller::class,'edit2'])->name('edit2SETCS40115');
Route::put('/update2SETCS40115/{id}',[Datoshojasetcs40115Controller::class,'update2'])->name('update2SETCS40115');
Route::get('/pdfprintSETCS40115',[Datoshojasetcs40115Controller::class,'pdfprint'])->name('pdfprintSETCS40115');
Route::get('/printindexSETCS40115',[Datoshojasetcs40115Controller::class,'printindex'])->name('printindexSETCS40115');
Route::get('/printreversoSETCS40115',[Reversosetcs40115Controller::class,'printreverso'])->name('printreversoSETCS40115');
Route::get('/pdfReversoSETCS40115',[Reversosetcs40115Controller::class,'pdfReverso'])->name('pdfReversoSETCS40115');
//Rutas F7-SETCS-ELE-40-L1-01-6
Route::resource('F7-SETCS-ELE-40-L1-01-1-6', 'App\Http\Controllers\Datoshojasetcs40116Controller');
Route::resource('reversoSETCS40116', 'App\Http\Controllers\Reversosetcs40116Controller');
Route::get('/checkSETCS40116',[App\Http\Controllers\Datoshojasetcs40116Controller::class,'check'])->name('checkSETCS40116');
Route::put('/finalcheckSETCS40116/{id}',[App\Http\Controllers\Datoshojasetcs40116Controller::class,'finalcheck'])->name('finalcheckSETCS40116');
Route::get('/edit2SETCS40116/{id}',[App\Http\Controllers\Datoshojasetcs40116Controller::class,'edit2'])->name('edit2SETCS40116');
Route::put('/update2SETCS40116/{id}',[App\Http\Controllers\Datoshojasetcs40116Controller::class,'update2'])->name('update2SETCS40116');
Route::get('/pdfprintSETCS40116',[App\Http\Controllers\Datoshojasetcs40116Controller::class,'pdfprint'])->name('pdfprintSETCS40116');
Route::get('/printindexSETCS40116',[App\Http\Controllers\Datoshojasetcs40116Controller::class,'printindex'])->name('printindexSETCS40116');
Route::get('/printreversoSETCS40116',[App\Http\Controllers\Reversosetcs40116Controller::class,'printreverso'])->name('printreversoSETCS40116');
Route::get('/pdfReversoSETCS40116',[App\Http\Controllers\Reversosetcs40116Controller::class,'pdfReverso'])->name('pdfReversoSETCS40116');
//Rutas F7-SETCS-ELE-40-L1-02-1
Route::resource('F7-SETCS-ELE-40-L1-02-1-1', 'App\Http\Controllers\Datoshojasetcs40211Controller');
Route::resource('reversoSETCS40211', 'App\Http\Controllers\Reversosetcs40211Controller');
Route::get('/checkSETCS40211',[Datoshojasetcs40211Controller::class,'check'])->name('checkSETCS40211');
Route::put('/finalcheckSETCS40211/{id}',[Datoshojasetcs40211Controller::class,'finalcheck'])->name('finalcheckSETCS40211');
Route::get('/edit2SETCS40211/{id}',[Datoshojasetcs40211Controller::class,'edit2'])->name('edit2SETCS40211');
Route::put('/update2SETCS40211/{id}',[Datoshojasetcs40211Controller::class,'update2'])->name('update2SETCS40211');
Route::get('/pdfprintSETCS40211',[Datoshojasetcs40211Controller::class,'pdfprint'])->name('pdfprintSETCS40211');
Route::get('/printindexSETCS40211',[Datoshojasetcs40211Controller::class,'printindex'])->name('printindexSETCS40211');
Route::get('/printreversoSETCS40211',[Reversosetcs40211Controller::class,'printreverso'])->name('printreversoSETCS40211');
Route::get('/pdfReversoSETCS40211',[Reversosetcs40211Controller::class,'pdfReverso'])->name('pdfReversoSETCS40211');
//Rutas F7-SETCS-ELE-40-L1-02-2
Route::resource('F7-SETCS-ELE-40-L1-02-1-2', 'App\Http\Controllers\Datoshojasetcs40212Controller');
Route::resource('reversoSETCS40212', 'App\Http\Controllers\Reversosetcs40212Controller');
Route::get('/checkSETCS40212',[Datoshojasetcs40212Controller::class,'check'])->name('checkSETCS40212');
Route::put('/finalcheckSETCS40212/{id}',[Datoshojasetcs40212Controller::class,'finalcheck'])->name('finalcheckSETCS40212');
Route::get('/edit2SETCS40212/{id}',[Datoshojasetcs40212Controller::class,'edit2'])->name('edit2SETCS40212');
Route::put('/update2SETCS40212/{id}',[Datoshojasetcs40212Controller::class,'update2'])->name('update2SETCS40212');
Route::get('/pdfprintSETCS40212',[Datoshojasetcs40212Controller::class,'pdfprint'])->name('pdfprintSETCS40212');
Route::get('/printindexSETCS40212',[Datoshojasetcs40212Controller::class,'printindex'])->name('printindexSETCS40212');
Route::get('/printreversoSETCS40212',[Reversosetcs40212Controller::class,'printreverso'])->name('printreversoSETCS40212');
Route::get('/pdfReversoSETCS40212',[Reversosetcs40212Controller::class,'pdfReverso'])->name('pdfReversoSETCS40212');
//Rutas F7-SETCS-ELE-40-L1-02-3
Route::resource('F7-SETCS-ELE-40-L1-02-1-3', 'App\Http\Controllers\Datoshojasetcs40213Controller');
Route::resource('reversoSETCS40213', 'App\Http\Controllers\Reversosetcs40213Controller');
Route::get('/checkSETCS40213',[Datoshojasetcs40213Controller::class,'check'])->name('checkSETCS40213');
Route::put('/finalcheckSETCS40213/{id}',[Datoshojasetcs40213Controller::class,'finalcheck'])->name('finalcheckSETCS40213');
Route::get('/edit2SETCS40213/{id}',[Datoshojasetcs40213Controller::class,'edit2'])->name('edit2SETCS40213');
Route::put('/update2SETCS40213/{id}',[Datoshojasetcs40213Controller::class,'update2'])->name('update2SETCS40213');
Route::get('/pdfprintSETCS40213',[Datoshojasetcs40213Controller::class,'pdfprint'])->name('pdfprintSETCS40213');
Route::get('/printindexSETCS40213',[Datoshojasetcs40213Controller::class,'printindex'])->name('printindexSETCS40213');
Route::get('/printreversoSETCS40213',[Reversosetcs40213Controller::class,'printreverso'])->name('printreversoSETCS40213');
Route::get('/pdfReversoSETCS40213',[Reversosetcs40213Controller::class,'pdfReverso'])->name('pdfReversoSETCS40213');
//Rutas F7-SETCS-ELE-40-L1-02-4
Route::resource('F7-SETCS-ELE-40-L1-02-1-4', 'App\Http\Controllers\Datoshojasetcs40214Controller');
Route::resource('reversoSETCS40214', 'App\Http\Controllers\Reversosetcs40214Controller');
Route::get('/checkSETCS40214',[Datoshojasetcs40214Controller::class,'check'])->name('checkSETCS40214');
Route::put('/finalcheckSETCS40214/{id}',[Datoshojasetcs40214Controller::class,'finalcheck'])->name('finalcheckSETCS40214');
Route::get('/edit2SETCS40214/{id}',[Datoshojasetcs40214Controller::class,'edit2'])->name('edit2SETCS40214');
Route::put('/update2SETCS40214/{id}',[Datoshojasetcs40214Controller::class,'update2'])->name('update2SETCS40214');
Route::get('/pdfprintSETCS40214',[Datoshojasetcs40214Controller::class,'pdfprint'])->name('pdfprintSETCS40214');
Route::get('/printindexSETCS40214',[Datoshojasetcs40214Controller::class,'printindex'])->name('printindexSETCS40214');
Route::get('/printreversoSETCS40214',[Reversosetcs40214Controller::class,'printreverso'])->name('printreversoSETCS40214');
Route::get('/pdfReversoSETCS40214',[Reversosetcs40214Controller::class,'pdfReverso'])->name('pdfReversoSETCS40214');
//Rutas F7-SETCS-ELE-40-L1-02-5
Route::resource('F7-SETCS-ELE-40-L1-02-1-5', 'App\Http\Controllers\Datoshojasetcs40215Controller');
Route::resource('reversoSETCS40215', 'App\Http\Controllers\Reversosetcs40215Controller');
Route::get('/checkSETCS40215',[Datoshojasetcs40215Controller::class,'check'])->name('checkSETCS40215');
Route::put('/finalcheckSETCS40215/{id}',[Datoshojasetcs40215Controller::class,'finalcheck'])->name('finalcheckSETCS40215');
Route::get('/edit2SETCS40215/{id}',[Datoshojasetcs40215Controller::class,'edit2'])->name('edit2SETCS40215');
Route::put('/update2SETCS40215/{id}',[Datoshojasetcs40215Controller::class,'update2'])->name('update2SETCS40215');
Route::get('/pdfprintSETCS40215',[Datoshojasetcs40215Controller::class,'pdfprint'])->name('pdfprintSETCS40215');
Route::get('/printindexSETCS40215',[Datoshojasetcs40215Controller::class,'printindex'])->name('printindexSETCS40215');
Route::get('/printreversoSETCS40215',[Reversosetcs40215Controller::class,'printreverso'])->name('printreversoSETCS402145');
Route::get('/pdfReversoSETCS40215',[Reversosetcs40215Controller::class,'pdfReverso'])->name('pdfReversoSETCS40215');
//Rutas F7-SETCS-ELE-40-L1-02-6
Route::resource('F7-SETCS-ELE-40-L1-02-1-6', 'App\Http\Controllers\Datoshojasetcs40216Controller');
Route::resource('reversoSETCS40216', 'App\Http\Controllers\Reversosetcs40216Controller');
Route::get('/checkSETCS40216',[App\Http\Controllers\Datoshojasetcs40216Controller::class,'check'])->name('checkSETCS40216');
Route::put('/finalcheckSETCS40216/{id}',[App\Http\Controllers\Datoshojasetcs40216Controller::class,'finalcheck'])->name('finalcheckSETCS40216');
Route::get('/edit2SETCS40216/{id}',[App\Http\Controllers\Datoshojasetcs40216Controller::class,'edit2'])->name('edit2SETCS40216');
Route::put('/update2SETCS40216/{id}',[App\Http\Controllers\Datoshojasetcs40216Controller::class,'update2'])->name('update2SETCS40216');
Route::get('/pdfprintSETCS40216',[App\Http\Controllers\Datoshojasetcs40216Controller::class,'pdfprint'])->name('pdfprintSETCS40216');
Route::get('/printindexSETCS40216',[App\Http\Controllers\Datoshojasetcs40216Controller::class,'printindex'])->name('printindexSETCS40216');
Route::get('/printreversoSETCS40216',[App\Http\Controllers\Reversosetcs40216Controller::class,'printreverso'])->name('printreversoSETCS402146');
Route::get('/pdfReversoSETCS40216',[App\Http\Controllers\Reversosetcs40216Controller::class,'pdfReverso'])->name('pdfReversoSETCS40216');
//Rutas F7-SETCS-ELE-60-L1-01
Route::resource('F7-SETCS-ELE-60-L1-01-T1', 'App\Http\Controllers\Datoshojasetcs606111H1ControllerT1');
Route::resource('reversoSETCS606113H1T1', 'App\Http\Controllers\Reversosetcs606111H1ControllerT1');
Route::get('/checkSETCS606113H1T1',[App\Http\Controllers\Datoshojasetcs606111H1Controllert1::class,'check'])->name('checkSETCS606113H1T1');
Route::put('/finalcheckSETCS606113H1T1/{id}',[App\Http\Controllers\Datoshojasetcs606111H1Controllert1::class,'finalcheck'])->name('finalcheckSETCS606113H1T1');
Route::get('/edit2SETCS606113H1T1/{id}',[App\Http\Controllers\Datoshojasetcs606111H1Controllert1::class,'edit2'])->name('edit2SETCS606113H1T1');
Route::put('/update2SETCS606113H1T1/{id}',[App\Http\Controllers\Datoshojasetcs606111H1Controllert1::class,'update2'])->name('update2SETCS606113H1T1');
Route::get('/pdfprintSETCS606113H1T1',[App\Http\Controllers\Datoshojasetcs606111H1Controllert1::class,'pdfprint'])->name('pdfprintSETCS606113H1T1');
Route::get('/printindexSETCS606113H1T1',[App\Http\Controllers\Datoshojasetcs606111H1Controllert1::class,'printindex'])->name('printindexSETCS606113H1T1');
Route::get('/printreversoSETCS606113H1T1',[App\Http\Controllers\Reversosetcs606111H1Controllert1::class,'printreverso'])->name('printreversoSETCS606113H1T1');
Route::get('/pdfReversoSETCS606113H1T1',[App\Http\Controllers\Reversosetcs606111H1Controllert1::class,'pdfReverso'])->name('pdfReversoSETCS606113H1T1');
//Rutas F7-SETCS-ELE-60-L1-06-1-1-1
Route::resource('F7-SETCS-ELE-60-L1-06-1-1-1', 'App\Http\Controllers\Datoshojasetcs606111Controller');
Route::resource('reversoSETCS606111', 'App\Http\Controllers\Reversosetcs606111Controller');
Route::get('/checkSETCS606111',[Datoshojasetcs606111Controller::class,'check'])->name('checkSETCS606111');
Route::put('/finalcheckSETCS606111/{id}',[Datoshojasetcs606111Controller::class,'finalcheck'])->name('finalcheckSETCS606111');
Route::get('/edit2SETCS606111/{id}',[Datoshojasetcs606111Controller::class,'edit2'])->name('edit2SETCS606111');
Route::put('/update2SETCS606111/{id}',[Datoshojasetcs606111Controller::class,'update2'])->name('update2SETCS606111');
Route::get('/pdfprintSETCS606111',[Datoshojasetcs606111Controller::class,'pdfprint'])->name('pdfprintSETCS606111');
Route::get('/printindexSETCS606111',[Datoshojasetcs606111Controller::class,'printindex'])->name('printindexSETCS606111');
Route::get('/printreversoSETCS606111',[Reversosetcs606111Controller::class,'printreverso'])->name('printreversoSETCS606111');
Route::get('/pdfReversoSETCS606111',[Reversosetcs606111Controller::class,'pdfReverso'])->name('pdfReversoSETCS606111');
//Rutas F7-SETCS-ELE-60-L1-06-1-2-1
Route::resource('F7-SETCS-ELE-60-L1-06-1-2-1', 'App\Http\Controllers\Datoshojasetcs606121Controller');
Route::resource('reversoSETCS606121', 'App\Http\Controllers\Reversosetcs606121Controller');
Route::get('/checkSETCS606121',[Datoshojasetcs606121Controller::class,'check'])->name('checkSETCS606121');
Route::put('/finalcheckSETCS606121/{id}',[Datoshojasetcs606121Controller::class,'finalcheck'])->name('finalcheckSETCS606121');
Route::get('/edit2SETCS606121/{id}',[Datoshojasetcs606121Controller::class,'edit2'])->name('edit2SETCS606121');
Route::put('/update2SETCS606121/{id}',[Datoshojasetcs606121Controller::class,'update2'])->name('update2SETCS606121');
Route::get('/pdfprintSETCS606121',[Datoshojasetcs606121Controller::class,'pdfprint'])->name('pdfprintSETCS606121');
Route::get('/printindexSETCS606121',[Datoshojasetcs606121Controller::class,'printindex'])->name('printindexSETCS606121');
Route::get('/printreversoSETCS606121',[Reversosetcs606121Controller::class,'printreverso'])->name('printreversoSETCS606121');
Route::get('/pdfReversoSETCS606121',[Reversosetcs606121Controller::class,'pdfReverso'])->name('pdfReversoSETCS606121');
//Rutas F7-SETCS-ELE-60-L1-06-2-1-1
Route::resource('F7-SETCS-ELE-60-L1-06-2-1-1', 'App\Http\Controllers\Datoshojasetcs606211Controller');
Route::resource('reversoSETCS606211', 'App\Http\Controllers\Reversosetcs606211Controller');
Route::get('/checkSETCS606211',[Datoshojasetcs606211Controller::class,'check'])->name('checkSETCS606211');
Route::put('/finalcheckSETCS606211/{id}',[Datoshojasetcs606211Controller::class,'finalcheck'])->name('finalcheckSETCS606211');
Route::get('/edit2SETCS606211/{id}',[Datoshojasetcs606211Controller::class,'edit2'])->name('edit2SETCS606211');
Route::put('/update2SETCS606211/{id}',[Datoshojasetcs606211Controller::class,'update2'])->name('update2SETCS606211');
Route::get('/pdfprintSETCS606211',[Datoshojasetcs606211Controller::class,'pdfprint'])->name('pdfprintSETCS606211');
Route::get('/printindexSETCS606211',[Datoshojasetcs606211Controller::class,'printindex'])->name('printindexSETCS606211');
Route::get('/printreversoSETCS606211',[Reversosetcs606211Controller::class,'printreverso'])->name('printreversoSETCS606211');
Route::get('/pdfReversoSETCS606211',[Reversosetcs606211Controller::class,'pdfReverso'])->name('pdfReversoSETCS606211');
//Rutas F7-SETCS-ELE-60-L1-06-2-2-1
Route::resource('F7-SETCS-ELE-60-L1-06-2-2-1', 'App\Http\Controllers\Datoshojasetcs606221Controller');
Route::resource('reversoSETCS606221', 'App\Http\Controllers\Reversosetcs606221Controller');
Route::get('/checkSETCS606221',[Datoshojasetcs606221Controller::class,'check'])->name('checkSETCS606221');
Route::put('/finalcheckSETCS606221/{id}',[Datoshojasetcs606221Controller::class,'finalcheck'])->name('finalcheckSETCS606221');
Route::get('/edit2SETCS606221/{id}',[Datoshojasetcs606221Controller::class,'edit2'])->name('edit2SETCS606221');
Route::put('/update2SETCS606221/{id}',[Datoshojasetcs606221Controller::class,'update2'])->name('update2SETCS606221');
Route::get('/pdfprintSETCS606221',[Datoshojasetcs606221Controller::class,'pdfprint'])->name('pdfprintSETCS606221');
Route::get('/printindexSETCS606221',[Datoshojasetcs606221Controller::class,'printindex'])->name('printindexSETCS606221');
Route::get('/printreversoSETCS606221',[Reversosetcs606221Controller::class,'printreverso'])->name('printreversoSETCS606221');
Route::get('/pdfReversoSETCS606221',[Reversosetcs606221Controller::class,'pdfReverso'])->name('pdfReversoSETCS606221');
//Rutas F7-SETCS-ELE-60-L1-06-3-1-1
Route::resource('F7-SETCS-ELE-60-L1-06-3-1-1', 'App\Http\Controllers\Datoshojasetcs606311Controller');
Route::resource('reversoSETCS606311', 'App\Http\Controllers\Reversosetcs606311Controller');
Route::get('/checkSETCS606311',[Datoshojasetcs606311Controller::class,'check'])->name('checkSETCS606311');
Route::put('/finalcheckSETCS606311/{id}',[Datoshojasetcs606311Controller::class,'finalcheck'])->name('finalcheckSETCS606311');
Route::get('/edit2SETCS606311/{id}',[Datoshojasetcs606311Controller::class,'edit2'])->name('edit2SETCS606311');
Route::put('/update2SETCS606311/{id}',[Datoshojasetcs606311Controller::class,'update2'])->name('update2SETCS606311');
Route::get('/pdfprintSETCS606311',[Datoshojasetcs606311Controller::class,'pdfprint'])->name('pdfprintSETCS606311');
Route::get('/printindexSETCS606311',[Datoshojasetcs606311Controller::class,'printindex'])->name('printindexSETCS606311');
Route::get('/printreversoSETCS606311',[Reversosetcs606311Controller::class,'printreverso'])->name('printreversoSETCS606311');
Route::get('/pdfReversoSETCS606311',[Reversosetcs606311Controller::class,'pdfReverso'])->name('pdfReversoSETCS606311');
//Rutas F7-SETCS-ELE-60-L1-06-3-2-1
Route::resource('F7-SETCS-ELE-60-L1-06-3-2-1', 'App\Http\Controllers\Datoshojasetcs606321Controller');
Route::resource('reversoSETCS606321', 'App\Http\Controllers\Reversosetcs606321Controller');
Route::get('/checkSETCS606321',[Datoshojasetcs606321Controller::class,'check'])->name('checkSETCS606321');
Route::put('/finalcheckSETCS606321/{id}',[Datoshojasetcs606321Controller::class,'finalcheck'])->name('finalcheckSETCS606321');
Route::get('/edit2SETCS606321/{id}',[Datoshojasetcs606321Controller::class,'edit2'])->name('edit2SETCS606321');
Route::put('/update2SETCS606321/{id}',[Datoshojasetcs606321Controller::class,'update2'])->name('update2SETCS606321');
Route::get('/pdfprintSETCS606321',[Datoshojasetcs606321Controller::class,'pdfprint'])->name('pdfprintSETCS606321');
Route::get('/printindexSETCS606321',[Datoshojasetcs606321Controller::class,'printindex'])->name('printindexSETCS606321');
Route::get('/printreversoSETCS606321',[Reversosetcs606321Controller::class,'printreverso'])->name('printreversoSETCS606321');
Route::get('/pdfReversoSETCS606321',[Reversosetcs606321Controller::class,'pdfReverso'])->name('pdfReversoSETCS606321');
//Rutas F7-SETCS-ELE-60-L1-06-4-1-1
Route::resource('F7-SETCS-ELE-60-L1-06-4-1-1', 'App\Http\Controllers\Datoshojasetcs606411Controller');
Route::resource('reversoSETCS606411', 'App\Http\Controllers\Reversosetcs606411Controller');
Route::get('/checkSETCS606411',[Datoshojasetcs606411Controller::class,'check'])->name('checkSETCS606411');
Route::put('/finalcheckSETCS606411/{id}',[Datoshojasetcs606411Controller::class,'finalcheck'])->name('finalcheckSETCS606411');
Route::get('/edit2SETCS606411/{id}',[Datoshojasetcs606411Controller::class,'edit2'])->name('edit2SETCS606411');
Route::put('/update2SETCS606411/{id}',[Datoshojasetcs606411Controller::class,'update2'])->name('update2SETCS606411');
Route::get('/pdfprintSETCS606411',[Datoshojasetcs606411Controller::class,'pdfprint'])->name('pdfprintSETCS606411');
Route::get('/printindexSETCS606411',[Datoshojasetcs606411Controller::class,'printindex'])->name('printindexSETCS606411');
Route::get('/printreversoSETCS606411',[Reversosetcs606411Controller::class,'printreverso'])->name('printreversoSETCS606411');
Route::get('/pdfReversoSETCS606411',[Reversosetcs606411Controller::class,'pdfReverso'])->name('pdfReversoSETCS606411');
//Rutas F7-SETCS-ELE-60-L1-06-4-2-1
Route::resource('F7-SETCS-ELE-60-L1-06-4-2-1', 'App\Http\Controllers\Datoshojasetcs606421Controller');
Route::resource('reversoSETCS606421', 'App\Http\Controllers\Reversosetcs606421Controller');
Route::get('/checkSETCS606421',[Datoshojasetcs606421Controller::class,'check'])->name('checkSETCS606421');
Route::put('/finalcheckSETCS606421/{id}',[Datoshojasetcs606421Controller::class,'finalcheck'])->name('finalcheckSETCS606421');
Route::get('/edit2SETCS606421/{id}',[Datoshojasetcs606421Controller::class,'edit2'])->name('edit2SETCS606421');
Route::put('/update2SETCS606421/{id}',[Datoshojasetcs606421Controller::class,'update2'])->name('update2SETCS606421');
Route::get('/pdfprintSETCS606421',[Datoshojasetcs606421Controller::class,'pdfprint'])->name('pdfprintSETCS606421');
Route::get('/printindexSETCS606421',[Datoshojasetcs606421Controller::class,'printindex'])->name('printindexSETCS606421');
Route::get('/printreversoSETCS606421',[Reversosetcs606421Controller::class,'printreverso'])->name('printreversoSETCS606421');
Route::get('/pdfReversoSETCS606421',[Reversosetcs606421Controller::class,'pdfReverso'])->name('pdfReversoSETCS606421');
//Rutas F7-SETCS-ELE-60-L1-06-5-1-1
Route::resource('F7-SETCS-ELE-60-L1-06-5-1-1', 'App\Http\Controllers\Datoshojasetcs606511Controller');
Route::resource('reversoSETCS606511', 'App\Http\Controllers\Reversosetcs606511Controller');
Route::get('/checkSETCS606511',[Datoshojasetcs606511Controller::class,'check'])->name('checkSETCS606511');
Route::put('/finalcheckSETCS606511/{id}',[Datoshojasetcs606511Controller::class,'finalcheck'])->name('finalcheckSETCS606511');
Route::get('/edit2SETCS606511/{id}',[Datoshojasetcs606511Controller::class,'edit2'])->name('edit2SETCS606511');
Route::put('/update2SETCS606511/{id}',[Datoshojasetcs606511Controller::class,'update2'])->name('update2SETCS606511');
Route::get('/pdfprintSETCS606511',[Datoshojasetcs606511Controller::class,'pdfprint'])->name('pdfprintSETCS606511');
Route::get('/printindexSETCS606511',[Datoshojasetcs606511Controller::class,'printindex'])->name('printindexSETCS606511');
Route::get('/printreversoSETCS606511',[Reversosetcs606511Controller::class,'printreverso'])->name('printreversoSETCS606511');
Route::get('/pdfReversoSETCS606511',[Reversosetcs606511Controller::class,'pdfReverso'])->name('pdfReversoSETCS606511');
//Rutas F7-SETCS-ELE-60-L1-06-5-2-1
Route::resource('F7-SETCS-ELE-60-L1-06-5-2-1', 'App\Http\Controllers\Datoshojasetcs606521Controller');
Route::resource('reversoSETCS606521', 'App\Http\Controllers\Reversosetcs606521Controller');
Route::get('/checkSETCS606521',[Datoshojasetcs606521Controller::class,'check'])->name('checkSETCS606521');
Route::put('/finalcheckSETCS606521/{id}',[Datoshojasetcs606521Controller::class,'finalcheck'])->name('finalcheckSETCS606521');
Route::get('/edit2SETCS606521/{id}',[Datoshojasetcs606521Controller::class,'edit2'])->name('edit2SETCS606521');
Route::put('/update2SETCS606521/{id}',[Datoshojasetcs606521Controller::class,'update2'])->name('update2SETCS606521');
Route::get('/pdfprintSETCS606521',[Datoshojasetcs606521Controller::class,'pdfprint'])->name('pdfprintSETCS606521');
Route::get('/printindexSETCS606521',[Datoshojasetcs606521Controller::class,'printindex'])->name('printindexSETCS606521');
Route::get('/printreversoSETCS606521',[Reversosetcs606521Controller::class,'printreverso'])->name('printreversoSETCS606521');
Route::get('/pdfReversoSETCS606521',[Reversosetcs606521Controller::class,'pdfReverso'])->name('pdfReversoSETCS606521');
//Rutas F7-SETCS-ELE-60-L1-06-6-1-1
Route::resource('F7-SETCS-ELE-60-L1-06-6-1-1', 'App\Http\Controllers\Datoshojasetcs606611Controller');
Route::resource('reversoSETCS606611', 'App\Http\Controllers\Reversosetcs606611Controller');
Route::get('/checkSETCS606611',[Datoshojasetcs606611Controller::class,'check'])->name('checkSETCS606611');
Route::put('/finalcheckSETCS606611/{id}',[Datoshojasetcs606611Controller::class,'finalcheck'])->name('finalcheckSETCS606611');
Route::get('/edit2SETCS606611/{id}',[Datoshojasetcs606611Controller::class,'edit2'])->name('edit2SETCS606611');
Route::put('/update2SETCS606611/{id}',[Datoshojasetcs606611Controller::class,'update2'])->name('update2SETCS606611');
Route::get('/pdfprintSETCS606611',[Datoshojasetcs606611Controller::class,'pdfprint'])->name('pdfprintSETCS606611');
Route::get('/printindexSETCS606611',[Datoshojasetcs606611Controller::class,'printindex'])->name('printindexSETCS606611');
Route::get('/printreversoSETCS606611',[Reversosetcs606611Controller::class,'printreverso'])->name('printreversoSETCS606611');
Route::get('/pdfReversoSETCS606611',[Reversosetcs606611Controller::class,'pdfReverso'])->name('pdfReversoSETCS606611');
//Rutas F7-SETCS-ELE-60-L1-06-6-2-1
Route::resource('F7-SETCS-ELE-60-L1-06-6-2-1', 'App\Http\Controllers\Datoshojasetcs606621Controller');
Route::resource('reversoSETCS606621', 'App\Http\Controllers\Reversosetcs606621Controller');
Route::get('/checkSETCS606621',[Datoshojasetcs606621Controller::class,'check'])->name('checkSETCS606621');
Route::put('/finalcheckSETCS606621/{id}',[Datoshojasetcs606621Controller::class,'finalcheck'])->name('finalcheckSETCS606621');
Route::get('/edit2SETCS606621/{id}',[Datoshojasetcs606621Controller::class,'edit2'])->name('edit2SETCS606621');
Route::put('/update2SETCS606621/{id}',[Datoshojasetcs606621Controller::class,'update2'])->name('update2SETCS606621');
Route::get('/pdfprintSETCS606621',[Datoshojasetcs606621Controller::class,'pdfprint'])->name('pdfprintSETCS606621');
Route::get('/printindexSETCS606621',[Datoshojasetcs606621Controller::class,'printindex'])->name('printindexSETCS606621');
Route::get('/printreversoSETCS606621',[Reversosetcs606621Controller::class,'printreverso'])->name('printreversoSETCS606621');
Route::get('/pdfReversoSETCS606621',[Reversosetcs606621Controller::class,'pdfReverso'])->name('pdfReversoSETCS606621');
//Rutas F7-SETCS-ELE-60-L1-06-7-1-1
Route::resource('F7-SETCS-ELE-60-L1-06-7-1-1', 'App\Http\Controllers\Datoshojasetcs606711Controller');
Route::resource('reversoSETCS606711', 'App\Http\Controllers\Reversosetcs606711Controller');
Route::get('/checkSETCS606711',[App\Http\Controllers\Datoshojasetcs606711Controller::class,'check'])->name('checkSETCS606711');
Route::put('/finalcheckSETCS606711/{id}',[App\Http\Controllers\Datoshojasetcs606711Controller::class,'finalcheck'])->name('finalcheckSETCS606711');
Route::get('/edit2SETCS606711/{id}',[App\Http\Controllers\Datoshojasetcs606711Controller::class,'edit2'])->name('edit2SETCS606711');
Route::put('/update2SETCS606711/{id}',[App\Http\Controllers\Datoshojasetcs606711Controller::class,'update2'])->name('update2SETCS606711');
Route::get('/pdfprintSETCS606711',[App\Http\Controllers\Datoshojasetcs606711Controller::class,'pdfprint'])->name('pdfprintSETCS606711');
Route::get('/printindexSETCS606711',[App\Http\Controllers\Datoshojasetcs606711Controller::class,'printindex'])->name('printindexSETCS606711');
Route::get('/printreversoSETCS606711',[App\Http\Controllers\Reversosetcs606711Controller::class,'printreverso'])->name('printreversoSETCS606711');
Route::get('/pdfReversoSETCS606711',[App\Http\Controllers\Reversosetcs606711Controller::class,'pdfReverso'])->name('pdfReversoSETCS606711');
//Rutas F7-SETCS-ELE-60-L1-06-7-2-1
Route::resource('F7-SETCS-ELE-60-L1-06-7-2-1', 'App\Http\Controllers\Datoshojasetcs606721Controller');
Route::resource('reversoSETCS606721', 'App\Http\Controllers\Reversosetcs606721Controller');
Route::get('/checkSETCS606721',[App\Http\Controllers\Datoshojasetcs606721Controller::class,'check'])->name('checkSETCS606721');
Route::put('/finalcheckSETCS606721/{id}',[App\Http\Controllers\Datoshojasetcs606721Controller::class,'finalcheck'])->name('finalcheckSETCS606721');
Route::get('/edit2SETCS606721/{id}',[App\Http\Controllers\Datoshojasetcs606721Controller::class,'edit2'])->name('edit2SETCS606721');
Route::put('/update2SETCS606721/{id}',[App\Http\Controllers\Datoshojasetcs606721Controller::class,'update2'])->name('update2SETCS606721');
Route::get('/pdfprintSETCS606721',[App\Http\Controllers\Datoshojasetcs606721Controller::class,'pdfprint'])->name('pdfprintSETCS606721');
Route::get('/printindexSETCS606721',[App\Http\Controllers\Datoshojasetcs606721Controller::class,'printindex'])->name('printindexSETCS606721');
Route::get('/printreversoSETCS606721',[App\Http\Controllers\Reversosetcs606721Controller::class,'printreverso'])->name('printreversoSETCS606721');
Route::get('/pdfReversoSETCS606721',[App\Http\Controllers\Reversosetcs606721Controller::class,'pdfReverso'])->name('pdfReversoSETCS606721');
//Rutas F7-SETCS-ELE-60-L1-07-1
Route::resource('F7-SETCS-ELE-60-L1-07-T1', 'App\Http\Controllers\Datoshojasetcs606111H7ControllerT1');
Route::resource('reversoSETCS606113H7T1', 'App\Http\Controllers\Reversosetcs606111H7ControllerT1');
Route::get('/checkSETCS606113H7T1',[App\Http\Controllers\Datoshojasetcs606111H7Controllert1::class,'check'])->name('checkSETCS606113H7T1');
Route::put('/finalcheckSETCS606113H7T1/{id}',[App\Http\Controllers\Datoshojasetcs606111H7Controllert1::class,'finalcheck'])->name('finalcheckSETCS606113H7T1');
Route::get('/edit2SETCS606113H7T1/{id}',[App\Http\Controllers\Datoshojasetcs606111H7Controllert1::class,'edit2'])->name('edit2SETCS606113H7T1');
Route::put('/update2SETCS606113H7T1/{id}',[App\Http\Controllers\Datoshojasetcs606111H7Controllert1::class,'update2'])->name('update2SETCS606113H7T1');
Route::get('/pdfprintSETCS606113H7T1',[App\Http\Controllers\Datoshojasetcs606111H7Controllert1::class,'pdfprint'])->name('pdfprintSETCS606113H7T1');
Route::get('/printindexSETCS606113H7T1',[App\Http\Controllers\Datoshojasetcs606111H7Controllert1::class,'printindex'])->name('printindexSETCS606113H7T1');
Route::get('/printreversoSETCS606113H7T1',[App\Http\Controllers\Reversosetcs606111H7Controllert1::class,'printreverso'])->name('printreversoSETCS606113H7T1');
Route::get('/pdfReversoSETCS606113H7T1',[App\Http\Controllers\Reversosetcs606111H7Controllert1::class,'pdfReverso'])->name('pdfReversoSETCS606113H7T1');
//Rutas F7-SETCS-ELE-60-L1-07-2
Route::resource('F7-SETCS-ELE-60-L1-07-2T1', 'App\Http\Controllers\Datoshojasetcs606111H72ControllerT1');
Route::resource('reversoSETCS606113H72T1', 'App\Http\Controllers\Reversosetcs606111H72ControllerT1');
Route::get('/checkSETCS606113H72T1',[App\Http\Controllers\Datoshojasetcs606111H72Controllert1::class,'check'])->name('checkSETCS606113H72T1');
Route::put('/finalcheckSETCS606113H72T1/{id}',[App\Http\Controllers\Datoshojasetcs606111H72Controllert1::class,'finalcheck'])->name('finalcheckSETCS606113H72T1');
Route::get('/edit2SETCS606113H72T1/{id}',[App\Http\Controllers\Datoshojasetcs606111H72Controllert1::class,'edit2'])->name('edit2SETCS606113H72T1');
Route::put('/update2SETCS606113H72T1/{id}',[App\Http\Controllers\Datoshojasetcs606111H72Controllert1::class,'update2'])->name('update2SETCS606113H72T1');
Route::get('/pdfprintSETCS606113H72T1',[App\Http\Controllers\Datoshojasetcs606111H72Controllert1::class,'pdfprint'])->name('pdfprintSETCS606113H72T1');
Route::get('/printindexSETCS606113H72T1',[App\Http\Controllers\Datoshojasetcs606111H72Controllert1::class,'printindex'])->name('printindexSETCS606113H72T1');
Route::get('/printreversoSETCS606113H72T1',[App\Http\Controllers\Reversosetcs606111H72Controllert1::class,'printreverso'])->name('printreversoSETCS606113H72T1');
Route::get('/pdfReversoSETCS606113H72T1',[App\Http\Controllers\Reversosetcs606111H72Controllert1::class,'pdfReverso'])->name('pdfReversoSETCS606113H72T1');
//Rutas F7-SETCS-ELE-60-L1-07-3
Route::resource('F7-SETCS-ELE-60-L1-07-3T1', 'App\Http\Controllers\Datoshojasetcs606111H73ControllerT1');
Route::resource('reversoSETCS606113H73T1', 'App\Http\Controllers\Reversosetcs606111H73ControllerT1');
Route::get('/checkSETCS606113H73T1',[App\Http\Controllers\Datoshojasetcs606111H73Controllert1::class,'check'])->name('checkSETCS606113H73T1');
Route::put('/finalcheckSETCS606113H73T1/{id}',[App\Http\Controllers\Datoshojasetcs606111H73Controllert1::class,'finalcheck'])->name('finalcheckSETCS606113H73T1');
Route::get('/edit2SETCS606113H73T1/{id}',[App\Http\Controllers\Datoshojasetcs606111H73Controllert1::class,'edit2'])->name('edit2SETCS606113H73T1');
Route::put('/update2SETCS606113H73T1/{id}',[App\Http\Controllers\Datoshojasetcs606111H73Controllert1::class,'update2'])->name('update2SETCS606113H73T1');
Route::get('/pdfprintSETCS606113H73T1',[App\Http\Controllers\Datoshojasetcs606111H73Controllert1::class,'pdfprint'])->name('pdfprintSETCS606113H73T1');
Route::get('/printindexSETCS606113H73T1',[App\Http\Controllers\Datoshojasetcs606111H73Controllert1::class,'printindex'])->name('printindexSETCS606113H73T1');
Route::get('/printreversoSETCS606113H73T1',[App\Http\Controllers\Reversosetcs606111H73Controllert1::class,'printreverso'])->name('printreversoSETCS606113H73T1');
Route::get('/pdfReversoSETCS606113H73T1',[App\Http\Controllers\Reversosetcs606111H73Controllert1::class,'pdfReverso'])->name('pdfReversoSETCS606113H73T1');
//Rutas F7-SETCS-ELE-60-L1-07-4
Route::resource('F7-SETCS-ELE-60-L1-07-4T1', 'App\Http\Controllers\Datoshojasetcs606111H74ControllerT1');
Route::resource('reversoSETCS606113H74T1', 'App\Http\Controllers\Reversosetcs606111H74ControllerT1');
Route::get('/checkSETCS606113H74T1',[App\Http\Controllers\Datoshojasetcs606111H74Controllert1::class,'check'])->name('checkSETCS606113H74T1');
Route::put('/finalcheckSETCS606113H74T1/{id}',[App\Http\Controllers\Datoshojasetcs606111H74Controllert1::class,'finalcheck'])->name('finalcheckSETCS606113H74T1');
Route::get('/edit2SETCS606113H74T1/{id}',[App\Http\Controllers\Datoshojasetcs606111H74Controllert1::class,'edit2'])->name('edit2SETCS606113H74T1');
Route::put('/update2SETCS606113H74T1/{id}',[App\Http\Controllers\Datoshojasetcs606111H74Controllert1::class,'update2'])->name('update2SETCS606113H74T1');
Route::get('/pdfprintSETCS606113H74T1',[App\Http\Controllers\Datoshojasetcs606111H74Controllert1::class,'pdfprint'])->name('pdfprintSETCS606113H74T1');
Route::get('/printindexSETCS606113H74T1',[App\Http\Controllers\Datoshojasetcs606111H74Controllert1::class,'printindex'])->name('printindexSETCS606113H74T1');
Route::get('/printreversoSETCS606113H74T1',[App\Http\Controllers\Reversosetcs606111H74Controllert1::class,'printreverso'])->name('printreversoSETCS606113H74T1');
Route::get('/pdfReversoSETCS606113H74T1',[App\Http\Controllers\Reversosetcs606111H74Controllert1::class,'pdfReverso'])->name('pdfReversoSETCS606113H74T1');
//Rutas F7-SETCS-ELE-60-L1-07-5
Route::resource('F7-SETCS-ELE-60-L1-07-5T1', 'App\Http\Controllers\Datoshojasetcs606111H75ControllerT1');
Route::resource('reversoSETCS606113H75T1', 'App\Http\Controllers\Reversosetcs606111H75ControllerT1');
Route::get('/checkSETCS606113H75T1',[App\Http\Controllers\Datoshojasetcs606111H75Controllert1::class,'check'])->name('checkSETCS606113H75T1');
Route::put('/finalcheckSETCS606113H75T1/{id}',[App\Http\Controllers\Datoshojasetcs606111H75Controllert1::class,'finalcheck'])->name('finalcheckSETCS606113H75T1');
Route::get('/edit2SETCS606113H75T1/{id}',[App\Http\Controllers\Datoshojasetcs606111H75Controllert1::class,'edit2'])->name('edit2SETCS606113H75T1');
Route::put('/update2SETCS606113H75T1/{id}',[App\Http\Controllers\Datoshojasetcs606111H75Controllert1::class,'update2'])->name('update2SETCS606113H75T1');
Route::get('/pdfprintSETCS606113H75T1',[App\Http\Controllers\Datoshojasetcs606111H75Controllert1::class,'pdfprint'])->name('pdfprintSETCS606113H75T1');
Route::get('/printindexSETCS606113H75T1',[App\Http\Controllers\Datoshojasetcs606111H75Controllert1::class,'printindex'])->name('printindexSETCS606113H75T1');
Route::get('/printreversoSETCS606113H75T1',[App\Http\Controllers\Reversosetcs606111H75Controllert1::class,'printreverso'])->name('printreversoSETCS606113H75T1');
Route::get('/pdfReversoSETCS606113H75T1',[App\Http\Controllers\Reversosetcs606111H75Controllert1::class,'pdfReverso'])->name('pdfReversoSETCS606113H75T1');
//Rutas F7-SETCS-ELE-60-L1-07-6
Route::resource('F7-SETCS-ELE-60-L1-07-6T1', 'App\Http\Controllers\Datoshojasetcs606111H76ControllerT1');
Route::resource('reversoSETCS606113H76T1', 'App\Http\Controllers\Reversosetcs606111H76ControllerT1');
Route::get('/checkSETCS606113H76T1',[App\Http\Controllers\Datoshojasetcs606111H76Controllert1::class,'check'])->name('checkSETCS606113H76T1');
Route::put('/finalcheckSETCS606113H76T1/{id}',[App\Http\Controllers\Datoshojasetcs606111H76Controllert1::class,'finalcheck'])->name('finalcheckSETCS606113H76T1');
Route::get('/edit2SETCS606113H76T1/{id}',[App\Http\Controllers\Datoshojasetcs606111H76Controllert1::class,'edit2'])->name('edit2SETCS606113H76T1');
Route::put('/update2SETCS606113H76T1/{id}',[App\Http\Controllers\Datoshojasetcs606111H76Controllert1::class,'update2'])->name('update2SETCS606113H76T1');
Route::get('/pdfprintSETCS606113H76T1',[App\Http\Controllers\Datoshojasetcs606111H76Controllert1::class,'pdfprint'])->name('pdfprintSETCS606113H76T1');
Route::get('/printindexSETCS606113H76T1',[App\Http\Controllers\Datoshojasetcs606111H76Controllert1::class,'printindex'])->name('printindexSETCS606113H76T1');
Route::get('/printreversoSETCS606113H76T1',[App\Http\Controllers\Reversosetcs606111H76Controllert1::class,'printreverso'])->name('printreversoSETCS606113H76T1');
Route::get('/pdfReversoSETCS606113H76T1',[App\Http\Controllers\Reversosetcs606111H76Controllert1::class,'pdfReverso'])->name('pdfReversoSETCS606113H76T1');
//Rutas F7-SETCS-ELE-60-L1-08-1
Route::resource('F7-SETCS-ELE-60-L1-08-1', 'App\Http\Controllers\Datoshojasetcs6081Controller');
Route::resource('reversoSETCS6081', 'App\Http\Controllers\Reversosetcs6081Controller');
Route::get('/checkSETCS6081',[Datoshojasetcs6081Controller::class,'check'])->name('checkSETCS6081');
Route::put('/finalcheckSETCS6081/{id}',[Datoshojasetcs6081Controller::class,'finalcheck'])->name('finalcheckSETCS6081');
Route::get('/edit2SETCS6081/{id}',[Datoshojasetcs6081Controller::class,'edit2'])->name('edit2SETCS6081');
Route::put('/update2SETCS6081/{id}',[Datoshojasetcs6081Controller::class,'update2'])->name('update2SETCS6081');
Route::get('/pdfprintSETCS6081',[Datoshojasetcs6081Controller::class,'pdfprint'])->name('pdfprintSETCS6081');
Route::get('/printindexSETCS6081',[Datoshojasetcs6081Controller::class,'printindex'])->name('printindexSETCS6081');
Route::get('/printreversoSETCS6081',[Reversosetcs6081Controller::class,'printreverso'])->name('printreversoSETCS6081');
Route::get('/pdfReversoSETCS6081',[Reversosetcs6081Controller::class,'pdfReverso'])->name('pdfReversoSETCS6081');
//Rutas F7-SETCS-ELE-100-L1-01-1
Route::resource('F7-SETCS-ELE-100-L1-01-1-1', 'App\Http\Controllers\Datoshojasetcs100111Controller');
Route::resource('reversoSETCS100111', 'App\Http\Controllers\Reversosetcs100111Controller');
Route::get('/checkSETCS100111',[Datoshojasetcs100111Controller::class,'check'])->name('checkSETCS100111');
Route::put('/finalcheckSETCS100111/{id}',[Datoshojasetcs100111Controller::class,'finalcheck'])->name('finalcheckSETCS100111');
Route::get('/edit2SETCS100111/{id}',[Datoshojasetcs100111Controller::class,'edit2'])->name('edit2SETCS100111');
Route::put('/update2SETCS100111/{id}',[Datoshojasetcs100111Controller::class,'update2'])->name('update2SETCS100111');
Route::get('/pdfprintSETCS100111',[Datoshojasetcs100111Controller::class,'pdfprint'])->name('pdfprintSETCS100111');
Route::get('/printindexSETCS100111',[Datoshojasetcs100111Controller::class,'printindex'])->name('printindexSETCS100111');
Route::get('/printreversoSETCS100111',[Reversosetcs100111Controller::class,'printreverso'])->name('printreversoSETCS100111');
Route::get('/pdfReversoSETCS100111',[Reversosetcs100111Controller::class,'pdfReverso'])->name('pdfReversoSETCS100111');
//Rutas F7-SETCS-ELE-100-L1-01-2
Route::resource('F7-SETCS-ELE-100-L1-01-2-1', 'App\Http\Controllers\Datoshojasetcs100121Controller');
Route::resource('reversoSETCS100121', 'App\Http\Controllers\Reversosetcs100121Controller');
Route::get('/checkSETCS100121',[Datoshojasetcs100121Controller::class,'check'])->name('checkSETCS100121');
Route::put('/finalcheckSETCS100121/{id}',[Datoshojasetcs100121Controller::class,'finalcheck'])->name('finalcheckSETCS100121');
Route::get('/edit2SETCS100121/{id}',[Datoshojasetcs100121Controller::class,'edit2'])->name('edit2SETCS100121');
Route::put('/update2SETCS100121/{id}',[Datoshojasetcs100121Controller::class,'update2'])->name('update2SETCS100121');
Route::get('/pdfprintSETCS100121',[Datoshojasetcs100121Controller::class,'pdfprint'])->name('pdfprintSETCS100121');
Route::get('/printindexSETCS100121',[Datoshojasetcs100121Controller::class,'printindex'])->name('printindexSETCS100121');
Route::get('/printreversoSETCS100121',[Reversosetcs100121Controller::class,'printreverso'])->name('printreversoSETCS100121');
Route::get('/pdfReversoSETCS100121',[Reversosetcs100121Controller::class,'pdfReverso'])->name('pdfReversoSETCS100121');
//Rutas F7-SETCS-ELE-100-L1-01-3
Route::resource('F7-SETCS-ELE-100-L1-01-3-1', 'App\Http\Controllers\Datoshojasetcs100131Controller');
Route::resource('reversoSETCS100131', 'App\Http\Controllers\Reversosetcs100131Controller');
Route::get('/checkSETCS100131',[Datoshojasetcs100131Controller::class,'check'])->name('checkSETCS100131');
Route::put('/finalcheckSETCS100131/{id}',[Datoshojasetcs100131Controller::class,'finalcheck'])->name('finalcheckSETCS100131');
Route::get('/edit2SETCS100131/{id}',[Datoshojasetcs100131Controller::class,'edit2'])->name('edit2SETCS100131');
Route::put('/update2SETCS100131/{id}',[Datoshojasetcs100131Controller::class,'update2'])->name('update2SETCS100131');
Route::get('/pdfprintSETCS100131',[Datoshojasetcs100131Controller::class,'pdfprint'])->name('pdfprintSETCS100131');
Route::get('/printindexSETCS100131',[Datoshojasetcs100131Controller::class,'printindex'])->name('printindexSETCS100131');
Route::get('/printreversoSETCS100131',[Reversosetcs100131Controller::class,'printreverso'])->name('printreversoSETCS100131');
Route::get('/pdfReversoSETCS100131',[Reversosetcs100131Controller::class,'pdfReverso'])->name('pdfReversoSETCS100131');
//Rutas F7-SETCS-ELE-100-L1-02
Route::resource('F7-SETCS-ELE-100-L1-02-1', 'App\Http\Controllers\Datoshojasetcs10021Controller');
Route::resource('reversoSETCS10021', 'App\Http\Controllers\Reversosetcs10021Controller');
Route::get('/checkSETCS10021',[Datoshojasetcs10021Controller::class,'check'])->name('checkSETCS10021');
Route::put('/finalcheckSETCS10021/{id}',[Datoshojasetcs10021Controller::class,'finalcheck'])->name('finalcheckSETCS10021');
Route::get('/edit2SETCS10021/{id}',[Datoshojasetcs10021Controller::class,'edit2'])->name('edit2SETCS10021');
Route::put('/update2SETCS10021/{id}',[Datoshojasetcs10021Controller::class,'update2'])->name('update2SETCS10021');
Route::get('/pdfprintSETCS10021',[Datoshojasetcs10021Controller::class,'pdfprint'])->name('pdfprintSETCS10021');
Route::get('/printindexSETCS10021',[Datoshojasetcs10021Controller::class,'printindex'])->name('printindexSETCS10021');
Route::get('/printreversoSETCS10021',[Reversosetcs10021Controller::class,'printreverso'])->name('printreversoSETCS10021');
Route::get('/pdfReversoSETCS10021',[Reversosetcs10021Controller::class,'pdfReverso'])->name('pdfReversoSETCS10021');
//Rutas F7-SETCS-ELE-100-L1-03
Route::resource('F7-SETCS-ELE-100-L1-03-1', 'App\Http\Controllers\Datoshojasetcs10031Controller');
Route::resource('reversoSETCS10031', 'App\Http\Controllers\Reversosetcs10031Controller');
Route::get('/checkSETCS10031',[Datoshojasetcs10031Controller::class,'check'])->name('checkSETCS10031');
Route::put('/finalcheckSETCS10031/{id}',[Datoshojasetcs10031Controller::class,'finalcheck'])->name('finalcheckSETCS10031');
Route::get('/edit2SETCS10031/{id}',[Datoshojasetcs10031Controller::class,'edit2'])->name('edit2SETCS10031');
Route::put('/update2SETCS10031/{id}',[Datoshojasetcs10031Controller::class,'update2'])->name('update2SETCS10031');
Route::get('/pdfprintSETCS10031',[Datoshojasetcs10031Controller::class,'pdfprint'])->name('pdfprintSETCS10031');
Route::get('/printindexSETCS10031',[Datoshojasetcs10031Controller::class,'printindex'])->name('printindexSETCS10031');
Route::get('/printreversoSETCS10031',[Reversosetcs10031Controller::class,'printreverso'])->name('printreversoSETCS10031');
Route::get('/pdfReversoSETCS10031',[Reversosetcs10031Controller::class,'pdfReverso'])->name('pdfReversoSETCS10031');
//Rutas F7-SETCS-ELE-103-L1-01
Route::resource('F7-SETCS-ELE-103-L1-01-1', 'App\Http\Controllers\Datoshojasetcs10311Controller');
Route::resource('reversoSETCS10311', 'App\Http\Controllers\Reversosetcs10311Controller');
Route::get('/checkSETCS10311',[App\Http\Controllers\Datoshojasetcs10311Controller::class,'check'])->name('checkSETCS10311');
Route::put('/finalcheckSETCS10311/{id}',[App\Http\Controllers\Datoshojasetcs10311Controller::class,'finalcheck'])->name('finalcheckSETCS10311');
Route::get('/edit2SETCS10311/{id}',[App\Http\Controllers\Datoshojasetcs10311Controller::class,'edit2'])->name('edit2SETCS10311');
Route::put('/update2SETCS10311/{id}',[App\Http\Controllers\Datoshojasetcs10311Controller::class,'update2'])->name('update2SETCS10311');
Route::get('/pdfprintSETCS10311',[App\Http\Controllers\Datoshojasetcs10311Controller::class,'pdfprint'])->name('pdfprintSETCS10311');
Route::get('/printindexSETCS10311',[App\Http\Controllers\Datoshojasetcs10311Controller::class,'printindex'])->name('printindexSETCS10311');
Route::get('/printreversoSETCS10311',[App\Http\Controllers\Reversosetcs10311Controller::class,'printreverso'])->name('printreversoSETCS10311');
Route::get('/pdfReversoSETCS10311',[App\Http\Controllers\Reversosetcs10311Controller::class,'pdfReverso'])->name('pdfReversoSETCS10311');
//Rutas F7-SETCS-ELE-107-L1-01-1
Route::resource('F7-SETCS-ELE-107-L1-01-1-1', 'App\Http\Controllers\Datoshojasetcs107111Controller');
Route::resource('reversoSETCS107111', 'App\Http\Controllers\Reversosetcs107111Controller');
Route::get('/checkSETCS107111',[Datoshojasetcs107111Controller::class,'check'])->name('checkSETCS107111');
Route::put('/finalcheckSETCS107111/{id}',[Datoshojasetcs107111Controller::class,'finalcheck'])->name('finalcheckSETCS107111');
Route::get('/edit2SETCS107111/{id}',[Datoshojasetcs107111Controller::class,'edit2'])->name('edit2SETCS107111');
Route::put('/update2SETCS107111/{id}',[Datoshojasetcs107111Controller::class,'update2'])->name('update2SETCS107111');
Route::get('/pdfprintSETCS107111',[Datoshojasetcs107111Controller::class,'pdfprint'])->name('pdfprintSETCS107111');
Route::get('/printindexSETCS107111',[Datoshojasetcs107111Controller::class,'printindex'])->name('printindexSETCS107111');
Route::get('/printreversoSETCS107111',[Reversosetcs107111Controller::class,'printreverso'])->name('printreversoSETCS107111');
Route::get('/pdfReversoSETCS107111',[Reversosetcs107111Controller::class,'pdfReverso'])->name('pdfReversoSETCS107111');
//Rutas F7-SETCS-ELE-107-L1-01-2
Route::resource('F7-SETCS-ELE-107-L1-01-2-1', 'App\Http\Controllers\Datoshojasetcs107121Controller');
Route::resource('reversoSETCS107121', 'App\Http\Controllers\Reversosetcs107121Controller');
Route::get('/checkSETCS107121',[Datoshojasetcs107121Controller::class,'check'])->name('checkSETCS107121');
Route::put('/finalcheckSETCS107121/{id}',[Datoshojasetcs107121Controller::class,'finalcheck'])->name('finalcheckSETCS107121');
Route::get('/edit2SETCS107121/{id}',[Datoshojasetcs107121Controller::class,'edit2'])->name('edit2SETCS107121');
Route::put('/update2SETCS107121/{id}',[Datoshojasetcs107121Controller::class,'update2'])->name('update2SETCS107121');
Route::get('/pdfprintSETCS107121',[Datoshojasetcs107121Controller::class,'pdfprint'])->name('pdfprintSETCS107121');
Route::get('/printindexSETCS107121',[Datoshojasetcs107121Controller::class,'printindex'])->name('printindexSETCS107121');
Route::get('/printreversoSETCS107121',[Reversosetcs107121Controller::class,'printreverso'])->name('printreversoSETCS107121');
Route::get('/pdfReversoSETCS107121',[Reversosetcs107121Controller::class,'pdfReverso'])->name('pdfReversoSETCS107121');
//Rutas F7-SETCS-ELE-107-L1-01-3
Route::resource('F7-SETCS-ELE-107-L1-01-3-1', 'App\Http\Controllers\Datoshojasetcs107131Controller');
Route::resource('reversoSETCS107131', 'App\Http\Controllers\Reversosetcs107131Controller');
Route::get('/checkSETCS107131',[App\Http\Controllers\Datoshojasetcs107131Controller::class,'check'])->name('checkSETCS107131');
Route::put('/finalcheckSETCS107131/{id}',[App\Http\Controllers\Datoshojasetcs107131Controller::class,'finalcheck'])->name('finalcheckSETCS107131');
Route::get('/edit2SETCS107131/{id}',[App\Http\Controllers\Datoshojasetcs107131Controller::class,'edit2'])->name('edit2SETCS107131');
Route::put('/update2SETCS107131/{id}',[App\Http\Controllers\Datoshojasetcs107131Controller::class,'update2'])->name('update2SETCS107131');
Route::get('/pdfprintSETCS107131',[App\Http\Controllers\Datoshojasetcs107131Controller::class,'pdfprint'])->name('pdfprintSETCS107131');
Route::get('/printindexSETCS107131',[App\Http\Controllers\Datoshojasetcs107131Controller::class,'printindex'])->name('printindexSETCS107131');
Route::get('/printreversoSETCS107131',[App\Http\Controllers\Reversosetcs107131Controller::class,'printreverso'])->name('printreversoSETCS107131');
Route::get('/pdfReversoSETCS107131',[App\Http\Controllers\Reversosetcs107131Controller::class,'pdfReverso'])->name('pdfReversoSETCS107131');
//Rutas F7-SETCS-ELE-107-L1-02
Route::resource('F7-SETCS-ELE-107-L1-02-1', 'App\Http\Controllers\Datoshojasetcs10721Controller');
Route::resource('reversoSETCS10721', 'App\Http\Controllers\Reversosetcs10721Controller');
Route::get('/checkSETCS10721',[Datoshojasetcs10721Controller::class,'check'])->name('checkSETCS10721');
Route::put('/finalcheckSETCS10721/{id}',[Datoshojasetcs10721Controller::class,'finalcheck'])->name('finalcheckSETCS10721');
Route::get('/edit2SETCS10721/{id}',[Datoshojasetcs10721Controller::class,'edit2'])->name('edit2SETCS10721');
Route::put('/update2SETCS10721/{id}',[Datoshojasetcs10721Controller::class,'update2'])->name('update2SETCS10721');
Route::get('/pdfprintSETCS10721',[Datoshojasetcs10721Controller::class,'pdfprint'])->name('pdfprintSETCS10721');
Route::get('/printindexSETCS10721',[Datoshojasetcs10721Controller::class,'printindex'])->name('printindexSETCS10721');
Route::get('/printreversoSETCS10721',[Reversosetcs10721Controller::class,'printreverso'])->name('printreversoSETCS10721');
Route::get('/pdfReversoSETCS10721',[Reversosetcs10721Controller::class,'pdfReverso'])->name('pdfReversoSETCS10721');
//Rutas F7-SETCS-ELE-120-L1-01-1
Route::resource('F7-SETCS-ELE-120-L1-01-1-1', 'App\Http\Controllers\Datoshojasetcs120111Controller');
Route::resource('reversoSETCS120111', 'App\Http\Controllers\Reversosetcs120111Controller');
Route::get('/checkSETCS120111',[Datoshojasetcs120111Controller::class,'check'])->name('checkSETCS120111');
Route::put('/finalcheckSETCS120111/{id}',[Datoshojasetcs120111Controller::class,'finalcheck'])->name('finalcheckSETCS120111');
Route::get('/edit2SETCS120111/{id}',[Datoshojasetcs120111Controller::class,'edit2'])->name('edit2SETCS120111');
Route::put('/update2SETCS120111/{id}',[Datoshojasetcs120111Controller::class,'update2'])->name('update2SETCS120111');
Route::get('/pdfprintSETCS120111',[Datoshojasetcs120111Controller::class,'pdfprint'])->name('pdfprintSETCS120111');
Route::get('/printindexSETCS120111',[Datoshojasetcs120111Controller::class,'printindex'])->name('printindexSETCS120111');
Route::get('/printreversoSETCS120111',[Reversosetcs120111Controller::class,'printreverso'])->name('printreversoSETCS120111');
Route::get('/pdfReversoSETCS120111',[Reversosetcs120111Controller::class,'pdfReverso'])->name('pdfReversoSETCS120111');
//Rutas F7-SETCS-ELE-120-L1-01-2
Route::resource('F7-SETCS-ELE-120-L1-01-2-1', 'App\Http\Controllers\Datoshojasetcs120121Controller');
Route::resource('reversoSETCS120121', 'App\Http\Controllers\Reversosetcs120121Controller');
Route::get('/checkSETCS120121',[Datoshojasetcs120121Controller::class,'check'])->name('checkSETCS120121');
Route::put('/finalcheckSETCS120121/{id}',[Datoshojasetcs120121Controller::class,'finalcheck'])->name('finalcheckSETCS120121');
Route::get('/edit2SETCS120121/{id}',[Datoshojasetcs120121Controller::class,'edit2'])->name('edit2SETCS120121');
Route::put('/update2SETCS120121/{id}',[Datoshojasetcs120121Controller::class,'update2'])->name('update2SETCS120121');
Route::get('/pdfprintSETCS120121',[Datoshojasetcs120121Controller::class,'pdfprint'])->name('pdfprintSETCS120121');
Route::get('/printindexSETCS120121',[Datoshojasetcs120121Controller::class,'printindex'])->name('printindexSETCS120121');
Route::get('/printreversoSETCS120121',[Reversosetcs120121Controller::class,'printreverso'])->name('printreversoSETCS120121');
Route::get('/pdfReversoSETCS120121',[Reversosetcs120121Controller::class,'pdfReverso'])->name('pdfReversoSETCS120121');
//Rutas F7-SETCS-ELE-120-L1-01-3
Route::resource('F7-SETCS-ELE-120-L1-01-3-1', 'App\Http\Controllers\Datoshojasetcs120131Controller');
Route::resource('reversoSETCS120131', 'App\Http\Controllers\Reversosetcs120131Controller');
Route::get('/checkSETCS120131',[Datoshojasetcs120131Controller::class,'check'])->name('checkSETCS120131');
Route::put('/finalcheckSETCS120131/{id}',[Datoshojasetcs120131Controller::class,'finalcheck'])->name('finalcheckSETCS120131');
Route::get('/edit2SETCS120131/{id}',[Datoshojasetcs120131Controller::class,'edit2'])->name('edit2SETCS120131');
Route::put('/update2SETCS120131/{id}',[Datoshojasetcs120131Controller::class,'update2'])->name('update2SETCS120131');
Route::get('/pdfprintSETCS120131',[Datoshojasetcs120131Controller::class,'pdfprint'])->name('pdfprintSETCS120131');
Route::get('/printindexSETCS120131',[Datoshojasetcs120131Controller::class,'printindex'])->name('printindexSETCS120131');
Route::get('/printreversoSETCS120131',[Reversosetcs120131Controller::class,'printreverso'])->name('printreversoSETCS120131');
Route::get('/pdfReversoSETCS120131',[Reversosetcs120131Controller::class,'pdfReverso'])->name('pdfReversoSETCS120131');
//Rutas F7-SETCS-ELE-120-L1-01-4
Route::resource('F7-SETCS-ELE-120-L1-01-4-1', 'App\Http\Controllers\Datoshojasetcs120141Controller');
Route::resource('reversoSETCS120141', 'App\Http\Controllers\Reversosetcs120141Controller');
Route::get('/checkSETCS120141',[Datoshojasetcs120141Controller::class,'check'])->name('checkSETCS120141');
Route::put('/finalcheckSETCS120141/{id}',[Datoshojasetcs120141Controller::class,'finalcheck'])->name('finalcheckSETCS120141');
Route::get('/edit2SETCS120141/{id}',[Datoshojasetcs120141Controller::class,'edit2'])->name('edit2SETCS120141');
Route::put('/update2SETCS120141/{id}',[Datoshojasetcs120141Controller::class,'update2'])->name('update2SETCS120141');
Route::get('/pdfprintSETCS120141',[Datoshojasetcs120141Controller::class,'pdfprint'])->name('pdfprintSETCS120141');
Route::get('/printindexSETCS120141',[Datoshojasetcs120141Controller::class,'printindex'])->name('printindexSETCS120141');
Route::get('/printreversoSETCS120141',[Reversosetcs120141Controller::class,'printreverso'])->name('printreversoSETCS120141');
Route::get('/pdfReversoSETCS120141',[Reversosetcs120141Controller::class,'pdfReverso'])->name('pdfReversoSETCS120141');
//Rutas F7-SETCS-ELE-120-L1-01-5
Route::resource('F7-SETCS-ELE-120-L1-01-5-1', 'App\Http\Controllers\Datoshojasetcs120151Controller');
Route::resource('reversoSETCS120151', 'App\Http\Controllers\Reversosetcs120151Controller');
Route::get('/checkSETCS120151',[Datoshojasetcs120151Controller::class,'check'])->name('checkSETCS120151');
Route::put('/finalcheckSETCS120151/{id}',[Datoshojasetcs120151Controller::class,'finalcheck'])->name('finalcheckSETCS120151');
Route::get('/edit2SETCS120151/{id}',[Datoshojasetcs120151Controller::class,'edit2'])->name('edit2SETCS120151');
Route::put('/update2SETCS120151/{id}',[Datoshojasetcs120151Controller::class,'update2'])->name('update2SETCS120151');
Route::get('/pdfprintSETCS120151',[Datoshojasetcs120151Controller::class,'pdfprint'])->name('pdfprintSETCS120151');
Route::get('/printindexSETCS120151',[Datoshojasetcs120151Controller::class,'printindex'])->name('printindexSETCS120151');
Route::get('/printreversoSETCS120151',[Reversosetcs120151Controller::class,'printreverso'])->name('printreversoSETCS120151');
Route::get('/pdfReversoSETCS120151',[Reversosetcs120151Controller::class,'pdfReverso'])->name('pdfReversoSETCS120151');
//Rutas F7-SETCS-ELE-140-L1-01-1
Route::resource('F7-SETCS-ELE-140-L1-01-1-1', 'App\Http\Controllers\Datoshojasetcs140111Controller');
Route::resource('reversoSETCS140111', 'App\Http\Controllers\Reversosetcs140111Controller');
Route::get('/checkSETCS140111',[Datoshojasetcs140111Controller::class,'check'])->name('checkSETCS140111');
Route::put('/finalcheckSETCS140111/{id}',[Datoshojasetcs140111Controller::class,'finalcheck'])->name('finalcheckSETCS140111');
Route::get('/edit2SETCS140111/{id}',[Datoshojasetcs140111Controller::class,'edit2'])->name('edit2SETCS140111');
Route::put('/update2SETCS140111/{id}',[Datoshojasetcs140111Controller::class,'update2'])->name('update2SETCS140111');
Route::get('/pdfprintSETCS140111',[Datoshojasetcs140111Controller::class,'pdfprint'])->name('pdfprintSETCS140111');
Route::get('/printindexSETCS140111',[Datoshojasetcs1440111Controller::class,'printindex'])->name('printindexSETCS140111');
Route::get('/printreversoSETCS140111',[Reversosetcs140111Controller::class,'printreverso'])->name('printreversoSETCS140111');
Route::get('/pdfReversoSETCS140111',[Reversosetcs140111Controller::class,'pdfReverso'])->name('pdfReversoSETCS140111');
//Rutas F7-SETCS-ELE-140-L1-01-2
Route::resource('F7-SETCS-ELE-140-L1-01-2-1', 'App\Http\Controllers\Datoshojasetcs140121Controller');
Route::resource('reversoSETCS140121', 'App\Http\Controllers\Reversosetcs140121Controller');
Route::get('/checkSETCS140121',[Datoshojasetcs140121Controller::class,'check'])->name('checkSETCS140121');
Route::put('/finalcheckSETCS140121/{id}',[Datoshojasetcs140121Controller::class,'finalcheck'])->name('finalcheckSETCS140121');
Route::get('/edit2SETCS140121/{id}',[Datoshojasetcs140121Controller::class,'edit2'])->name('edit2SETCS140121');
Route::put('/update2SETCS140121/{id}',[Datoshojasetcs140121Controller::class,'update2'])->name('update2SETCS140121');
Route::get('/pdfprintSETCS140121',[Datoshojasetcs140121Controller::class,'pdfprint'])->name('pdfprintSETCS140121');
Route::get('/printindexSETCS140121',[Datoshojasetcs1440121Controller::class,'printindex'])->name('printindexSETCS140121');
Route::get('/printreversoSETCS140121',[Reversosetcs140121Controller::class,'printreverso'])->name('printreversoSETCS140121');
Route::get('/pdfReversoSETCS140121',[Reversosetcs140121Controller::class,'pdfReverso'])->name('pdfReversoSETCS140121');
//Rutas F7-SETCS-ELE-140-L1-01-3
Route::resource('F7-SETCS-ELE-140-L1-01-3-1', 'App\Http\Controllers\Datoshojasetcs140131Controller');
Route::resource('reversoSETCS140131', 'App\Http\Controllers\Reversosetcs140131Controller');
Route::get('/checkSETCS140131',[App\Http\Controllers\Datoshojasetcs140131Controller::class,'check'])->name('checkSETCS140131');
Route::put('/finalcheckSETCS140131/{id}',[App\Http\Controllers\Datoshojasetcs140131Controller::class,'finalcheck'])->name('finalcheckSETCS140131');
Route::get('/edit2SETCS140131/{id}',[App\Http\Controllers\Datoshojasetcs140131Controller::class,'edit2'])->name('edit2SETCS140131');
Route::put('/update2SETCS140131/{id}',[App\Http\Controllers\Datoshojasetcs140131Controller::class,'update2'])->name('update2SETCS140131');
Route::get('/pdfprintSETCS140131',[App\Http\Controllers\Datoshojasetcs140131Controller::class,'pdfprint'])->name('pdfprintSETCS140131');
Route::get('/printindexSETCS140131',[App\Http\Controllers\Datoshojasetcs140131Controller::class,'printindex'])->name('printindexSETCS140131');
Route::get('/printreversoSETCS140131',[App\Http\Controllers\Reversosetcs140131Controller::class,'printreverso'])->name('printreversoSETCS140131');
Route::get('/pdfReversoSETCS140131',[App\Http\Controllers\Reversosetcs140131Controller::class,'pdfReverso'])->name('pdfReversoSETCS140131');
//Rutas F7-SETCS-ELE-160-L1-01
Route::resource('F7-SETCS-ELE-160-L1-01-1', 'App\Http\Controllers\Datoshojasetcs16011Controller');
Route::resource('reversoSETCS16011', 'App\Http\Controllers\Reversosetcs16011Controller');
Route::get('/checkSETCS16011',[Datoshojasetcs16011Controller::class,'check'])->name('checkSETCS16011');
Route::put('/finalcheckSETCS16011/{id}',[Datoshojasetcs16011Controller::class,'finalcheck'])->name('finalcheckSETCS16011');
Route::get('/edit2SETCS16011/{id}',[Datoshojasetcs16011Controller::class,'edit2'])->name('edit2SETCS16011');
Route::put('/update2SETCS16011/{id}',[Datoshojasetcs16011Controller::class,'update2'])->name('update2SETCS16011');
Route::get('/pdfprintSETCS16011',[Datoshojasetcs16011Controller::class,'pdfprint'])->name('pdfprintSETCS16011');
Route::get('/printindexSETCS16011',[Datoshojasetcs16011Controller::class,'printindex'])->name('printindexSETCS16011');
Route::get('/printreversoSETCS16011',[Reversosetcs16011Controller::class,'printreverso'])->name('printreversoSETCS16011');
Route::get('/pdfReversoSETCS16011',[Reversosetcs16011Controller::class,'pdfReverso'])->name('pdfReversoSETCS16011');
//Rutas F7-SETCS-ELE-160-L1-01-C2
Route::resource('F7-SETCS-ELE-160-L1-01-2', 'App\Http\Controllers\Datoshojasetcs16011C2Controller');
Route::resource('reversoSETCS16011C2', 'App\Http\Controllers\Reversosetcs16011C2Controller');
Route::get('/checkSETCS16011C2',[App\Http\Controllers\Datoshojasetcs16011C2Controller::class,'check'])->name('checkSETCS16011C2');
Route::put('/finalcheckSETCS16011C2/{id}',[App\Http\Controllers\Datoshojasetcs16011C2Controller::class,'finalcheck'])->name('finalcheckSETCS16011C2');
Route::get('/edit2SETCS16011C2/{id}',[App\Http\Controllers\Datoshojasetcs16011C2Controller::class,'edit2'])->name('edit2SETCS16011C2');
Route::put('/update2SETCS16011C2/{id}',[App\Http\Controllers\Datoshojasetcs16011C2Controller::class,'update2'])->name('update2SETCS16011C2');
Route::get('/pdfprintSETCS16011C2',[App\Http\Controllers\Datoshojasetcs16011C2Controller::class,'pdfprint'])->name('pdfprintSETCS16011C2');
Route::get('/printindexSETCS16011C2',[App\Http\Controllers\Datoshojasetcs16011C2Controller::class,'printindex'])->name('printindexSETCS16011C2');
Route::get('/printreversoSETCS16011C2',[App\Http\Controllers\Reversosetcs16011C2Controller::class,'printreverso'])->name('printreversoSETCS16011C2');
Route::get('/pdfReversoSETCS16011C2',[App\Http\Controllers\Reversosetcs16011C2Controller::class,'pdfReverso'])->name('pdfReversoSETCS16011C2');
//Rutas F7-SETCS-ELE-180-L1-01
Route::resource('F7-SETCS-ELE-180-L1-01-1', 'App\Http\Controllers\Datoshojasetcs18011Controller');
Route::resource('reversoSETCS18011', 'App\Http\Controllers\Reversosetcs18011Controller');
Route::get('/checkSETCS18011',[Datoshojasetcs18011Controller::class,'check'])->name('checkSETCS18011');
Route::put('/finalcheckSETCS18011/{id}',[Datoshojasetcs18011Controller::class,'finalcheck'])->name('finalcheckSETCS18011');
Route::get('/edit2SETCS18011/{id}',[Datoshojasetcs18011Controller::class,'edit2'])->name('edit2SETCS18011');
Route::put('/update2SETCS18011/{id}',[Datoshojasetcs18011Controller::class,'update2'])->name('update2SETCS18011');
Route::get('/pdfprintSETCS18011',[Datoshojasetcs18011Controller::class,'pdfprint'])->name('pdfprintSETCS18011');
Route::get('/printindexSETCS18011',[Datoshojasetcs18011Controller::class,'printindex'])->name('printindexSETCS18011');
Route::get('/printreversoSETCS18011',[Reversosetcs18011Controller::class,'printreverso'])->name('printreversoSETCS18011');
Route::get('/pdfReversoSETCS18011',[Reversosetcs18011Controller::class,'pdfReverso'])->name('pdfReversoSETCS18011');
//Rutas F7-TPM-ELE-40-L1-01
Route::resource('F7-TPM-ELE-40-L1-01-1', 'App\Http\Controllers\Datoshojastpm4011Controller');
Route::resource('reversoTPM4011', 'App\Http\Controllers\Reversotpm4011Controller');
Route::get('/checkTPM4011',[Datoshojastpm4011Controller::class,'check'])->name('checkTPM4011');
Route::put('/finalcheckTPM4011/{id}',[Datoshojastpm4011Controller::class,'finalcheck'])->name('finalcheckTPM4011');
Route::get('/edit2TPM4011/{id}',[Datoshojastpm4011Controller::class,'edit2'])->name('edit2TPM4011');
Route::put('/update2TPM4011/{id}',[Datoshojastpm4011Controller::class,'update2'])->name('update2TPM4011');
Route::get('/pdfprintTPM4011',[Datoshojastpm4011Controller::class,'pdfprint'])->name('pdfprintTPM4011');
Route::get('/printindexTPM4011',[Datoshojastpm4011Controller::class,'printindex'])->name('printindexTPM4011');
Route::get('/printreversoTPM4011',[Reversotpm4011Controller::class,'printreverso'])->name('printreversoTPM4011');
Route::get('/pdfReversoTPM4011',[Reversotpm4011Controller::class,'pdfReverso'])->name('pdfReversoTPM4011');
//Rutas F7-TPM-ELE-40-L1-01-2
Route::resource('F7-TPM-ELE-40-L1-01-2', 'App\Http\Controllers\Datoshojastpm4012Controller');
Route::resource('reversoTPM4012', 'App\Http\Controllers\Reversotpm4012Controller');
Route::get('/checkTPM4012',[App\Http\Controllers\Datoshojastpm4012Controller::class,'check'])->name('checkTPM4012');
Route::put('/finalcheckTPM4012/{id}',[App\Http\Controllers\Datoshojastpm4012Controller::class,'finalcheck'])->name('finalcheckTPM4012');
Route::get('/edit2TPM4012/{id}',[App\Http\Controllers\Datoshojastpm4012Controller::class,'edit2'])->name('edit2TPM4012');
Route::put('/update2TPM4012/{id}',[App\Http\Controllers\Datoshojastpm4012Controller::class,'update2'])->name('update2TPM4012');
Route::get('/pdfprintTPM4012',[App\Http\Controllers\Datoshojastpm4012Controller::class,'pdfprint'])->name('pdfprintTPM4012');
Route::get('/printindexTPM4012',[App\Http\Controllers\Datoshojastpm4012Controller::class,'printindex'])->name('printindexTPM4012');
Route::get('/printreversoTPM4012',[App\Http\Controllers\Reversotpm4012Controller::class,'printreverso'])->name('printreversoTPM4012');
Route::get('/pdfReversoTPM4012',[App\Http\Controllers\Reversotpm4012Controller::class,'pdfReverso'])->name('pdfReversoTPM4012');
//Rutas F7-TPM-ELE-40-L1-01-3
Route::resource('F7-TPM-ELE-40-L1-01-3', 'App\Http\Controllers\Datoshojastpm4013Controller');
Route::resource('reversoTPM4013', 'App\Http\Controllers\Reversotpm4013Controller');
Route::get('/checkTPM4013',[App\Http\Controllers\Datoshojastpm4013Controller::class,'check'])->name('checkTPM4013');
Route::put('/finalcheckTPM4013/{id}',[App\Http\Controllers\Datoshojastpm4013Controller::class,'finalcheck'])->name('finalcheckTPM4013');
Route::get('/edit2TPM4013/{id}',[App\Http\Controllers\Datoshojastpm4013Controller::class,'edit2'])->name('edit2TPM4013');
Route::put('/update2TPM4013/{id}',[App\Http\Controllers\Datoshojastpm4013Controller::class,'update2'])->name('update2TPM4013');
Route::get('/pdfprintTPM4013',[App\Http\Controllers\Datoshojastpm4013Controller::class,'pdfprint'])->name('pdfprintTPM4013');
Route::get('/printindexTPM4013',[App\Http\Controllers\Datoshojastpm4013Controller::class,'printindex'])->name('printindexTPM4013');
Route::get('/printreversoTPM4013',[App\Http\Controllers\Reversotpm4013Controller::class,'printreverso'])->name('printreversoTPM4013');
Route::get('/pdfReversoTPM4013',[App\Http\Controllers\Reversotpm4013Controller::class,'pdfReverso'])->name('pdfReversoTPM4013');
//Rutas F7-TPM-ELE-40-L1-01-4
Route::resource('F7-TPM-ELE-40-L1-01-4', 'App\Http\Controllers\Datoshojastpm4014Controller');
Route::resource('reversoTPM4014', 'App\Http\Controllers\Reversotpm4014Controller');
Route::get('/checkTPM4014',[App\Http\Controllers\Datoshojastpm4014Controller::class,'check'])->name('checkTPM4014');
Route::put('/finalcheckTPM4014/{id}',[App\Http\Controllers\Datoshojastpm4014Controller::class,'finalcheck'])->name('finalcheckTPM4014');
Route::get('/edit2TPM4014/{id}',[App\Http\Controllers\Datoshojastpm4014Controller::class,'edit2'])->name('edit2TPM4014');
Route::put('/update2TPM4014/{id}',[App\Http\Controllers\Datoshojastpm4014Controller::class,'update2'])->name('update2TPM4014');
Route::get('/pdfprintTPM4014',[App\Http\Controllers\Datoshojastpm4014Controller::class,'pdfprint'])->name('pdfprintTPM4014');
Route::get('/printindexTPM4014',[App\Http\Controllers\Datoshojastpm4014Controller::class,'printindex'])->name('printindexTPM4014');
Route::get('/printreversoTPM4014',[App\Http\Controllers\Reversotpm4014Controller::class,'printreverso'])->name('printreversoTPM4014');
Route::get('/pdfReversoTPM4014',[App\Http\Controllers\Reversotpm4014Controller::class,'pdfReverso'])->name('pdfReversoTPM4014');
//Rutas F7-TPM-ELE-40-L1-01-5
Route::resource('F7-TPM-ELE-40-L1-01-5', 'App\Http\Controllers\Datoshojastpm4015Controller');
Route::resource('reversoTPM4015', 'App\Http\Controllers\Reversotpm4015Controller');
Route::get('/checkTPM4015',[App\Http\Controllers\Datoshojastpm4015Controller::class,'check'])->name('checkTPM4015');
Route::put('/finalcheckTPM4015/{id}',[App\Http\Controllers\Datoshojastpm4015Controller::class,'finalcheck'])->name('finalcheckTPM4015');
Route::get('/edit2TPM4015/{id}',[App\Http\Controllers\Datoshojastpm4015Controller::class,'edit2'])->name('edit2TPM4015');
Route::put('/update2TPM4015/{id}',[App\Http\Controllers\Datoshojastpm4015Controller::class,'update2'])->name('update2TPM4015');
Route::get('/pdfprintTPM4015',[App\Http\Controllers\Datoshojastpm4015Controller::class,'pdfprint'])->name('pdfprintTPM4015');
Route::get('/printindexTPM4015',[App\Http\Controllers\Datoshojastpm4015Controller::class,'printindex'])->name('printindexTPM4015');
Route::get('/printreversoTPM4015',[App\Http\Controllers\Reversotpm4015Controller::class,'printreverso'])->name('printreversoTPM4015');
Route::get('/pdfReversoTPM4015',[App\Http\Controllers\Reversotpm4015Controller::class,'pdfReverso'])->name('pdfReversoTPM4015');
//Rutas F7-TPM-ELE-40-L1-01-6
Route::resource('F7-TPM-ELE-40-L1-01-6', 'App\Http\Controllers\Datoshojastpm4016Controller');
Route::resource('reversoTPM4016', 'App\Http\Controllers\Reversotpm4016Controller');
Route::get('/checkTPM4016',[App\Http\Controllers\Datoshojastpm4016Controller::class,'check'])->name('checkTPM4016');
Route::put('/finalcheckTPM4016/{id}',[App\Http\Controllers\Datoshojastpm4016Controller::class,'finalcheck'])->name('finalcheckTPM4016');
Route::get('/edit2TPM4016/{id}',[App\Http\Controllers\Datoshojastpm4016Controller::class,'edit2'])->name('edit2TPM4016');
Route::put('/update2TPM4016/{id}',[App\Http\Controllers\Datoshojastpm4016Controller::class,'update2'])->name('update2TPM4016');
Route::get('/pdfprintTPM4016',[App\Http\Controllers\Datoshojastpm4016Controller::class,'pdfprint'])->name('pdfprintTPM4016');
Route::get('/printindexTPM4016',[App\Http\Controllers\Datoshojastpm4016Controller::class,'printindex'])->name('printindexTPM4016');
Route::get('/printreversoTPM4016',[App\Http\Controllers\Reversotpm4016Controller::class,'printreverso'])->name('printreversoTPM4016');
Route::get('/pdfReversoTPM4016',[App\Http\Controllers\Reversotpm4016Controller::class,'pdfReverso'])->name('pdfReversoTPM4016');
//Rutas F7-TPM-ELE-60-L1-01
Route::resource('F7-TPM-ELE-60-L1-01-1', 'App\Http\Controllers\Datoshojastpm6011Controller');
Route::resource('reversoTPM6011', 'App\Http\Controllers\Reversotpm6011Controller');
Route::get('/checkTPM6011',[App\Http\Controllers\Datoshojastpm6011Controller::class,'check'])->name('checkTPM6011');
Route::put('/finalcheckTPM6011/{id}',[App\Http\Controllers\Datoshojastpm6011Controller::class,'finalcheck'])->name('finalcheckTPM6011');
Route::get('/edit2TPM6011/{id}',[App\Http\Controllers\Datoshojastpm6011Controller::class,'edit2'])->name('edit2TPM6011');
Route::put('/update2TPM6011/{id}',[App\Http\Controllers\Datoshojastpm6011Controller::class,'update2'])->name('update2TPM6011');
Route::get('/pdfprintTPM6011',[App\Http\Controllers\Datoshojastpm6011Controller::class,'pdfprint'])->name('pdfprintTPM6011');
Route::get('/printindexTPM6011',[App\Http\Controllers\Datoshojastpm6011Controller::class,'printindex'])->name('printindexTPM6011');
Route::get('/printreversoTPM6011',[App\Http\Controllers\Reversotpm6011Controller::class,'printreverso'])->name('printreversoTPM6011');
Route::get('/pdfReversoTPM6011',[App\Http\Controllers\Reversotpm6011Controller::class,'pdfReverso'])->name('pdfReversoTPM6011');
//Rutas F7-TPM-ELE-60-L1-01-2
Route::resource('F7-TPM-ELE-60-L1-01-2', 'App\Http\Controllers\Datoshojastpm6012Controller');
Route::resource('reversoTPM6012', 'App\Http\Controllers\Reversotpm6012Controller');
Route::get('/checkTPM6012',[App\Http\Controllers\Datoshojastpm6012Controller::class,'check'])->name('checkTPM6012');
Route::put('/finalcheckTPM6012/{id}',[App\Http\Controllers\Datoshojastpm6012Controller::class,'finalcheck'])->name('finalcheckTPM6012');
Route::get('/edit2TPM6012/{id}',[App\Http\Controllers\Datoshojastpm6012Controller::class,'edit2'])->name('edit2TPM6012');
Route::put('/update2TPM6012/{id}',[App\Http\Controllers\Datoshojastpm6012Controller::class,'update2'])->name('update2TPM6012');
Route::get('/pdfprintTPM6012',[App\Http\Controllers\Datoshojastpm6012Controller::class,'pdfprint'])->name('pdfprintTPM6012');
Route::get('/printindexTPM6012',[App\Http\Controllers\Datoshojastpm6012Controller::class,'printindex'])->name('printindexTPM6012');
Route::get('/printreversoTPM6012',[App\Http\Controllers\Reversotpm6012Controller::class,'printreverso'])->name('printreversoTPM6012');
Route::get('/pdfReversoTPM6012',[App\Http\Controllers\Reversotpm6012Controller::class,'pdfReverso'])->name('pdfReversoTPM6012');
//Rutas F7-TPM-ELE-60-L1-01-3
Route::resource('F7-TPM-ELE-60-L1-01-3', 'App\Http\Controllers\Datoshojastpm6013Controller');
Route::resource('reversoTPM6013', 'App\Http\Controllers\Reversotpm6013Controller');
Route::get('/checkTPM6013',[App\Http\Controllers\Datoshojastpm6013Controller::class,'check'])->name('checkTPM6013');
Route::put('/finalcheckTPM6013/{id}',[App\Http\Controllers\Datoshojastpm6013Controller::class,'finalcheck'])->name('finalcheckTPM6013');
Route::get('/edit2TPM6013/{id}',[App\Http\Controllers\Datoshojastpm6013Controller::class,'edit2'])->name('edit2TPM6013');
Route::put('/update2TPM6013/{id}',[App\Http\Controllers\Datoshojastpm6013Controller::class,'update2'])->name('update2TPM6013');
Route::get('/pdfprintTPM6013',[App\Http\Controllers\Datoshojastpm6013Controller::class,'pdfprint'])->name('pdfprintTPM6013');
Route::get('/printindexTPM6013',[App\Http\Controllers\Datoshojastpm6013Controller::class,'printindex'])->name('printindexTPM6013');
Route::get('/printreversoTPM6013',[App\Http\Controllers\Reversotpm6013Controller::class,'printreverso'])->name('printreversoTPM6013');
Route::get('/pdfReversoTPM6013',[App\Http\Controllers\Reversotpm6013Controller::class,'pdfReverso'])->name('pdfReversoTPM6013');
//Rutas F7-TPM-ELE-60-L1-01-4
Route::resource('F7-TPM-ELE-60-L1-01-4', 'App\Http\Controllers\Datoshojastpm6014Controller');
Route::resource('reversoTPM6014', 'App\Http\Controllers\Reversotpm6014Controller');
Route::get('/checkTPM6014',[App\Http\Controllers\Datoshojastpm6014Controller::class,'check'])->name('checkTPM6014');
Route::put('/finalcheckTPM6014/{id}',[App\Http\Controllers\Datoshojastpm6014Controller::class,'finalcheck'])->name('finalcheckTPM6014');
Route::get('/edit2TPM6014/{id}',[App\Http\Controllers\Datoshojastpm6014Controller::class,'edit2'])->name('edit2TPM6014');
Route::put('/update2TPM6014/{id}',[App\Http\Controllers\Datoshojastpm6014Controller::class,'update2'])->name('update2TPM6014');
Route::get('/pdfprintTPM6014',[App\Http\Controllers\Datoshojastpm6014Controller::class,'pdfprint'])->name('pdfprintTPM6014');
Route::get('/printindexTPM6014',[App\Http\Controllers\Datoshojastpm6014Controller::class,'printindex'])->name('printindexTPM6014');
Route::get('/printreversoTPM6014',[App\Http\Controllers\Reversotpm6014Controller::class,'printreverso'])->name('printreversoTPM6014');
Route::get('/pdfReversoTPM6014',[App\Http\Controllers\Reversotpm6014Controller::class,'pdfReverso'])->name('pdfReversoTPM6014');
//Rutas F7-TPM-ELE-60-L1-01-5
Route::resource('F7-TPM-ELE-60-L1-01-5', 'App\Http\Controllers\Datoshojastpm6015Controller');
Route::resource('reversoTPM6015', 'App\Http\Controllers\Reversotpm6015Controller');
Route::get('/checkTPM6015',[App\Http\Controllers\Datoshojastpm6015Controller::class,'check'])->name('checkTPM6015');
Route::put('/finalcheckTPM6015/{id}',[App\Http\Controllers\Datoshojastpm6015Controller::class,'finalcheck'])->name('finalcheckTPM6015');
Route::get('/edit2TPM6015/{id}',[App\Http\Controllers\Datoshojastpm6015Controller::class,'edit2'])->name('edit2TPM6015');
Route::put('/update2TPM6015/{id}',[App\Http\Controllers\Datoshojastpm6015Controller::class,'update2'])->name('update2TPM6015');
Route::get('/pdfprintTPM6015',[App\Http\Controllers\Datoshojastpm6015Controller::class,'pdfprint'])->name('pdfprintTPM6015');
Route::get('/printindexTPM6015',[App\Http\Controllers\Datoshojastpm6015Controller::class,'printindex'])->name('printindexTPM6015');
Route::get('/printreversoTPM6015',[App\Http\Controllers\Reversotpm6015Controller::class,'printreverso'])->name('printreversoTPM6015');
Route::get('/pdfReversoTPM6015',[App\Http\Controllers\Reversotpm6015Controller::class,'pdfReverso'])->name('pdfReversoTPM6015');
//Rutas F7-TPM-ELE-60-L1-01-6
Route::resource('F7-TPM-ELE-60-L1-01-6', 'App\Http\Controllers\Datoshojastpm6016Controller');
Route::resource('reversoTPM6016', 'App\Http\Controllers\Reversotpm6016Controller');
Route::get('/checkTPM6016',[App\Http\Controllers\Datoshojastpm6016Controller::class,'check'])->name('checkTPM6016');
Route::put('/finalcheckTPM6016/{id}',[App\Http\Controllers\Datoshojastpm6016Controller::class,'finalcheck'])->name('finalcheckTPM6016');
Route::get('/edit2TPM6016/{id}',[App\Http\Controllers\Datoshojastpm6016Controller::class,'edit2'])->name('edit2TPM6016');
Route::put('/update2TPM6016/{id}',[App\Http\Controllers\Datoshojastpm6016Controller::class,'update2'])->name('update2TPM6016');
Route::get('/pdfprintTPM6016',[App\Http\Controllers\Datoshojastpm6016Controller::class,'pdfprint'])->name('pdfprintTPM6016');
Route::get('/printindexTPM6016',[App\Http\Controllers\Datoshojastpm6016Controller::class,'printindex'])->name('printindexTPM6016');
Route::get('/printreversoTPM6016',[App\Http\Controllers\Reversotpm6016Controller::class,'printreverso'])->name('printreversoTPM6016');
Route::get('/pdfReversoTPM6016',[App\Http\Controllers\Reversotpm6016Controller::class,'pdfReverso'])->name('pdfReversoTPM6016');
//Rutas F7-TPM-ELE-60-L1-01-7
Route::resource('F7-TPM-ELE-60-L1-01-7', 'App\Http\Controllers\Datoshojastpm6017Controller');
Route::resource('reversoTPM6017', 'App\Http\Controllers\Reversotpm6017Controller');
Route::get('/checkTPM6017',[App\Http\Controllers\Datoshojastpm6017Controller::class,'check'])->name('checkTPM6017');
Route::put('/finalcheckTPM6017/{id}',[App\Http\Controllers\Datoshojastpm6017Controller::class,'finalcheck'])->name('finalcheckTPM6017');
Route::get('/edit2TPM6017/{id}',[App\Http\Controllers\Datoshojastpm6017Controller::class,'edit2'])->name('edit2TPM6017');
Route::put('/update2TPM6017/{id}',[App\Http\Controllers\Datoshojastpm6017Controller::class,'update2'])->name('update2TPM6017');
Route::get('/pdfprintTPM6017',[App\Http\Controllers\Datoshojastpm6017Controller::class,'pdfprint'])->name('pdfprintTPM6017');
Route::get('/printindexTPM6017',[App\Http\Controllers\Datoshojastpm6017Controller::class,'printindex'])->name('printindexTPM6017');
Route::get('/printreversoTPM6017',[App\Http\Controllers\Reversotpm6017Controller::class,'printreverso'])->name('printreversoTPM6017');
Route::get('/pdfReversoTPM6017',[App\Http\Controllers\Reversotpm6017Controller::class,'pdfReverso'])->name('pdfReversoTPM6017');
//Rutas F7-TPM-ELE-100-L1-01
Route::resource('F7-TPM-ELE-100-L1-01-1', 'App\Http\Controllers\Datoshojastpm10011Controller');
Route::resource('reversoTPM10011', 'App\Http\Controllers\Reversotpm10011Controller');
Route::get('/checkTPM10011',[App\Http\Controllers\Datoshojastpm10011Controller::class,'check'])->name('checkTPM10011');
Route::put('/finalcheckTPM10011/{id}',[App\Http\Controllers\Datoshojastpm10011Controller::class,'finalcheck'])->name('finalcheckTPM10011');
Route::get('/edit2TPM10011/{id}',[App\Http\Controllers\Datoshojastpm10011Controller::class,'edit2'])->name('edit2TPM10011');
Route::put('/update2TPM10011/{id}',[App\Http\Controllers\Datoshojastpm10011Controller::class,'update2'])->name('update2TPM10011');
Route::get('/pdfprintTPM10011',[App\Http\Controllers\Datoshojastpm10011Controller::class,'pdfprint'])->name('pdfprintTPM10011');
Route::get('/printindexTPM10011',[App\Http\Controllers\Datoshojastpm10011Controller::class,'printindex'])->name('printindexTPM10011');
Route::get('/printreversoTPM10011',[App\Http\Controllers\Reversotpm10011Controller::class,'printreverso'])->name('printreversoTPM10011');
Route::get('/pdfReversoTPM10011',[App\Http\Controllers\Reversotpm10011Controller::class,'pdfReverso'])->name('pdfReversoTPM10011');
//Rutas F7-TPM-ELE-100-L1-01-2
Route::resource('F7-TPM-ELE-100-L1-01-2', 'App\Http\Controllers\Datoshojastpm10012Controller');
Route::resource('reversoTPM10012', 'App\Http\Controllers\Reversotpm10012Controller');
Route::get('/checkTPM10012',[App\Http\Controllers\Datoshojastpm10012Controller::class,'check'])->name('checkTPM10012');
Route::put('/finalcheckTPM10012/{id}',[App\Http\Controllers\Datoshojastpm10012Controller::class,'finalcheck'])->name('finalcheckTPM10012');
Route::get('/edit2TPM10012/{id}',[App\Http\Controllers\Datoshojastpm10012Controller::class,'edit2'])->name('edit2TPM10012');
Route::put('/update2TPM10012/{id}',[App\Http\Controllers\Datoshojastpm10012Controller::class,'update2'])->name('update2TPM10012');
Route::get('/pdfprintTPM10012',[App\Http\Controllers\Datoshojastpm10012Controller::class,'pdfprint'])->name('pdfprintTPM10012');
Route::get('/printindexTPM10012',[App\Http\Controllers\Datoshojastpm10012Controller::class,'printindex'])->name('printindexTPM10012');
Route::get('/printreversoTPM10012',[App\Http\Controllers\Reversotpm10012Controller::class,'printreverso'])->name('printreversoTPM10012');
Route::get('/pdfReversoTPM10012',[App\Http\Controllers\Reversotpm10012Controller::class,'pdfReverso'])->name('pdfReversoTPM10012');
//Rutas F7-TPM-ELE-100-L1-01-3
Route::resource('F7-TPM-ELE-100-L1-01-3', 'App\Http\Controllers\Datoshojastpm10013Controller');
Route::resource('reversoTPM10013', 'App\Http\Controllers\Reversotpm10013Controller');
Route::get('/checkTPM10013',[App\Http\Controllers\Datoshojastpm10013Controller::class,'check'])->name('checkTPM10013');
Route::put('/finalcheckTPM10013/{id}',[App\Http\Controllers\Datoshojastpm10013Controller::class,'finalcheck'])->name('finalcheckTPM10013');
Route::get('/edit2TPM10013/{id}',[App\Http\Controllers\Datoshojastpm10013Controller::class,'edit2'])->name('edit2TPM10013');
Route::put('/update2TPM10013/{id}',[App\Http\Controllers\Datoshojastpm10013Controller::class,'update2'])->name('update2TPM10013');
Route::get('/pdfprintTPM10013',[App\Http\Controllers\Datoshojastpm10013Controller::class,'pdfprint'])->name('pdfprintTPM10013');
Route::get('/printindexTPM10013',[App\Http\Controllers\Datoshojastpm10013Controller::class,'printindex'])->name('printindexTPM10013');
Route::get('/printreversoTPM10013',[App\Http\Controllers\Reversotpm10013Controller::class,'printreverso'])->name('printreversoTPM10013');
Route::get('/pdfReversoTPM10013',[App\Http\Controllers\Reversotpm10013Controller::class,'pdfReverso'])->name('pdfReversoTPM10013');
//Rutas F7-TPM-ELE-107-L1-01
Route::resource('F7-TPM-ELE-107-L1-01-1', 'App\Http\Controllers\Datoshojastpm10711Controller');
Route::resource('reversoTPM10711', 'App\Http\Controllers\Reversotpm10711Controller');
Route::get('/checkTPM10711',[App\Http\Controllers\Datoshojastpm10711Controller::class,'check'])->name('checkTPM10711');
Route::put('/finalcheckTPM10711/{id}',[App\Http\Controllers\Datoshojastpm10711Controller::class,'finalcheck'])->name('finalcheckTPM10711');
Route::get('/edit2TPM10711/{id}',[App\Http\Controllers\Datoshojastpm10711Controller::class,'edit2'])->name('edit2TPM10711');
Route::put('/update2TPM10711/{id}',[App\Http\Controllers\Datoshojastpm10711Controller::class,'update2'])->name('update2TPM10711');
Route::get('/pdfprintTPM10711',[App\Http\Controllers\Datoshojastpm10711Controller::class,'pdfprint'])->name('pdfprintTPM10711');
Route::get('/printindexTPM10711',[App\Http\Controllers\Datoshojastpm10711Controller::class,'printindex'])->name('printindexTPM10711');
Route::get('/printreversoTPM10711',[App\Http\Controllers\Reversotpm10711Controller::class,'printreverso'])->name('printreversoTPM10711');
Route::get('/pdfReversoTPM10711',[App\Http\Controllers\Reversotpm10711Controller::class,'pdfReverso'])->name('pdfReversoTPM10711');
//Rutas F7-TPM-ELE-107-L1-01-2
Route::resource('F7-TPM-ELE-107-L1-01-2', 'App\Http\Controllers\Datoshojastpm10712Controller');
Route::resource('reversoTPM10712', 'App\Http\Controllers\Reversotpm10712Controller');
Route::get('/checkTPM10712',[App\Http\Controllers\Datoshojastpm10712Controller::class,'check'])->name('checkTPM10712');
Route::put('/finalcheckTPM10712/{id}',[App\Http\Controllers\Datoshojastpm10712Controller::class,'finalcheck'])->name('finalcheckTPM10712');
Route::get('/edit2TPM10712/{id}',[App\Http\Controllers\Datoshojastpm10712Controller::class,'edit2'])->name('edit2TPM10712');
Route::put('/update2TPM10712/{id}',[App\Http\Controllers\Datoshojastpm10712Controller::class,'update2'])->name('update2TPM10712');
Route::get('/pdfprintTPM10712',[App\Http\Controllers\Datoshojastpm10712Controller::class,'pdfprint'])->name('pdfprintTPM10712');
Route::get('/printindexTPM10712',[App\Http\Controllers\Datoshojastpm10712Controller::class,'printindex'])->name('printindexTPM10712');
Route::get('/printreversoTPM10712',[App\Http\Controllers\Reversotpm10712Controller::class,'printreverso'])->name('printreversoTPM10712');
Route::get('/pdfReversoTPM10712',[App\Http\Controllers\Reversotpm10712Controller::class,'pdfReverso'])->name('pdfReversoTPM10712');
//Rutas F7-TPM-ELE-107-L1-01-3
Route::resource('F7-TPM-ELE-107-L1-01-3', 'App\Http\Controllers\Datoshojastpm10713Controller');
Route::resource('reversoTPM10713', 'App\Http\Controllers\Reversotpm10713Controller');
Route::get('/checkTPM10713',[App\Http\Controllers\Datoshojastpm10713Controller::class,'check'])->name('checkTPM10713');
Route::put('/finalcheckTPM10713/{id}',[App\Http\Controllers\Datoshojastpm10713Controller::class,'finalcheck'])->name('finalcheckTPM10713');
Route::get('/edit2TPM10713/{id}',[App\Http\Controllers\Datoshojastpm10713Controller::class,'edit2'])->name('edit2TPM10713');
Route::put('/update2TPM10713/{id}',[App\Http\Controllers\Datoshojastpm10713Controller::class,'update2'])->name('update2TPM10713');
Route::get('/pdfprintTPM10713',[App\Http\Controllers\Datoshojastpm10713Controller::class,'pdfprint'])->name('pdfprintTPM10713');
Route::get('/printindexTPM10713',[App\Http\Controllers\Datoshojastpm10713Controller::class,'printindex'])->name('printindexTPM10713');
Route::get('/printreversoTPM10713',[App\Http\Controllers\Reversotpm10713Controller::class,'printreverso'])->name('printreversoTPM10713');
Route::get('/pdfReversoTPM10713',[App\Http\Controllers\Reversotpm10713Controller::class,'pdfReverso'])->name('pdfReversoTPM10713');
//Rutas F7-TPM-ELE-120-L1-01-1
Route::resource('F7-TPM-ELE-120-L1-01-1-1', 'App\Http\Controllers\Datoshojastpm120111Controller');
Route::resource('reversoTPM120111', 'App\Http\Controllers\Reversotpm120111Controller');
Route::get('/checkTPM120111',[App\Http\Controllers\Datoshojastpm120111Controller::class,'check'])->name('checkTPM120111');
Route::put('/finalcheckTPM120111/{id}',[App\Http\Controllers\Datoshojastpm120111Controller::class,'finalcheck'])->name('finalcheckTPM120111');
Route::get('/edit2TPM120111/{id}',[App\Http\Controllers\Datoshojastpm120111Controller::class,'edit2'])->name('edit2TPM120111');
Route::put('/update2TPM120111/{id}',[App\Http\Controllers\Datoshojastpm120111Controller::class,'update2'])->name('update2TPM120111');
Route::get('/pdfprintTPM120111',[App\Http\Controllers\Datoshojastpm120111Controller::class,'pdfprint'])->name('pdfprintTPM120111');
Route::get('/printindexTPM120111',[App\Http\Controllers\Datoshojastpm120111Controller::class,'printindex'])->name('printindexTPM120111');
Route::get('/printreversoTPM120111',[App\Http\Controllers\Reversotpm120111Controller::class,'printreverso'])->name('printreversoTPM120111');
Route::get('/pdfReversoTPM120111',[App\Http\Controllers\Reversotpm120111Controller::class,'pdfReverso'])->name('pdfReversoTPM120111');
//Rutas F7-TPM-ELE-120-L1-01-2
Route::resource('F7-TPM-ELE-120-L1-01-2-1', 'App\Http\Controllers\Datoshojastpm120121Controller');
Route::resource('reversoTPM120121', 'App\Http\Controllers\Reversotpm120121Controller');
Route::get('/checkTPM120121',[App\Http\Controllers\Datoshojastpm120121Controller::class,'check'])->name('checkTPM120121');
Route::put('/finalcheckTPM120121/{id}',[App\Http\Controllers\Datoshojastpm120121Controller::class,'finalcheck'])->name('finalcheckTPM120121');
Route::get('/edit2TPM120121/{id}',[App\Http\Controllers\Datoshojastpm120121Controller::class,'edit2'])->name('edit2TPM120121');
Route::put('/update2TPM120121/{id}',[App\Http\Controllers\Datoshojastpm120121Controller::class,'update2'])->name('update2TPM120121');
Route::get('/pdfprintTPM120121',[App\Http\Controllers\Datoshojastpm120121Controller::class,'pdfprint'])->name('pdfprintTPM120121');
Route::get('/printindexTPM120121',[App\Http\Controllers\Datoshojastpm120121Controller::class,'printindex'])->name('printindexTPM120121');
Route::get('/printreversoTPM120121',[App\Http\Controllers\Reversotpm120121Controller::class,'printreverso'])->name('printreversoTPM120121');
Route::get('/pdfReversoTPM120121',[App\Http\Controllers\Reversotpm120121Controller::class,'pdfReverso'])->name('pdfReversoTPM120121');
//Rutas F7-TPM-ELE-120-L1-01-3
Route::resource('F7-TPM-ELE-120-L1-01-3-1', 'App\Http\Controllers\Datoshojastpm120131Controller');
Route::resource('reversoTPM120131', 'App\Http\Controllers\Reversotpm120131Controller');
Route::get('/checkTPM120131',[App\Http\Controllers\Datoshojastpm120131Controller::class,'check'])->name('checkTPM120131');
Route::put('/finalcheckTPM120131/{id}',[App\Http\Controllers\Datoshojastpm120131Controller::class,'finalcheck'])->name('finalcheckTPM120131');
Route::get('/edit2TPM120131/{id}',[App\Http\Controllers\Datoshojastpm120131Controller::class,'edit2'])->name('edit2TPM120131');
Route::put('/update2TPM120131/{id}',[App\Http\Controllers\Datoshojastpm120131Controller::class,'update2'])->name('update2TPM120131');
Route::get('/pdfprintTPM120131',[App\Http\Controllers\Datoshojastpm120131Controller::class,'pdfprint'])->name('pdfprintTPM120131');
Route::get('/printindexTPM120131',[App\Http\Controllers\Datoshojastpm120131Controller::class,'printindex'])->name('printindexTPM120131');
Route::get('/printreversoTPM120131',[App\Http\Controllers\Reversotpm120131Controller::class,'printreverso'])->name('printreversoTPM120131');
Route::get('/pdfReversoTPM120131',[App\Http\Controllers\Reversotpm120131Controller::class,'pdfReverso'])->name('pdfReversoTPM120131');
//Rutas F7-TPM-ELE-120-L1-01-4
Route::resource('F7-TPM-ELE-120-L1-01-4-1', 'App\Http\Controllers\Datoshojastpm120141Controller');
Route::resource('reversoTPM120141', 'App\Http\Controllers\Reversotpm120141Controller');
Route::get('/checkTPM120141',[App\Http\Controllers\Datoshojastpm120141Controller::class,'check'])->name('checkTPM120141');
Route::put('/finalcheckTPM120141/{id}',[App\Http\Controllers\Datoshojastpm120141Controller::class,'finalcheck'])->name('finalcheckTPM120141');
Route::get('/edit2TPM120141/{id}',[App\Http\Controllers\Datoshojastpm120141Controller::class,'edit2'])->name('edit2TPM120141');
Route::put('/update2TPM120141/{id}',[App\Http\Controllers\Datoshojastpm120141Controller::class,'update2'])->name('update2TPM120141');
Route::get('/pdfprintTPM120141',[App\Http\Controllers\Datoshojastpm120141Controller::class,'pdfprint'])->name('pdfprintTPM120141');
Route::get('/printindexTPM120141',[App\Http\Controllers\Datoshojastpm120141Controller::class,'printindex'])->name('printindexTPM120141');
Route::get('/printreversoTPM120141',[App\Http\Controllers\Reversotpm120141Controller::class,'printreverso'])->name('printreversoTPM120141');
Route::get('/pdfReversoTPM120141',[App\Http\Controllers\Reversotpm120141Controller::class,'pdfReverso'])->name('pdfReversoTPM120141');
//Rutas F7-TPM-ELE-120-L1-01-5
Route::resource('F7-TPM-ELE-120-L1-01-5-1', 'App\Http\Controllers\Datoshojastpm120151Controller');
Route::resource('reversoTPM120151', 'App\Http\Controllers\Reversotpm120151Controller');
Route::get('/checkTPM120151',[App\Http\Controllers\Datoshojastpm120151Controller::class,'check'])->name('checkTPM120151');
Route::put('/finalcheckTPM120151/{id}',[App\Http\Controllers\Datoshojastpm120151Controller::class,'finalcheck'])->name('finalcheckTPM120151');
Route::get('/edit2TPM120151/{id}',[App\Http\Controllers\Datoshojastpm120151Controller::class,'edit2'])->name('edit2TPM120151');
Route::put('/update2TPM120151/{id}',[App\Http\Controllers\Datoshojastpm120151Controller::class,'update2'])->name('update2TPM120151');
Route::get('/pdfprintTPM120151',[App\Http\Controllers\Datoshojastpm120151Controller::class,'pdfprint'])->name('pdfprintTPM120151');
Route::get('/printindexTPM120151',[App\Http\Controllers\Datoshojastpm120151Controller::class,'printindex'])->name('printindexTPM120151');
Route::get('/printreversoTPM120151',[App\Http\Controllers\Reversotpm120151Controller::class,'printreverso'])->name('printreversoTPM120151');
Route::get('/pdfReversoTPM120151',[App\Http\Controllers\Reversotpm120151Controller::class,'pdfReverso'])->name('pdfReversoTPM120151');
//Rutas F7-TPM-ELE-140-L1-01
Route::resource('F7-TPM-ELE-140-L1-01-1', 'App\Http\Controllers\Datoshojastpm14011Controller');
Route::resource('reversoTPM14011', 'App\Http\Controllers\Reversotpm14011Controller');
Route::get('/checkTPM14011',[App\Http\Controllers\Datoshojastpm14011Controller::class,'check'])->name('checkTPM14011');
Route::put('/finalcheckTPM14011/{id}',[App\Http\Controllers\Datoshojastpm14011Controller::class,'finalcheck'])->name('finalcheckTPM14011');
Route::get('/edit2TPM14011/{id}',[App\Http\Controllers\Datoshojastpm14011Controller::class,'edit2'])->name('edit2TPM14011');
Route::put('/update2TPM14011/{id}',[App\Http\Controllers\Datoshojastpm14011Controller::class,'update2'])->name('update2TPM14011');
Route::get('/pdfprintTPM14011',[App\Http\Controllers\Datoshojastpm14011Controller::class,'pdfprint'])->name('pdfprintTPM14011');
Route::get('/printindexTPM14011',[App\Http\Controllers\Datoshojastpm14011Controller::class,'printindex'])->name('printindexTPM14011');
Route::get('/printreversoTPM14011',[App\Http\Controllers\Reversotpm14011Controller::class,'printreverso'])->name('printreversoTPM14011');
Route::get('/pdfReversoTPM14011',[App\Http\Controllers\Reversotpm14011Controller::class,'pdfReverso'])->name('pdfReversoTPM14011');
//Rutas F7-TPM-ELE-140-L1-02
Route::resource('F7-TPM-ELE-140-L1-01-2', 'App\Http\Controllers\Datoshojastpm14012Controller');
Route::resource('reversoTPM14012', 'App\Http\Controllers\Reversotpm14012Controller');
Route::get('/checkTPM14012',[App\Http\Controllers\Datoshojastpm14012Controller::class,'check'])->name('checkTPM14012');
Route::put('/finalcheckTPM14012/{id}',[App\Http\Controllers\Datoshojastpm14012Controller::class,'finalcheck'])->name('finalcheckTPM14012');
Route::get('/edit2TPM14012/{id}',[App\Http\Controllers\Datoshojastpm14012Controller::class,'edit2'])->name('edit2TPM14012');
Route::put('/update2TPM14012/{id}',[App\Http\Controllers\Datoshojastpm14012Controller::class,'update2'])->name('update2TPM14012');
Route::get('/pdfprintTPM14012',[App\Http\Controllers\Datoshojastpm14012Controller::class,'pdfprint'])->name('pdfprintTPM14012');
Route::get('/printindexTPM14012',[App\Http\Controllers\Datoshojastpm14012Controller::class,'printindex'])->name('printindexTPM14012');
Route::get('/printreversoTPM14012',[App\Http\Controllers\Reversotpm14012Controller::class,'printreverso'])->name('printreversoTPM14012');
Route::get('/pdfReversoTPM14012',[App\Http\Controllers\Reversotpm14012Controller::class,'pdfReverso'])->name('pdfReversoTPM14012');
//Rutas F7-TPM-ELE-140-L1-03
Route::resource('F7-TPM-ELE-140-L1-01-3', 'App\Http\Controllers\Datoshojastpm14013Controller');
Route::resource('reversoTPM14013', 'App\Http\Controllers\Reversotpm14013Controller');
Route::get('/checkTPM14013',[App\Http\Controllers\Datoshojastpm14013Controller::class,'check'])->name('checkTPM14013');
Route::put('/finalcheckTPM14013/{id}',[App\Http\Controllers\Datoshojastpm14013Controller::class,'finalcheck'])->name('finalcheckTPM14013');
Route::get('/edit2TPM14013/{id}',[App\Http\Controllers\Datoshojastpm14013Controller::class,'edit2'])->name('edit2TPM14013');
Route::put('/update2TPM14013/{id}',[App\Http\Controllers\Datoshojastpm14013Controller::class,'update2'])->name('update2TPM14013');
Route::get('/pdfprintTPM14013',[App\Http\Controllers\Datoshojastpm14013Controller::class,'pdfprint'])->name('pdfprintTPM14013');
Route::get('/printindexTPM14013',[App\Http\Controllers\Datoshojastpm14013Controller::class,'printindex'])->name('printindexTPM14013');
Route::get('/printreversoTPM14013',[App\Http\Controllers\Reversotpm14013Controller::class,'printreverso'])->name('printreversoTPM14013');
Route::get('/pdfReversoTPM14013',[App\Http\Controllers\Reversotpm14013Controller::class,'pdfReverso'])->name('pdfReversoTPM14013');
//Rutas F7-TPM-ELE-160-L1-01
Route::resource('F7-TPM-ELE-160-L1-01-1', 'App\Http\Controllers\Datoshojastpm16011Controller');
Route::resource('reversoTPM16011', 'App\Http\Controllers\Reversotpm16011Controller');
Route::get('/checkTPM16011',[App\Http\Controllers\Datoshojastpm16011Controller::class,'check'])->name('checkTPM16011');
Route::put('/finalcheckTPM16011/{id}',[App\Http\Controllers\Datoshojastpm16011Controller::class,'finalcheck'])->name('finalcheckTPM16011');
Route::get('/edit2TPM16011/{id}',[App\Http\Controllers\Datoshojastpm16011Controller::class,'edit2'])->name('edit2TPM16011');
Route::put('/update2TPM16011/{id}',[App\Http\Controllers\Datoshojastpm16011Controller::class,'update2'])->name('update2TPM16011');
Route::get('/pdfprintTPM16011',[App\Http\Controllers\Datoshojastpm16011Controller::class,'pdfprint'])->name('pdfprintTPM16011');
Route::get('/printindexTPM16011',[App\Http\Controllers\Datoshojastpm16011Controller::class,'printindex'])->name('printindexTPM16011');
Route::get('/printreversoTPM16011',[App\Http\Controllers\Reversotpm16011Controller::class,'printreverso'])->name('printreversoTPM16011');
Route::get('/pdfReversoTPM16011',[App\Http\Controllers\Reversotpm16011Controller::class,'pdfReverso'])->name('pdfReversoTPM16011');
//Rutas F7-TPM-ELE-160-L1-01-2
Route::resource('F7-TPM-ELE-160-L1-01-2', 'App\Http\Controllers\Datoshojastpm16012Controller');
Route::resource('reversoTPM16012', 'App\Http\Controllers\Reversotpm16012Controller');
Route::get('/checkTPM16012',[App\Http\Controllers\Datoshojastpm16012Controller::class,'check'])->name('checkTPM16012');
Route::put('/finalcheckTPM16012/{id}',[App\Http\Controllers\Datoshojastpm16012Controller::class,'finalcheck'])->name('finalcheckTPM16012');
Route::get('/edit2TPM16012/{id}',[App\Http\Controllers\Datoshojastpm16012Controller::class,'edit2'])->name('edit2TPM16012');
Route::put('/update2TPM16012/{id}',[App\Http\Controllers\Datoshojastpm16012Controller::class,'update2'])->name('update2TPM16012');
Route::get('/pdfprintTPM16012',[App\Http\Controllers\Datoshojastpm16012Controller::class,'pdfprint'])->name('pdfprintTPM16012');
Route::get('/printindexTPM16012',[App\Http\Controllers\Datoshojastpm16012Controller::class,'printindex'])->name('printindexTPM16012');
Route::get('/printreversoTPM16012',[App\Http\Controllers\Reversotpm16012Controller::class,'printreverso'])->name('printreversoTPM16012');
Route::get('/pdfReversoTPM16012',[App\Http\Controllers\Reversotpm16012Controller::class,'pdfReverso'])->name('pdfReversoTPM16012');
//Rutas F7-TPM-ELE-180-L1-01
Route::resource('F7-TPM-ELE-180-L1-01-1', 'App\Http\Controllers\Datoshojastpm18011Controller');
Route::resource('reversoTPM18011', 'App\Http\Controllers\Reversotpm18011Controller');
Route::get('/checkTPM18011',[App\Http\Controllers\Datoshojastpm18011Controller::class,'check'])->name('checkTPM18011');
Route::put('/finalcheckTPM18011/{id}',[App\Http\Controllers\Datoshojastpm18011Controller::class,'finalcheck'])->name('finalcheckTPM18011');
Route::get('/edit2TPM18011/{id}',[App\Http\Controllers\Datoshojastpm18011Controller::class,'edit2'])->name('edit2TPM18011');
Route::put('/update2TPM18011/{id}',[App\Http\Controllers\Datoshojastpm18011Controller::class,'update2'])->name('update2TPM18011');
Route::get('/pdfprintTPM18011',[App\Http\Controllers\Datoshojastpm18011Controller::class,'pdfprint'])->name('pdfprintTPM18011');
Route::get('/printindexTPM18011',[App\Http\Controllers\Datoshojastpm18011Controller::class,'printindex'])->name('printindexTPM18011');
Route::get('/printreversoTPM18011',[App\Http\Controllers\Reversotpm18011Controller::class,'printreverso'])->name('printreversoTPM18011');
Route::get('/pdfReversoTPM18011',[App\Http\Controllers\Reversotpm18011Controller::class,'pdfReverso'])->name('pdfReversoTPM18011');


















//TURNO 2 
//Rutas F7-SETCS-ELE-CR-L1-01
Route::resource('F7-SETCS-ELE-CR-L1-01-68', 'App\Http\Controllers\Turno_2\DatoshojaControllerT2');
Route::resource('reversoT2', 'App\Http\Controllers\Turno_2\ReversoController00T2');
Route::get('/checkT2',[App\Http\Controllers\Turno_2\DatoshojaControllert2::class,'check'])->name('checkT2');
Route::put('/finalcheckT2/{id}',[App\Http\Controllers\Turno_2\DatoshojaControllert2::class,'finalcheck'])->name('finalcheckT2');
Route::get('/edit2T2/{id}',[App\Http\Controllers\Turno_2\DatoshojaControllert2::class,'edit2'])->name('edit2T2');
Route::put('/update2T2/{id}',[App\Http\Controllers\Turno_2\DatoshojaControllert2::class,'update2'])->name('update2T2');
Route::get('/pdfprintT2',[App\Http\Controllers\Turno_2\DatoshojaControllert2::class,'pdfprint'])->name('pdfprintT2');
Route::get('/printindexT2',[App\Http\Controllers\Turno_2\DatoshojaControllert2::class,'printindex'])->name('printindexT2');
Route::get('/printreversoT2',[App\Http\Controllers\Turno_2\ReversoController00t2::class,'printreverso'])->name('printreversoT2');
Route::get('/pdfprintReversoF7SETCSELECRL1011T2',[App\Http\Controllers\Turno_2\ReversoController00t2::class,'pdfprintReversoF7SETCSELECRL1011'])->name('pdfprintReversoF7SETCSELECRL1011T2');
//Rutas F7-SETCS-ELE-CR-L1-01
Route::resource('F7-SETCS-ELE-CR-L1-01-68-2', 'App\Http\Controllers\Turno_2\DatoshojaController2T2');
Route::resource('reverso2T2', 'App\Http\Controllers\Turno_2\ReversoController002T2');
Route::get('/check2T2',[App\Http\Controllers\Turno_2\DatoshojaController2t2::class,'check'])->name('check2T2');
Route::put('/finalcheck2T2/{id}',[App\Http\Controllers\Turno_2\DatoshojaController2t2::class,'finalcheck'])->name('finalcheck2T2');
Route::get('/edit22T2/{id}',[App\Http\Controllers\Turno_2\DatoshojaController2t2::class,'edit2'])->name('edit22T2');
Route::put('/update22T2/{id}',[App\Http\Controllers\Turno_2\DatoshojaController2t2::class,'update2'])->name('update22T2');
Route::get('/pdfprint2T2',[App\Http\Controllers\Turno_2\DatoshojaController2t2::class,'pdfprint'])->name('pdfprint2T2');
Route::get('/printindex2T2',[App\Http\Controllers\Turno_2\DatoshojaController2t2::class,'printindex'])->name('printindex2T2');
Route::get('/printreverso2T2',[App\Http\Controllers\Turno_2\ReversoController002t2::class,'printreverso'])->name('printreverso2T2');
Route::get('/pdfprintReversoF7SETCSELECRL1012T2',[App\Http\Controllers\Turno_2\ReversoController002t2::class,'pdfprintReversoF7SETCSELECRL1011'])->name('pdfprintReversoF7SETCSELECRL1012T2');
//Rutas F7-SETCS-ELE-20-L1-01-1
Route::resource('F7-SETCS-ELE-20-L1-01-1T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs20ControllerT2');
Route::resource('reversoSETCS20T2', 'App\Http\Controllers\Turno_2\Reversosetcs20ControllerT2');
Route::get('/checkSETCS20T2',[App\Http\Controllers\Turno_2\Datoshojasetcs20Controllert2::class,'check'])->name('checkSETCS20T2');
Route::put('/finalcheckSETCS20T2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs20Controllert2::class,'finalcheck'])->name('finalcheckSETCS20T2');
Route::get('/edit2SETCS20T2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs20Controllert2::class,'edit2'])->name('edit2SETCS20T2');
Route::put('/update2SETCS20T2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs20Controllert2::class,'update2'])->name('update2SETCS20T2');
Route::get('/pdfprintSETCS20T2',[App\Http\Controllers\Turno_2\Datoshojasetcs20Controllert2::class,'pdfprint'])->name('pdfprintSETCS20T2');
Route::get('/printindexSETCS20T2',[App\Http\Controllers\Turno_2\Datoshojasetcs20Controllert2::class,'printindex'])->name('printindexSETCS20T2');
Route::get('/printreversoSETCS20T2',[App\Http\Controllers\Turno_2\Reversosetcs20Controllert2::class,'printreverso'])->name('printreversoSETCS20T2');
Route::get('/pdfReversoSETCS20T2',[App\Http\Controllers\Turno_2\Reversosetcs20Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS20T2');
//Rutas F7-SETCS-ELE-20-L1-01-2
Route::resource('F7-SETCS-ELE-20-L1-01-2T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs201ControllerT2');
Route::resource('reversoSETCS201T2', 'App\Http\Controllers\Turno_2\Reversosetcs201ControllerT2');
Route::get('/checkSETCS201T2',[App\Http\Controllers\Turno_2\Datoshojasetcs201Controllert2::class,'check'])->name('checkSETCS201T2');
Route::put('/finalcheckSETCS201T2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs201Controllert2::class,'finalcheck'])->name('finalcheckSETCS201T2');
Route::get('/edit2SETCS201T2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs201Controllert2::class,'edit2'])->name('edit2SETCS201T2');
Route::put('/update2SETCS201T2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs201Controllert2::class,'update2'])->name('update2SETCS201T2');
Route::get('/pdfprintSETCS201T2',[App\Http\Controllers\Turno_2\Datoshojasetcs201Controllert2::class,'pdfprint'])->name('pdfprintSETCS201T2');
Route::get('/printindexSETCS201T2',[App\Http\Controllers\Turno_2\Datoshojasetcs201Controllert2::class,'printindex'])->name('printindexSETCS201T2');
Route::get('/printreversoSETCS201T2',[App\Http\Controllers\Turno_2\Reversosetcs201Controllert2::class,'printreverso'])->name('printreversoSETCS201T2');
Route::get('/pdfReversoSETCS201T2',[App\Http\Controllers\Turno_2\Reversosetcs201Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS201T2');
//Rutas F7-SETCS-ELE-20-L1-01-3
Route::resource('F7-SETCS-ELE-20-L1-01-3T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs201C3ControllerT2');
Route::resource('reversoSETCS201T2C3', 'App\Http\Controllers\Turno_2\Reversosetcs201C3ControllerT2');
Route::get('/checkSETCS201T2C3',[App\Http\Controllers\Turno_2\Datoshojasetcs201C3Controllert2::class,'check'])->name('checkSETCS201T2C3');
Route::put('/finalcheckSETCS201T2C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs201C3Controllert2::class,'finalcheck'])->name('finalcheckSETCS201T2C3');
Route::get('/edit2SETCS201T2C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs201C3Controllert2::class,'edit2'])->name('edit2SETCS201T2C3');
Route::put('/update2SETCS201T2C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs201C3Controllert2::class,'update2'])->name('update2SETCS201T2C3');
Route::get('/pdfprintSETCS201T2C3',[App\Http\Controllers\Turno_2\Datoshojasetcs201C3Controllert2::class,'pdfprint'])->name('pdfprintSETCS201T2C3');
Route::get('/printindexSETCS201T2C3',[App\Http\Controllers\Turno_2\Datoshojasetcs201C3Controllert2::class,'printindex'])->name('printindexSETCS201T2C3');
Route::get('/printreversoSETCS201T2C3',[App\Http\Controllers\Turno_2\Reversosetcs201C3Controllert2::class,'printreverso'])->name('printreversoSETCS201T2C3');
Route::get('/pdfReversoSETCS201T2C3',[App\Http\Controllers\Turno_2\Reversosetcs201C3Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS201T2C3');
//Rutas F7-SETCS-ELE-20-L1-01-4
Route::resource('F7-SETCS-ELE-20-L1-01-4T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs201C4ControllerT2');
Route::resource('reversoSETCS201T2C4', 'App\Http\Controllers\Turno_2\Reversosetcs201C4ControllerT2');
Route::get('/checkSETCS201T2C4',[App\Http\Controllers\Turno_2\Datoshojasetcs201C4Controllert2::class,'check'])->name('checkSETCS201T2C4');
Route::put('/finalcheckSETCS201T2C4/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs201C4Controllert2::class,'finalcheck'])->name('finalcheckSETCS201T2C4');
Route::get('/edit2SETCS201T2C4/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs201C4Controllert2::class,'edit2'])->name('edit2SETCS201T2C4');
Route::put('/update2SETCS201T2C4/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs201C4Controllert2::class,'update2'])->name('update2SETCS201T2C4');
Route::get('/pdfprintSETCS201T2C4',[App\Http\Controllers\Turno_2\Datoshojasetcs201C4Controllert2::class,'pdfprint'])->name('pdfprintSETCS201T2C4');
Route::get('/printindexSETCS201T2C4',[App\Http\Controllers\Turno_2\Datoshojasetcs201C4Controllert2::class,'printindex'])->name('printindexSETCS201T2C4');
Route::get('/printreversoSETCS201T2C4',[App\Http\Controllers\Turno_2\Reversosetcs201C4Controllert2::class,'printreverso'])->name('printreversoSETCS201T2C4');
Route::get('/pdfReversoSETCS201T2C4',[App\Http\Controllers\Turno_2\Reversosetcs201C4Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS201T2C4');
//Rutas F7-SETCS-ELE-20-L1-03
Route::resource('F7-SETCS-ELE-20-L1-03-1T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs2031ControllerT2');
Route::resource('reversoSETCS2031T2', 'App\Http\Controllers\Turno_2\Reversosetcs2031ControllerT2');
Route::get('/checkSETCS2031T2',[App\Http\Controllers\Turno_2\Datoshojasetcs2031Controllert2::class,'check'])->name('checkSETCS2031T2');
Route::put('/finalcheckSETCS2031T2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs2031Controllert2::class,'finalcheck'])->name('finalcheckSETCS2031T2');
Route::get('/edit2SETCS2031T2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs2031Controllert2::class,'edit2'])->name('edit2SETCS2031T2');
Route::put('/update2SETCS2031T2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs2031Controllert2::class,'update2'])->name('update2SETCS2031T2');
Route::get('/pdfprintSETCS2031T2',[App\Http\Controllers\Turno_2\Datoshojasetcs2031Controllert2::class,'pdfprint'])->name('pdfprintSETCS2031T2');
Route::get('/printindexSETCS2031T2',[App\Http\Controllers\Turno_2\Datoshojasetcs2031Controllert2::class,'printindex'])->name('printindexSETCS2031T2');
Route::get('/printreversoSETCS2031T2',[App\Http\Controllers\Turno_2\Reversosetcs2031Controllert2::class,'printreverso'])->name('printreversoSETCS2031T2');
Route::get('/pdfReversoSETCS2031T2',[App\Http\Controllers\Turno_2\Reversosetcs2031Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS2031T2');
//Rutas F7-SETCS-ELE-20-L1-03-2
Route::resource('F7-SETCS-ELE-20-L1-03-2T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs2031C3ControllerT2');
Route::resource('reversoSETCS2031T2C3', 'App\Http\Controllers\Turno_2\Reversosetcs2031C3ControllerT2');
Route::get('/checkSETCS2031T2C3',[App\Http\Controllers\Turno_2\Datoshojasetcs2031C3Controllert2::class,'check'])->name('checkSETCS2031T2C3');
Route::put('/finalcheckSETCS2031T2C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs2031C3Controllert2::class,'finalcheck'])->name('finalcheckSETCS2031T2C3');
Route::get('/edit2SETCS2031T2C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs2031C3Controllert2::class,'edit2'])->name('edit2SETCS2031T2C3');
Route::put('/update2SETCS2031T2C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs2031C3Controllert2::class,'update2'])->name('update2SETCS2031T2C3');
Route::get('/pdfprintSETCS2031T2C3',[App\Http\Controllers\Turno_2\Datoshojasetcs2031C3Controllert2::class,'pdfprint'])->name('pdfprintSETCS2031T2C3');
Route::get('/printindexSETCS2031T2C3',[App\Http\Controllers\Turno_2\Datoshojasetcs2031C3Controllert2::class,'printindex'])->name('printindexSETCS2031T2C3');
Route::get('/printreversoSETCS2031T2C3',[App\Http\Controllers\Turno_2\Reversosetcs2031C3Controllert2::class,'printreverso'])->name('printreversoSETCS2031T2C3');
Route::get('/pdfReversoSETCS2031T2C3',[App\Http\Controllers\Turno_2\Reversosetcs2031C3Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS2031T2C3');
//Rutas F7-SETCS-ELE-40-L1-01-1
Route::resource('F7-SETCS-ELE-40-L1-01-1T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs40111ControllerT2');
Route::resource('reversoSETCS40111T2', 'App\Http\Controllers\Turno_2\Reversosetcs40111ControllerT2');
Route::get('/checkSETCS40111T2',[App\Http\Controllers\Turno_2\Datoshojasetcs40111Controllert2::class,'check'])->name('checkSETCS40111T2');
Route::put('/finalcheckSETCS40111T2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40111Controllert2::class,'finalcheck'])->name('finalcheckSETCS40111T2');
Route::get('/edit2SETCS40111T2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40111Controllert2::class,'edit2'])->name('edit2SETCS40111T2');
Route::put('/update2SETCS40111T2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40111Controllert2::class,'update2'])->name('update2SETCS40111T2');
Route::get('/pdfprintSETCS40111T2',[App\Http\Controllers\Turno_2\Datoshojasetcs40111Controllert2::class,'pdfprint'])->name('pdfprintSETCS40111T2');
Route::get('/printindexSETCS40111T2',[App\Http\Controllers\Turno_2\Datoshojasetcs40111Controllert2::class,'printindex'])->name('printindexSETCS40111T2');
Route::get('/printreversoSETCS40111T2',[App\Http\Controllers\Turno_2\Reversosetcs40111Controllert2::class,'printreverso'])->name('printreversoSETCS40111T2');
Route::get('/pdfReversoSETCS40111T2',[App\Http\Controllers\Turno_2\Reversosetcs40111Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS40111T2');
//Rutas F7-SETCS-ELE-40-L1-01-2
Route::resource('F7-SETCS-ELE-40-L1-01-2T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs40112ControllerT2');
Route::resource('reversoSETCS40112T2', 'App\Http\Controllers\Turno_2\Reversosetcs40112ControllerT2');
Route::get('/checkSETCS40112T2',[App\Http\Controllers\Turno_2\Datoshojasetcs40112Controllert2::class,'check'])->name('checkSETCS40112T2');
Route::put('/finalcheckSETCS40112T2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40112Controllert2::class,'finalcheck'])->name('finalcheckSETCS40112T2');
Route::get('/edit2SETCS40112T2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40112Controllert2::class,'edit2'])->name('edit2SETCS40112T2');
Route::put('/update2SETCS40112T2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40112Controllert2::class,'update2'])->name('update2SETCS40112T2');
Route::get('/pdfprintSETCS40112T2',[App\Http\Controllers\Turno_2\Datoshojasetcs40112Controllert2::class,'pdfprint'])->name('pdfprintSETCS40112T2');
Route::get('/printindexSETCS40112T2',[App\Http\Controllers\Turno_2\Datoshojasetcs40112Controllert2::class,'printindex'])->name('printindexSETCS40112T2');
Route::get('/printreversoSETCS40112T2',[App\Http\Controllers\Turno_2\Reversosetcs40112Controllert2::class,'printreverso'])->name('printreversoSETCS40112T2');
Route::get('/pdfReversoSETCS40112T2',[App\Http\Controllers\Turno_2\Reversosetcs40112Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS40112T2');
//Rutas F7-SETCS-ELE-40-L1-01-3
Route::resource('F7-SETCS-ELE-40-L1-01-3T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs40113ControllerT2');
Route::resource('reversoSETCS40123', 'App\Http\Controllers\Turno_2\Reversosetcs40113ControllerT2');
Route::get('/checkSETCS40123',[App\Http\Controllers\Turno_2\Datoshojasetcs40113Controllert2::class,'check'])->name('checkSETCS40123');
Route::put('/finalcheckSETCS40123/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40113Controllert2::class,'finalcheck'])->name('finalcheckSETCS40123');
Route::get('/edit2SETCS40123/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40113Controllert2::class,'edit2'])->name('edit2SETCS40123');
Route::put('/update2SETCS40123/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40113Controllert2::class,'update2'])->name('update2SETCS40123');
Route::get('/pdfprintSETCS40123',[App\Http\Controllers\Turno_2\Datoshojasetcs40113Controllert2::class,'pdfprint'])->name('pdfprintSETCS40123');
Route::get('/printindexSETCS40123',[App\Http\Controllers\Turno_2\Datoshojasetcs40113Controllert2::class,'printindex'])->name('printindexSETCS40123');
Route::get('/printreversoSETCS40123',[App\Http\Controllers\Turno_2\Reversosetcs40113Controllert2::class,'printreverso'])->name('printreversoSETCS40123');
Route::get('/pdfReversoSETCS40123',[App\Http\Controllers\Turno_2\Reversosetcs40113Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS40123');
//Rutas F7-SETCS-ELE-40-L1-01-4
Route::resource('F7-SETCS-ELE-40-L1-01-4T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs40113C4ControllerT2');
Route::resource('reversoSETCS40123C4', 'App\Http\Controllers\Turno_2\Reversosetcs40113C4ControllerT2');
Route::get('/checkSETCS40123C4',[App\Http\Controllers\Turno_2\Datoshojasetcs40113C4Controllert2::class,'check'])->name('checkSETCS40123C4');
Route::put('/finalcheckSETCS40123C4/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40113C4Controllert2::class,'finalcheck'])->name('finalcheckSETCS40123C4');
Route::get('/edit2SETCS40123C4/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40113C4Controllert2::class,'edit2'])->name('edit2SETCS40123C4');
Route::put('/update2SETCS40123C4/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40113C4Controllert2::class,'update2'])->name('update2SETCS40123C4');
Route::get('/pdfprintSETCS40123C4',[App\Http\Controllers\Turno_2\Datoshojasetcs40113C4Controllert2::class,'pdfprint'])->name('pdfprintSETCS40123C4');
Route::get('/printindexSETCS40123C4',[App\Http\Controllers\Turno_2\Datoshojasetcs40113C4Controllert2::class,'printindex'])->name('printindexSETCS40123C4');
Route::get('/printreversoSETCS40123C4',[App\Http\Controllers\Turno_2\Reversosetcs40113C4Controllert2::class,'printreverso'])->name('printreversoSETCS40123C4');
Route::get('/pdfReversoSETCS40123C4',[App\Http\Controllers\Turno_2\Reversosetcs40113C4Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS40123C4');
//Rutas F7-SETCS-ELE-40-L1-01-5
Route::resource('F7-SETCS-ELE-40-L1-01-5T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs40113C5ControllerT2');
Route::resource('reversoSETCS40123C5', 'App\Http\Controllers\Turno_2\Reversosetcs40113C5ControllerT2');
Route::get('/checkSETCS40123C5',[App\Http\Controllers\Turno_2\Datoshojasetcs40113C5Controllert2::class,'check'])->name('checkSETCS40123C5');
Route::put('/finalcheckSETCS40123C5/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40113C5Controllert2::class,'finalcheck'])->name('finalcheckSETCS40123C5');
Route::get('/edit2SETCS40123C5/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40113C5Controllert2::class,'edit2'])->name('edit2SETCS40123C5');
Route::put('/update2SETCS40123C5/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40113C5Controllert2::class,'update2'])->name('update2SETCS40123C5');
Route::get('/pdfprintSETCS40123C5',[App\Http\Controllers\Turno_2\Datoshojasetcs40113C5Controllert2::class,'pdfprint'])->name('pdfprintSETCS40123C5');
Route::get('/printindexSETCS40123C5',[App\Http\Controllers\Turno_2\Datoshojasetcs40113C5Controllert2::class,'printindex'])->name('printindexSETCS40123C5');
Route::get('/printreversoSETCS40123C5',[App\Http\Controllers\Turno_2\Reversosetcs40113C5Controllert2::class,'printreverso'])->name('printreversoSETCS40123C5');
Route::get('/pdfReversoSETCS40123C5',[App\Http\Controllers\Turno_2\Reversosetcs40113C5Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS40123C5');
//Rutas F7-SETCS-ELE-40-L1-01-6
Route::resource('F7-SETCS-ELE-40-L1-01-6T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs40113C6ControllerT2');
Route::resource('reversoSETCS40123C6', 'App\Http\Controllers\Turno_2\Reversosetcs40113C6ControllerT2');
Route::get('/checkSETCS40123C6',[App\Http\Controllers\Turno_2\Datoshojasetcs40113C6Controllert2::class,'check'])->name('checkSETCS40123C6');
Route::put('/finalcheckSETCS40123C6/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40113C6Controllert2::class,'finalcheck'])->name('finalcheckSETCS40123C6');
Route::get('/edit2SETCS40123C6/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40113C6Controllert2::class,'edit2'])->name('edit2SETCS40123C6');
Route::put('/update2SETCS40123C6/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40113C6Controllert2::class,'update2'])->name('update2SETCS40123C6');
Route::get('/pdfprintSETCS40123C6',[App\Http\Controllers\Turno_2\Datoshojasetcs40113C6Controllert2::class,'pdfprint'])->name('pdfprintSETCS40123C6');
Route::get('/printindexSETCS40123C6',[App\Http\Controllers\Turno_2\Datoshojasetcs40113C6Controllert2::class,'printindex'])->name('printindexSETCS40123C6');
Route::get('/printreversoSETCS40123C6',[App\Http\Controllers\Turno_2\Reversosetcs40113C6Controllert2::class,'printreverso'])->name('printreversoSETCS40123C6');
Route::get('/pdfReversoSETCS40123C6',[App\Http\Controllers\Turno_2\Reversosetcs40113C6Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS40123C6');
//Rutas F7-SETCS-ELE-40-L1-02-T2
Route::resource('F7-SETCS-ELE-40-L1-02-T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs40211ControllerT2');
Route::resource('reversoSETCS40221', 'App\Http\Controllers\Turno_2\Reversosetcs40211ControllerT2');
Route::get('/checkSETCS40221',[App\Http\Controllers\Turno_2\Datoshojasetcs40211Controllert2::class,'check'])->name('checkSETCS40221');
Route::put('/finalcheckSETCS40221/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40211Controllert2::class,'finalcheck'])->name('finalcheckSETCS40221');
Route::get('/edit2SETCS40221/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40211Controllert2::class,'edit2'])->name('edit2SETCS40221');
Route::put('/update2SETCS40221/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40211Controllert2::class,'update2'])->name('update2SETCS40221');
Route::get('/pdfprintSETCS40221',[App\Http\Controllers\Turno_2\Datoshojasetcs40211Controllert2::class,'pdfprint'])->name('pdfprintSETCS40221');
Route::get('/printindexSETCS40221',[App\Http\Controllers\Turno_2\Datoshojasetcs40211Controllert2::class,'printindex'])->name('printindexSETCS40221');
Route::get('/printreversoSETCS40221',[App\Http\Controllers\Turno_2\Reversosetcs40211Controllert2::class,'printreverso'])->name('printreversoSETCS40221');
Route::get('/pdfReversoSETCS40221',[App\Http\Controllers\Turno_2\Reversosetcs40211Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS40221');
//Rutas F7-SETCS-ELE-40-L1-02-2T2
Route::resource('F7-SETCS-ELE-40-L1-02-2T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs40211C2ControllerT2');
Route::resource('reversoSETCS40221C2', 'App\Http\Controllers\Turno_2\Reversosetcs40211C2ControllerT2');
Route::get('/checkSETCS40221C2',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C2Controllert2::class,'check'])->name('checkSETCS40221C2');
Route::put('/finalcheckSETCS40221C2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C2Controllert2::class,'finalcheck'])->name('finalcheckSETCS40221C2');
Route::get('/edit2SETCS40221C2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C2Controllert2::class,'edit2'])->name('edit2SETCS40221C2');
Route::put('/update2SETCS40221C2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C2Controllert2::class,'update2'])->name('update2SETCS40221C2');
Route::get('/pdfprintSETCS40221C2',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C2Controllert2::class,'pdfprint'])->name('pdfprintSETCS40221C2');
Route::get('/printindexSETCS40221C2',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C2Controllert2::class,'printindex'])->name('printindexSETCS40221C2');
Route::get('/printreversoSETCS40221C2',[App\Http\Controllers\Turno_2\Reversosetcs40211C2Controllert2::class,'printreverso'])->name('printreversoSETCS40221C2');
Route::get('/pdfReversoSETCS40221C2',[App\Http\Controllers\Turno_2\Reversosetcs40211C2Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS40221C2');
//Rutas F7-SETCS-ELE-40-L1-02-3T2
Route::resource('F7-SETCS-ELE-40-L1-02-3T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs40211C3ControllerT2');
Route::resource('reversoSETCS40221C3', 'App\Http\Controllers\Turno_2\Reversosetcs40211C3ControllerT2');
Route::get('/checkSETCS40221C3',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C3Controllert2::class,'check'])->name('checkSETCS40221C3');
Route::put('/finalcheckSETCS40221C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C3Controllert2::class,'finalcheck'])->name('finalcheckSETCS40221C3');
Route::get('/edit2SETCS40221C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C3Controllert2::class,'edit2'])->name('edit2SETCS40221C3');
Route::put('/update2SETCS40221C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C3Controllert2::class,'update2'])->name('update2SETCS40221C3');
Route::get('/pdfprintSETCS40221C3',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C3Controllert2::class,'pdfprint'])->name('pdfprintSETCS40221C3');
Route::get('/printindexSETCS40221C3',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C3Controllert2::class,'printindex'])->name('printindexSETCS40221C3');
Route::get('/printreversoSETCS40221C3',[App\Http\Controllers\Turno_2\Reversosetcs40211C3Controllert2::class,'printreverso'])->name('printreversoSETCS40221C3');
Route::get('/pdfReversoSETCS40221C3',[App\Http\Controllers\Turno_2\Reversosetcs40211C3Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS40221C3');
//Rutas F7-SETCS-ELE-40-L1-02-4T2
Route::resource('F7-SETCS-ELE-40-L1-02-4T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs40211C4ControllerT2');
Route::resource('reversoSETCS40221C4', 'App\Http\Controllers\Turno_2\Reversosetcs40211C4ControllerT2');
Route::get('/checkSETCS40221C4',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C4Controllert2::class,'check'])->name('checkSETCS40221C4');
Route::put('/finalcheckSETCS40221C4/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C4Controllert2::class,'finalcheck'])->name('finalcheckSETCS40221C4');
Route::get('/edit2SETCS40221C4/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C4Controllert2::class,'edit2'])->name('edit2SETCS40221C4');
Route::put('/update2SETCS40221C4/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C4Controllert2::class,'update2'])->name('update2SETCS40221C4');
Route::get('/pdfprintSETCS40221C4',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C4Controllert2::class,'pdfprint'])->name('pdfprintSETCS40221C4');
Route::get('/printindexSETCS40221C4',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C4Controllert2::class,'printindex'])->name('printindexSETCS40221C4');
Route::get('/printreversoSETCS40221C4',[App\Http\Controllers\Turno_2\Reversosetcs40211C4Controllert2::class,'printreverso'])->name('printreversoSETCS40221C4');
Route::get('/pdfReversoSETCS40221C4',[App\Http\Controllers\Turno_2\Reversosetcs40211C4Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS40221C4');
//Rutas F7-SETCS-ELE-40-L1-02-5T2
Route::resource('F7-SETCS-ELE-40-L1-02-5T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs40211C5ControllerT2');
Route::resource('reversoSETCS40221C5', 'App\Http\Controllers\Turno_2\Reversosetcs40211C5ControllerT2');
Route::get('/checkSETCS40221C5',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C5Controllert2::class,'check'])->name('checkSETCS40221C5');
Route::put('/finalcheckSETCS40221C5/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C5Controllert2::class,'finalcheck'])->name('finalcheckSETCS40221C5');
Route::get('/edit2SETCS40221C5/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C5Controllert2::class,'edit2'])->name('edit2SETCS40221C5');
Route::put('/update2SETCS40221C5/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C5Controllert2::class,'update2'])->name('update2SETCS40221C5');
Route::get('/pdfprintSETCS40221C5',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C5Controllert2::class,'pdfprint'])->name('pdfprintSETCS40221C5');
Route::get('/printindexSETCS40221C5',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C5Controllert2::class,'printindex'])->name('printindexSETCS40221C5');
Route::get('/printreversoSETCS40221C5',[App\Http\Controllers\Turno_2\Reversosetcs40211C5Controllert2::class,'printreverso'])->name('printreversoSETCS40221C5');
Route::get('/pdfReversoSETCS40221C5',[App\Http\Controllers\Turno_2\Reversosetcs40211C5Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS40221C5');
//Rutas F7-SETCS-ELE-40-L1-02-5T2
Route::resource('F7-SETCS-ELE-40-L1-02-6T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs40211C6ControllerT2');
Route::resource('reversoSETCS40221C6', 'App\Http\Controllers\Turno_2\Reversosetcs40211C6ControllerT2');
Route::get('/checkSETCS40221C6',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C6Controllert2::class,'check'])->name('checkSETCS40221C6');
Route::put('/finalcheckSETCS40221C6/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C6Controllert2::class,'finalcheck'])->name('finalcheckSETCS40221C6');
Route::get('/edit2SETCS40221C6/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C6Controllert2::class,'edit2'])->name('edit2SETCS40221C6');
Route::put('/update2SETCS40221C6/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C6Controllert2::class,'update2'])->name('update2SETCS40221C6');
Route::get('/pdfprintSETCS40221C6',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C6Controllert2::class,'pdfprint'])->name('pdfprintSETCS40221C6');
Route::get('/printindexSETCS40221C6',[App\Http\Controllers\Turno_2\Datoshojasetcs40211C6Controllert2::class,'printindex'])->name('printindexSETCS40221C6');
Route::get('/printreversoSETCS40221C6',[App\Http\Controllers\Turno_2\Reversosetcs40211C6Controllert2::class,'printreverso'])->name('printreversoSETCS40221C6');
Route::get('/pdfReversoSETCS40221C6',[App\Http\Controllers\Turno_2\Reversosetcs40211C6Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS40221C6');
//Rutas F7-SETCS-ELE-60-L1-01-T2
Route::resource('F7-SETCS-ELE-60-L1-01-T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs606111H1ControllerT2');
Route::resource('reversoSETCS606113H1T2', 'App\Http\Controllers\Turno_2\Reversosetcs606111H1ControllerT2');
Route::get('/checkSETCS606113H1T2',[App\Http\Controllers\Turno_2\Datoshojasetcs606111H1Controllert2::class,'check'])->name('checkSETCS606113H1T2');
Route::put('/finalcheckSETCS606113H1T2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111H1Controllert2::class,'finalcheck'])->name('finalcheckSETCS606113H1T2');
Route::get('/edit2SETCS606113H1T2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111H1Controllert2::class,'edit2'])->name('edit2SETCS606113H1T2');
Route::put('/update2SETCS606113H1T2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111H1Controllert2::class,'update2'])->name('update2SETCS606113H1T2');
Route::get('/pdfprintSETCS606113H1T2',[App\Http\Controllers\Turno_2\Datoshojasetcs606111H1Controllert2::class,'pdfprint'])->name('pdfprintSETCS606113H1T2');
Route::get('/printindexSETCS606113H1T2',[App\Http\Controllers\Turno_2\Datoshojasetcs606111H1Controllert2::class,'printindex'])->name('printindexSETCS606113H1T2');
Route::get('/printreversoSETCS606113H1T2',[App\Http\Controllers\Turno_2\Reversosetcs606111H1Controllert2::class,'printreverso'])->name('printreversoSETCS606113H1T2');
Route::get('/pdfReversoSETCS606113H1T2',[App\Http\Controllers\Turno_2\Reversosetcs606111H1Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS606113H1T2');
//Rutas F7-SETCS-ELE-60-L1-06-T2
Route::resource('F7-SETCS-ELE-60-L1-06-T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs606111ControllerT2');
Route::resource('reversoSETCS606112', 'App\Http\Controllers\Turno_2\Reversosetcs606111ControllerT2');
Route::get('/checkSETCS606112',[App\Http\Controllers\Turno_2\Datoshojasetcs606111Controllert2::class,'check'])->name('checkSETCS606112');
Route::put('/finalcheckSETCS606112/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111Controllert2::class,'finalcheck'])->name('finalcheckSETCS606112');
Route::get('/edit2SETCS606112/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111Controllert2::class,'edit2'])->name('edit2SETCS606112');
Route::put('/update2SETCS606112/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111Controllert2::class,'update2'])->name('update2SETCS606112');
Route::get('/pdfprintSETCS606112',[App\Http\Controllers\Turno_2\Datoshojasetcs606111Controllert2::class,'pdfprint'])->name('pdfprintSETCS606112');
Route::get('/printindexSETCS606112',[App\Http\Controllers\Turno_2\Datoshojasetcs606111Controllert2::class,'printindex'])->name('printindexSETCS606112');
Route::get('/printreversoSETCS606112',[App\Http\Controllers\Turno_2\Reversosetcs606111Controllert2::class,'printreverso'])->name('printreversoSETCS606112');
Route::get('/pdfReversoSETCS606112',[App\Http\Controllers\Turno_2\Reversosetcs606111Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS606112');
//Rutas F7-SETCS-ELE-60-L1-06-2T2
Route::resource('F7-SETCS-ELE-60-L1-06-2T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs606111C2ControllerT2');
Route::resource('reversoSETCS606112C2', 'App\Http\Controllers\Turno_2\Reversosetcs606111C2ControllerT2');
Route::get('/checkSETCS606112C2',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C2Controllert2::class,'check'])->name('checkSETCS606112C2');
Route::put('/finalcheckSETCS606112C2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C2Controllert2::class,'finalcheck'])->name('finalcheckSETCS606112C2');
Route::get('/edit2SETCS606112C2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C2Controllert2::class,'edit2'])->name('edit2SETCS606112C2');
Route::put('/update2SETCS606112C2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C2Controllert2::class,'update2'])->name('update2SETCS606112C2');
Route::get('/pdfprintSETCS606112C2',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C2Controllert2::class,'pdfprint'])->name('pdfprintSETCS606112C2');
Route::get('/printindexSETCS606112C2',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C2Controllert2::class,'printindex'])->name('printindexSETCS606112C2');
Route::get('/printreversoSETCS606112C2',[App\Http\Controllers\Turno_2\Reversosetcs606111C2Controllert2::class,'printreverso'])->name('printreversoSETCS606112C2');
Route::get('/pdfReversoSETCS606112C2',[App\Http\Controllers\Turno_2\Reversosetcs606111C2Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS606112C2');
//Rutas F7-SETCS-ELE-60-L1-06-3T2
Route::resource('F7-SETCS-ELE-60-L1-06-3T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs606111C3ControllerT2');
Route::resource('reversoSETCS606112C3', 'App\Http\Controllers\Turno_2\Reversosetcs606111C3ControllerT2');
Route::get('/checkSETCS606112C3',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C3Controllert2::class,'check'])->name('checkSETCS606112C3');
Route::put('/finalcheckSETCS606112C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C3Controllert2::class,'finalcheck'])->name('finalcheckSETCS606112C3');
Route::get('/edit2SETCS606112C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C3Controllert2::class,'edit2'])->name('edit2SETCS606112C3');
Route::put('/update2SETCS606112C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C3Controllert2::class,'update2'])->name('update2SETCS606112C3');
Route::get('/pdfprintSETCS606112C3',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C3Controllert2::class,'pdfprint'])->name('pdfprintSETCS606112C3');
Route::get('/printindexSETCS606112C3',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C3ontrollert2::class,'printindex'])->name('printindexSETCS606112C3');
Route::get('/printreversoSETCS606112C3',[App\Http\Controllers\Turno_2\Reversosetcs606111C3Controllert2::class,'printreverso'])->name('printreversoSETCS606112C3');
Route::get('/pdfReversoSETCS606112C3',[App\Http\Controllers\Turno_2\Reversosetcs606111C3Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS606112C3');
//Rutas F7-SETCS-ELE-60-L1-06-4T2
Route::resource('F7-SETCS-ELE-60-L1-06-4T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs606111C4ControllerT2');
Route::resource('reversoSETCS606112C4', 'App\Http\Controllers\Turno_2\Reversosetcs606111C4ControllerT2');
Route::get('/checkSETCS606112C4',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C4Controllert2::class,'check'])->name('checkSETCS606112C4');
Route::put('/finalcheckSETCS606112C4/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C4Controllert2::class,'finalcheck'])->name('finalcheckSETCS606112C4');
Route::get('/edit2SETCS606112C4/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C4Controllert2::class,'edit2'])->name('edit2SETCS606112C4');
Route::put('/update2SETCS606112C4/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C4Controllert2::class,'update2'])->name('update2SETCS606112C4');
Route::get('/pdfprintSETCS606112C4',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C4Controllert2::class,'pdfprint'])->name('pdfprintSETCS606112C4');
Route::get('/printindexSETCS606112C4',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C4Controllert2::class,'printindex'])->name('printindexSETCS606112C4');
Route::get('/printreversoSETCS606112C4',[App\Http\Controllers\Turno_2\Reversosetcs606111C4Controllert2::class,'printreverso'])->name('printreversoSETCS606112C4');
Route::get('/pdfReversoSETCS606112C4',[App\Http\Controllers\Turno_2\Reversosetcs606111C4Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS606112C4');
//Rutas F7-SETCS-ELE-60-L1-06-5T2
Route::resource('F7-SETCS-ELE-60-L1-06-5T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs606111C5ControllerT2');
Route::resource('reversoSETCS606112C5', 'App\Http\Controllers\Turno_2\Reversosetcs606111C5ControllerT2');
Route::get('/checkSETCS606112C5',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C5Controllert2::class,'check'])->name('checkSETCS606112C5');
Route::put('/finalcheckSETCS606112C5/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C5Controllert2::class,'finalcheck'])->name('finalcheckSETCS606112C5');
Route::get('/edit2SETCS606112C5/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C5Controllert2::class,'edit2'])->name('edit2SETCS606112C5');
Route::put('/update2SETCS606112C5/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C5Controllert2::class,'update2'])->name('update2SETCS606112C5');
Route::get('/pdfprintSETCS606112C5',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C5Controllert2::class,'pdfprint'])->name('pdfprintSETCS606112C5');
Route::get('/printindexSETCS606112C5',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C5Controllert2::class,'printindex'])->name('printindexSETCS606112C5');
Route::get('/printreversoSETCS606112C5',[App\Http\Controllers\Turno_2\Reversosetcs606111C5Controllert2::class,'printreverso'])->name('printreversoSETCS606112C5');
Route::get('/pdfReversoSETCS606112C5',[App\Http\Controllers\Turno_2\Reversosetcs606111C5Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS606112C5');
//Rutas F7-SETCS-ELE-60-L1-06-6T2
Route::resource('F7-SETCS-ELE-60-L1-06-6T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs606111C6ControllerT2');
Route::resource('reversoSETCS606112C6', 'App\Http\Controllers\Turno_2\Reversosetcs606111C6ControllerT2');
Route::get('/checkSETCS606112C6',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C6Controllert2::class,'check'])->name('checkSETCS606112C6');
Route::put('/finalcheckSETCS606112C6/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C6Controllert2::class,'finalcheck'])->name('finalcheckSETCS606112C6');
Route::get('/edit2SETCS606112C6/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C6Controllert2::class,'edit2'])->name('edit2SETCS606112C6');
Route::put('/update2SETCS606112C6/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C6Controllert2::class,'update2'])->name('update2SETCS606112C6');
Route::get('/pdfprintSETCS606112C6',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C6Controllert2::class,'pdfprint'])->name('pdfprintSETCS606112C6');
Route::get('/printindexSETCS606112C6',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C6Controllert2::class,'printindex'])->name('printindexSETCS606112C6');
Route::get('/printreversoSETCS606112C6',[App\Http\Controllers\Turno_2\Reversosetcs606111C6Controllert2::class,'printreverso'])->name('printreversoSETCS606112C6');
Route::get('/pdfReversoSETCS606112C6',[App\Http\Controllers\Turno_2\Reversosetcs606111C6Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS606112C6');
//Rutas F7-SETCS-ELE-60-L1-06-7T2
Route::resource('F7-SETCS-ELE-60-L1-06-7T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs606111C7ControllerT2');
Route::resource('reversoSETCS606112C7', 'App\Http\Controllers\Turno_2\Reversosetcs606111C7ControllerT2');
Route::get('/checkSETCS606112C7',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C7Controllert2::class,'check'])->name('checkSETCS606112C7');
Route::put('/finalcheckSETCS606112C7/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C7Controllert2::class,'finalcheck'])->name('finalcheckSETCS606112C7');
Route::get('/edit2SETCS606112C7/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C7Controllert2::class,'edit2'])->name('edit2SETCS606112C7');
Route::put('/update2SETCS606112C7/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C7Controllert2::class,'update2'])->name('update2SETCS606112C7');
Route::get('/pdfprintSETCS606112C7',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C7Controllert2::class,'pdfprint'])->name('pdfprintSETCS606112C7');
Route::get('/printindexSETCS606112C7',[App\Http\Controllers\Turno_2\Datoshojasetcs606111C7Controllert2::class,'printindex'])->name('printindexSETCS606112C7');
Route::get('/printreversoSETCS606112C7',[App\Http\Controllers\Turno_2\Reversosetcs606111C7Controllert2::class,'printreverso'])->name('printreversoSETCS606112C7');
Route::get('/pdfReversoSETCS606112C7',[App\Http\Controllers\Turno_2\Reversosetcs606111C7Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS606112C7');
//Rutas F7-SETCS-ELE-60-L1-07-1
Route::resource('F7-SETCS-ELE-60-L1-07-T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs606111H7ControllerT2');
Route::resource('reversoSETCS606113H7T2', 'App\Http\Controllers\Turno_2\Reversosetcs606111H7ControllerT2');
Route::get('/checkSETCS606113H7T2',[App\Http\Controllers\Turno_2\Datoshojasetcs606111H7Controllert2::class,'check'])->name('checkSETCS606113H7T2');
Route::put('/finalcheckSETCS606113H7T2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111H7Controllert2::class,'finalcheck'])->name('finalcheckSETCS606113H7T2');
Route::get('/edit2SETCS606113H7T2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111H7Controllert2::class,'edit2'])->name('edit2SETCS606113H7T2');
Route::put('/update2SETCS606113H7T2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs606111H7Controllert2::class,'update2'])->name('update2SETCS606113H7T2');
Route::get('/pdfprintSETCS606113H7T2',[App\Http\Controllers\Turno_2\Datoshojasetcs606111H7Controllert2::class,'pdfprint'])->name('pdfprintSETCS606113H7T2');
Route::get('/printindexSETCS606113H7T2',[App\Http\Controllers\Turno_2\Datoshojasetcs606111H7Controllert2::class,'printindex'])->name('printindexSETCS606113H7T2');
Route::get('/printreversoSETCS606113H7T2',[App\Http\Controllers\Turno_2\Reversosetcs606111H7Controllert2::class,'printreverso'])->name('printreversoSETCS606113H7T2');
Route::get('/pdfReversoSETCS606113H7T2',[App\Http\Controllers\Turno_2\Reversosetcs606111H7Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS606113H7T2');
//Rutas F7-SETCS-ELE-60-L1-07-2
Route::resource('F7-SETCS-ELE-60-L1-07-2T2', 'App\Http\Controllers\Datoshojasetcs606111H72ControllerT2');
Route::resource('reversoSETCS606113H72T2', 'App\Http\Controllers\Reversosetcs606111H72ControllerT2');
Route::get('/checkSETCS606113H72T2',[App\Http\Controllers\Datoshojasetcs606111H72Controllert2::class,'check'])->name('checkSETCS606113H72T2');
Route::put('/finalcheckSETCS606113H72T2/{id}',[App\Http\Controllers\Datoshojasetcs606111H72Controllert2::class,'finalcheck'])->name('finalcheckSETCS606113H72T2');
Route::get('/edit2SETCS606113H72T2/{id}',[App\Http\Controllers\Datoshojasetcs606111H72Controllert2::class,'edit2'])->name('edit2SETCS606113H72T2');
Route::put('/update2SETCS606113H72T2/{id}',[App\Http\Controllers\Datoshojasetcs606111H72Controllert2::class,'update2'])->name('update2SETCS606113H72T2');
Route::get('/pdfprintSETCS606113H72T2',[App\Http\Controllers\Datoshojasetcs606111H72Controllert2::class,'pdfprint'])->name('pdfprintSETCS606113H72T2');
Route::get('/printindexSETCS606113H72T2',[App\Http\Controllers\Datoshojasetcs606111H72Controllert2::class,'printindex'])->name('printindexSETCS606113H72T2');
Route::get('/printreversoSETCS606113H72T2',[App\Http\Controllers\Reversosetcs606111H72Controllert2::class,'printreverso'])->name('printreversoSETCS606113H72T2');
Route::get('/pdfReversoSETCS606113H72T2',[App\Http\Controllers\Reversosetcs606111H72Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS606113H72T2');
//Rutas F7-SETCS-ELE-60-L1-07-3
Route::resource('F7-SETCS-ELE-60-L1-07-3T2', 'App\Http\Controllers\Datoshojasetcs606111H73ControllerT2');
Route::resource('reversoSETCS606113H73T2', 'App\Http\Controllers\Reversosetcs606111H73ControllerT2');
Route::get('/checkSETCS606113H73T2',[App\Http\Controllers\Datoshojasetcs606111H73Controllert2::class,'check'])->name('checkSETCS606113H73T2');
Route::put('/finalcheckSETCS606113H73T2/{id}',[App\Http\Controllers\Datoshojasetcs606111H73Controllert2::class,'finalcheck'])->name('finalcheckSETCS606113H73T2');
Route::get('/edit2SETCS606113H73T2/{id}',[App\Http\Controllers\Datoshojasetcs606111H73Controllert2::class,'edit2'])->name('edit2SETCS606113H73T2');
Route::put('/update2SETCS606113H73T2/{id}',[App\Http\Controllers\Datoshojasetcs606111H73Controllert2::class,'update2'])->name('update2SETCS606113H73T2');
Route::get('/pdfprintSETCS606113H73T2',[App\Http\Controllers\Datoshojasetcs606111H73Controllert2::class,'pdfprint'])->name('pdfprintSETCS606113H73T2');
Route::get('/printindexSETCS606113H73T2',[App\Http\Controllers\Datoshojasetcs606111H73Controllert2::class,'printindex'])->name('printindexSETCS606113H73T2');
Route::get('/printreversoSETCS606113H73T2',[App\Http\Controllers\Reversosetcs606111H73Controllert2::class,'printreverso'])->name('printreversoSETCS606113H73T2');
Route::get('/pdfReversoSETCS606113H73T2',[App\Http\Controllers\Reversosetcs606111H73Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS606113H73T2');
//Rutas F7-SETCS-ELE-60-L1-07-4
Route::resource('F7-SETCS-ELE-60-L1-07-4T2', 'App\Http\Controllers\Datoshojasetcs606111H74ControllerT2');
Route::resource('reversoSETCS606113H74T2', 'App\Http\Controllers\Reversosetcs606111H74ControllerT2');
Route::get('/checkSETCS606113H74T2',[App\Http\Controllers\Datoshojasetcs606111H74Controllert2::class,'check'])->name('checkSETCS606113H74T2');
Route::put('/finalcheckSETCS606113H74T2/{id}',[App\Http\Controllers\Datoshojasetcs606111H74Controllert2::class,'finalcheck'])->name('finalcheckSETCS606113H74T2');
Route::get('/edit2SETCS606113H74T2/{id}',[App\Http\Controllers\Datoshojasetcs606111H74Controllert2::class,'edit2'])->name('edit2SETCS606113H74T2');
Route::put('/update2SETCS606113H74T2/{id}',[App\Http\Controllers\Datoshojasetcs606111H74Controllert2::class,'update2'])->name('update2SETCS606113H74T2');
Route::get('/pdfprintSETCS606113H74T2',[App\Http\Controllers\Datoshojasetcs606111H74Controllert2::class,'pdfprint'])->name('pdfprintSETCS606113H74T2');
Route::get('/printindexSETCS606113H74T2',[App\Http\Controllers\Datoshojasetcs606111H74Controllert2::class,'printindex'])->name('printindexSETCS606113H74T2');
Route::get('/printreversoSETCS606113H74T2',[App\Http\Controllers\Reversosetcs606111H74Controllert2::class,'printreverso'])->name('printreversoSETCS606113H74T2');
Route::get('/pdfReversoSETCS606113H74T2',[App\Http\Controllers\Reversosetcs606111H74Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS606113H74T2');
//Rutas F7-SETCS-ELE-60-L1-07-5
Route::resource('F7-SETCS-ELE-60-L1-07-5T2', 'App\Http\Controllers\Datoshojasetcs606111H75ControllerT2');
Route::resource('reversoSETCS606113H75T2', 'App\Http\Controllers\Reversosetcs606111H75ControllerT2');
Route::get('/checkSETCS606113H75T2',[App\Http\Controllers\Datoshojasetcs606111H75Controllert2::class,'check'])->name('checkSETCS606113H75T2');
Route::put('/finalcheckSETCS606113H75T2/{id}',[App\Http\Controllers\Datoshojasetcs606111H75Controllert2::class,'finalcheck'])->name('finalcheckSETCS606113H75T2');
Route::get('/edit2SETCS606113H75T2/{id}',[App\Http\Controllers\Datoshojasetcs606111H75Controllert2::class,'edit2'])->name('edit2SETCS606113H75T2');
Route::put('/update2SETCS606113H75T2/{id}',[App\Http\Controllers\Datoshojasetcs606111H75Controllert2::class,'update2'])->name('update2SETCS606113H75T2');
Route::get('/pdfprintSETCS606113H75T2',[App\Http\Controllers\Datoshojasetcs606111H75Controllert2::class,'pdfprint'])->name('pdfprintSETCS606113H75T2');
Route::get('/printindexSETCS606113H75T2',[App\Http\Controllers\Datoshojasetcs606111H75Controllert2::class,'printindex'])->name('printindexSETCS606113H75T2');
Route::get('/printreversoSETCS606113H75T2',[App\Http\Controllers\Reversosetcs606111H75Controllert2::class,'printreverso'])->name('printreversoSETCS606113H75T2');
Route::get('/pdfReversoSETCS606113H75T2',[App\Http\Controllers\Reversosetcs606111H75Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS606113H75T2');
//Rutas F7-SETCS-ELE-60-L1-07-6
Route::resource('F7-SETCS-ELE-60-L1-07-6T2', 'App\Http\Controllers\Datoshojasetcs606111H76ControllerT2');
Route::resource('reversoSETCS606113H76T2', 'App\Http\Controllers\Reversosetcs606111H76ControllerT2');
Route::get('/checkSETCS606113H76T2',[App\Http\Controllers\Datoshojasetcs606111H76Controllert2::class,'check'])->name('checkSETCS606113H76T2');
Route::put('/finalcheckSETCS606113H76T2/{id}',[App\Http\Controllers\Datoshojasetcs606111H76Controllert2::class,'finalcheck'])->name('finalcheckSETCS606113H76T2');
Route::get('/edit2SETCS606113H76T2/{id}',[App\Http\Controllers\Datoshojasetcs606111H76Controllert2::class,'edit2'])->name('edit2SETCS606113H76T2');
Route::put('/update2SETCS606113H76T2/{id}',[App\Http\Controllers\Datoshojasetcs606111H76Controllert2::class,'update2'])->name('update2SETCS606113H76T2');
Route::get('/pdfprintSETCS606113H76T2',[App\Http\Controllers\Datoshojasetcs606111H76Controllert2::class,'pdfprint'])->name('pdfprintSETCS606113H76T2');
Route::get('/printindexSETCS606113H76T2',[App\Http\Controllers\Datoshojasetcs606111H76Controllert2::class,'printindex'])->name('printindexSETCS606113H76T2');
Route::get('/printreversoSETCS606113H76T2',[App\Http\Controllers\Reversosetcs606111H76Controllert2::class,'printreverso'])->name('printreversoSETCS606113H76T2');
Route::get('/pdfReversoSETCS606113H76T2',[App\Http\Controllers\Reversosetcs606111H76Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS606113H76T2');
//Rutas F7-SETCS-ELE-60-L1-08-T2
Route::resource('F7-SETCS-ELE-60-L1-08-T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs6082ControllerT2');
Route::resource('reversoSETCS6082', 'App\Http\Controllers\Turno_2\Reversosetcs6082ControllerT2');
Route::get('/checkSETCS6082',[App\Http\Controllers\Turno_2\Datoshojasetcs6082Controllert2::class,'check'])->name('checkSETCS6082');
Route::put('/finalcheckSETCS6082/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs6082Controllert2::class,'finalcheck'])->name('finalcheckSETCS6082');
Route::get('/edit2SETCS6082/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs6082Controllert2::class,'edit2'])->name('edit2SETCS6082');
Route::put('/update2SETCS6082/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs6082Controllert2::class,'update2'])->name('update2SETCS6082');
Route::get('/pdfprintSETCS6082',[App\Http\Controllers\Turno_2\Datoshojasetcs6082Controllert2::class,'pdfprint'])->name('pdfprintSETCS6082');
Route::get('/printindexSETCS6082',[App\Http\Controllers\Turno_2\Datoshojasetcs6082Controllert2::class,'printindex'])->name('printindexSETCS6082');
Route::get('/printreversoSETCS6082',[App\Http\Controllers\Turno_2\Reversosetcs6082Controllert2::class,'printreverso'])->name('printreversoSETCS6082');
Route::get('/pdfReversoSETCS6082',[App\Http\Controllers\Turno_2\Reversosetcs6082Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS6082');
//Rutas F7-SETCS-ELE-100-L1-01-T2
Route::resource('F7-SETCS-ELE-100-L1-01-T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs100111ControllerT2');
Route::resource('reversoSETCS100112', 'App\Http\Controllers\Turno_2\Reversosetcs100111ControllerT2');
Route::get('/checkSETCS100112',[App\Http\Controllers\Turno_2\Datoshojasetcs100111Controllert2::class,'check'])->name('checkSETCS100112');
Route::put('/finalcheckSETCS100112/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs100111Controllert2::class,'finalcheck'])->name('finalcheckSETCS100112');
Route::get('/edit2SETCS100112/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs100111Controllert2::class,'edit2'])->name('edit2SETCS100112');
Route::put('/update2SETCS100112/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs100111Controllert2::class,'update2'])->name('update2SETCS100112');
Route::get('/pdfprintSETCS100112',[App\Http\Controllers\Turno_2\Datoshojasetcs100111Controllert2::class,'pdfprint'])->name('pdfprintSETCS100112');
Route::get('/printindexSETCS100112',[App\Http\Controllers\Turno_2\Datoshojasetcs100111Controllert2::class,'printindex'])->name('printindexSETCS100112');
Route::get('/printreversoSETCS100112',[App\Http\Controllers\Turno_2\Reversosetcs100111Controllert2::class,'printreverso'])->name('printreversoSETCS100112');
Route::get('/pdfReversoSETCS100112',[App\Http\Controllers\Turno_2\Reversosetcs100111Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS100112');
//Rutas F7-SETCS-ELE-100-L1-01-2T2
Route::resource('F7-SETCS-ELE-100-L1-01-2T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs100111C2ControllerT2');
Route::resource('reversoSETCS100112C2', 'App\Http\Controllers\Turno_2\Reversosetcs100111C2ControllerT2');
Route::get('/checkSETCS100112C2',[App\Http\Controllers\Turno_2\Datoshojasetcs100111C2Controllert2::class,'check'])->name('checkSETCS100112C2');
Route::put('/finalcheckSETCS100112C2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs100111C2Controllert2::class,'finalcheck'])->name('finalcheckSETCS100112C2');
Route::get('/edit2SETCS100112C2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs100111C2Controllert2::class,'edit2'])->name('edit2SETCS100112C2');
Route::put('/update2SETCS100112C2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs100111C2Controllert2::class,'update2'])->name('update2SETCS100112C2');
Route::get('/pdfprintSETCS100112C2',[App\Http\Controllers\Turno_2\Datoshojasetcs100111C2Controllert2::class,'pdfprint'])->name('pdfprintSETCS100112C2');
Route::get('/printindexSETCS100112C2',[App\Http\Controllers\Turno_2\Datoshojasetcs100111C2Controllert2::class,'printindex'])->name('printindexSETCS100112C2');
Route::get('/printreversoSETCS100112C2',[App\Http\Controllers\Turno_2\Reversosetcs100111C2Controllert2::class,'printreverso'])->name('printreversoSETCS100112C2');
Route::get('/pdfReversoSETCS100112C2',[App\Http\Controllers\Turno_2\Reversosetcs100111C2Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS100112C2');
//Rutas F7-SETCS-ELE-100-L1-01-3T2
Route::resource('F7-SETCS-ELE-100-L1-01-3T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs100111C3ControllerT2');
Route::resource('reversoSETCS100112C3', 'App\Http\Controllers\Turno_2\Reversosetcs100111C3ControllerT2');
Route::get('/checkSETCS100112C3',[App\Http\Controllers\Turno_2\Datoshojasetcs100111C3Controllert2::class,'check'])->name('checkSETCS100112C3');
Route::put('/finalcheckSETCS100112C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs100111C3Controllert2::class,'finalcheck'])->name('finalcheckSETCS100112C3');
Route::get('/edit2SETCS100112C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs100111C3Controllert2::class,'edit2'])->name('edit2SETCS100112C3');
Route::put('/update2SETCS100112C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs100111C3Controllert2::class,'update2'])->name('update2SETCS100112C3');
Route::get('/pdfprintSETCS100112C3',[App\Http\Controllers\Turno_2\Datoshojasetcs100111C3Controllert2::class,'pdfprint'])->name('pdfprintSETCS100112C3');
Route::get('/printindexSETCS100112C3',[App\Http\Controllers\Turno_2\Datoshojasetcs100111C3Controllert2::class,'printindex'])->name('printindexSETCS100112C3');
Route::get('/printreversoSETCS100112C3',[App\Http\Controllers\Turno_2\Reversosetcs100111C3Controllert2::class,'printreverso'])->name('printreversoSETCS100112C3');
Route::get('/pdfReversoSETCS100112C3',[App\Http\Controllers\Turno_2\Reversosetcs100111C3Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS100112C3');
//Rutas F7-SETCS-ELE-100-L1-02-T2
Route::resource('F7-SETCS-ELE-100-L1-02-T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs10021ControllerT2');
Route::resource('reversoSETCS10022', 'App\Http\Controllers\Turno_2\Reversosetcs10021ControllerT2');
Route::get('/checkSETCS10022',[App\Http\Controllers\Turno_2\Datoshojasetcs10021Controllert2::class,'check'])->name('checkSETCS10022');
Route::put('/finalcheckSETCS10022/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs10021Controllert2::class,'finalcheck'])->name('finalcheckSETCS10022');
Route::get('/edit2SETCS10022/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs10021Controllert2::class,'edit2'])->name('edit2SETCS10022');
Route::put('/update2SETCS10022/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs10021Controllert2::class,'update2'])->name('update2SETCS10022');
Route::get('/pdfprintSETCS10022',[App\Http\Controllers\Turno_2\Datoshojasetcs10021Controllert2::class,'pdfprint'])->name('pdfprintSETCS10022');
Route::get('/printindexSETCS10022',[App\Http\Controllers\Turno_2\Datoshojasetcs10021Controllert2::class,'printindex'])->name('printindexSETCS10022');
Route::get('/printreversoSETCS10022',[App\Http\Controllers\Turno_2\Reversosetcs10021Controllert2::class,'printreverso'])->name('printreversoSETCS10022');
Route::get('/pdfReversoSETCS10022',[App\Http\Controllers\Turno_2\Reversosetcs10021Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS10022');
//Rutas F7-SETCS-ELE-100-L1-03-T2
Route::resource('F7-SETCS-ELE-100-L1-03-T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs10031ControllerT2');
Route::resource('reversoSETCS10032', 'App\Http\Controllers\Turno_2\Reversosetcs10031ControllerT2');
Route::get('/checkSETCS10032',[App\Http\Controllers\Turno_2\Datoshojasetcs10031Controllert2::class,'check'])->name('checkSETCS10032');
Route::put('/finalcheckSETCS10032/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs10031Controllert2::class,'finalcheck'])->name('finalcheckSETCS10032');
Route::get('/edit2SETCS10032/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs10031Controllert2::class,'edit2'])->name('edit2SETCS10032');
Route::put('/update2SETCS10032/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs10031Controllert2::class,'update2'])->name('update2SETCS10032');
Route::get('/pdfprintSETCS10032',[App\Http\Controllers\Turno_2\Datoshojasetcs10031Controllert2::class,'pdfprint'])->name('pdfprintSETCS10032');
Route::get('/printindexSETCS10032',[App\Http\Controllers\Turno_2\Datoshojasetcs10031Controllert2::class,'printindex'])->name('printindexSETCS10032');
Route::get('/printreversoSETCS10032',[App\Http\Controllers\Turno_2\Reversosetcs10031Controllert2::class,'printreverso'])->name('printreversoSETCS10032');
Route::get('/pdfReversoSETCS10032',[App\Http\Controllers\Turno_2\Reversosetcs10031Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS10032');
//Rutas F7-SETCS-ELE-103-L1-01-T2
Route::resource('F7-SETCS-ELE-103-L1-01-T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs10311ControllerT2');
Route::resource('reversoSETCS10312', 'App\Http\Controllers\Turno_2\Reversosetcs10311ControllerT2');
Route::get('/checkSETCS10312',[App\Http\Controllers\Turno_2\Datoshojasetcs10311Controllert2::class,'check'])->name('checkSETCS10312');
Route::put('/finalcheckSETCS10312/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs10311Controllert2::class,'finalcheck'])->name('finalcheckSETCS10312');
Route::get('/edit2SETCS10312/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs10311Controllert2::class,'edit2'])->name('edit2SETCS10312');
Route::put('/update2SETCS10312/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs10311Controllert2::class,'update2'])->name('update2SETCS10312');
Route::get('/pdfprintSETCS10312',[App\Http\Controllers\Turno_2\Datoshojasetcs10311Controllert2::class,'pdfprint'])->name('pdfprintSETCS10312');
Route::get('/printindexSETCS10312',[App\Http\Controllers\Turno_2\Datoshojasetcs10311Controllert2::class,'printindex'])->name('printindexSETCS10312');
Route::get('/printreversoSETCS10312',[App\Http\Controllers\Turno_2\Reversosetcs10311Controllert2::class,'printreverso'])->name('printreversoSETCS10312');
Route::get('/pdfReversoSETCS10312',[App\Http\Controllers\Turno_2\Reversosetcs10311Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS10312');
//Rutas F7-SETCS-ELE-107-L1-01-T2
Route::resource('F7-SETCS-ELE-107-L1-01-T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs107111ControllerT2');
Route::resource('reversoSETCS107112', 'App\Http\Controllers\Turno_2\Reversosetcs107111ControllerT2');
Route::get('/checkSETCS107112',[App\Http\Controllers\Turno_2\Datoshojasetcs107111Controllert2::class,'check'])->name('checkSETCS107112');
Route::put('/finalcheckSETCS107112/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs107111Controllert2::class,'finalcheck'])->name('finalcheckSETCS107112');
Route::get('/edit2SETCS107112/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs107111Controllert2::class,'edit2'])->name('edit2SETCS107112');
Route::put('/update2SETCS107112/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs107111Controllert2::class,'update2'])->name('update2SETCS107112');
Route::get('/pdfprintSETCS107112',[App\Http\Controllers\Turno_2\Datoshojasetcs107111Controllert2::class,'pdfprint'])->name('pdfprintSETCS107112');
Route::get('/printindexSETCS107112',[App\Http\Controllers\Turno_2\Datoshojasetcs107111Controllert2::class,'printindex'])->name('printindexSETCS107112');
Route::get('/printreversoSETCS107112',[App\Http\Controllers\Turno_2\Reversosetcs107111Controllert2::class,'printreverso'])->name('printreversoSETCS107112');
Route::get('/pdfReversoSETCS107112',[App\Http\Controllers\Turno_2\Reversosetcs107111Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS107112');
//Rutas F7-SETCS-ELE-107-L1-01-2T2
Route::resource('F7-SETCS-ELE-107-L1-01-2T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs107111C2ControllerT2');
Route::resource('reversoSETCS107112C2', 'App\Http\Controllers\Turno_2\Reversosetcs107111C2ControllerT2');
Route::get('/checkSETCS107112C2',[App\Http\Controllers\Turno_2\Datoshojasetcs107111C2Controllert2::class,'check'])->name('checkSETCS107112C2');
Route::put('/finalcheckSETCS107112C2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs107111C2Controllert2::class,'finalcheck'])->name('finalcheckSETCS107112C2');
Route::get('/edit2SETCS107112C2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs107111C2Controllert2::class,'edit2'])->name('edit2SETCS107112C2');
Route::put('/update2SETCS107112C2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs107111C2Controllert2::class,'update2'])->name('update2SETCS107112C2');
Route::get('/pdfprintSETCS107112C2',[App\Http\Controllers\Turno_2\Datoshojasetcs107111C2Controllert2::class,'pdfprint'])->name('pdfprintSETCS107112C2');
Route::get('/printindexSETCS107112C2',[App\Http\Controllers\Turno_2\Datoshojasetcs107111C2Controllert2::class,'printindex'])->name('printindexSETCS107112C2');
Route::get('/printreversoSETCS107112C2',[App\Http\Controllers\Turno_2\Reversosetcs107111C2Controllert2::class,'printreverso'])->name('printreversoSETCS107112C2');
Route::get('/pdfReversoSETCS107112C2',[App\Http\Controllers\Turno_2\Reversosetcs107111C2Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS107112C2');
//Rutas F7-SETCS-ELE-107-L1-01-3T2
Route::resource('F7-SETCS-ELE-107-L1-01-3T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs107111C3ControllerT2');
Route::resource('reversoSETCS107112C3', 'App\Http\Controllers\Turno_2\Reversosetcs107111C3ControllerT2');
Route::get('/checkSETCS107112C3',[App\Http\Controllers\Turno_2\Datoshojasetcs107111C3Controllert2::class,'check'])->name('checkSETCS107112C3');
Route::put('/finalcheckSETCS107112C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs107111C3Controllert2::class,'finalcheck'])->name('finalcheckSETCS107112C3');
Route::get('/edit2SETCS107112C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs107111C3Controllert2::class,'edit2'])->name('edit2SETCS107112C3');
Route::put('/update2SETCS107112C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs107111C3Controllert2::class,'update2'])->name('update2SETCS107112C3');
Route::get('/pdfprintSETCS107112C3',[App\Http\Controllers\Turno_2\Datoshojasetcs107111C3Controllert2::class,'pdfprint'])->name('pdfprintSETCS107112C3');
Route::get('/printindexSETCS107112C3',[App\Http\Controllers\Turno_2\Datoshojasetcs107111C3Controllert2::class,'printindex'])->name('printindexSETCS107112C3');
Route::get('/printreversoSETCS107112C3',[App\Http\Controllers\Turno_2\Reversosetcs107111C3Controllert2::class,'printreverso'])->name('printreversoSETCS107112C3');
Route::get('/pdfReversoSETCS107112C3',[App\Http\Controllers\Turno_2\Reversosetcs107111C3Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS107112C3');
//Rutas F7-SETCS-ELE-107-L1-02-T2
Route::resource('F7-SETCS-ELE-107-L1-02-T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs10721ControllerT2');
Route::resource('reversoSETCS10722', 'App\Http\Controllers\Turno_2\Reversosetcs10721ControllerT2');
Route::get('/checkSETCS10722',[App\Http\Controllers\Turno_2\Datoshojasetcs10721Controllert2::class,'check'])->name('checkSETCS10722');
Route::put('/finalcheckSETCS10722/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs10721Controllert2::class,'finalcheck'])->name('finalcheckSETCS10722');
Route::get('/edit2SETCS10722/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs10721Controllert2::class,'edit2'])->name('edit2SETCS10722');
Route::put('/update2SETCS10722/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs10721Controllert2::class,'update2'])->name('update2SETCS10722');
Route::get('/pdfprintSETCS10722',[App\Http\Controllers\Turno_2\Datoshojasetcs10721Controllert2::class,'pdfprint'])->name('pdfprintSETCS10722');
Route::get('/printindexSETCS10722',[App\Http\Controllers\Turno_2\Datoshojasetcs10721Controllert2::class,'printindex'])->name('printindexSETCS10722');
Route::get('/printreversoSETCS10722',[App\Http\Controllers\Turno_2\Reversosetcs10721Controllert2::class,'printreverso'])->name('printreversoSETCS10722');
Route::get('/pdfReversoSETCS10722',[App\Http\Controllers\Turno_2\Reversosetcs10721Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS10722');
//Rutas F7-SETCS-ELE-120-L1-01-T2
Route::resource('F7-SETCS-ELE-120-L1-01-T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs120111ControllerT2');
Route::resource('reversoSETCS120112', 'App\Http\Controllers\Turno_2\Reversosetcs120111ControllerT2');
Route::get('/checkSETCS120112',[App\Http\Controllers\Turno_2\Datoshojasetcs120111Controllert2::class,'check'])->name('checkSETCS120112');
Route::put('/finalcheckSETCS120112/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs120111Controllert2::class,'finalcheck'])->name('finalcheckSETCS120112');
Route::get('/edit2SETCS120112/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs120111Controllert2::class,'edit2'])->name('edit2SETCS120112');
Route::put('/update2SETCS120112/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs120111Controllert2::class,'update2'])->name('update2SETCS120112');
Route::get('/pdfprintSETCS120112',[App\Http\Controllers\Turno_2\Datoshojasetcs120111Controllert2::class,'pdfprint'])->name('pdfprintSETCS120112');
Route::get('/printindexSETCS120112',[App\Http\Controllers\Turno_2\Datoshojasetcs120111Controllert2::class,'printindex'])->name('printindexSETCS120112');
Route::get('/printreversoSETCS120112',[App\Http\Controllers\Turno_2\Reversosetcs120111Controllert2::class,'printreverso'])->name('printreversoSETCS120112');
Route::get('/pdfReversoSETCS120112',[App\Http\Controllers\Turno_2\Reversosetcs120111Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS120112');
//Rutas F7-SETCS-ELE-120-L1-01-2T2
Route::resource('F7-SETCS-ELE-120-L1-01-2T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs120111C2ControllerT2');
Route::resource('reversoSETCS120112C2', 'App\Http\Controllers\Turno_2\Reversosetcs120111C2ControllerT2');
Route::get('/checkSETCS120112C2',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C2Controllert2::class,'check'])->name('checkSETCS120112C2');
Route::put('/finalcheckSETCS120112C2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C2Controllert2::class,'finalcheck'])->name('finalcheckSETCS120112C2');
Route::get('/edit2SETCS120112C2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C2Controllert2::class,'edit2'])->name('edit2SETCS120112C2');
Route::put('/update2SETCS120112C2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C2Controllert2::class,'update2'])->name('update2SETCS120112C2');
Route::get('/pdfprintSETCS120112C2',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C2Controllert2::class,'pdfprint'])->name('pdfprintSETCS120112C2');
Route::get('/printindexSETCS120112C2',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C2Controllert2::class,'printindex'])->name('printindexSETCS120112C2');
Route::get('/printreversoSETCS120112C2',[App\Http\Controllers\Turno_2\Reversosetcs120111C2Controllert2::class,'printreverso'])->name('printreversoSETCS120112C2');
Route::get('/pdfReversoSETCS120112C2',[App\Http\Controllers\Turno_2\Reversosetcs120111C2Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS120112C2');
//Rutas F7-SETCS-ELE-120-L1-01-3T2
Route::resource('F7-SETCS-ELE-120-L1-01-3T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs120111C3ControllerT2');
Route::resource('reversoSETCS120112C3', 'App\Http\Controllers\Turno_2\Reversosetcs120111C3ControllerT2');
Route::get('/checkSETCS120112C3',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C3Controllert2::class,'check'])->name('checkSETCS120112C3');
Route::put('/finalcheckSETCS120112C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C3Controllert2::class,'finalcheck'])->name('finalcheckSETCS120112C3');
Route::get('/edit2SETCS120112C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C3Controllert2::class,'edit2'])->name('edit2SETCS120112C3');
Route::put('/update2SETCS120112C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C3Controllert2::class,'update2'])->name('update2SETCS120112C3');
Route::get('/pdfprintSETCS120112C3',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C3Controllert2::class,'pdfprint'])->name('pdfprintSETCS120112C3');
Route::get('/printindexSETCS120112C3',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C3Controllert2::class,'printindex'])->name('printindexSETCS120112C3');
Route::get('/printreversoSETCS120112C3',[App\Http\Controllers\Turno_2\Reversosetcs120111C3Controllert2::class,'printreverso'])->name('printreversoSETCS120112C3');
Route::get('/pdfReversoSETCS120112C3',[App\Http\Controllers\Turno_2\Reversosetcs120111C3Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS120112C3');
//Rutas F7-SETCS-ELE-120-L1-01-4T2
Route::resource('F7-SETCS-ELE-120-L1-01-4T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs120111C4ControllerT2');
Route::resource('reversoSETCS120112C4', 'App\Http\Controllers\Turno_2\Reversosetcs120111C4ControllerT2');
Route::get('/checkSETCS120112C4',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C4Controllert2::class,'check'])->name('checkSETCS120112C4');
Route::put('/finalcheckSETCS120112C4/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C4Controllert2::class,'finalcheck'])->name('finalcheckSETCS120112C4');
Route::get('/edit2SETCS120112C4/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C4Controllert2::class,'edit2'])->name('edit2SETCS120112C4');
Route::put('/update2SETCS120112C4/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C4Controllert2::class,'update2'])->name('update2SETCS120112C4');
Route::get('/pdfprintSETCS120112C4',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C4Controllert2::class,'pdfprint'])->name('pdfprintSETCS120112C4');
Route::get('/printindexSETCS120112C4',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C4Controllert2::class,'printindex'])->name('printindexSETCS120112C4');
Route::get('/printreversoSETCS120112C4',[App\Http\Controllers\Turno_2\Reversosetcs120111C4Controllert2::class,'printreverso'])->name('printreversoSETCS120112C4');
Route::get('/pdfReversoSETCS120112C4',[App\Http\Controllers\Turno_2\Reversosetcs120111C4Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS120112C4');
//Rutas F7-SETCS-ELE-120-L1-01-5T2
Route::resource('F7-SETCS-ELE-120-L1-01-5T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs120111C5ControllerT2');
Route::resource('reversoSETCS120112C5', 'App\Http\Controllers\Turno_2\Reversosetcs120111C5ControllerT2');
Route::get('/checkSETCS120112C5',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C5Controllert2::class,'check'])->name('checkSETCS120112C5');
Route::put('/finalcheckSETCS120112C5/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C5Controllert2::class,'finalcheck'])->name('finalcheckSETCS120112C5');
Route::get('/edit2SETCS120112C5/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C5Controllert2::class,'edit2'])->name('edit2SETCS120112C5');
Route::put('/update2SETCS120112C5/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C5Controllert2::class,'update2'])->name('update2SETCS120112C5');
Route::get('/pdfprintSETCS120112C5',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C5Controllert2::class,'pdfprint'])->name('pdfprintSETCS120112C5');
Route::get('/printindexSETCS120112C5',[App\Http\Controllers\Turno_2\Datoshojasetcs120111C5Controllert2::class,'printindex'])->name('printindexSETCS120112C5');
Route::get('/printreversoSETCS120112C5',[App\Http\Controllers\Turno_2\Reversosetcs120111C5Controllert2::class,'printreverso'])->name('printreversoSETCS120112C5');
Route::get('/pdfReversoSETCS120112C5',[App\Http\Controllers\Turno_2\Reversosetcs120111C5Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS120112C5');
//Rutas F7-SETCS-ELE-140-L1-01-T2
Route::resource('F7-SETCS-ELE-140-L1-01-T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs140111ControllerT2');
Route::resource('reversoSETCS140112', 'App\Http\Controllers\Turno_2\Reversosetcs140111ControllerT2');
Route::get('/checkSETCS140112',[App\Http\Controllers\Turno_2\Datoshojasetcs140111Controllert2::class,'check'])->name('checkSETCS140112');
Route::put('/finalcheckSETCS140112/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs140111Controllert2::class,'finalcheck'])->name('finalcheckSETCS140112');
Route::get('/edit2SETCS140112/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs140111Controllert2::class,'edit2'])->name('edit2SETCS140112');
Route::put('/update2SETCS140112/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs140111Controllert2::class,'update2'])->name('update2SETCS140112');
Route::get('/pdfprintSETCS140112',[App\Http\Controllers\Turno_2\Datoshojasetcs140111Controllert2::class,'pdfprint'])->name('pdfprintSETCS140112');
Route::get('/printindexSETCS140112',[App\Http\Controllers\Turno_2\Datoshojasetcs1440111Controllert2::class,'printindex'])->name('printindexSETCS140112');
Route::get('/printreversoSETCS140112',[App\Http\Controllers\Turno_2\Reversosetcs140111Controllert2::class,'printreverso'])->name('printreversoSETCS140112');
Route::get('/pdfReversoSETCS140112',[App\Http\Controllers\Turno_2\Reversosetcs140111Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS140112');
//Rutas F7-SETCS-ELE-140-L1-01-2T2
Route::resource('F7-SETCS-ELE-140-L1-01-2T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs140111C2ControllerT2');
Route::resource('reversoSETCS140112C2', 'App\Http\Controllers\Turno_2\Reversosetcs140111C2ControllerT2');
Route::get('/checkSETCS140112C2',[App\Http\Controllers\Turno_2\Datoshojasetcs140111C2Controllert2::class,'check'])->name('checkSETCS140112C2');
Route::put('/finalcheckSETCS140112C2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs140111C2Controllert2::class,'finalcheck'])->name('finalcheckSETCS140112C2');
Route::get('/edit2SETCS140112C2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs140111C2Controllert2::class,'edit2'])->name('edit2SETCS140112C2');
Route::put('/update2SETCS140112C2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs140111C2Controllert2::class,'update2'])->name('update2SETCS140112C2');
Route::get('/pdfprintSETCS140112C2',[App\Http\Controllers\Turno_2\Datoshojasetcs140111C2Controllert2::class,'pdfprint'])->name('pdfprintSETCS140112C2');
Route::get('/printindexSETCS140112C2',[App\Http\Controllers\Turno_2\Datoshojasetcs1440111C2Controllert2::class,'printindex'])->name('printindexSETCS140112C2');
Route::get('/printreversoSETCS140112C2',[App\Http\Controllers\Turno_2\Reversosetcs140111C2Controllert2::class,'printreverso'])->name('printreversoSETCS140112C2');
Route::get('/pdfReversoSETCS140112C2',[App\Http\Controllers\Turno_2\Reversosetcs140111C2Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS140112C2');
//Rutas F7-SETCS-ELE-140-L1-01-3T2
Route::resource('F7-SETCS-ELE-140-L1-01-3T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs140111C3ControllerT2');
Route::resource('reversoSETCS140112C3', 'App\Http\Controllers\Turno_2\Reversosetcs140111C3ControllerT2');
Route::get('/checkSETCS140112C3',[App\Http\Controllers\Turno_2\Datoshojasetcs140111C3Controllert2::class,'check'])->name('checkSETCS140112C3');
Route::put('/finalcheckSETCS140112C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs140111C3Controllert2::class,'finalcheck'])->name('finalcheckSETCS140112C3');
Route::get('/edit2SETCS140112C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs140111C3Controllert2::class,'edit2'])->name('edit2SETCS140112C3');
Route::put('/update2SETCS140112C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs140111C3Controllert2::class,'update2'])->name('update2SETCS140112C3');
Route::get('/pdfprintSETCS140112C3',[App\Http\Controllers\Turno_2\Datoshojasetcs140111C3Controllert2::class,'pdfprint'])->name('pdfprintSETCS140112C3');
Route::get('/printindexSETCS140112C3',[App\Http\Controllers\Turno_2\Datoshojasetcs1440111C3Controllert2::class,'printindex'])->name('printindexSETCS140112C3');
Route::get('/printreversoSETCS140112C3',[App\Http\Controllers\Turno_2\Reversosetcs140111C3Controllert2::class,'printreverso'])->name('printreversoSETCS140112C3');
Route::get('/pdfReversoSETCS140112C3',[App\Http\Controllers\Turno_2\Reversosetcs140111C3Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS140112C3');
//Rutas F7-SETCS-ELE-160-L1-01-T2
Route::resource('F7-SETCS-ELE-160-L1-01-T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs16011ControllerT2');
Route::resource('reversoSETCS16012', 'App\Http\Controllers\Turno_2\Reversosetcs16011ControllerT2');
Route::get('/checkSETCS16012',[App\Http\Controllers\Turno_2\Datoshojasetcs16011Controllert2::class,'check'])->name('checkSETCS16012');
Route::put('/finalcheckSETCS16012/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs16011Controllert2::class,'finalcheck'])->name('finalcheckSETCS16012');
Route::get('/edit2SETCS16012/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs16011Controllert2::class,'edit2'])->name('edit2SETCS16012');
Route::put('/update2SETCS16012/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs16011Controllert2::class,'update2'])->name('update2SETCS16012');
Route::get('/pdfprintSETCS16012',[App\Http\Controllers\Turno_2\Datoshojasetcs16011Controllert2::class,'pdfprint'])->name('pdfprintSETCS16012');
Route::get('/printindexSETCS16012',[App\Http\Controllers\Turno_2\Datoshojasetcs16011Controllert2::class,'printindex'])->name('printindexSETCS16012');
Route::get('/printreversoSETCS16012',[App\Http\Controllers\Turno_2\Reversosetcs16011Controllert2::class,'printreverso'])->name('printreversoSETCS16012');
Route::get('/pdfReversoSETCS16012',[App\Http\Controllers\Turno_2\Reversosetcs16011Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS16012');
//Rutas F7-SETCS-ELE-160-L1-01-2T2
Route::resource('F7-SETCS-ELE-160-L1-01-2T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs16011C2ControllerT2');
Route::resource('reversoSETCS16012C2', 'App\Http\Controllers\Turno_2\Reversosetcs16011C2ControllerT2');
Route::get('/checkSETCS16012C2',[App\Http\Controllers\Turno_2\Datoshojasetcs16011C2Controllert2::class,'check'])->name('checkSETCS16012C2');
Route::put('/finalcheckSETCS16012C2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs16011C2Controllert2::class,'finalcheck'])->name('finalcheckSETCS16012C2');
Route::get('/edit2SETCS16012C2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs16011C2Controllert2::class,'edit2'])->name('edit2SETCS16012C2');
Route::put('/update2SETCS16012C2/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs16011C2Controllert2::class,'update2'])->name('update2SETCS16012C2');
Route::get('/pdfprintSETCS16012C2',[App\Http\Controllers\Turno_2\Datoshojasetcs16011C2Controllert2::class,'pdfprint'])->name('pdfprintSETCS16012C2');
Route::get('/printindexSETCS16012C2',[App\Http\Controllers\Turno_2\Datoshojasetcs16011C2Controllert2::class,'printindex'])->name('printindexSETCS16012C2');
Route::get('/printreversoSETCS16012C2',[App\Http\Controllers\Turno_2\Reversosetcs16011C2Controllert2::class,'printreverso'])->name('printreversoSETCS16012C2');
Route::get('/pdfReversoSETCS16012C2',[App\Http\Controllers\Turno_2\Reversosetcs16011C2Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS16012C2');
//Rutas F7-SETCS-ELE-160-L1-01-3T2
Route::resource('F7-SETCS-ELE-160-L1-01-3T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs16011C3ControllerT2');
Route::resource('reversoSETCS16012C3', 'App\Http\Controllers\Turno_2\Reversosetcs16011C3ControllerT2');
Route::get('/checkSETCS16012C3',[App\Http\Controllers\Turno_2\Datoshojasetcs16011C3Controllert2::class,'check'])->name('checkSETCS16012C3');
Route::put('/finalcheckSETCS16012C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs16011C3Controllert2::class,'finalcheck'])->name('finalcheckSETCS16012C3');
Route::get('/edit2SETCS16012C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs16011C3Controllert2::class,'edit2'])->name('edit2SETCS16012C3');
Route::put('/update2SETCS16012C3/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs16011C3Controllert2::class,'update2'])->name('update2SETCS16012C3');
Route::get('/pdfprintSETCS16012C3',[App\Http\Controllers\Turno_2\Datoshojasetcs16011C3Controllert2::class,'pdfprint'])->name('pdfprintSETCS16012C3');
Route::get('/printindexSETCS16012C3',[App\Http\Controllers\Turno_2\Datoshojasetcs16011C3Controllert2::class,'printindex'])->name('printindexSETCS16012C3');
Route::get('/printreversoSETCS16012C3',[App\Http\Controllers\Turno_2\Reversosetcs16011C3Controllert2::class,'printreverso'])->name('printreversoSETCS16012C3');
Route::get('/pdfReversoSETCS16012C3',[App\Http\Controllers\Turno_2\Reversosetcs16011C3Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS16012C3');
//Rutas F7-SETCS-ELE-180-L1-01-T2
Route::resource('F7-SETCS-ELE-180-L1-01-T2', 'App\Http\Controllers\Turno_2\Datoshojasetcs18011ControllerT2');
Route::resource('reversoSETCS18012', 'App\Http\Controllers\Turno_2\Reversosetcs18011ControllerT2');
Route::get('/checkSETCS18012',[App\Http\Controllers\Turno_2\Datoshojasetcs18011Controllert2::class,'check'])->name('checkSETCS18012');
Route::put('/finalcheckSETCS18012/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs18011Controllert2::class,'finalcheck'])->name('finalcheckSETCS18012');
Route::get('/edit2SETCS18012/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs18011Controllert2::class,'edit2'])->name('edit2SETCS18012');
Route::put('/update2SETCS18012/{id}',[App\Http\Controllers\Turno_2\Datoshojasetcs18011Controllert2::class,'update2'])->name('update2SETCS18012');
Route::get('/pdfprintSETCS18012',[App\Http\Controllers\Turno_2\Datoshojasetcs18011Controllert2::class,'pdfprint'])->name('pdfprintSETCS18012');
Route::get('/printindexSETCS18012',[App\Http\Controllers\Turno_2\Datoshojasetcs18011Controllert2::class,'printindex'])->name('printindexSETCS18012');
Route::get('/printreversoSETCS18012',[App\Http\Controllers\Turno_2\Reversosetcs18011Controllert2::class,'printreverso'])->name('printreversoSETCS18012');
Route::get('/pdfReversoSETCS18012',[App\Http\Controllers\Turno_2\Reversosetcs18011Controllert2::class,'pdfReverso'])->name('pdfReversoSETCS18012');
//Rutas F7-TPM-ELE-40-L1-01
Route::resource('F7-TPM-ELE-40-L1-01-1T2', 'App\Http\Controllers\Turno_2\Datoshojastpm4011ControllerT2');
Route::resource('reversoTPM4011T2', 'App\Http\Controllers\Turno_2\Reversotpm4011ControllerT2');
Route::get('/checkTPM4011T2',[App\Http\Controllers\Turno_2\Datoshojastpm4011Controllert2::class,'check'])->name('checkTPM4011T2');
Route::put('/finalcheckTPM4011T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm4011Controllert2::class,'finalcheck'])->name('finalcheckTPM4011T2');
Route::get('/edit2TPM4011T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm4011Controllert2::class,'edit2'])->name('edit2TPM4011T2');
Route::put('/update2TPM4011T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm4011Controllert2::class,'update2'])->name('update2TPM4011T2');
Route::get('/pdfprintTPM4011T2',[App\Http\Controllers\Turno_2\Datoshojastpm4011Controllert2::class,'pdfprint'])->name('pdfprintTPM4011T2');
Route::get('/printindexTPM4011T2',[App\Http\Controllers\Turno_2\Datoshojastpm4011Controllert2::class,'printindex'])->name('printindexTPM4011T2');
Route::get('/printreversoTPM4011T2',[App\Http\Controllers\Turno_2\Reversotpm4011Controllert2::class,'printreverso'])->name('printreversoTPM4011T2');
Route::get('/pdfReversoTPM4011T2',[App\Http\Controllers\Turno_2\Reversotpm4011Controllert2::class,'pdfReverso'])->name('pdfReversoTPM4011T2');
//Rutas F7-TPM-ELE-40-L1-01-2
Route::resource('F7-TPM-ELE-40-L1-01-2T2', 'App\Http\Controllers\Turno_2\Datoshojastpm4012ControllerT2');
Route::resource('reversoTPM4012T2', 'App\Http\Controllers\Turno_2\Reversotpm4012ControllerT2');
Route::get('/checkTPM4012T2',[App\Http\Controllers\Turno_2\Datoshojastpm4012Controllert2::class,'check'])->name('checkTPM4012T2');
Route::put('/finalcheckTPM4012T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm4012Controllert2::class,'finalcheck'])->name('finalcheckTPM4012T2');
Route::get('/edit2TPM4012T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm4012Controllert2::class,'edit2'])->name('edit2TPM4012T2');
Route::put('/update2TPM4012T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm4012Controllert2::class,'update2'])->name('update2TPM4012T2');
Route::get('/pdfprintTPM4012T2',[App\Http\Controllers\Turno_2\Datoshojastpm4012Controllert2::class,'pdfprint'])->name('pdfprintTPM4012T2');
Route::get('/printindexTPM4012T2',[App\Http\Controllers\Turno_2\Datoshojastpm4012Controllert2::class,'printindex'])->name('printindexTPM4012T2');
Route::get('/printreversoTPM4012T2',[App\Http\Controllers\Turno_2\Reversotpm4012Controllert2::class,'printreverso'])->name('printreversoTPM4012T2');
Route::get('/pdfReversoTPM4012T2',[App\Http\Controllers\Turno_2\Reversotpm4012Controllert2::class,'pdfReverso'])->name('pdfReversoTPM4012T2');
//Rutas F7-TPM-ELE-40-L1-01-3
Route::resource('F7-TPM-ELE-40-L1-01-3T2', 'App\Http\Controllers\Turno_2\Datoshojastpm4013ControllerT2');
Route::resource('reversoTPM4013T2', 'App\Http\Controllers\Turno_2\Reversotpm4013ControllerT2');
Route::get('/checkTPM4013T2',[App\Http\Controllers\Turno_2\Datoshojastpm4013Controllert2::class,'check'])->name('checkTPM4013T2');
Route::put('/finalcheckTPM4013T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm4013Controllert2::class,'finalcheck'])->name('finalcheckTPM4013T2');
Route::get('/edit2TPM4013T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm4013Controllert2::class,'edit2'])->name('edit2TPM4013T2');
Route::put('/update2TPM4013T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm4013Controllert2::class,'update2'])->name('update2TPM4013T2');
Route::get('/pdfprintTPM4013T2',[App\Http\Controllers\Turno_2\Datoshojastpm4013Controllert2::class,'pdfprint'])->name('pdfprintTPM4013T2');
Route::get('/printindexTPM4013T2',[App\Http\Controllers\Turno_2\Datoshojastpm4013Controllert2::class,'printindex'])->name('printindexTPM4013T2');
Route::get('/printreversoTPM4013T2',[App\Http\Controllers\Turno_2\Reversotpm4013Controllert2::class,'printreverso'])->name('printreversoTPM4013T2');
Route::get('/pdfReversoTPM4013T2',[App\Http\Controllers\Turno_2\Reversotpm4013Controllert2::class,'pdfReverso'])->name('pdfReversoTPM4013T2');
//Rutas F7-TPM-ELE-40-L1-01-4
Route::resource('F7-TPM-ELE-40-L1-01-4T2', 'App\Http\Controllers\Turno_2\Datoshojastpm4014ControllerT2');
Route::resource('reversoTPM4014T2', 'App\Http\Controllers\Turno_2\Reversotpm4014ControllerT2');
Route::get('/checkTPM4014T2',[App\Http\Controllers\Turno_2\Datoshojastpm4014Controllert2::class,'check'])->name('checkTPM4014T2');
Route::put('/finalcheckTPM4014T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm4014Controllert2::class,'finalcheck'])->name('finalcheckTPM4014T2');
Route::get('/edit2TPM4014T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm4014Controllert2::class,'edit2'])->name('edit2TPM4014T2');
Route::put('/update2TPM4014T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm4014Controllert2::class,'update2'])->name('update2TPM4014T2');
Route::get('/pdfprintTPM4014T2',[App\Http\Controllers\Turno_2\Datoshojastpm4014Controllert2::class,'pdfprint'])->name('pdfprintTPM4014T2');
Route::get('/printindexTPM4014T2',[App\Http\Controllers\Turno_2\Datoshojastpm4014Controllert2::class,'printindex'])->name('printindexTPM4014T2');
Route::get('/printreversoTPM4014T2',[App\Http\Controllers\Turno_2\Reversotpm4014Controllert2::class,'printreverso'])->name('printreversoTPM4014T2');
Route::get('/pdfReversoTPM4014T2',[App\Http\Controllers\Turno_2\Reversotpm4014Controllert2::class,'pdfReverso'])->name('pdfReversoTPM4014T2');
//Rutas F7-TPM-ELE-40-L1-01-5
Route::resource('F7-TPM-ELE-40-L1-01-5T2', 'App\Http\Controllers\Turno_2\Datoshojastpm4015ControllerT2');
Route::resource('reversoTPM4015T2', 'App\Http\Controllers\Turno_2\Reversotpm4015ControllerT2');
Route::get('/checkTPM4015T2',[App\Http\Controllers\Turno_2\Datoshojastpm4015Controllert2::class,'check'])->name('checkTPM4015T2');
Route::put('/finalcheckTPM4015T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm4015Controllert2::class,'finalcheck'])->name('finalcheckTPM4015T2');
Route::get('/edit2TPM4015T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm4015Controllert2::class,'edit2'])->name('edit2TPM4015T2');
Route::put('/update2TPM4015T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm4015Controllert2::class,'update2'])->name('update2TPM4015T2');
Route::get('/pdfprintTPM4015T2',[App\Http\Controllers\Turno_2\Datoshojastpm4015Controllert2::class,'pdfprint'])->name('pdfprintTPM4015T2');
Route::get('/printindexTPM4015T2',[App\Http\Controllers\Turno_2\Datoshojastpm4015Controllert2::class,'printindex'])->name('printindexTPM4015T2');
Route::get('/printreversoTPM4015T2',[App\Http\Controllers\Turno_2\Reversotpm4015Controllert2::class,'printreverso'])->name('printreversoTPM4015T2');
Route::get('/pdfReversoTPM4015T2',[App\Http\Controllers\Turno_2\Reversotpm4015Controllert2::class,'pdfReverso'])->name('pdfReversoTPM4015T2');
//Rutas F7-TPM-ELE-40-L1-01-6
Route::resource('F7-TPM-ELE-40-L1-01-6T2', 'App\Http\Controllers\Turno_2\Datoshojastpm4016ControllerT2');
Route::resource('reversoTPM4016T2', 'App\Http\Controllers\Turno_2\Reversotpm4016ControllerT2');
Route::get('/checkTPM4016T2',[App\Http\Controllers\Turno_2\Datoshojastpm4016ControllerT2::class,'check'])->name('checkTPM4016T2');
Route::put('/finalcheckTPM4016T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm4016ControllerT2::class,'finalcheck'])->name('finalcheckTPM4016T2');
Route::get('/edit2TPM4016T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm4016ControllerT2::class,'edit2'])->name('edit2TPM4016T2');
Route::put('/update2TPM4016T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm4016ControllerT2::class,'update2'])->name('update2TPM4016T2');
Route::get('/pdfprintTPM4016T2',[App\Http\Controllers\Turno_2\Datoshojastpm4016ControllerT2::class,'pdfprint'])->name('pdfprintTPM4016T2');
Route::get('/printindexTPM4016T2',[App\Http\Controllers\Turno_2\Datoshojastpm4016ControllerT2::class,'printindex'])->name('printindexTPM4016T2');
Route::get('/printreversoTPM4016T2',[App\Http\Controllers\Turno_2\Reversotpm4016ControllerT2::class,'printreverso'])->name('printreversoTPM4016T2');
Route::get('/pdfReversoTPM4016T2',[App\Http\Controllers\Turno_2\Reversotpm4016ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM4016T2');
//Rutas F7-TPM-ELE-60-L1-01
Route::resource('F7-TPM-ELE-60-L1-01-1T2', 'App\Http\Controllers\Turno_2\Datoshojastpm6011ControllerT2');
Route::resource('reversoTPM6011T2', 'App\Http\Controllers\Turno_2\Reversotpm6011ControllerT2');
Route::get('/checkTPM6011T2',[App\Http\Controllers\Turno_2\Datoshojastpm6011ControllerT2::class,'check'])->name('checkTPM6011T2');
Route::put('/finalcheckTPM6011T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm6011ControllerT2::class,'finalcheck'])->name('finalcheckTPM6011T2');
Route::get('/edit2TPM6011T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm6011ControllerT2::class,'edit2'])->name('edit2TPM6011T2');
Route::put('/update2TPM6011T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm6011ControllerT2::class,'update2'])->name('update2TPM6011T2');
Route::get('/pdfprintTPM6011T2',[App\Http\Controllers\Turno_2\Datoshojastpm6011ControllerT2::class,'pdfprint'])->name('pdfprintTPM6011T2');
Route::get('/printindexTPM6011T2',[App\Http\Controllers\Turno_2\Datoshojastpm6011ControllerT2::class,'printindex'])->name('printindexTPM6011T2');
Route::get('/printreversoTPM6011T2',[App\Http\Controllers\Turno_2\Reversotpm6011ControllerT2::class,'printreverso'])->name('printreversoTPM6011T2');
Route::get('/pdfReversoTPM6011T2',[App\Http\Controllers\Turno_2\Reversotpm6011ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM6011T2');
//Rutas F7-TPM-ELE-60-L1-01-2
Route::resource('F7-TPM-ELE-60-L1-01-2T2', 'App\Http\Controllers\Turno_2\Datoshojastpm6012ControllerT2');
Route::resource('reversoTPM6012T2', 'App\Http\Controllers\Turno_2\Reversotpm6012ControllerT2');
Route::get('/checkTPM6012T2',[App\Http\Controllers\Turno_2\Datoshojastpm6012ControllerT2::class,'check'])->name('checkTPM6012T2');
Route::put('/finalcheckTPM6012T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm6012ControllerT2::class,'finalcheck'])->name('finalcheckTPM6012T2');
Route::get('/edit2TPM6012T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm6012ControllerT2::class,'edit2'])->name('edit2TPM6012T2');
Route::put('/update2TPM6012T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm6012ControllerT2::class,'update2'])->name('update2TPM6012T2');
Route::get('/pdfprintTPM6012T2',[App\Http\Controllers\Turno_2\Datoshojastpm6012ControllerT2::class,'pdfprint'])->name('pdfprintTPM6012T2');
Route::get('/printindexTPM6012T2',[App\Http\Controllers\Turno_2\Datoshojastpm6012ControllerT2::class,'printindex'])->name('printindexTPM6012T2');
Route::get('/printreversoTPM6012T2',[App\Http\Controllers\Turno_2\Reversotpm6012ControllerT2::class,'printreverso'])->name('printreversoTPM6012T2');
Route::get('/pdfReversoTPM6012T2',[App\Http\Controllers\Turno_2\Reversotpm6012ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM6012T2');
//Rutas F7-TPM-ELE-60-L1-01-3
Route::resource('F7-TPM-ELE-60-L1-01-3T2', 'App\Http\Controllers\Turno_2\Datoshojastpm6013ControllerT2');
Route::resource('reversoTPM6013T2', 'App\Http\Controllers\Turno_2\Reversotpm6013ControllerT2');
Route::get('/checkTPM6013T2',[App\Http\Controllers\Turno_2\Datoshojastpm6013ControllerT2::class,'check'])->name('checkTPM6013T2');
Route::put('/finalcheckTPM6013T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm6013ControllerT2::class,'finalcheck'])->name('finalcheckTPM6013T2');
Route::get('/edit2TPM6013T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm6013ControllerT2::class,'edit2'])->name('edit2TPM6013T2');
Route::put('/update2TPM6013T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm6013ControllerT2::class,'update2'])->name('update2TPM6013T2');
Route::get('/pdfprintTPM6013T2',[App\Http\Controllers\Turno_2\Datoshojastpm6013ControllerT2::class,'pdfprint'])->name('pdfprintTPM6013T2');
Route::get('/printindexTPM6013T2',[App\Http\Controllers\Turno_2\Datoshojastpm6013ControllerT2::class,'printindex'])->name('printindexTPM6013T2');
Route::get('/printreversoTPM6013T2',[App\Http\Controllers\Turno_2\Reversotpm6013ControllerT2::class,'printreverso'])->name('printreversoTPM6013T2');
Route::get('/pdfReversoTPM6013T2',[App\Http\Controllers\Turno_2\Reversotpm6013ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM6013T2');
//Rutas F7-TPM-ELE-60-L1-01-4
Route::resource('F7-TPM-ELE-60-L1-01-4T2', 'App\Http\Controllers\Turno_2\Datoshojastpm6014ControllerT2');
Route::resource('reversoTPM6014T2', 'App\Http\Controllers\Turno_2\Reversotpm6014ControllerT2');
Route::get('/checkTPM6014T2',[App\Http\Controllers\Turno_2\Datoshojastpm6014ControllerT2::class,'check'])->name('checkTPM6014T2');
Route::put('/finalcheckTPM6014T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm6014ControllerT2::class,'finalcheck'])->name('finalcheckTPM6014T2');
Route::get('/edit2TPM6014T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm6014ControllerT2::class,'edit2'])->name('edit2TPM6014T2');
Route::put('/update2TPM6014T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm6014ControllerT2::class,'update2'])->name('update2TPM6014T2');
Route::get('/pdfprintTPM6014T2',[App\Http\Controllers\Turno_2\Datoshojastpm6014ControllerT2::class,'pdfprint'])->name('pdfprintTPM6014T2');
Route::get('/printindexTPM6014T2',[App\Http\Controllers\Turno_2\Datoshojastpm6014ControllerT2::class,'printindex'])->name('printindexTPM6014T2');
Route::get('/printreversoTPM6014T2',[App\Http\Controllers\Turno_2\Reversotpm6014ControllerT2::class,'printreverso'])->name('printreversoTPM6014T2');
Route::get('/pdfReversoTPM6014T2',[App\Http\Controllers\Turno_2\Reversotpm6014ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM6014T2');
//Rutas F7-TPM-ELE-60-L1-01-5
Route::resource('F7-TPM-ELE-60-L1-01-5T2', 'App\Http\Controllers\Turno_2\Datoshojastpm6015ControllerT2');
Route::resource('reversoTPM6015T2', 'App\Http\Controllers\Turno_2\Reversotpm6015ControllerT2');
Route::get('/checkTPM6015T2',[App\Http\Controllers\Turno_2\Datoshojastpm6015ControllerT2::class,'check'])->name('checkTPM6015T2');
Route::put('/finalcheckTPM6015T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm6015ControllerT2::class,'finalcheck'])->name('finalcheckTPM6015T2');
Route::get('/edit2TPM6015T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm6015ControllerT2::class,'edit2'])->name('edit2TPM6015T2');
Route::put('/update2TPM6015T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm6015ControllerT2::class,'update2'])->name('update2TPM6015T2');
Route::get('/pdfprintTPM6015T2',[App\Http\Controllers\Turno_2\Datoshojastpm6015ControllerT2::class,'pdfprint'])->name('pdfprintTPM6015T2');
Route::get('/printindexTPM6015T2',[App\Http\Controllers\Turno_2\Datoshojastpm6015ControllerT2::class,'printindex'])->name('printindexTPM6015T2');
Route::get('/printreversoTPM6015T2',[App\Http\Controllers\Turno_2\Reversotpm6015ControllerT2::class,'printreverso'])->name('printreversoTPM6015T2');
Route::get('/pdfReversoTPM6015T2',[App\Http\Controllers\Turno_2\Reversotpm6015ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM6015T2');
//Rutas F7-TPM-ELE-60-L1-01-6
Route::resource('F7-TPM-ELE-60-L1-01-6T2', 'App\Http\Controllers\Turno_2\Datoshojastpm6016ControllerT2');
Route::resource('reversoTPM6016T2', 'App\Http\Controllers\Turno_2\Reversotpm6016ControllerT2');
Route::get('/checkTPM6016T2',[App\Http\Controllers\Turno_2\Datoshojastpm6016ControllerT2::class,'check'])->name('checkTPM6016T2');
Route::put('/finalcheckTPM6016T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm6016ControllerT2::class,'finalcheck'])->name('finalcheckTPM6016T2');
Route::get('/edit2TPM6016T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm6016ControllerT2::class,'edit2'])->name('edit2TPM6016T2');
Route::put('/update2TPM6016T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm6016ControllerT2::class,'update2'])->name('update2TPM6016T2');
Route::get('/pdfprintTPM6016T2',[App\Http\Controllers\Turno_2\Datoshojastpm6016ControllerT2::class,'pdfprint'])->name('pdfprintTPM6016T2');
Route::get('/printindexTPM6016T2',[App\Http\Controllers\Turno_2\Datoshojastpm6016ControllerT2::class,'printindex'])->name('printindexTPM6016T2');
Route::get('/printreversoTPM6016T2',[App\Http\Controllers\Turno_2\Reversotpm6016ControllerT2::class,'printreverso'])->name('printreversoTPM6016T2');
Route::get('/pdfReversoTPM6016T2',[App\Http\Controllers\Turno_2\Reversotpm6016ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM6016T2');
//Rutas F7-TPM-ELE-60-L1-01-7
Route::resource('F7-TPM-ELE-60-L1-01-7T2', 'App\Http\Controllers\Turno_2\Datoshojastpm6017ControllerT2');
Route::resource('reversoTPM6017T2', 'App\Http\Controllers\Turno_2\Reversotpm6017ControllerT2');
Route::get('/checkTPM6017T2',[App\Http\Controllers\Turno_2\Datoshojastpm6017ControllerT2::class,'check'])->name('checkTPM6017T2');
Route::put('/finalcheckTPM6017T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm6017ControllerT2::class,'finalcheck'])->name('finalcheckTPM6017T2');
Route::get('/edit2TPM6017T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm6017ControllerT2::class,'edit2'])->name('edit2TPM6017T2');
Route::put('/update2TPM6017T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm6017ControllerT2::class,'update2'])->name('update2TPM6017T2');
Route::get('/pdfprintTPM6017T2',[App\Http\Controllers\Turno_2\Datoshojastpm6017ControllerT2::class,'pdfprint'])->name('pdfprintTPM6017T2');
Route::get('/printindexTPM6017T2',[App\Http\Controllers\Turno_2\Datoshojastpm6017ControllerT2::class,'printindex'])->name('printindexTPM6017T2');
Route::get('/printreversoTPM6017T2',[App\Http\Controllers\Turno_2\Reversotpm6017ControllerT2::class,'printreverso'])->name('printreversoTPM6017T2');
Route::get('/pdfReversoTPM6017T2',[App\Http\Controllers\Turno_2\Reversotpm6017ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM6017T2');
//Rutas F7-TPM-ELE-100-L1-01
Route::resource('F7-TPM-ELE-100-L1-01-1T2', 'App\Http\Controllers\Turno_2\Datoshojastpm10011ControllerT2');
Route::resource('reversoTPM10011T2', 'App\Http\Controllers\Turno_2\Reversotpm10011ControllerT2');
Route::get('/checkTPM10011T2',[App\Http\Controllers\Turno_2\Datoshojastpm10011ControllerT2::class,'check'])->name('checkTPM10011T2');
Route::put('/finalcheckTPM10011T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm10011ControllerT2::class,'finalcheck'])->name('finalcheckTPM10011T2');
Route::get('/edit2TPM10011T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm10011ControllerT2::class,'edit2'])->name('edit2TPM10011T2');
Route::put('/update2TPM10011T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm10011ControllerT2::class,'update2'])->name('update2TPM10011T2');
Route::get('/pdfprintTPM10011T2',[App\Http\Controllers\Turno_2\Datoshojastpm10011ControllerT2::class,'pdfprint'])->name('pdfprintTPM10011T2');
Route::get('/printindexTPM10011T2',[App\Http\Controllers\Turno_2\Datoshojastpm10011ControllerT2::class,'printindex'])->name('printindexTPM10011T2');
Route::get('/printreversoTPM10011T2',[App\Http\Controllers\Turno_2\Reversotpm10011ControllerT2::class,'printreverso'])->name('printreversoTPM10011T2');
Route::get('/pdfReversoTPM10011T2',[App\Http\Controllers\Turno_2\Reversotpm10011ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM10011T2');
//Rutas F7-TPM-ELE-100-L1-01-2
Route::resource('F7-TPM-ELE-100-L1-01-2T2', 'App\Http\Controllers\Turno_2\Datoshojastpm10012ControllerT2');
Route::resource('reversoTPM10012T2', 'App\Http\Controllers\Turno_2\Reversotpm10012ControllerT2');
Route::get('/checkTPM10012T2',[App\Http\Controllers\Turno_2\Datoshojastpm10012ControllerT2::class,'check'])->name('checkTPM10012T2');
Route::put('/finalcheckTPM10012T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm10012ControllerT2::class,'finalcheck'])->name('finalcheckTPM10012T2');
Route::get('/edit2TPM10012T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm10012ControllerT2::class,'edit2'])->name('edit2TPM10012T2');
Route::put('/update2TPM10012T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm10012ControllerT2::class,'update2'])->name('update2TPM10012T2');
Route::get('/pdfprintTPM10012T2',[App\Http\Controllers\Turno_2\Datoshojastpm10012ControllerT2::class,'pdfprint'])->name('pdfprintTPM10012T2');
Route::get('/printindexTPM10012T2',[App\Http\Controllers\Turno_2\Datoshojastpm10012ControllerT2::class,'printindex'])->name('printindexTPM10012T2');
Route::get('/printreversoTPM10012T2',[App\Http\Controllers\Turno_2\Reversotpm10012ControllerT2::class,'printreverso'])->name('printreversoTPM10012T2');
Route::get('/pdfReversoTPM10012T2',[App\Http\Controllers\Turno_2\Reversotpm10012ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM10012T2');
//Rutas F7-TPM-ELE-100-L1-01-3
Route::resource('F7-TPM-ELE-100-L1-01-3T2', 'App\Http\Controllers\Turno_2\Datoshojastpm10013ControllerT2');
Route::resource('reversoTPM10013T2', 'App\Http\Controllers\Turno_2\Reversotpm10013ControllerT2');
Route::get('/checkTPM10013T2',[App\Http\Controllers\Turno_2\Datoshojastpm10013ControllerT2::class,'check'])->name('checkTPM10013T2');
Route::put('/finalcheckTPM10013T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm10013ControllerT2::class,'finalcheck'])->name('finalcheckTPM10013T2');
Route::get('/edit2TPM10013T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm10013ControllerT2::class,'edit2'])->name('edit2TPM10013T2');
Route::put('/update2TPM10013T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm10013ControllerT2::class,'update2'])->name('update2TPM10013T2');
Route::get('/pdfprintTPM10013T2',[App\Http\Controllers\Turno_2\Datoshojastpm10013ControllerT2::class,'pdfprint'])->name('pdfprintTPM10013T2');
Route::get('/printindexTPM10013T2',[App\Http\Controllers\Turno_2\Datoshojastpm10013ControllerT2::class,'printindex'])->name('printindexTPM10013T2');
Route::get('/printreversoTPM10013T2',[App\Http\Controllers\Turno_2\Reversotpm10013ControllerT2::class,'printreverso'])->name('printreversoTPM10013T2');
Route::get('/pdfReversoTPM10013T2',[App\Http\Controllers\Turno_2\Reversotpm10013ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM10013T2');
//Rutas F7-TPM-ELE-107-L1-01
Route::resource('F7-TPM-ELE-107-L1-01-1T2', 'App\Http\Controllers\Turno_2\Datoshojastpm10711ControllerT2');
Route::resource('reversoTPM10711T2', 'App\Http\Controllers\Turno_2\Reversotpm10711ControllerT2');
Route::get('/checkTPM10711T2',[App\Http\Controllers\Turno_2\Datoshojastpm10711ControllerT2::class,'check'])->name('checkTPM10711T2');
Route::put('/finalcheckTPM10711T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm10711ControllerT2::class,'finalcheck'])->name('finalcheckTPM10711T2');
Route::get('/edit2TPM10711T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm10711ControllerT2::class,'edit2'])->name('edit2TPM10711T2');
Route::put('/update2TPM10711T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm10711ControllerT2::class,'update2'])->name('update2TPM10711T2');
Route::get('/pdfprintTPM10711T2',[App\Http\Controllers\Turno_2\Datoshojastpm10711ControllerT2::class,'pdfprint'])->name('pdfprintTPM10711T2');
Route::get('/printindexTPM10711T2',[App\Http\Controllers\Turno_2\Datoshojastpm10711ControllerT2::class,'printindex'])->name('printindexTPM10711T2');
Route::get('/printreversoTPM10711T2',[App\Http\Controllers\Turno_2\Reversotpm10711ControllerT2::class,'printreverso'])->name('printreversoTPM10711T2');
Route::get('/pdfReversoTPM10711T2',[App\Http\Controllers\Turno_2\Reversotpm10711ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM10711T2');
//Rutas F7-TPM-ELE-107-L1-01-2
Route::resource('F7-TPM-ELE-107-L1-01-2T2', 'App\Http\Controllers\Turno_2\Datoshojastpm10712ControllerT2');
Route::resource('reversoTPM10712T2', 'App\Http\Controllers\Turno_2\Reversotpm10712ControllerT2');
Route::get('/checkTPM10712T2',[App\Http\Controllers\Turno_2\Datoshojastpm10712ControllerT2::class,'check'])->name('checkTPM10712T2');
Route::put('/finalcheckTPM10712T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm10712ControllerT2::class,'finalcheck'])->name('finalcheckTPM10712T2');
Route::get('/edit2TPM10712T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm10712ControllerT2::class,'edit2'])->name('edit2TPM10712T2');
Route::put('/update2TPM10712T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm10712ControllerT2::class,'update2'])->name('update2TPM10712T2');
Route::get('/pdfprintTPM10712T2',[App\Http\Controllers\Turno_2\Datoshojastpm10712ControllerT2::class,'pdfprint'])->name('pdfprintTPM10712T2');
Route::get('/printindexTPM10712T2',[App\Http\Controllers\Turno_2\Datoshojastpm10712ControllerT2::class,'printindex'])->name('printindexTPM10712T2');
Route::get('/printreversoTPM10712T2',[App\Http\Controllers\Turno_2\Reversotpm10712ControllerT2::class,'printreverso'])->name('printreversoTPM10712T2');
Route::get('/pdfReversoTPM10712T2',[App\Http\Controllers\Turno_2\Reversotpm10712ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM10712T2');
//Rutas F7-TPM-ELE-107-L1-01-3
Route::resource('F7-TPM-ELE-107-L1-01-3T2', 'App\Http\Controllers\Turno_2\Datoshojastpm10713ControllerT2');
Route::resource('reversoTPM10713T2', 'App\Http\Controllers\Turno_2\Reversotpm10713ControllerT2');
Route::get('/checkTPM10713T2',[App\Http\Controllers\Turno_2\Datoshojastpm10713ControllerT2::class,'check'])->name('checkTPM10713T2');
Route::put('/finalcheckTPM10713T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm10713ControllerT2::class,'finalcheck'])->name('finalcheckTPM10713T2');
Route::get('/edit2TPM10713T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm10713ControllerT2::class,'edit2'])->name('edit2TPM10713T2');
Route::put('/update2TPM10713T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm10713ControllerT2::class,'update2'])->name('update2TPM10713T2');
Route::get('/pdfprintTPM10713T2',[App\Http\Controllers\Turno_2\Datoshojastpm10713ControllerT2::class,'pdfprint'])->name('pdfprintTPM10713T2');
Route::get('/printindexTPM10713T2',[App\Http\Controllers\Turno_2\Datoshojastpm10713ControllerT2::class,'printindex'])->name('printindexTPM10713T2');
Route::get('/printreversoTPM10713T2',[App\Http\Controllers\Turno_2\Reversotpm10713ControllerT2::class,'printreverso'])->name('printreversoTPM10713T2');
Route::get('/pdfReversoTPM10713T2',[App\Http\Controllers\Turno_2\Reversotpm10713ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM10713T2');
//Rutas F7-TPM-ELE-120-L1-01-1
Route::resource('F7-TPM-ELE-120-L1-01-1-1T2', 'App\Http\Controllers\Turno_2\Datoshojastpm120111ControllerT2');
Route::resource('reversoTPM120111T2', 'App\Http\Controllers\Turno_2\Reversotpm120111ControllerT2');
Route::get('/checkTPM120111T2',[App\Http\Controllers\Turno_2\Datoshojastpm120111ControllerT2::class,'check'])->name('checkTPM120111T2');
Route::put('/finalcheckTPM120111T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm120111ControllerT2::class,'finalcheck'])->name('finalcheckTPM120111T2');
Route::get('/edit2TPM120111T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm120111ControllerT2::class,'edit2'])->name('edit2TPM120111T2');
Route::put('/update2TPM120111T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm120111ControllerT2::class,'update2'])->name('update2TPM120111T2');
Route::get('/pdfprintTPM120111T2',[App\Http\Controllers\Turno_2\Datoshojastpm120111ControllerT2::class,'pdfprint'])->name('pdfprintTPM120111T2');
Route::get('/printindexTPM120111T2',[App\Http\Controllers\Turno_2\Datoshojastpm120111ControllerT2::class,'printindex'])->name('printindexTPM120111T2');
Route::get('/printreversoTPM120111T2',[App\Http\Controllers\Turno_2\Reversotpm120111ControllerT2::class,'printreverso'])->name('printreversoTPM120111T2');
Route::get('/pdfReversoTPM120111T2',[App\Http\Controllers\Turno_2\Reversotpm120111ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM120111T2');
//Rutas F7-TPM-ELE-120-L1-01-2
Route::resource('F7-TPM-ELE-120-L1-01-2-1T2', 'App\Http\Controllers\Turno_2\Datoshojastpm120121ControllerT2');
Route::resource('reversoTPM120121T2', 'App\Http\Controllers\Turno_2\Reversotpm120121ControllerT2');
Route::get('/checkTPM120121T2',[App\Http\Controllers\Turno_2\Datoshojastpm120121ControllerT2::class,'check'])->name('checkTPM120121T2');
Route::put('/finalcheckTPM120121T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm120121ControllerT2::class,'finalcheck'])->name('finalcheckTPM120121T2');
Route::get('/edit2TPM120121T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm120121ControllerT2::class,'edit2'])->name('edit2TPM120121T2');
Route::put('/update2TPM120121T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm120121ControllerT2::class,'update2'])->name('update2TPM120121T2');
Route::get('/pdfprintTPM120121T2',[App\Http\Controllers\Turno_2\Datoshojastpm120121ControllerT2::class,'pdfprint'])->name('pdfprintTPM120121T2');
Route::get('/printindexTPM120121T2',[App\Http\Controllers\Turno_2\Datoshojastpm120121ControllerT2::class,'printindex'])->name('printindexTPM120121T2');
Route::get('/printreversoTPM120121T2',[App\Http\Controllers\Turno_2\Reversotpm120121ControllerT2::class,'printreverso'])->name('printreversoTPM120121T2');
Route::get('/pdfReversoTPM120121T2',[App\Http\Controllers\Turno_2\Reversotpm120121ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM120121T2');
//Rutas F7-TPM-ELE-120-L1-01-3
Route::resource('F7-TPM-ELE-120-L1-01-3-1T2', 'App\Http\Controllers\Turno_2\Datoshojastpm120131ControllerT2');
Route::resource('reversoTPM120131T2', 'App\Http\Controllers\Turno_2\Reversotpm120131ControllerT2');
Route::get('/checkTPM120131T2',[App\Http\Controllers\Turno_2\Datoshojastpm120131ControllerT2::class,'check'])->name('checkTPM120131T2');
Route::put('/finalcheckTPM120131T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm120131ControllerT2::class,'finalcheck'])->name('finalcheckTPM120131T2');
Route::get('/edit2TPM120131T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm120131ControllerT2::class,'edit2'])->name('edit2TPM120131T2');
Route::put('/update2TPM120131T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm120131ControllerT2::class,'update2'])->name('update2TPM120131T2');
Route::get('/pdfprintTPM120131T2',[App\Http\Controllers\Turno_2\Datoshojastpm120131ControllerT2::class,'pdfprint'])->name('pdfprintTPM120131T2');
Route::get('/printindexTPM120131T2',[App\Http\Controllers\Turno_2\Datoshojastpm120131ControllerT2::class,'printindex'])->name('printindexTPM120131T2');
Route::get('/printreversoTPM120131T2',[App\Http\Controllers\Turno_2\Reversotpm120131ControllerT2::class,'printreverso'])->name('printreversoTPM120131T2');
Route::get('/pdfReversoTPM120131T2',[App\Http\Controllers\Turno_2\Reversotpm120131ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM120131T2');
//Rutas F7-TPM-ELE-120-L1-01-4
Route::resource('F7-TPM-ELE-120-L1-01-4-1T2', 'App\Http\Controllers\Turno_2\Datoshojastpm120141ControllerT2');
Route::resource('reversoTPM120141T2', 'App\Http\Controllers\Turno_2\Reversotpm120141ControllerT2');
Route::get('/checkTPM120141T2',[App\Http\Controllers\Turno_2\Datoshojastpm120141ControllerT2::class,'check'])->name('checkTPM120141T2');
Route::put('/finalcheckTPM120141T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm120141ControllerT2::class,'finalcheck'])->name('finalcheckTPM120141T2');
Route::get('/edit2TPM120141T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm120141ControllerT2::class,'edit2'])->name('edit2TPM120141T2');
Route::put('/update2TPM120141T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm120141ControllerT2::class,'update2'])->name('update2TPM120141T2');
Route::get('/pdfprintTPM120141T2',[App\Http\Controllers\Turno_2\Datoshojastpm120141ControllerT2::class,'pdfprint'])->name('pdfprintTPM120141T2');
Route::get('/printindexTPM120141T2',[App\Http\Controllers\Turno_2\Datoshojastpm120141ControllerT2::class,'printindex'])->name('printindexTPM120141T2');
Route::get('/printreversoTPM120141T2',[App\Http\Controllers\Turno_2\Reversotpm120141ControllerT2::class,'printreverso'])->name('printreversoTPM120141T2');
Route::get('/pdfReversoTPM120141T2',[App\Http\Controllers\Turno_2\Reversotpm120141ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM120141T2');
//Rutas F7-TPM-ELE-120-L1-01-5
Route::resource('F7-TPM-ELE-120-L1-01-5-1T2', 'App\Http\Controllers\Turno_2\Datoshojastpm120151ControllerT2');
Route::resource('reversoTPM120151T2', 'App\Http\Controllers\Turno_2\Reversotpm120151ControllerT2');
Route::get('/checkTPM120151T2',[App\Http\Controllers\Turno_2\Datoshojastpm120151ControllerT2::class,'check'])->name('checkTPM120151T2');
Route::put('/finalcheckTPM120151T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm120151ControllerT2::class,'finalcheck'])->name('finalcheckTPM120151T2');
Route::get('/edit2TPM120151T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm120151ControllerT2::class,'edit2'])->name('edit2TPM120151T2');
Route::put('/update2TPM120151T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm120151ControllerT2::class,'update2'])->name('update2TPM120151T2');
Route::get('/pdfprintTPM120151T2',[App\Http\Controllers\Turno_2\Datoshojastpm120151ControllerT2::class,'pdfprint'])->name('pdfprintTPM120151T2');
Route::get('/printindexTPM120151T2',[App\Http\Controllers\Turno_2\Datoshojastpm120151ControllerT2::class,'printindex'])->name('printindexTPM120151T2');
Route::get('/printreversoTPM120151T2',[App\Http\Controllers\Turno_2\Reversotpm120151ControllerT2::class,'printreverso'])->name('printreversoTPM120151T2');
Route::get('/pdfReversoTPM120151T2',[App\Http\Controllers\Turno_2\Reversotpm120151ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM120151T2');
//Rutas F7-TPM-ELE-140-L1-01
Route::resource('F7-TPM-ELE-140-L1-01-1T2', 'App\Http\Controllers\Turno_2\Datoshojastpm14011ControllerT2');
Route::resource('reversoTPM14011T2', 'App\Http\Controllers\Turno_2\Reversotpm14011ControllerT2');
Route::get('/checkTPM14011T2',[App\Http\Controllers\Turno_2\Datoshojastpm14011ControllerT2::class,'check'])->name('checkTPM14011T2');
Route::put('/finalcheckTPM14011T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm14011ControllerT2::class,'finalcheck'])->name('finalcheckTPM14011T2');
Route::get('/edit2TPM14011T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm14011ControllerT2::class,'edit2'])->name('edit2TPM14011T2');
Route::put('/update2TPM14011T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm14011ControllerT2::class,'update2'])->name('update2TPM14011T2');
Route::get('/pdfprintTPM14011T2',[App\Http\Controllers\Turno_2\Datoshojastpm14011ControllerT2::class,'pdfprint'])->name('pdfprintTPM14011T2');
Route::get('/printindexTPM14011T2',[App\Http\Controllers\Turno_2\Datoshojastpm14011ControllerT2::class,'printindex'])->name('printindexTPM14011T2');
Route::get('/printreversoTPM14011T2',[App\Http\Controllers\Turno_2\Reversotpm14011ControllerT2::class,'printreverso'])->name('printreversoTPM14011T2');
Route::get('/pdfReversoTPM14011T2',[App\Http\Controllers\Turno_2\Reversotpm14011ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM14011T2');
//Rutas F7-TPM-ELE-140-L1-02
Route::resource('F7-TPM-ELE-140-L1-01-2T2', 'App\Http\Controllers\Turno_2\Datoshojastpm14012ControllerT2');
Route::resource('reversoTPM14012T2', 'App\Http\Controllers\Turno_2\Reversotpm14012ControllerT2');
Route::get('/checkTPM14012T2',[App\Http\Controllers\Turno_2\Datoshojastpm14012ControllerT2::class,'check'])->name('checkTPM14012T2');
Route::put('/finalcheckTPM14012T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm14012ControllerT2::class,'finalcheck'])->name('finalcheckTPM14012T2');
Route::get('/edit2TPM14012T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm14012ControllerT2::class,'edit2'])->name('edit2TPM14012T2');
Route::put('/update2TPM14012T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm14012ControllerT2::class,'update2'])->name('update2TPM14012T2');
Route::get('/pdfprintTPM14012T2',[App\Http\Controllers\Turno_2\Datoshojastpm14012ControllerT2::class,'pdfprint'])->name('pdfprintTPM14012T2');
Route::get('/printindexTPM14012T2',[App\Http\Controllers\Turno_2\Datoshojastpm14012ControllerT2::class,'printindex'])->name('printindexTPM14012T2');
Route::get('/printreversoTPM14012T2',[App\Http\Controllers\Turno_2\Reversotpm14012ControllerT2::class,'printreverso'])->name('printreversoTPM14012T2');
Route::get('/pdfReversoTPM14012T2',[App\Http\Controllers\Turno_2\Reversotpm14012ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM14012T2');
//Rutas F7-TPM-ELE-140-L1-03
Route::resource('F7-TPM-ELE-140-L1-01-3T2', 'App\Http\Controllers\Turno_2\Datoshojastpm14013ControllerT2');
Route::resource('reversoTPM14013T2', 'App\Http\Controllers\Turno_2\Reversotpm14013ControllerT2');
Route::get('/checkTPM14013T2',[App\Http\Controllers\Turno_2\Datoshojastpm14013ControllerT2::class,'check'])->name('checkTPM14013T2');
Route::put('/finalcheckTPM14013T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm14013ControllerT2::class,'finalcheck'])->name('finalcheckTPM14013T2');
Route::get('/edit2TPM14013T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm14013ControllerT2::class,'edit2'])->name('edit2TPM14013T2');
Route::put('/update2TPM14013T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm14013ControllerT2::class,'update2'])->name('update2TPM14013T2');
Route::get('/pdfprintTPM14013T2',[App\Http\Controllers\Turno_2\Datoshojastpm14013ControllerT2::class,'pdfprint'])->name('pdfprintTPM14013T2');
Route::get('/printindexTPM14013T2',[App\Http\Controllers\Turno_2\Datoshojastpm14013ControllerT2::class,'printindex'])->name('printindexTPM14013T2');
Route::get('/printreversoTPM14013T2',[App\Http\Controllers\Turno_2\Reversotpm14013ControllerT2::class,'printreverso'])->name('printreversoTPM14013T2');
Route::get('/pdfReversoTPM14013T2',[App\Http\Controllers\Turno_2\Reversotpm14013ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM14013T2');
//Rutas F7-TPM-ELE-160-L1-01
Route::resource('F7-TPM-ELE-160-L1-01-1T2', 'App\Http\Controllers\Turno_2\Datoshojastpm16011ControllerT2');
Route::resource('reversoTPM16011T2', 'App\Http\Controllers\Turno_2\Reversotpm16011ControllerT2');
Route::get('/checkTPM16011T2',[App\Http\Controllers\Turno_2\Datoshojastpm16011ControllerT2::class,'check'])->name('checkTPM16011T2');
Route::put('/finalcheckTPM16011T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm16011ControllerT2::class,'finalcheck'])->name('finalcheckTPM16011T2');
Route::get('/edit2TPM16011T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm16011ControllerT2::class,'edit2'])->name('edit2TPM16011T2');
Route::put('/update2TPM16011T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm16011ControllerT2::class,'update2'])->name('update2TPM16011T2');
Route::get('/pdfprintTPM16011T2',[App\Http\Controllers\Turno_2\Datoshojastpm16011ControllerT2::class,'pdfprint'])->name('pdfprintTPM16011T2');
Route::get('/printindexTPM16011T2',[App\Http\Controllers\Turno_2\Datoshojastpm16011ControllerT2::class,'printindex'])->name('printindexTPM16011T2');
Route::get('/printreversoTPM16011T2',[App\Http\Controllers\Turno_2\Reversotpm16011ControllerT2::class,'printreverso'])->name('printreversoTPM16011T2');
Route::get('/pdfReversoTPM16011T2',[App\Http\Controllers\Turno_2\Reversotpm16011ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM16011T2');
//Rutas F7-TPM-ELE-160-L1-01-2
Route::resource('F7-TPM-ELE-160-L1-01-2T2', 'App\Http\Controllers\Turno_2\Datoshojastpm16012ControllerT2');
Route::resource('reversoTPM16012T2', 'App\Http\Controllers\Turno_2\Reversotpm16012ControllerT2');
Route::get('/checkTPM16012T2',[App\Http\Controllers\Turno_2\Datoshojastpm16012ControllerT2::class,'check'])->name('checkTPM16012T2');
Route::put('/finalcheckTPM16012T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm16012ControllerT2::class,'finalcheck'])->name('finalcheckTPM16012T2');
Route::get('/edit2TPM16012T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm16012ControllerT2::class,'edit2'])->name('edit2TPM16012T2');
Route::put('/update2TPM16012T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm16012ControllerT2::class,'update2'])->name('update2TPM16012T2');
Route::get('/pdfprintTPM16012T2',[App\Http\Controllers\Turno_2\Datoshojastpm16012ControllerT2::class,'pdfprint'])->name('pdfprintTPM16012T2');
Route::get('/printindexTPM16012T2',[App\Http\Controllers\Turno_2\Datoshojastpm16012ControllerT2::class,'printindex'])->name('printindexTPM16012T2');
Route::get('/printreversoTPM16012T2',[App\Http\Controllers\Turno_2\Reversotpm16012ControllerT2::class,'printreverso'])->name('printreversoTPM16012T2');
Route::get('/pdfReversoTPM16012T2',[App\Http\Controllers\Turno_2\Reversotpm16012ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM16012T2');
//Rutas F7-TPM-ELE-180-L1-01
Route::resource('F7-TPM-ELE-180-L1-01-1T2', 'App\Http\Controllers\Turno_2\Datoshojastpm18011ControllerT2');
Route::resource('reversoTPM18011T2', 'App\Http\Controllers\Turno_2\Reversotpm18011ControllerT2');
Route::get('/checkTPM18011T2',[App\Http\Controllers\Turno_2\Datoshojastpm18011ControllerT2::class,'check'])->name('checkTPM18011T2');
Route::put('/finalcheckTPM18011T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm18011ControllerT2::class,'finalcheck'])->name('finalcheckTPM18011T2');
Route::get('/edit2TPM18011T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm18011ControllerT2::class,'edit2'])->name('edit2TPM18011T2');
Route::put('/update2TPM18011T2/{id}',[App\Http\Controllers\Turno_2\Datoshojastpm18011ControllerT2::class,'update2'])->name('update2TPM18011T2');
Route::get('/pdfprintTPM18011T2',[App\Http\Controllers\Turno_2\Datoshojastpm18011ControllerT2::class,'pdfprint'])->name('pdfprintTPM18011T2');
Route::get('/printindexTPM18011T2',[App\Http\Controllers\Turno_2\Datoshojastpm18011ControllerT2::class,'printindex'])->name('printindexTPM18011T2');
Route::get('/printreversoTPM18011T2',[App\Http\Controllers\Turno_2\Reversotpm18011ControllerT2::class,'printreverso'])->name('printreversoTPM18011T2');
Route::get('/pdfReversoTPM18011T2',[App\Http\Controllers\Turno_2\Reversotpm18011ControllerT2::class,'pdfReverso'])->name('pdfReversoTPM18011T2');




























//TURNO 3
//Rutas F7-SETCS-ELE-CR-L1-01
Route::resource('F7-SETCS-ELE-CR-L1-01-73', 'App\Http\Controllers\Turno_3\DatoshojaControllerT3');
Route::resource('reversoT3', 'App\Http\Controllers\Turno_3\ReversoController00T3');
Route::get('/checkT3',[App\Http\Controllers\Turno_3\DatoshojaControllert3::class,'check'])->name('checkT3');
Route::put('/finalcheckT3/{id}',[App\Http\Controllers\Turno_3\DatoshojaControllert3::class,'finalcheck'])->name('finalcheckT3');
Route::get('/edit2T3/{id}',[App\Http\Controllers\Turno_3\DatoshojaControllert3::class,'edit2'])->name('edit2T3');
Route::put('/update2T3/{id}',[App\Http\Controllers\Turno_3\DatoshojaControllert3::class,'update2'])->name('update2T3');
Route::get('/pdfprintT3',[App\Http\Controllers\Turno_3\DatoshojaControllert3::class,'pdfprint'])->name('pdfprintT3');
Route::get('/printindexT3',[App\Http\Controllers\Turno_3\DatoshojaControllert3::class,'printindex'])->name('printindexT3');
Route::get('/printreversoT3',[App\Http\Controllers\Turno_3\ReversoController00t3::class,'printreverso'])->name('printreversoT3');
Route::get('/pdfprintReversoF7SETCSELECRL1011T3',[App\Http\Controllers\Turno_3\ReversoController00t3::class,'pdfprintReversoF7SETCSELECRL1011'])->name('pdfprintReversoF7SETCSELECRL1011T3');
//Rutas F7-SETCS-ELE-20-L1-01
Route::resource('F7-SETCS-ELE-20-L1-01-1T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs20ControllerT3');
Route::resource('reversoSETCS20T3', 'App\Http\Controllers\Turno_3\Reversosetcs20ControllerT3');
Route::get('/checkSETCS20T3',[App\Http\Controllers\Turno_3\Datoshojasetcs20Controllert3::class,'check'])->name('checkSETCS20T3');
Route::put('/finalcheckSETCS20T3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs20Controllert3::class,'finalcheck'])->name('finalcheckSETCS20T3');
Route::get('/edit2SETCS20T3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs20Controllert3::class,'edit2'])->name('edit2SETCS20T3');
Route::put('/update2SETCS20T3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs20Controllert3::class,'update2'])->name('update2SETCS20T3');
Route::get('/pdfprintSETCS20T3',[App\Http\Controllers\Turno_3\Datoshojasetcs20Controllert3::class,'pdfprint'])->name('pdfprintSETCS20T3');
Route::get('/printindexSETCS20T3',[App\Http\Controllers\Turno_3\Datoshojasetcs20Controllert3::class,'printindex'])->name('printindexSETCS20T3');
Route::get('/printreversoSETCS20T3',[App\Http\Controllers\Turno_3\Reversosetcs20Controllert3::class,'printreverso'])->name('printreversoSETCS20T3');
Route::get('/pdfReversoSETCS20T3',[App\Http\Controllers\Turno_3\Reversosetcs20Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS20T3');
//Rutas F7-SETCS-ELE-20-L1-01-2
Route::resource('F7-SETCS-ELE-20-L1-01-2T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs20C2ControllerT3');
Route::resource('reversoSETCS20T3C2', 'App\Http\Controllers\Turno_3\Reversosetcs20C2ControllerT3');
Route::get('/checkSETCS20T3C2',[App\Http\Controllers\Turno_3\Datoshojasetcs20C2Controllert3::class,'check'])->name('checkSETCS20T3C2');
Route::put('/finalcheckSETCS20T3C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs20C2Controllert3::class,'finalcheck'])->name('finalcheckSETCS20T3C2');
Route::get('/edit2SETCS20T3C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs20C2Controllert3::class,'edit2'])->name('edit2SETCS20T3C2');
Route::put('/update2SETCS20T3C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs20C2Controllert3::class,'update2'])->name('update2SETCS20T3C2');
Route::get('/pdfprintSETCS20T3C2',[App\Http\Controllers\Turno_3\Datoshojasetcs20C2Controllert3::class,'pdfprint'])->name('pdfprintSETCS20T3C2');
Route::get('/printindexSETCS20T3C2',[App\Http\Controllers\Turno_3\Datoshojasetcs20C2Controllert3::class,'printindex'])->name('printindexSETCS20T3C2');
Route::get('/printreversoSETCS20T3C2',[App\Http\Controllers\Turno_3\Reversosetcs20C2Controllert3::class,'printreverso'])->name('printreversoSETCS20T3C2');
Route::get('/pdfReversoSETCS20T3C2',[App\Http\Controllers\Turno_3\Reversosetcs20C2Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS20T3C2');
//Rutas F7-SETCS-ELE-20-L1-01-3
Route::resource('F7-SETCS-ELE-20-L1-01-3T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs20C3ControllerT3');
Route::resource('reversoSETCS20T3C3', 'App\Http\Controllers\Turno_3\Reversosetcs20C3ControllerT3');
Route::get('/checkSETCS20T3C3',[App\Http\Controllers\Turno_3\Datoshojasetcs20C3Controllert3::class,'check'])->name('checkSETCS20T3C3');
Route::put('/finalcheckSETCS20T3C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs20C3Controllert3::class,'finalcheck'])->name('finalcheckSETCS20T3C3');
Route::get('/edit2SETCS20T3C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs20C3Controllert3::class,'edit2'])->name('edit2SETCS20T3C3');
Route::put('/update2SETCS20T3C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs20C3Controllert3::class,'update2'])->name('update2SETCS20T3C3');
Route::get('/pdfprintSETCS20T3C3',[App\Http\Controllers\Turno_3\Datoshojasetcs20C3Controllert3::class,'pdfprint'])->name('pdfprintSETCS20T3C3');
Route::get('/printindexSETCS20T3C3',[App\Http\Controllers\Turno_3\Datoshojasetcs20C3Controllert3::class,'printindex'])->name('printindexSETCS20T3C3');
Route::get('/printreversoSETCS20T3C3',[App\Http\Controllers\Turno_3\Reversosetcs20C3Controllert3::class,'printreverso'])->name('printreversoSETCS20T3C3');
Route::get('/pdfReversoSETCS20T3C3',[App\Http\Controllers\Turno_3\Reversosetcs20C3Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS20T3C3');
//Rutas F7-SETCS-ELE-20-L1-01-4
Route::resource('F7-SETCS-ELE-20-L1-01-4T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs20C4ControllerT3');
Route::resource('reversoSETCS20T3C4', 'App\Http\Controllers\Turno_3\Reversosetcs20C4ControllerT3');
Route::get('/checkSETCS20T3C4',[App\Http\Controllers\Turno_3\Datoshojasetcs20C4Controllert3::class,'check'])->name('checkSETCS20T3C4');
Route::put('/finalcheckSETCS20T3C4/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs20C4Controllert3::class,'finalcheck'])->name('finalcheckSETCS20T3C4');
Route::get('/edit2SETCS20T3C4/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs20C4Controllert3::class,'edit2'])->name('edit2SETCS20T3C4');
Route::put('/update2SETCS20T3C4/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs20C4Controllert3::class,'update2'])->name('update2SETCS20T3C4');
Route::get('/pdfprintSETCS20T3C4',[App\Http\Controllers\Turno_3\Datoshojasetcs20C4Controllert3::class,'pdfprint'])->name('pdfprintSETCS20T3C4');
Route::get('/printindexSETCS20T3C4',[App\Http\Controllers\Turno_3\Datoshojasetcs20C4Controllert3::class,'printindex'])->name('printindexSETCS20T3C4');
Route::get('/printreversoSETCS20T3C4',[App\Http\Controllers\Turno_3\Reversosetcs20C4Controllert3::class,'printreverso'])->name('printreversoSETCS20T3C4');
Route::get('/pdfReversoSETCS20T3C4',[App\Http\Controllers\Turno_3\Reversosetcs20C4Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS20T3C4');
//Rutas F7-SETCS-ELE-20-L1-03
Route::resource('F7-SETCS-ELE-20-L1-03-1T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs2031ControllerT3');
Route::resource('reversoSETCS2031T3', 'App\Http\Controllers\Turno_3\Reversosetcs2031ControllerT3');
Route::get('/checkSETCS2031T3',[App\Http\Controllers\Turno_3\Datoshojasetcs2031Controllert3::class,'check'])->name('checkSETCS2031T3');
Route::put('/finalcheckSETCS2031T3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs2031Controllert3::class,'finalcheck'])->name('finalcheckSETCS2031T3');
Route::get('/edit2SETCS2031T3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs2031Controllert3::class,'edit2'])->name('edit2SETCS2031T3');
Route::put('/update2SETCS2031T3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs2031Controllert3::class,'update2'])->name('update2SETCS2031T3');
Route::get('/pdfprintSETCS2031T3',[App\Http\Controllers\Turno_3\Datoshojasetcs2031Controllert3::class,'pdfprint'])->name('pdfprintSETCS2031T3');
Route::get('/printindexSETCS2031T3',[App\Http\Controllers\Turno_3\Datoshojasetcs2031Controllert3::class,'printindex'])->name('printindexSETCS2031T3');
Route::get('/printreversoSETCS2031T3',[App\Http\Controllers\Turno_3\Reversosetcs2031Controllert3::class,'printreverso'])->name('printreversoSETCS2031T3');
Route::get('/pdfReversoSETCS2031T3',[App\Http\Controllers\Turno_3\Reversosetcs2031Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS2031T3');
//Rutas F7-SETCS-ELE-20-L1-03-2
Route::resource('F7-SETCS-ELE-20-L1-03-2T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs2031C2ControllerT3');
Route::resource('reversoSETCS2031T3C2', 'App\Http\Controllers\Turno_3\Reversosetcs2031C2ControllerT3');
Route::get('/checkSETCS2031T3C2',[App\Http\Controllers\Turno_3\Datoshojasetcs2031C2Controllert3::class,'check'])->name('checkSETCS2031T3C2');
Route::put('/finalcheckSETCS2031T3C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs2031C2Controllert3::class,'finalcheck'])->name('finalcheckSETCS2031T3C2');
Route::get('/edit2SETCS2031T3C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs2031C2Controllert3::class,'edit2'])->name('edit2SETCS2031T3C2');
Route::put('/update2SETCS2031T3C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs2031C2Controllert3::class,'update2'])->name('update2SETCS2031T3C2');
Route::get('/pdfprintSETCS2031T3C2',[App\Http\Controllers\Turno_3\Datoshojasetcs2031C2Controllert3::class,'pdfprint'])->name('pdfprintSETCS2031T3C2');
Route::get('/printindexSETCS2031T3C2',[App\Http\Controllers\Turno_3\Datoshojasetcs2031C2Controllert3::class,'printindex'])->name('printindexSETCS2031T3C2');
Route::get('/printreversoSETCS2031T3C2',[App\Http\Controllers\Turno_3\Reversosetcs2031C2Controllert3::class,'printreverso'])->name('printreversoSETCS2031T3C2');
Route::get('/pdfReversoSETCS2031T3C2',[App\Http\Controllers\Turno_3\Reversosetcs2031C2Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS2031T3C2');
//Rutas F7-SETCS-ELE-40-L1-01
Route::resource('F7-SETCS-ELE-40-L1-01-1T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs40111ControllerT3');
Route::resource('reversoSETCS40111T3', 'App\Http\Controllers\Turno_3\Reversosetcs40111ControllerT3');
Route::get('/checkSETCS40111T3',[App\Http\Controllers\Turno_3\Datoshojasetcs40111Controllert3::class,'check'])->name('checkSETCS40111T3');
Route::put('/finalcheckSETCS40111T3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40111Controllert3::class,'finalcheck'])->name('finalcheckSETCS40111T3');
Route::get('/edit2SETCS40111T3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40111Controllert3::class,'edit2'])->name('edit2SETCS40111T3');
Route::put('/update2SETCS40111T3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40111Controllert3::class,'update2'])->name('update2SETCS40111T3');
Route::get('/pdfprintSETCS40111T3',[App\Http\Controllers\Turno_3\Datoshojasetcs40111Controllert3::class,'pdfprint'])->name('pdfprintSETCS40111T3');
Route::get('/printindexSETCS40111T3',[App\Http\Controllers\Turno_3\Datoshojasetcs40111Controllert3::class,'printindex'])->name('printindexSETCS40111T3');
Route::get('/printreversoSETCS40111T3',[App\Http\Controllers\Turno_3\Reversosetcs40111Controllert3::class,'printreverso'])->name('printreversoSETCS40111T3');
Route::get('/pdfReversoSETCS40111T3',[App\Http\Controllers\Turno_3\Reversosetcs40111Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS40111T3');
//Rutas F7-SETCS-ELE-40-L1-01-2
Route::resource('F7-SETCS-ELE-40-L1-01-2T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs40111C2ControllerT3');
Route::resource('reversoSETCS40111T3C2', 'App\Http\Controllers\Turno_3\Reversosetcs40111C2ControllerT3');
Route::get('/checkSETCS40111T3C2',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C2Controllert3::class,'check'])->name('checkSETCS40111T3C2');
Route::put('/finalcheckSETCS40111T3C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C2Controllert3::class,'finalcheck'])->name('finalcheckSETCS40111T3C2');
Route::get('/edit2SETCS40111T3C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C2Controllert3::class,'edit2'])->name('edit2SETCS40111T3C2');
Route::put('/update2SETCS40111T3C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C2Controllert3::class,'update2'])->name('update2SETCS40111T3C2');
Route::get('/pdfprintSETCS40111T3C2',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C2Controllert3::class,'pdfprint'])->name('pdfprintSETCS40111T3C2');
Route::get('/printindexSETCS40111T3C2',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C2Controllert3::class,'printindex'])->name('printindexSETCS40111T3C2');
Route::get('/printreversoSETCS40111T3C2',[App\Http\Controllers\Turno_3\Reversosetcs40111C2Controllert3::class,'printreverso'])->name('printreversoSETCS40111T3C2');
Route::get('/pdfReversoSETCS40111T3C2',[App\Http\Controllers\Turno_3\Reversosetcs40111C2Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS40111T3C2');
//Rutas F7-SETCS-ELE-40-L1-01-3
Route::resource('F7-SETCS-ELE-40-L1-01-3T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs40111C3ControllerT3');
Route::resource('reversoSETCS40111T3C3', 'App\Http\Controllers\Turno_3\Reversosetcs40111C3ControllerT3');
Route::get('/checkSETCS40111T3C3',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C3Controllert3::class,'check'])->name('checkSETCS40111T3C3');
Route::put('/finalcheckSETCS40111T3C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C3Controllert3::class,'finalcheck'])->name('finalcheckSETCS40111T3C3');
Route::get('/edit2SETCS40111T3C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C3Controllert3::class,'edit2'])->name('edit2SETCS40111T3C3');
Route::put('/update2SETCS40111T3C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C3Controllert3::class,'update2'])->name('update2SETCS40111T3C3');
Route::get('/pdfprintSETCS40111T3C3',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C3Controllert3::class,'pdfprint'])->name('pdfprintSETCS40111T3C3');
Route::get('/printindexSETCS40111T3C3',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C3Controllert3::class,'printindex'])->name('printindexSETCS40111T3C3');
Route::get('/printreversoSETCS40111T3C3',[App\Http\Controllers\Turno_3\Reversosetcs40111C3Controllert3::class,'printreverso'])->name('printreversoSETCS40111T3C3');
Route::get('/pdfReversoSETCS40111T3C3',[App\Http\Controllers\Turno_3\Reversosetcs40111C3Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS40111T3C3');
//Rutas F7-SETCS-ELE-40-L1-01-4
Route::resource('F7-SETCS-ELE-40-L1-01-4T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs40111C4ControllerT3');
Route::resource('reversoSETCS40111T3C4', 'App\Http\Controllers\Turno_3\Reversosetcs40111C4ControllerT3');
Route::get('/checkSETCS40111T3C4',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C4Controllert3::class,'check'])->name('checkSETCS40111T3C4');
Route::put('/finalcheckSETCS40111T3C4/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C4Controllert3::class,'finalcheck'])->name('finalcheckSETCS40111T3C4');
Route::get('/edit2SETCS40111T3C4/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C4Controllert3::class,'edit2'])->name('edit2SETCS40111T3C4');
Route::put('/update2SETCS40111T3C4/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C4Controllert3::class,'update2'])->name('update2SETCS40111T3C4');
Route::get('/pdfprintSETCS40111T3C4',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C4Controllert3::class,'pdfprint'])->name('pdfprintSETCS40111T3C4');
Route::get('/printindexSETCS40111T3C4',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C4Controllert3::class,'printindex'])->name('printindexSETCS40111T3C4');
Route::get('/printreversoSETCS40111T3C4',[App\Http\Controllers\Turno_3\Reversosetcs40111C4Controllert3::class,'printreverso'])->name('printreversoSETCS40111T3C4');
Route::get('/pdfReversoSETCS40111T3C4',[App\Http\Controllers\Turno_3\Reversosetcs40111C4Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS40111T3C4');
//Rutas F7-SETCS-ELE-40-L1-01-5
Route::resource('F7-SETCS-ELE-40-L1-01-5T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs40111C5ControllerT3');
Route::resource('reversoSETCS40111T3C5', 'App\Http\Controllers\Turno_3\Reversosetcs40111C5ControllerT3');
Route::get('/checkSETCS40111T3C5',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C5Controllert3::class,'check'])->name('checkSETCS40111T3C5');
Route::put('/finalcheckSETCS40111T3C5/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C5Controllert3::class,'finalcheck'])->name('finalcheckSETCS40111T3C5');
Route::get('/edit2SETCS40111T3C5/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C5Controllert3::class,'edit2'])->name('edit2SETCS40111T3C5');
Route::put('/update2SETCS40111T3C5/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C5Controllert3::class,'update2'])->name('update2SETCS40111T3C5');
Route::get('/pdfprintSETCS40111T3C5',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C5Controllert3::class,'pdfprint'])->name('pdfprintSETCS40111T3C5');
Route::get('/printindexSETCS40111T3C5',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C5Controllert3::class,'printindex'])->name('printindexSETCS40111T3C5');
Route::get('/printreversoSETCS40111T3C5',[App\Http\Controllers\Turno_3\Reversosetcs40111C5Controllert3::class,'printreverso'])->name('printreversoSETCS40111T3C5');
Route::get('/pdfReversoSETCS40111T3C5',[App\Http\Controllers\Turno_3\Reversosetcs40111C5Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS40111T3C5');
//Rutas F7-SETCS-ELE-40-L1-01-6
Route::resource('F7-SETCS-ELE-40-L1-01-6T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs40111C6ControllerT3');
Route::resource('reversoSETCS40111T3C6', 'App\Http\Controllers\Turno_3\Reversosetcs40111C6ControllerT3');
Route::get('/checkSETCS40111T3C6',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C6Controllert3::class,'check'])->name('checkSETCS40111T3C6');
Route::put('/finalcheckSETCS40111T3C6/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C6Controllert3::class,'finalcheck'])->name('finalcheckSETCS40111T3C6');
Route::get('/edit2SETCS40111T3C6/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C6Controllert3::class,'edit2'])->name('edit2SETCS40111T3C6');
Route::put('/update2SETCS40111T3C6/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C6Controllert3::class,'update2'])->name('update2SETCS40111T3C6');
Route::get('/pdfprintSETCS40111T3C6',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C6Controllert3::class,'pdfprint'])->name('pdfprintSETCS40111T3C6');
Route::get('/printindexSETCS40111T3C6',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C6Controllert3::class,'printindex'])->name('printindexSETCS40111T3C6');
Route::get('/printreversoSETCS40111T3C6',[App\Http\Controllers\Turno_3\Reversosetcs40111C6Controllert3::class,'printreverso'])->name('printreversoSETCS40111T3C6');
Route::get('/pdfReversoSETCS40111T3C6',[App\Http\Controllers\Turno_3\Reversosetcs40111C6Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS40111T3C6');
//Rutas F7-SETCS-ELE-40-L1-01-7
Route::resource('F7-SETCS-ELE-40-L1-01-7T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs40111C7ControllerT3');
Route::resource('reversoSETCS40111T3C7', 'App\Http\Controllers\Turno_3\Reversosetcs40111C7ControllerT3');
Route::get('/checkSETCS40111T3C7',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C7Controllert3::class,'check'])->name('checkSETCS40111T3C7');
Route::put('/finalcheckSETCS40111T3C7/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C7Controllert3::class,'finalcheck'])->name('finalcheckSETCS40111T3C7');
Route::get('/edit2SETCS40111T3C7/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C7Controllert3::class,'edit2'])->name('edit2SETCS40111T3C7');
Route::put('/update2SETCS40111T3C7/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C7Controllert3::class,'update2'])->name('update2SETCS40111T3C7');
Route::get('/pdfprintSETCS40111T3C7',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C7Controllert3::class,'pdfprint'])->name('pdfprintSETCS40111T3C7');
Route::get('/printindexSETCS40111T3C7',[App\Http\Controllers\Turno_3\Datoshojasetcs40111C7Controllert3::class,'printindex'])->name('printindexSETCS40111T3C7');
Route::get('/printreversoSETCS40111T3C7',[App\Http\Controllers\Turno_3\Reversosetcs40111C7Controllert3::class,'printreverso'])->name('printreversoSETCS40111T3C7');
Route::get('/pdfReversoSETCS40111T3C7',[App\Http\Controllers\Turno_3\Reversosetcs40111C7Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS40111T3C7');
//Rutas F7-SETCS-ELE-40-L1-02
Route::resource('F7-SETCS-ELE-40-L1-02-T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerT3');
Route::resource('reversoSETCS40223', 'App\Http\Controllers\Turno_3\Reversosetcs40211ControllerT3');
Route::get('/checkSETCS40223',[App\Http\Controllers\Turno_3\Datoshojasetcs40211Controllert3::class,'check'])->name('checkSETCS40223');
Route::put('/finalcheckSETCS40223/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211Controllert3::class,'finalcheck'])->name('finalcheckSETCS40223');
Route::get('/edit2SETCS40223/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211Controllert3::class,'edit2'])->name('edit2SETCS40223');
Route::put('/update2SETCS40223/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211Controllert3::class,'update2'])->name('update2SETCS40223');
Route::get('/pdfprintSETCS40223',[App\Http\Controllers\Turno_3\Datoshojasetcs40211Controllert3::class,'pdfprint'])->name('pdfprintSETCS40223');
Route::get('/printindexSETCS40223',[App\Http\Controllers\Turno_3\Datoshojasetcs40211Controllert3::class,'printindex'])->name('printindexSETCS40223');
Route::get('/printreversoSETCS40223',[App\Http\Controllers\Turno_3\Reversosetcs40211Controllert3::class,'printreverso'])->name('printreversoSETCS40223');
Route::get('/pdfReversoSETCS40223',[App\Http\Controllers\Turno_3\Reversosetcs40211Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS40223');
//Rutas F7-SETCS-ELE-40-L1-02-2
Route::resource('F7-SETCS-ELE-40-L1-02-2T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC2T3');
Route::resource('reversoSETCS40223C2', 'App\Http\Controllers\Turno_3\Reversosetcs40211ControllerC2T3');
Route::get('/checkSETCS40223C2',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC2t3::class,'check'])->name('checkSETCS40223C2');
Route::put('/finalcheckSETCS40223C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC2t3::class,'finalcheck'])->name('finalcheckSETCS40223C2');
Route::get('/edit2SETCS40223C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC2t3::class,'edit2'])->name('edit2SETCS40223C2');
Route::put('/update2SETCS40223C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC2t3::class,'update2'])->name('update2SETCS40223C2');
Route::get('/pdfprintSETCS40223C2',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC2t3::class,'pdfprint'])->name('pdfprintSETCS40223C2');
Route::get('/printindexSETCS40223C2',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC2t3::class,'printindex'])->name('printindexSETCS40223C2');
Route::get('/printreversoSETCS40223C2',[App\Http\Controllers\Turno_3\Reversosetcs40211ControllerC2t3::class,'printreverso'])->name('printreversoSETCS40223C2');
Route::get('/pdfReversoSETCS40223C2',[App\Http\Controllers\Turno_3\Reversosetcs40211ControllerC2t3::class,'pdfReverso'])->name('pdfReversoSETCS40223C2');
//Rutas F7-SETCS-ELE-40-L1-02-3
Route::resource('F7-SETCS-ELE-40-L1-02-3T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC3T3');
Route::resource('reversoSETCS40223C3', 'App\Http\Controllers\Turno_3\Reversosetcs40211ControllerC3T3');
Route::get('/checkSETCS40223C3',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC3t3::class,'check'])->name('checkSETCS40223C3');
Route::put('/finalcheckSETCS40223C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC3t3::class,'finalcheck'])->name('finalcheckSETCS40223C3');
Route::get('/edit2SETCS40223C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC3t3::class,'edit2'])->name('edit2SETCS40223C3');
Route::put('/update2SETCS40223C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC3t3::class,'update2'])->name('update2SETCS40223C3');
Route::get('/pdfprintSETCS40223C3',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC3t3::class,'pdfprint'])->name('pdfprintSETCS40223C3');
Route::get('/printindexSETCS40223C3',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC3t3::class,'printindex'])->name('printindexSETCS40223C3');
Route::get('/printreversoSETCS40223C3',[App\Http\Controllers\Turno_3\Reversosetcs40211ControllerC3t3::class,'printreverso'])->name('printreversoSETCS40223C3');
Route::get('/pdfReversoSETCS40223C3',[App\Http\Controllers\Turno_3\Reversosetcs40211ControllerC3t3::class,'pdfReverso'])->name('pdfReversoSETCS40223C3');
//Rutas F7-SETCS-ELE-40-L1-02-4
Route::resource('F7-SETCS-ELE-40-L1-02-4T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC4T3');
Route::resource('reversoSETCS40223C4', 'App\Http\Controllers\Turno_3\Reversosetcs40211ControllerC4T3');
Route::get('/checkSETCS40223C4',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC4t3::class,'check'])->name('checkSETCS40223C4');
Route::put('/finalcheckSETCS40223C4/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC4t3::class,'finalcheck'])->name('finalcheckSETCS40223C4');
Route::get('/edit2SETCS40223C4/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC4t3::class,'edit2'])->name('edit2SETCS40223C4');
Route::put('/update2SETCS40223C4/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC4t3::class,'update2'])->name('update2SETCS40223C4');
Route::get('/pdfprintSETCS40223C4',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC4t3::class,'pdfprint'])->name('pdfprintSETCS40223C4');
Route::get('/printindexSETCS40223C4',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC4t3::class,'printindex'])->name('printindexSETCS40223C4');
Route::get('/printreversoSETCS40223C4',[App\Http\Controllers\Turno_3\Reversosetcs40211ControllerC4t3::class,'printreverso'])->name('printreversoSETCS40223C4');
Route::get('/pdfReversoSETCS40223C4',[App\Http\Controllers\Turno_3\Reversosetcs40211ControllerC4t3::class,'pdfReverso'])->name('pdfReversoSETCS40223C4');
//Rutas F7-SETCS-ELE-40-L1-02-5
Route::resource('F7-SETCS-ELE-40-L1-02-5T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC5T3');
Route::resource('reversoSETCS40223C5', 'App\Http\Controllers\Turno_3\Reversosetcs40211ControllerC5T3');
Route::get('/checkSETCS40223C5',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC5t3::class,'check'])->name('checkSETCS40223C5');
Route::put('/finalcheckSETCS40223C5/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC5t3::class,'finalcheck'])->name('finalcheckSETCS40223C5');
Route::get('/edit2SETCS40223C5/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC5t3::class,'edit2'])->name('edit2SETCS40223C5');
Route::put('/update2SETCS40223C5/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC5t3::class,'update2'])->name('update2SETCS40223C5');
Route::get('/pdfprintSETCS40223C5',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC5t3::class,'pdfprint'])->name('pdfprintSETCS40223C5');
Route::get('/printindexSETCS40223C5',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC5t3::class,'printindex'])->name('printindexSETCS40223C5');
Route::get('/printreversoSETCS40223C5',[App\Http\Controllers\Turno_3\Reversosetcs40211ControllerC5t3::class,'printreverso'])->name('printreversoSETCS40223C5');
Route::get('/pdfReversoSETCS40223C5',[App\Http\Controllers\Turno_3\Reversosetcs40211ControllerC5t3::class,'pdfReverso'])->name('pdfReversoSETCS40223C5');
//Rutas F7-SETCS-ELE-40-L1-02-6
Route::resource('F7-SETCS-ELE-40-L1-02-6T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC6T3');
Route::resource('reversoSETCS40223C6', 'App\Http\Controllers\Turno_3\Reversosetcs40211ControllerC6T3');
Route::get('/checkSETCS40223C6',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC6t3::class,'check'])->name('checkSETCS40223C6');
Route::put('/finalcheckSETCS40223C6/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC6t3::class,'finalcheck'])->name('finalcheckSETCS40223C6');
Route::get('/edit2SETCS40223C6/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC6t3::class,'edit2'])->name('edit2SETCS40223C6');
Route::put('/update2SETCS40223C6/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC6t3::class,'update2'])->name('update2SETCS40223C6');
Route::get('/pdfprintSETCS40223C6',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC6t3::class,'pdfprint'])->name('pdfprintSETCS40223C6');
Route::get('/printindexSETCS40223C6',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC6t3::class,'printindex'])->name('printindexSETCS40223C6');
Route::get('/printreversoSETCS40223C6',[App\Http\Controllers\Turno_3\Reversosetcs40211ControllerC6t3::class,'printreverso'])->name('printreversoSETCS40223C6');
Route::get('/pdfReversoSETCS40223C6',[App\Http\Controllers\Turno_3\Reversosetcs40211ControllerC6t3::class,'pdfReverso'])->name('pdfReversoSETCS40223C6');
//Rutas F7-SETCS-ELE-40-L1-02-7
Route::resource('F7-SETCS-ELE-40-L1-02-7T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC7T3');
Route::resource('reversoSETCS40223C7', 'App\Http\Controllers\Turno_3\Reversosetcs40211ControllerC7T3');
Route::get('/checkSETCS40223C7',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC7t3::class,'check'])->name('checkSETCS40223C7');
Route::put('/finalcheckSETCS40223C7/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC7t3::class,'finalcheck'])->name('finalcheckSETCS40223C7');
Route::get('/edit2SETCS40223C7/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC7t3::class,'edit2'])->name('edit2SETCS40223C7');
Route::put('/update2SETCS40223C7/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC7t3::class,'update2'])->name('update2SETCS40223C7');
Route::get('/pdfprintSETCS40223C7',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC7t3::class,'pdfprint'])->name('pdfprintSETCS40223C7');
Route::get('/printindexSETCS40223C7',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC7t3::class,'printindex'])->name('printindexSETCS40223C7');
Route::get('/printreversoSETCS40223C7',[App\Http\Controllers\Turno_3\Reversosetcs40211ControllerC7t3::class,'printreverso'])->name('printreversoSETCS40223C7');
Route::get('/pdfReversoSETCS40223C7',[App\Http\Controllers\Turno_3\Reversosetcs40211ControllerC7t3::class,'pdfReverso'])->name('pdfReversoSETCS40223C7');
//Rutas F7-SETCS-ELE-40-L1-02-8
Route::resource('F7-SETCS-ELE-40-L1-02-8T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC8T3');
Route::resource('reversoSETCS40223C8', 'App\Http\Controllers\Turno_3\Reversosetcs40211ControllerC8T3');
Route::get('/checkSETCS40223C8',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC8t3::class,'check'])->name('checkSETCS40223C8');
Route::put('/finalcheckSETCS40223C8/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC8t3::class,'finalcheck'])->name('finalcheckSETCS40223C8');
Route::get('/edit2SETCS40223C8/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC8t3::class,'edit2'])->name('edit2SETCS40223C8');
Route::put('/update2SETCS40223C8/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC8t3::class,'update2'])->name('update2SETCS40223C8');
Route::get('/pdfprintSETCS40223C8',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC8t3::class,'pdfprint'])->name('pdfprintSETCS40223C8');
Route::get('/printindexSETCS40223C8',[App\Http\Controllers\Turno_3\Datoshojasetcs40211ControllerC8t3::class,'printindex'])->name('printindexSETCS40223C8');
Route::get('/printreversoSETCS40223C8',[App\Http\Controllers\Turno_3\Reversosetcs40211ControllerC8t3::class,'printreverso'])->name('printreversoSETCS40223C8');
Route::get('/pdfReversoSETCS40223C8',[App\Http\Controllers\Turno_3\Reversosetcs40211ControllerC8t3::class,'pdfReverso'])->name('pdfReversoSETCS40223C8');
//Rutas F7-SETCS-ELE-60-L1-01-T3
Route::resource('F7-SETCS-ELE-60-L1-01-T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs606111H1ControllerT3');
Route::resource('reversoSETCS606113H1', 'App\Http\Controllers\Turno_3\Reversosetcs606111H1ControllerT3');
Route::get('/checkSETCS606113H1',[App\Http\Controllers\Turno_3\Datoshojasetcs606111H1Controllert3::class,'check'])->name('checkSETCS606113H1');
Route::put('/finalcheckSETCS606113H1/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111H1Controllert3::class,'finalcheck'])->name('finalcheckSETCS606113H1');
Route::get('/edit2SETCS606113H1/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111H1Controllert3::class,'edit2'])->name('edit2SETCS606113H1');
Route::put('/update2SETCS606113H1/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111H1Controllert3::class,'update2'])->name('update2SETCS606113H1');
Route::get('/pdfprintSETCS606113H1',[App\Http\Controllers\Turno_3\Datoshojasetcs606111H1Controllert3::class,'pdfprint'])->name('pdfprintSETCS606113H1');
Route::get('/printindexSETCS606113H1',[App\Http\Controllers\Turno_3\Datoshojasetcs606111H1Controllert3::class,'printindex'])->name('printindexSETCS606113H1');
Route::get('/printreversoSETCS606113H1',[App\Http\Controllers\Turno_3\Reversosetcs606111H1Controllert3::class,'printreverso'])->name('printreversoSETCS606113H1');
Route::get('/pdfReversoSETCS606113H1',[App\Http\Controllers\Turno_3\Reversosetcs606111H1Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS606113H1');
//Rutas F7-SETCS-ELE-60-L1-06-T3
Route::resource('F7-SETCS-ELE-60-L1-06-T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerT3');
Route::resource('reversoSETCS606113', 'App\Http\Controllers\Turno_3\Reversosetcs606111ControllerT3');
Route::get('/checkSETCS606113',[App\Http\Controllers\Turno_3\Datoshojasetcs606111Controllert3::class,'check'])->name('checkSETCS606113');
Route::put('/finalcheckSETCS606113/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111Controllert3::class,'finalcheck'])->name('finalcheckSETCS606113');
Route::get('/edit2SETCS606113/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111Controllert3::class,'edit2'])->name('edit2SETCS606113');
Route::put('/update2SETCS606113/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111Controllert3::class,'update2'])->name('update2SETCS606113');
Route::get('/pdfprintSETCS606113',[App\Http\Controllers\Turno_3\Datoshojasetcs606111Controllert3::class,'pdfprint'])->name('pdfprintSETCS606113');
Route::get('/printindexSETCS606113',[App\Http\Controllers\Turno_3\Datoshojasetcs606111Controllert3::class,'printindex'])->name('printindexSETCS606113');
Route::get('/printreversoSETCS606113',[App\Http\Controllers\Turno_3\Reversosetcs606111Controllert3::class,'printreverso'])->name('printreversoSETCS606113');
Route::get('/pdfReversoSETCS606113',[App\Http\Controllers\Turno_3\Reversosetcs606111Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS606113');
//Rutas F7-SETCS-ELE-60-L1-06-2T3
Route::resource('F7-SETCS-ELE-60-L1-06-2T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC2T3');
Route::resource('reversoSETCS606113C2', 'App\Http\Controllers\Turno_3\Reversosetcs606111ControllerC2T3');
Route::get('/checkSETCS606113C2',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC2t3::class,'check'])->name('checkSETCS606113C2');
Route::put('/finalcheckSETCS606113C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC2t3::class,'finalcheck'])->name('finalcheckSETCS606113C2');
Route::get('/edit2SETCS606113C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC2t3::class,'edit2'])->name('edit2SETCS606113C2');
Route::put('/update2SETCS606113C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC2t3::class,'update2'])->name('update2SETCS606113C2');
Route::get('/pdfprintSETCS606113C2',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC2t3::class,'pdfprint'])->name('pdfprintSETCS606113C2');
Route::get('/printindexSETCS606113C2',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC2t3::class,'printindex'])->name('printindexSETCS606113C2');
Route::get('/printreversoSETCS606113C2',[App\Http\Controllers\Turno_3\Reversosetcs606111ControllerC2t3::class,'printreverso'])->name('printreversoSETCS606113C2');
Route::get('/pdfReversoSETCS606113C2',[App\Http\Controllers\Turno_3\Reversosetcs606111ControllerC2t3::class,'pdfReverso'])->name('pdfReversoSETCS606113C2');
//Rutas F7-SETCS-ELE-60-L1-06-3T3
Route::resource('F7-SETCS-ELE-60-L1-06-3T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC3T3');
Route::resource('reversoSETCS606113C3', 'App\Http\Controllers\Turno_3\Reversosetcs606111ControllerC3T3');
Route::get('/checkSETCS606113C3',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC3t3::class,'check'])->name('checkSETCS606113C3');
Route::put('/finalcheckSETCS606113C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC3t3::class,'finalcheck'])->name('finalcheckSETCS606113C3');
Route::get('/edit2SETCS606113C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC3t3::class,'edit2'])->name('edit2SETCS606113C3');
Route::put('/update2SETCS606113C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC3t3::class,'update2'])->name('update2SETCS606113C3');
Route::get('/pdfprintSETCS606113C3',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC3t3::class,'pdfprint'])->name('pdfprintSETCS606113C3');
Route::get('/printindexSETCS606113C3',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC3t3::class,'printindex'])->name('printindexSETCS606113C3');
Route::get('/printreversoSETCS606113C3',[App\Http\Controllers\Turno_3\Reversosetcs606111ControllerC3t3::class,'printreverso'])->name('printreversoSETCS606113C3');
Route::get('/pdfReversoSETCS606113C3',[App\Http\Controllers\Turno_3\Reversosetcs606111ControllerC3t3::class,'pdfReverso'])->name('pdfReversoSETCS606113C3');
//Rutas F7-SETCS-ELE-60-L1-06-4T3
Route::resource('F7-SETCS-ELE-60-L1-06-4T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC4T3');
Route::resource('reversoSETCS606113C4', 'App\Http\Controllers\Turno_3\Reversosetcs606111ControllerC4T3');
Route::get('/checkSETCS606113C4',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC4t3::class,'check'])->name('checkSETCS606113C4');
Route::put('/finalcheckSETCS606113C4/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC4t3::class,'finalcheck'])->name('finalcheckSETCS606113C4');
Route::get('/edit2SETCS606113C4/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC4t3::class,'edit2'])->name('edit2SETCS606113C4');
Route::put('/update2SETCS606113C4/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC4t3::class,'update2'])->name('update2SETCS606113C4');
Route::get('/pdfprintSETCS606113C4',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC4t3::class,'pdfprint'])->name('pdfprintSETCS606113C4');
Route::get('/printindexSETCS606113C4',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC4t3::class,'printindex'])->name('printindexSETCS606113C4');
Route::get('/printreversoSETCS606113C4',[App\Http\Controllers\Turno_3\Reversosetcs606111ControllerC4t3::class,'printreverso'])->name('printreversoSETCS606113C4');
Route::get('/pdfReversoSETCS606113C4',[App\Http\Controllers\Turno_3\Reversosetcs606111ControllerC4t3::class,'pdfReverso'])->name('pdfReversoSETCS606113C4');
//Rutas F7-SETCS-ELE-60-L1-06-5T3
Route::resource('F7-SETCS-ELE-60-L1-06-5T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC5T3');
Route::resource('reversoSETCS606113C5', 'App\Http\Controllers\Turno_3\Reversosetcs606111ControllerC5T3');
Route::get('/checkSETCS606113C5',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC5t3::class,'check'])->name('checkSETCS606113C5');
Route::put('/finalcheckSETCS606113C5/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC5t3::class,'finalcheck'])->name('finalcheckSETCS606113C5');
Route::get('/edit2SETCS606113C5/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC5t3::class,'edit2'])->name('edit2SETCS606113C5');
Route::put('/update2SETCS606113C5/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC5t3::class,'update2'])->name('update2SETCS606113C5');
Route::get('/pdfprintSETCS606113C5',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC5t3::class,'pdfprint'])->name('pdfprintSETCS606113C5');
Route::get('/printindexSETCS606113C5',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC5t3::class,'printindex'])->name('printindexSETCS606113C5');
Route::get('/printreversoSETCS606113C5',[App\Http\Controllers\Turno_3\Reversosetcs606111ControllerC5t3::class,'printreverso'])->name('printreversoSETCS606113C5');
Route::get('/pdfReversoSETCS606113C5',[App\Http\Controllers\Turno_3\Reversosetcs606111ControllerC5t3::class,'pdfReverso'])->name('pdfReversoSETCS606113C5');
//Rutas F7-SETCS-ELE-60-L1-06-6T3
Route::resource('F7-SETCS-ELE-60-L1-06-6T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC6T3');
Route::resource('reversoSETCS606113C6', 'App\Http\Controllers\Turno_3\Reversosetcs606111ControllerC6T3');
Route::get('/checkSETCS606113C6',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC6t3::class,'check'])->name('checkSETCS606113C6');
Route::put('/finalcheckSETCS606113C6/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC6t3::class,'finalcheck'])->name('finalcheckSETCS606113C6');
Route::get('/edit2SETCS606113C6/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC6t3::class,'edit2'])->name('edit2SETCS606113C6');
Route::put('/update2SETCS606113C6/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC6t3::class,'update2'])->name('update2SETCS606113C6');
Route::get('/pdfprintSETCS606113C6',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC6t3::class,'pdfprint'])->name('pdfprintSETCS606113C6');
Route::get('/printindexSETCS606113C6',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC6t3::class,'printindex'])->name('printindexSETCS606113C6');
Route::get('/printreversoSETCS606113C6',[App\Http\Controllers\Turno_3\Reversosetcs606111ControllerC6t3::class,'printreverso'])->name('printreversoSETCS606113C6');
Route::get('/pdfReversoSETCS606113C6',[App\Http\Controllers\Turno_3\Reversosetcs606111ControllerC6t3::class,'pdfReverso'])->name('pdfReversoSETCS606113C6');
//Rutas F7-SETCS-ELE-60-L1-06-7T3
Route::resource('F7-SETCS-ELE-60-L1-06-7T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC7T3');
Route::resource('reversoSETCS606113C7', 'App\Http\Controllers\Turno_3\Reversosetcs606111ControllerC7T3');
Route::get('/checkSETCS606113C7',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC7t3::class,'check'])->name('checkSETCS606113C7');
Route::put('/finalcheckSETCS606113C7/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC7t3::class,'finalcheck'])->name('finalcheckSETCS606113C7');
Route::get('/edit2SETCS606113C7/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC7t3::class,'edit2'])->name('edit2SETCS606113C7');
Route::put('/update2SETCS606113C7/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC7t3::class,'update2'])->name('update2SETCS606113C7');
Route::get('/pdfprintSETCS606113C7',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC7t3::class,'pdfprint'])->name('pdfprintSETCS606113C7');
Route::get('/printindexSETCS606113C7',[App\Http\Controllers\Turno_3\Datoshojasetcs606111ControllerC7t3::class,'printindex'])->name('printindexSETCS606113C7');
Route::get('/printreversoSETCS606113C7',[App\Http\Controllers\Turno_3\Reversosetcs606111ControllerC7t3::class,'printreverso'])->name('printreversoSETCS606113C7');
Route::get('/pdfReversoSETCS606113C7',[App\Http\Controllers\Turno_3\Reversosetcs606111ControllerC7t3::class,'pdfReverso'])->name('pdfReversoSETCS606113C7');
//Rutas F7-SETCS-ELE-60-L1-08-T3
Route::resource('F7-SETCS-ELE-60-L1-08-T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs6082ControllerT3');
Route::resource('reversoSETCS6083', 'App\Http\Controllers\Turno_3\Reversosetcs6082ControllerT3');
Route::get('/checkSETCS6083',[App\Http\Controllers\Turno_3\Datoshojasetcs6082Controllert3::class,'check'])->name('checkSETCS6083');
Route::put('/finalcheckSETCS6083/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs6082Controllert3::class,'finalcheck'])->name('finalcheckSETCS6083');
Route::get('/edit2SETCS6083/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs6082Controllert3::class,'edit2'])->name('edit2SETCS6083');
Route::put('/update2SETCS6083/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs6082Controllert3::class,'update2'])->name('update2SETCS6083');
Route::get('/pdfprintSETCS6083',[App\Http\Controllers\Turno_3\Datoshojasetcs6082Controllert3::class,'pdfprint'])->name('pdfprintSETCS6083');
Route::get('/printindexSETCS6083',[App\Http\Controllers\Turno_3\Datoshojasetcs6082Controllert3::class,'printindex'])->name('printindexSETCS6083');
Route::get('/printreversoSETCS6083',[App\Http\Controllers\Turno_3\Reversosetcs6082Controllert3::class,'printreverso'])->name('printreversoSETCS6083');
Route::get('/pdfReversoSETCS6083',[App\Http\Controllers\Turno_3\Reversosetcs6082Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS6083');
//Rutas F7-SETCS-ELE-100-L1-01-T3
Route::resource('F7-SETCS-ELE-100-L1-01-T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs100111ControllerT3');
Route::resource('reversoSETCS100113', 'App\Http\Controllers\Turno_3\Reversosetcs100111ControllerT3');
Route::get('/checkSETCS100113',[App\Http\Controllers\Turno_3\Datoshojasetcs100111Controllert3::class,'check'])->name('checkSETCS100113');
Route::put('/finalcheckSETCS100113/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs100111Controllert3::class,'finalcheck'])->name('finalcheckSETCS100113');
Route::get('/edit2SETCS100113/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs100111Controllert3::class,'edit2'])->name('edit2SETCS100113');
Route::put('/update2SETCS100113/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs100111Controllert3::class,'update2'])->name('update2SETCS100113');
Route::get('/pdfprintSETCS100113',[App\Http\Controllers\Turno_3\Datoshojasetcs100111Controllert3::class,'pdfprint'])->name('pdfprintSETCS100113');
Route::get('/printindexSETCS100113',[App\Http\Controllers\Turno_3\Datoshojasetcs100111Controllert3::class,'printindex'])->name('printindexSETCS100113');
Route::get('/printreversoSETCS100113',[App\Http\Controllers\Turno_3\Reversosetcs100111Controllert3::class,'printreverso'])->name('printreversoSETCS100113');
Route::get('/pdfReversoSETCS100113',[App\Http\Controllers\Turno_3\Reversosetcs100111Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS100113');
//Rutas F7-SETCS-ELE-100-L1-01-2T3
Route::resource('F7-SETCS-ELE-100-L1-01-2T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs100111ControllerC2T3');
Route::resource('reversoSETCS100113C2', 'App\Http\Controllers\Turno_3\Reversosetcs100111ControllerC2T3');
Route::get('/checkSETCS100113C2',[App\Http\Controllers\Turno_3\Datoshojasetcs100111ControllerC2t3::class,'check'])->name('checkSETCS100113C2');
Route::put('/finalcheckSETCS100113C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs100111ControllerC2t3::class,'finalcheck'])->name('finalcheckSETCS100113C2');
Route::get('/edit2SETCS100113C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs100111ControllerC2t3::class,'edit2'])->name('edit2SETCS100113C2');
Route::put('/update2SETCS100113C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs100111ControllerC2t3::class,'update2'])->name('update2SETCS100113C2');
Route::get('/pdfprintSETCS100113C2',[App\Http\Controllers\Turno_3\Datoshojasetcs100111ControllerC2t3::class,'pdfprint'])->name('pdfprintSETCS100113C2');
Route::get('/printindexSETCS100113C2',[App\Http\Controllers\Turno_3\Datoshojasetcs100111ControllerC2t3::class,'printindex'])->name('printindexSETCS100113C2');
Route::get('/printreversoSETCS100113C2',[App\Http\Controllers\Turno_3\Reversosetcs100111ControllerC2t3::class,'printreverso'])->name('printreversoSETCS100113C2');
Route::get('/pdfReversoSETCS100113C2',[App\Http\Controllers\Turno_3\Reversosetcs100111ControllerC2t3::class,'pdfReverso'])->name('pdfReversoSETCS100113C2');
//Rutas F7-SETCS-ELE-100-L1-01-3T3
Route::resource('F7-SETCS-ELE-100-L1-01-3T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs100111ControllerC3T3');
Route::resource('reversoSETCS100113C3', 'App\Http\Controllers\Turno_3\Reversosetcs100111ControllerC3T3');
Route::get('/checkSETCS100113C3',[App\Http\Controllers\Turno_3\Datoshojasetcs100111ControllerC3t3::class,'check'])->name('checkSETCS100113C3');
Route::put('/finalcheckSETCS100113C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs100111ControllerC3t3::class,'finalcheck'])->name('finalcheckSETCS100113C3');
Route::get('/edit2SETCS100113C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs100111ControllerC3t3::class,'edit2'])->name('edit2SETCS100113C3');
Route::put('/update2SETCS100113C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs100111ControllerC3t3::class,'update2'])->name('update2SETCS100113C3');
Route::get('/pdfprintSETCS100113C3',[App\Http\Controllers\Turno_3\Datoshojasetcs100111ControllerC3t3::class,'pdfprint'])->name('pdfprintSETCS100113C3');
Route::get('/printindexSETCS100113C3',[App\Http\Controllers\Turno_3\Datoshojasetcs100111ControllerC3t3::class,'printindex'])->name('printindexSETCS100113C3');
Route::get('/printreversoSETCS100113C3',[App\Http\Controllers\Turno_3\Reversosetcs100111ControllerC3t3::class,'printreverso'])->name('printreversoSETCS100113C3');
Route::get('/pdfReversoSETCS100113C3',[App\Http\Controllers\Turno_3\Reversosetcs100111ControllerC3t3::class,'pdfReverso'])->name('pdfReversoSETCS100113C3');
//Rutas F7-SETCS-ELE-100-L1-02-T3
Route::resource('F7-SETCS-ELE-100-L1-02-T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs10021ControllerT3');
Route::resource('reversoSETCS10023', 'App\Http\Controllers\Turno_3\Reversosetcs10021ControllerT3');
Route::get('/checkSETCS10023',[App\Http\Controllers\Turno_3\Datoshojasetcs10021Controllert3::class,'check'])->name('checkSETCS10023');
Route::put('/finalcheckSETCS10023/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs10021Controllert3::class,'finalcheck'])->name('finalcheckSETCS10023');
Route::get('/edit2SETCS10023/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs10021Controllert3::class,'edit2'])->name('edit2SETCS10023');
Route::put('/update2SETCS10023/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs10021Controllert3::class,'update2'])->name('update2SETCS10023');
Route::get('/pdfprintSETCS10023',[App\Http\Controllers\Turno_3\Datoshojasetcs10021Controllert3::class,'pdfprint'])->name('pdfprintSETCS10023');
Route::get('/printindexSETCS10023',[App\Http\Controllers\Turno_3\Datoshojasetcs10021Controllert3::class,'printindex'])->name('printindexSETCS10023');
Route::get('/printreversoSETCS10023',[App\Http\Controllers\Turno_3\Reversosetcs10021Controllert3::class,'printreverso'])->name('printreversoSETCS10023');
Route::get('/pdfReversoSETCS10023',[App\Http\Controllers\Turno_3\Reversosetcs10021Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS10023');
//Rutas F7-SETCS-ELE-100-L1-03-T3
Route::resource('F7-SETCS-ELE-100-L1-03-T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs10031ControllerT3');
Route::resource('reversoSETCS10033', 'App\Http\Controllers\Turno_3\Reversosetcs10031ControllerT3');
Route::get('/checkSETCS10033',[App\Http\Controllers\Turno_3\Datoshojasetcs10031Controllert3::class,'check'])->name('checkSETCS10033');
Route::put('/finalcheckSETCS10033/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs10031Controllert3::class,'finalcheck'])->name('finalcheckSETCS10033');
Route::get('/edit2SETCS10033/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs10031Controllert3::class,'edit2'])->name('edit2SETCS10033');
Route::put('/update2SETCS10033/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs10031Controllert3::class,'update2'])->name('update2SETCS10033');
Route::get('/pdfprintSETCS10033',[App\Http\Controllers\Turno_3\Datoshojasetcs10031Controllert3::class,'pdfprint'])->name('pdfprintSETCS10033');
Route::get('/printindexSETCS10033',[App\Http\Controllers\Turno_3\Datoshojasetcs10031Controllert3::class,'printindex'])->name('printindexSETCS10033');
Route::get('/printreversoSETCS10033',[App\Http\Controllers\Turno_3\Reversosetcs10031Controllert3::class,'printreverso'])->name('printreversoSETCS10033');
Route::get('/pdfReversoSETCS10033',[App\Http\Controllers\Turno_3\Reversosetcs10031Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS10033');
//Rutas F7-SETCS-ELE-103-L1-01-T3
Route::resource('F7-SETCS-ELE-103-L1-01-T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs10311ControllerT3');
Route::resource('reversoSETCS10313', 'App\Http\Controllers\Turno_3\Reversosetcs10311ControllerT3');
Route::get('/checkSETCS10313',[App\Http\Controllers\Turno_3\Datoshojasetcs10311Controllert3::class,'check'])->name('checkSETCS10313');
Route::put('/finalcheckSETCS10313/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs10311Controllert3::class,'finalcheck'])->name('finalcheckSETCS10313');
Route::get('/edit2SETCS10313/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs10311Controllert3::class,'edit2'])->name('edit2SETCS10313');
Route::put('/update2SETCS10313/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs10311Controllert3::class,'update2'])->name('update2SETCS10313');
Route::get('/pdfprintSETCS10313',[App\Http\Controllers\Turno_3\Datoshojasetcs10311Controllert3::class,'pdfprint'])->name('pdfprintSETCS10313');
Route::get('/printindexSETCS10313',[App\Http\Controllers\Turno_3\Datoshojasetcs10311Controllert3::class,'printindex'])->name('printindexSETCS10313');
Route::get('/printreversoSETCS10313',[App\Http\Controllers\Turno_3\Reversosetcs10311Controllert3::class,'printreverso'])->name('printreversoSETCS10313');
Route::get('/pdfReversoSETCS10313',[App\Http\Controllers\Turno_3\Reversosetcs10311Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS10313');
//Rutas F7-SETCS-ELE-107-L1-01-T3
Route::resource('F7-SETCS-ELE-107-L1-01-T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs107111ControllerT3');
Route::resource('reversoSETCS107113', 'App\Http\Controllers\Turno_3\Reversosetcs107111ControllerT3');
Route::get('/checkSETCS107113',[App\Http\Controllers\Turno_3\Datoshojasetcs107111Controllert3::class,'check'])->name('checkSETCS107113');
Route::put('/finalcheckSETCS107113/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs107111Controllert3::class,'finalcheck'])->name('finalcheckSETCS107113');
Route::get('/edit2SETCS107113/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs107111Controllert3::class,'edit2'])->name('edit2SETCS107113');
Route::put('/update2SETCS107113/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs107111Controllert3::class,'update2'])->name('update2SETCS107113');
Route::get('/pdfprintSETCS107113',[App\Http\Controllers\Turno_3\Datoshojasetcs107111Controllert3::class,'pdfprint'])->name('pdfprintSETCS107113');
Route::get('/printindexSETCS107113',[App\Http\Controllers\Turno_3\Datoshojasetcs107111Controllert3::class,'printindex'])->name('printindexSETCS107113');
Route::get('/printreversoSETCS107113',[App\Http\Controllers\Turno_3\Reversosetcs107111Controllert3::class,'printreverso'])->name('printreversoSETCS107113');
Route::get('/pdfReversoSETCS107113',[App\Http\Controllers\Turno_3\Reversosetcs107111Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS107113');
//Rutas F7-SETCS-ELE-107-L1-01-2T3
Route::resource('F7-SETCS-ELE-107-L1-01-2T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs107111ControllerC2T3');
Route::resource('reversoSETCS107113C2', 'App\Http\Controllers\Turno_3\Reversosetcs107111ControllerC2T3');
Route::get('/checkSETCS107113C2',[App\Http\Controllers\Turno_3\Datoshojasetcs107111ControllerC2t3::class,'check'])->name('checkSETCS107113C2');
Route::put('/finalcheckSETCS107113C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs107111ControllerC2t3::class,'finalcheck'])->name('finalcheckSETCS107113C2');
Route::get('/edit2SETCS107113C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs107111ControllerC2t3::class,'edit2'])->name('edit2SETCS107113C2');
Route::put('/update2SETCS107113C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs107111ControllerC2t3::class,'update2'])->name('update2SETCS107113C2');
Route::get('/pdfprintSETCS107113C2',[App\Http\Controllers\Turno_3\Datoshojasetcs107111ControllerC2t3::class,'pdfprint'])->name('pdfprintSETCS107113C2');
Route::get('/printindexSETCS107113C2',[App\Http\Controllers\Turno_3\Datoshojasetcs107111ControllerC2t3::class,'printindex'])->name('printindexSETCS107113C2');
Route::get('/printreversoSETCS107113C2',[App\Http\Controllers\Turno_3\Reversosetcs107111ControllerC2t3::class,'printreverso'])->name('printreversoSETCS107113C2');
Route::get('/pdfReversoSETCS107113C2',[App\Http\Controllers\Turno_3\Reversosetcs107111ControllerC2t3::class,'pdfReverso'])->name('pdfReversoSETCS107113C2');
//Rutas F7-SETCS-ELE-107-L1-01-3T3
Route::resource('F7-SETCS-ELE-107-L1-01-3T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs107111ControllerC3T3');
Route::resource('reversoSETCS107113C3', 'App\Http\Controllers\Turno_3\Reversosetcs107111ControllerC3T3');
Route::get('/checkSETCS107113C3',[App\Http\Controllers\Turno_3\Datoshojasetcs107111ControllerC3t3::class,'check'])->name('checkSETCS107113C3');
Route::put('/finalcheckSETCS107113C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs107111ControllerC3t3::class,'finalcheck'])->name('finalcheckSETCS107113C3');
Route::get('/edit2SETCS107113C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs107111ControllerC3t3::class,'edit2'])->name('edit2SETCS107113C3');
Route::put('/update2SETCS107113C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs107111ControllerC3t3::class,'update2'])->name('update2SETCS107113C3');
Route::get('/pdfprintSETCS107113C3',[App\Http\Controllers\Turno_3\Datoshojasetcs107111ControllerC3t3::class,'pdfprint'])->name('pdfprintSETCS107113C3');
Route::get('/printindexSETCS107113C3',[App\Http\Controllers\Turno_3\Datoshojasetcs107111ControllerC3t3::class,'printindex'])->name('printindexSETCS107113C3');
Route::get('/printreversoSETCS107113C3',[App\Http\Controllers\Turno_3\Reversosetcs107111ControllerC3t3::class,'printreverso'])->name('printreversoSETCS107113C3');
Route::get('/pdfReversoSETCS107113C3',[App\Http\Controllers\Turno_3\Reversosetcs107111ControllerC3t3::class,'pdfReverso'])->name('pdfReversoSETCS107113C3');
//Rutas F7-SETCS-ELE-107-L1-02-T3
Route::resource('F7-SETCS-ELE-107-L1-02-T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs10721ControllerT3');
Route::resource('reversoSETCS10723', 'App\Http\Controllers\Turno_3\Reversosetcs10721ControllerT3');
Route::get('/checkSETCS10723',[App\Http\Controllers\Turno_3\Datoshojasetcs10721Controllert3::class,'check'])->name('checkSETCS10723');
Route::put('/finalcheckSETCS10723/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs10721Controllert3::class,'finalcheck'])->name('finalcheckSETCS10723');
Route::get('/edit2SETCS10723/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs10721Controllert3::class,'edit2'])->name('edit2SETCS10723');
Route::put('/update2SETCS10723/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs10721Controllert3::class,'update2'])->name('update2SETCS10723');
Route::get('/pdfprintSETCS10723',[App\Http\Controllers\Turno_3\Datoshojasetcs10721Controllert3::class,'pdfprint'])->name('pdfprintSETCS10723');
Route::get('/printindexSETCS10723',[App\Http\Controllers\Turno_3\Datoshojasetcs10721Controllert3::class,'printindex'])->name('printindexSETCS10723');
Route::get('/printreversoSETCS10723',[App\Http\Controllers\Turno_3\Reversosetcs10721Controllert3::class,'printreverso'])->name('printreversoSETCS10723');
Route::get('/pdfReversoSETCS10723',[App\Http\Controllers\Turno_3\Reversosetcs10721Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS10723');
//Rutas F7-SETCS-ELE-120-L1-01-T3
Route::resource('F7-SETCS-ELE-120-L1-01-T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerT3');
Route::resource('reversoSETCS120113', 'App\Http\Controllers\Turno_3\Reversosetcs120111ControllerT3');
Route::get('/checkSETCS120113',[App\Http\Controllers\Turno_3\Datoshojasetcs120111Controllert3::class,'check'])->name('checkSETCS120113');
Route::put('/finalcheckSETCS120113/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs120111Controllert3::class,'finalcheck'])->name('finalcheckSETCS120113');
Route::get('/edit2SETCS120113/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs120111Controllert3::class,'edit2'])->name('edit2SETCS120113');
Route::put('/update2SETCS120113/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs120111Controllert3::class,'update2'])->name('update2SETCS120113');
Route::get('/pdfprintSETCS120113',[App\Http\Controllers\Turno_3\Datoshojasetcs120111Controllert3::class,'pdfprint'])->name('pdfprintSETCS120113');
Route::get('/printindexSETCS120113',[App\Http\Controllers\Turno_3\Datoshojasetcs120111Controllert3::class,'printindex'])->name('printindexSETCS120113');
Route::get('/printreversoSETCS120113',[App\Http\Controllers\Turno_3\Reversosetcs120111Controllert3::class,'printreverso'])->name('printreversoSETCS120113');
Route::get('/pdfReversoSETCS120113',[App\Http\Controllers\Turno_3\Reversosetcs120111Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS120113');
//Rutas F7-SETCS-ELE-120-L1-01-2T3
Route::resource('F7-SETCS-ELE-120-L1-01-2T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC2T3');
Route::resource('reversoSETCS120113C2', 'App\Http\Controllers\Turno_3\Reversosetcs120111ControllerC2T3');
Route::get('/checkSETCS120113C2',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC2t3::class,'check'])->name('checkSETCS120113C2');
Route::put('/finalcheckSETCS120113C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC2t3::class,'finalcheck'])->name('finalcheckSETCS120113C2');
Route::get('/edit2SETCS120113C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC2t3::class,'edit2'])->name('edit2SETCS120113C2');
Route::put('/update2SETCS120113C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC2t3::class,'update2'])->name('update2SETCS120113C2');
Route::get('/pdfprintSETCS120113C2',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC2t3::class,'pdfprint'])->name('pdfprintSETCS120113C2');
Route::get('/printindexSETCS120113C2',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC2t3::class,'printindex'])->name('printindexSETCS120113C2');
Route::get('/printreversoSETCS120113C2',[App\Http\Controllers\Turno_3\Reversosetcs120111ControllerC2t3::class,'printreverso'])->name('printreversoSETCS120113C2');
Route::get('/pdfReversoSETCS120113C2',[App\Http\Controllers\Turno_3\Reversosetcs120111ControllerC2t3::class,'pdfReverso'])->name('pdfReversoSETCS120113C2');
//Rutas F7-SETCS-ELE-120-L1-01-3T3
Route::resource('F7-SETCS-ELE-120-L1-01-3T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC3T3');
Route::resource('reversoSETCS120113C3', 'App\Http\Controllers\Turno_3\Reversosetcs120111ControllerC3T3');
Route::get('/checkSETCS120113C3',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC3t3::class,'check'])->name('checkSETCS120113C3');
Route::put('/finalcheckSETCS120113C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC3t3::class,'finalcheck'])->name('finalcheckSETCS120113C3');
Route::get('/edit2SETCS120113C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC3t3::class,'edit2'])->name('edit2SETCS120113C3');
Route::put('/update2SETCS120113C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC3t3::class,'update2'])->name('update2SETCS120113C3');
Route::get('/pdfprintSETCS120113C3',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC3t3::class,'pdfprint'])->name('pdfprintSETCS120113C3');
Route::get('/printindexSETCS120113C3',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC3t3::class,'printindex'])->name('printindexSETCS120113C3');
Route::get('/printreversoSETCS120113C3',[App\Http\Controllers\Turno_3\Reversosetcs120111ControllerC3t3::class,'printreverso'])->name('printreversoSETCS120113C3');
Route::get('/pdfReversoSETCS120113C3',[App\Http\Controllers\Turno_3\Reversosetcs120111ControllerC3t3::class,'pdfReverso'])->name('pdfReversoSETCS120113C3');
//Rutas F7-SETCS-ELE-120-L1-01-4T3
Route::resource('F7-SETCS-ELE-120-L1-01-4T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC4T3');
Route::resource('reversoSETCS120113C4', 'App\Http\Controllers\Turno_3\Reversosetcs120111ControllerC4T3');
Route::get('/checkSETCS120113C4',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC4t3::class,'check'])->name('checkSETCS120113C4');
Route::put('/finalcheckSETCS120113C4/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC4t3::class,'finalcheck'])->name('finalcheckSETCS120113C4');
Route::get('/edit2SETCS120113C4/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC4t3::class,'edit2'])->name('edit2SETCS120113C4');
Route::put('/update2SETCS120113C4/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC4t3::class,'update2'])->name('update2SETCS120113C4');
Route::get('/pdfprintSETCS120113C4',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC4t3::class,'pdfprint'])->name('pdfprintSETCS120113C4');
Route::get('/printindexSETCS120113C4',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC4t3::class,'printindex'])->name('printindexSETCS120113C4');
Route::get('/printreversoSETCS120113C4',[App\Http\Controllers\Turno_3\Reversosetcs120111ControllerC4t3::class,'printreverso'])->name('printreversoSETCS120113C4');
Route::get('/pdfReversoSETCS120113C4',[App\Http\Controllers\Turno_3\Reversosetcs120111ControllerC4t3::class,'pdfReverso'])->name('pdfReversoSETCS120113C4');
//Rutas F7-SETCS-ELE-120-L1-01-5T3
Route::resource('F7-SETCS-ELE-120-L1-01-5T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC5T3');
Route::resource('reversoSETCS120113C5', 'App\Http\Controllers\Turno_3\Reversosetcs120111ControllerC5T3');
Route::get('/checkSETCS120113C5',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC5t3::class,'check'])->name('checkSETCS120113C5');
Route::put('/finalcheckSETCS120113C5/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC5t3::class,'finalcheck'])->name('finalcheckSETCS120113C5');
Route::get('/edit2SETCS120113C5/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC5t3::class,'edit2'])->name('edit2SETCS120113C5');
Route::put('/update2SETCS120113C5/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC5t3::class,'update2'])->name('update2SETCS120113C5');
Route::get('/pdfprintSETCS120113C5',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC5t3::class,'pdfprint'])->name('pdfprintSETCS120113C5');
Route::get('/printindexSETCS120113C5',[App\Http\Controllers\Turno_3\Datoshojasetcs120111ControllerC5t3::class,'printindex'])->name('printindexSETCS120113C5');
Route::get('/printreversoSETCS120113C5',[App\Http\Controllers\Turno_3\Reversosetcs120111ControllerC5t3::class,'printreverso'])->name('printreversoSETCS120113C5');
Route::get('/pdfReversoSETCS120113C5',[App\Http\Controllers\Turno_3\Reversosetcs120111ControllerC5t3::class,'pdfReverso'])->name('pdfReversoSETCS120113C5');
//Rutas F7-SETCS-ELE-140-L1-01-T3
Route::resource('F7-SETCS-ELE-140-L1-01-T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs140111ControllerT3');
Route::resource('reversoSETCS140113', 'App\Http\Controllers\Turno_3\Reversosetcs140111ControllerT3');
Route::get('/checkSETCS140113',[App\Http\Controllers\Turno_3\Datoshojasetcs140111Controllert3::class,'check'])->name('checkSETCS140113');
Route::put('/finalcheckSETCS140113/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs140111Controllert3::class,'finalcheck'])->name('finalcheckSETCS140113');
Route::get('/edit2SETCS140113/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs140111Controllert3::class,'edit2'])->name('edit2SETCS140113');
Route::put('/update2SETCS140113/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs140111Controllert3::class,'update2'])->name('update2SETCS140113');
Route::get('/pdfprintSETCS140113',[App\Http\Controllers\Turno_3\Datoshojasetcs140111Controllert3::class,'pdfprint'])->name('pdfprintSETCS140113');
Route::get('/printindexSETCS140113',[App\Http\Controllers\Turno_3\Datoshojasetcs1440111Controllert3::class,'printindex'])->name('printindexSETCS140113');
Route::get('/printreversoSETCS140113',[App\Http\Controllers\Turno_3\Reversosetcs140111Controllert3::class,'printreverso'])->name('printreversoSETCS140113');
Route::get('/pdfReversoSETCS140113',[App\Http\Controllers\Turno_3\Reversosetcs140111Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS140113');
//Rutas F7-SETCS-ELE-140-L1-01-2T3
Route::resource('F7-SETCS-ELE-140-L1-01-2T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs140111ControllerC2T3');
Route::resource('reversoSETCS140113C2', 'App\Http\Controllers\Turno_3\Reversosetcs140111ControllerC2T3');
Route::get('/checkSETCS140113C2',[App\Http\Controllers\Turno_3\Datoshojasetcs140111ControllerC2t3::class,'check'])->name('checkSETCS140113C2');
Route::put('/finalcheckSETCS140113C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs140111ControllerC2t3::class,'finalcheck'])->name('finalcheckSETCS140113C2');
Route::get('/edit2SETCS140113C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs140111ControllerC2t3::class,'edit2'])->name('edit2SETCS140113C2');
Route::put('/update2SETCS140113C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs140111ControllerC2t3::class,'update2'])->name('update2SETCS140113C2');
Route::get('/pdfprintSETCS140113C2',[App\Http\Controllers\Turno_3\Datoshojasetcs140111ControllerC2t3::class,'pdfprint'])->name('pdfprintSETCS140113C2');
Route::get('/printindexSETCS140113C2',[App\Http\Controllers\Turno_3\Datoshojasetcs1440111ControllerC2t3::class,'printindex'])->name('printindexSETCS140113C2');
Route::get('/printreversoSETCS140113C2',[App\Http\Controllers\Turno_3\Reversosetcs140111ControllerC2t3::class,'printreverso'])->name('printreversoSETCS140113C2');
Route::get('/pdfReversoSETCS140113C2',[App\Http\Controllers\Turno_3\Reversosetcs140111ControllerC2t3::class,'pdfReverso'])->name('pdfReversoSETCS140113C2');
//Rutas F7-SETCS-ELE-140-L1-01-3T3
Route::resource('F7-SETCS-ELE-140-L1-01-3T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs140111ControllerC3T3');
Route::resource('reversoSETCS140113C3', 'App\Http\Controllers\Turno_3\Reversosetcs140111ControllerC3T3');
Route::get('/checkSETCS140113C3',[App\Http\Controllers\Turno_3\Datoshojasetcs140111ControllerC3t3::class,'check'])->name('checkSETCS140113C3');
Route::put('/finalcheckSETCS140113C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs140111ControllerC3t3::class,'finalcheck'])->name('finalcheckSETCS140113C3');
Route::get('/edit2SETCS140113C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs140111ControllerC3t3::class,'edit2'])->name('edit2SETCS140113C3');
Route::put('/update2SETCS140113C3/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs140111ControllerC3t3::class,'update2'])->name('update2SETCS140113C3');
Route::get('/pdfprintSETCS140113C3',[App\Http\Controllers\Turno_3\Datoshojasetcs140111ControllerC3t3::class,'pdfprint'])->name('pdfprintSETCS140113C3');
Route::get('/printindexSETCS140113C3',[App\Http\Controllers\Turno_3\Datoshojasetcs1440111ControllerC3t3::class,'printindex'])->name('printindexSETCS140113C3');
Route::get('/printreversoSETCS140113C3',[App\Http\Controllers\Turno_3\Reversosetcs140111ControllerC3t3::class,'printreverso'])->name('printreversoSETCS140113C3');
Route::get('/pdfReversoSETCS140113C3',[App\Http\Controllers\Turno_3\Reversosetcs140111ControllerC3t3::class,'pdfReverso'])->name('pdfReversoSETCS140113C3');
//Rutas F7-SETCS-ELE-160-L1-01-T3
Route::resource('F7-SETCS-ELE-160-L1-01-T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs16011ControllerT3');
Route::resource('reversoSETCS16013', 'App\Http\Controllers\Turno_3\Reversosetcs16011ControllerT3');
Route::get('/checkSETCS16013',[App\Http\Controllers\Turno_3\Datoshojasetcs16011Controllert3::class,'check'])->name('checkSETCS16013');
Route::put('/finalcheckSETCS16013/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs16011Controllert3::class,'finalcheck'])->name('finalcheckSETCS16013');
Route::get('/edit2SETCS16013/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs16011Controllert3::class,'edit2'])->name('edit2SETCS16013');
Route::put('/update2SETCS16013/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs16011Controllert3::class,'update2'])->name('update2SETCS16013');
Route::get('/pdfprintSETCS16013',[App\Http\Controllers\Turno_3\Datoshojasetcs16011Controllert3::class,'pdfprint'])->name('pdfprintSETCS16013');
Route::get('/printindexSETCS16013',[App\Http\Controllers\Turno_3\Datoshojasetcs16011Controllert3::class,'printindex'])->name('printindexSETCS16013');
Route::get('/printreversoSETCS16013',[App\Http\Controllers\Turno_3\Reversosetcs16011Controllert3::class,'printreverso'])->name('printreversoSETCS16013');
Route::get('/pdfReversoSETCS16013',[App\Http\Controllers\Turno_3\Reversosetcs16011Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS16013');
//Rutas F7-SETCS-ELE-160-L1-01-2T3
Route::resource('F7-SETCS-ELE-160-L1-01-2T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs16011ControllerC2T3');
Route::resource('reversoSETCS16013C2', 'App\Http\Controllers\Turno_3\Reversosetcs16011ControllerC2T3');
Route::get('/checkSETCS16013C2',[App\Http\Controllers\Turno_3\Datoshojasetcs16011ControllerC2t3::class,'check'])->name('checkSETCS16013C2');
Route::put('/finalcheckSETCS16013C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs16011ControllerC2t3::class,'finalcheck'])->name('finalcheckSETCS16013C2');
Route::get('/edit2SETCS16013C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs16011ControllerC2t3::class,'edit2'])->name('edit2SETCS16013C2');
Route::put('/update2SETCS16013C2/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs16011ControllerC2t3::class,'update2'])->name('update2SETCS16013C2');
Route::get('/pdfprintSETCS16013C2',[App\Http\Controllers\Turno_3\Datoshojasetcs16011ControllerC2t3::class,'pdfprint'])->name('pdfprintSETCS16013C2');
Route::get('/printindexSETCS16013C2',[App\Http\Controllers\Turno_3\Datoshojasetcs16011ControllerC2t3::class,'printindex'])->name('printindexSETCS16013C2');
Route::get('/printreversoSETCS16013C2',[App\Http\Controllers\Turno_3\Reversosetcs16011ControllerC2t3::class,'printreverso'])->name('printreversoSETCS16013C2');
Route::get('/pdfReversoSETCS16013C2',[App\Http\Controllers\Turno_3\Reversosetcs16011ControllerC2t3::class,'pdfReverso'])->name('pdfReversoSETCS16013C2');
//Rutas F7-SETCS-ELE-180-L1-01-T2
Route::resource('F7-SETCS-ELE-180-L1-01-T3', 'App\Http\Controllers\Turno_3\Datoshojasetcs18011ControllerT3');
Route::resource('reversoSETCS18013', 'App\Http\Controllers\Turno_3\Reversosetcs18011ControllerT3');
Route::get('/checkSETCS18013',[App\Http\Controllers\Turno_3\Datoshojasetcs18011Controllert3::class,'check'])->name('checkSETCS18013');
Route::put('/finalcheckSETCS18013/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs18011Controllert3::class,'finalcheck'])->name('finalcheckSETCS18013');
Route::get('/edit2SETCS18013/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs18011Controllert3::class,'edit2'])->name('edit2SETCS18013');
Route::put('/update2SETCS18013/{id}',[App\Http\Controllers\Turno_3\Datoshojasetcs18011Controllert3::class,'update2'])->name('update2SETCS18013');
Route::get('/pdfprintSETCS18013',[App\Http\Controllers\Turno_3\Datoshojasetcs18011Controllert3::class,'pdfprint'])->name('pdfprintSETCS18013');
Route::get('/printindexSETCS18013',[App\Http\Controllers\Turno_3\Datoshojasetcs18011Controllert3::class,'printindex'])->name('printindexSETCS18013');
Route::get('/printreversoSETCS18013',[App\Http\Controllers\Turno_3\Reversosetcs18011Controllert3::class,'printreverso'])->name('printreversoSETCS18013');
Route::get('/pdfReversoSETCS18013',[App\Http\Controllers\Turno_3\Reversosetcs18011Controllert3::class,'pdfReverso'])->name('pdfReversoSETCS18013');
//Rutas F7-TPM-ELE-60-L1-01
Route::resource('F7-TPM-ELE-60-L1-01-1T3', 'App\Http\Controllers\Turno_3\Datoshojastpm6011ControllerT3');
Route::resource('reversoTPM6011T3', 'App\Http\Controllers\Turno_3\Reversotpm6011ControllerT3');
Route::get('/checkTPM6011T3',[App\Http\Controllers\Turno_3\Datoshojastpm6011ControllerT3::class,'check'])->name('checkTPM6011T3');
Route::put('/finalcheckTPM6011T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm6011ControllerT3::class,'finalcheck'])->name('finalcheckTPM6011T3');
Route::get('/edit2TPM6011T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm6011ControllerT3::class,'edit2'])->name('edit2TPM6011T3');
Route::put('/update2TPM6011T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm6011ControllerT3::class,'update2'])->name('update2TPM6011T3');
Route::get('/pdfprintTPM6011T3',[App\Http\Controllers\Turno_3\Datoshojastpm6011ControllerT3::class,'pdfprint'])->name('pdfprintTPM6011T3');
Route::get('/printindexTPM6011T3',[App\Http\Controllers\Turno_3\Datoshojastpm6011ControllerT3::class,'printindex'])->name('printindexTPM6011T3');
Route::get('/printreversoTPM6011T3',[App\Http\Controllers\Turno_3\Reversotpm6011ControllerT3::class,'printreverso'])->name('printreversoTPM6011T3');
Route::get('/pdfReversoTPM6011T3',[App\Http\Controllers\Turno_3\Reversotpm6011ControllerT3::class,'pdfReverso'])->name('pdfReversoTPM6011T3');
//Rutas F7-TPM-ELE-60-L1-01-2
Route::resource('F7-TPM-ELE-60-L1-01-2T3', 'App\Http\Controllers\Turno_3\Datoshojastpm6012ControllerT3');
Route::resource('reversoTPM6012T3', 'App\Http\Controllers\Turno_3\Reversotpm6012ControllerT3');
Route::get('/checkTPM6012T3',[App\Http\Controllers\Turno_3\Datoshojastpm6012ControllerT3::class,'check'])->name('checkTPM6012T3');
Route::put('/finalcheckTPM6012T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm6012ControllerT3::class,'finalcheck'])->name('finalcheckTPM6012T3');
Route::get('/edit2TPM6012T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm6012ControllerT3::class,'edit2'])->name('edit2TPM6012T3');
Route::put('/update2TPM6012T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm6012ControllerT3::class,'update2'])->name('update2TPM6012T3');
Route::get('/pdfprintTPM6012T3',[App\Http\Controllers\Turno_3\Datoshojastpm6012ControllerT3::class,'pdfprint'])->name('pdfprintTPM6012T3');
Route::get('/printindexTPM6012T3',[App\Http\Controllers\Turno_3\Datoshojastpm6012ControllerT3::class,'printindex'])->name('printindexTPM6012T3');
Route::get('/printreversoTPM6012T3',[App\Http\Controllers\Turno_3\Reversotpm6012ControllerT3::class,'printreverso'])->name('printreversoTPM6012T3');
Route::get('/pdfReversoTPM6012T3',[App\Http\Controllers\Turno_3\Reversotpm6012ControllerT3::class,'pdfReverso'])->name('pdfReversoTPM6012T3');
//Rutas F7-TPM-ELE-60-L1-01-3
Route::resource('F7-TPM-ELE-60-L1-01-3T3', 'App\Http\Controllers\Turno_3\Datoshojastpm6013ControllerT3');
Route::resource('reversoTPM6013T3', 'App\Http\Controllers\Turno_3\Reversotpm6013ControllerT3');
Route::get('/checkTPM6013T3',[App\Http\Controllers\Turno_3\Datoshojastpm6013ControllerT3::class,'check'])->name('checkTPM6013T3');
Route::put('/finalcheckTPM6013T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm6013ControllerT3::class,'finalcheck'])->name('finalcheckTPM6013T3');
Route::get('/edit2TPM6013T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm6013ControllerT3::class,'edit2'])->name('edit2TPM6013T3');
Route::put('/update2TPM6013T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm6013ControllerT3::class,'update2'])->name('update2TPM6013T3');
Route::get('/pdfprintTPM6013T3',[App\Http\Controllers\Turno_3\Datoshojastpm6013ControllerT3::class,'pdfprint'])->name('pdfprintTPM6013T3');
Route::get('/printindexTPM6013T3',[App\Http\Controllers\Turno_3\Datoshojastpm6013ControllerT3::class,'printindex'])->name('printindexTPM6013T3');
Route::get('/printreversoTPM6013T3',[App\Http\Controllers\Turno_3\Reversotpm6013ControllerT3::class,'printreverso'])->name('printreversoTPM6013T3');
Route::get('/pdfReversoTPM6013T3',[App\Http\Controllers\Turno_3\Reversotpm6013ControllerT3::class,'pdfReverso'])->name('pdfReversoTPM6013T3');
//Rutas F7-TPM-ELE-60-L1-01-4
Route::resource('F7-TPM-ELE-60-L1-01-4T3', 'App\Http\Controllers\Turno_3\Datoshojastpm6014ControllerT3');
Route::resource('reversoTPM6014T3', 'App\Http\Controllers\Turno_3\Reversotpm6014ControllerT3');
Route::get('/checkTPM6014T3',[App\Http\Controllers\Turno_3\Datoshojastpm6014ControllerT3::class,'check'])->name('checkTPM6014T3');
Route::put('/finalcheckTPM6014T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm6014ControllerT3::class,'finalcheck'])->name('finalcheckTPM6014T3');
Route::get('/edit2TPM6014T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm6014ControllerT3::class,'edit2'])->name('edit2TPM6014T3');
Route::put('/update2TPM6014T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm6014ControllerT3::class,'update2'])->name('update2TPM6014T3');
Route::get('/pdfprintTPM6014T3',[App\Http\Controllers\Turno_3\Datoshojastpm6014ControllerT3::class,'pdfprint'])->name('pdfprintTPM6014T3');
Route::get('/printindexTPM6014T3',[App\Http\Controllers\Turno_3\Datoshojastpm6014ControllerT3::class,'printindex'])->name('printindexTPM6014T3');
Route::get('/printreversoTPM6014T3',[App\Http\Controllers\Turno_3\Reversotpm6014ControllerT3::class,'printreverso'])->name('printreversoTPM6014T3');
Route::get('/pdfReversoTPM6014T3',[App\Http\Controllers\Turno_3\Reversotpm6014ControllerT3::class,'pdfReverso'])->name('pdfReversoTPM6014T3');
//Rutas F7-TPM-ELE-60-L1-01-5
Route::resource('F7-TPM-ELE-60-L1-01-5T3', 'App\Http\Controllers\Turno_3\Datoshojastpm6015ControllerT3');
Route::resource('reversoTPM6015T3', 'App\Http\Controllers\Turno_3\Reversotpm6015ControllerT3');
Route::get('/checkTPM6015T3',[App\Http\Controllers\Turno_3\Datoshojastpm6015ControllerT3::class,'check'])->name('checkTPM6015T3');
Route::put('/finalcheckTPM6015T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm6015ControllerT3::class,'finalcheck'])->name('finalcheckTPM6015T3');
Route::get('/edit2TPM6015T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm6015ControllerT3::class,'edit2'])->name('edit2TPM6015T3');
Route::put('/update2TPM6015T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm6015ControllerT3::class,'update2'])->name('update2TPM6015T3');
Route::get('/pdfprintTPM6015T3',[App\Http\Controllers\Turno_3\Datoshojastpm6015ControllerT3::class,'pdfprint'])->name('pdfprintTPM6015T3');
Route::get('/printindexTPM6015T3',[App\Http\Controllers\Turno_3\Datoshojastpm6015ControllerT3::class,'printindex'])->name('printindexTPM6015T3');
Route::get('/printreversoTPM6015T3',[App\Http\Controllers\Turno_3\Reversotpm6015ControllerT3::class,'printreverso'])->name('printreversoTPM6015T3');
Route::get('/pdfReversoTPM6015T3',[App\Http\Controllers\Turno_3\Reversotpm6015ControllerT3::class,'pdfReverso'])->name('pdfReversoTPM6015T3');
//Rutas F7-TPM-ELE-60-L1-01-6
Route::resource('F7-TPM-ELE-60-L1-01-6T3', 'App\Http\Controllers\Turno_3\Datoshojastpm6016ControllerT3');
Route::resource('reversoTPM6016T3', 'App\Http\Controllers\Turno_3\Reversotpm6016ControllerT3');
Route::get('/checkTPM6016T3',[App\Http\Controllers\Turno_3\Datoshojastpm6016ControllerT3::class,'check'])->name('checkTPM6016T3');
Route::put('/finalcheckTPM6016T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm6016ControllerT3::class,'finalcheck'])->name('finalcheckTPM6016T3');
Route::get('/edit2TPM6016T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm6016ControllerT3::class,'edit2'])->name('edit2TPM6016T3');
Route::put('/update2TPM6016T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm6016ControllerT3::class,'update2'])->name('update2TPM6016T3');
Route::get('/pdfprintTPM6016T3',[App\Http\Controllers\Turno_3\Datoshojastpm6016ControllerT3::class,'pdfprint'])->name('pdfprintTPM6016T3');
Route::get('/printindexTPM6016T3',[App\Http\Controllers\Turno_3\Datoshojastpm6016ControllerT3::class,'printindex'])->name('printindexTPM6016T3');
Route::get('/printreversoTPM6016T3',[App\Http\Controllers\Turno_3\Reversotpm6016ControllerT3::class,'printreverso'])->name('printreversoTPM6016T3');
Route::get('/pdfReversoTPM6016T3',[App\Http\Controllers\Turno_3\Reversotpm6016ControllerT3::class,'pdfReverso'])->name('pdfReversoTPM6016T3');
//Rutas F7-TPM-ELE-60-L1-01-7
Route::resource('F7-TPM-ELE-60-L1-01-7T3', 'App\Http\Controllers\Turno_3\Datoshojastpm6017ControllerT3');
Route::resource('reversoTPM6017T3', 'App\Http\Controllers\Turno_3\Reversotpm6017ControllerT3');
Route::get('/checkTPM6017T3',[App\Http\Controllers\Turno_3\Datoshojastpm6017ControllerT3::class,'check'])->name('checkTPM6017T3');
Route::put('/finalcheckTPM6017T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm6017ControllerT3::class,'finalcheck'])->name('finalcheckTPM6017T3');
Route::get('/edit2TPM6017T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm6017ControllerT3::class,'edit2'])->name('edit2TPM6017T3');
Route::put('/update2TPM6017T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm6017ControllerT3::class,'update2'])->name('update2TPM6017T3');
Route::get('/pdfprintTPM6017T3',[App\Http\Controllers\Turno_3\Datoshojastpm6017ControllerT3::class,'pdfprint'])->name('pdfprintTPM6017T3');
Route::get('/printindexTPM6017T3',[App\Http\Controllers\Turno_3\Datoshojastpm6017ControllerT3::class,'printindex'])->name('printindexTPM6017T3');
Route::get('/printreversoTPM6017T3',[App\Http\Controllers\Turno_3\Reversotpm6017ControllerT3::class,'printreverso'])->name('printreversoTPM6017T3');
Route::get('/pdfReversoTPM6017T3',[App\Http\Controllers\Turno_3\Reversotpm6017ControllerT3::class,'pdfReverso'])->name('pdfReversoTPM6017T3');
//Rutas F7-TPM-ELE-107-L1-01
Route::resource('F7-TPM-ELE-107-L1-01-1T3', 'App\Http\Controllers\Turno_3\Datoshojastpm10711ControllerT3');
Route::resource('reversoTPM10711T3', 'App\Http\Controllers\Turno_3\Reversotpm10711ControllerT3');
Route::get('/checkTPM10711T3',[App\Http\Controllers\Turno_3\Datoshojastpm10711ControllerT3::class,'check'])->name('checkTPM10711T3');
Route::put('/finalcheckTPM10711T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm10711ControllerT3::class,'finalcheck'])->name('finalcheckTPM10711T3');
Route::get('/edit2TPM10711T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm10711ControllerT3::class,'edit2'])->name('edit2TPM10711T3');
Route::put('/update2TPM10711T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm10711ControllerT3::class,'update2'])->name('update2TPM10711T3');
Route::get('/pdfprintTPM10711T3',[App\Http\Controllers\Turno_3\Datoshojastpm10711ControllerT3::class,'pdfprint'])->name('pdfprintTPM10711T3');
Route::get('/printindexTPM10711T3',[App\Http\Controllers\Turno_3\Datoshojastpm10711ControllerT3::class,'printindex'])->name('printindexTPM10711T3');
Route::get('/printreversoTPM10711T3',[App\Http\Controllers\Turno_3\Reversotpm10711ControllerT3::class,'printreverso'])->name('printreversoTPM10711T3');
Route::get('/pdfReversoTPM10711T3',[App\Http\Controllers\Turno_3\Reversotpm10711ControllerT3::class,'pdfReverso'])->name('pdfReversoTPM10711T3');
//Rutas F7-TPM-ELE-107-L1-01-2
Route::resource('F7-TPM-ELE-107-L1-01-2T3', 'App\Http\Controllers\Turno_3\Datoshojastpm10712ControllerT3');
Route::resource('reversoTPM10712T3', 'App\Http\Controllers\Turno_3\Reversotpm10712ControllerT3');
Route::get('/checkTPM10712T3',[App\Http\Controllers\Turno_3\Datoshojastpm10712ControllerT3::class,'check'])->name('checkTPM10712T3');
Route::put('/finalcheckTPM10712T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm10712ControllerT3::class,'finalcheck'])->name('finalcheckTPM10712T3');
Route::get('/edit2TPM10712T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm10712ControllerT3::class,'edit2'])->name('edit2TPM10712T3');
Route::put('/update2TPM10712T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm10712ControllerT3::class,'update2'])->name('update2TPM10712T3');
Route::get('/pdfprintTPM10712T3',[App\Http\Controllers\Turno_3\Datoshojastpm10712ControllerT3::class,'pdfprint'])->name('pdfprintTPM10712T3');
Route::get('/printindexTPM10712T3',[App\Http\Controllers\Turno_3\Datoshojastpm10712ControllerT3::class,'printindex'])->name('printindexTPM10712T3');
Route::get('/printreversoTPM10712T3',[App\Http\Controllers\Turno_3\Reversotpm10712ControllerT3::class,'printreverso'])->name('printreversoTPM10712T3');
Route::get('/pdfReversoTPM10712T3',[App\Http\Controllers\Turno_3\Reversotpm10712ControllerT3::class,'pdfReverso'])->name('pdfReversoTPM10712T3');
//Rutas F7-TPM-ELE-107-L1-01-3
Route::resource('F7-TPM-ELE-107-L1-01-3T3', 'App\Http\Controllers\Turno_3\Datoshojastpm10713ControllerT3');
Route::resource('reversoTPM10713T3', 'App\Http\Controllers\Turno_3\Reversotpm10713ControllerT3');
Route::get('/checkTPM10713T3',[App\Http\Controllers\Turno_3\Datoshojastpm10713ControllerT3::class,'check'])->name('checkTPM10713T3');
Route::put('/finalcheckTPM10713T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm10713ControllerT3::class,'finalcheck'])->name('finalcheckTPM10713T3');
Route::get('/edit2TPM10713T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm10713ControllerT3::class,'edit2'])->name('edit2TPM10713T3');
Route::put('/update2TPM10713T3/{id}',[App\Http\Controllers\Turno_3\Datoshojastpm10713ControllerT3::class,'update2'])->name('update2TPM10713T3');
Route::get('/pdfprintTPM10713T3',[App\Http\Controllers\Turno_3\Datoshojastpm10713ControllerT3::class,'pdfprint'])->name('pdfprintTPM10713T3');
Route::get('/printindexTPM10713T3',[App\Http\Controllers\Turno_3\Datoshojastpm10713ControllerT3::class,'printindex'])->name('printindexTPM10713T3');
Route::get('/printreversoTPM10713T3',[App\Http\Controllers\Turno_3\Reversotpm10713ControllerT3::class,'printreverso'])->name('printreversoTPM10713T3');
Route::get('/pdfReversoTPM10713T3',[App\Http\Controllers\Turno_3\Reversotpm10713ControllerT3::class,'pdfReverso'])->name('pdfReversoTPM10713T3');
});


//Rutas para el login
Route::view('/',"login.login")->name('login');
Route::view('/registro',"login.registro")->name('registro');
Route::post('/validar-registro',[LoginController::class,'register'])->
    name('validar-registro');
Route::post('/inicia-sesion',[LoginController::class,'login'])->
    name('inicia-sesion');
Route::get('/logout',[LoginController::class,'logout'])->
    name('logout');

//Rutas de hojas de chequeo 5-7
Route::view('/f7_setcs_ele_cr_l1_01',"welcome")->middleware('auth')->name('f7_setcs_ele_cr_l1_01');
Route::view('/f7_setcs_ele_20_l1_01',"welcome2")->middleware('auth')->name('f7_setcs_ele_20_l1_01');

//Rutas de hojas de chequeo 6-8
