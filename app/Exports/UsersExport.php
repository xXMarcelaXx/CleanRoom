<?php

namespace App\Exports;

use App\Models\Registro;
use App\Models\Datoshoja;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class UsersExport implements FromView
{
    use Exportable;

    public function view(): View 
    {
        return view('hojaschequeo.hojas5-7.F7-SETCS-ELE-CR-L1-01.index',[
            'datoshojas'=>Datoshoja::get(),
            'registros'=>Registro::get()

        ]);
    }
}
