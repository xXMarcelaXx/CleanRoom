<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use PDF;
use App\Models\Datoshoja;
use App\Models\Registro;
use App\Models\option;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function prueba()
    {
        return view('prueba');
    }



}
