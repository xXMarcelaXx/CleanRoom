<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F7-SETCS-ELE-60-L1-01-T1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
    <style>
.fijar {
  /* Fija los encabezados de la tabla en la parte superior */
  position: sticky;
  left: 0;
  z-index: 1;
}
</style>
</head>

<body id="vistas">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <div>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <img src="/images/R.png" alt="" id="logoborg">
                <div>                    
                @auth                    
                <a href="" class="btn btn-info" style="color: white">IBM: {{auth()->user()->name ?? 
                auth()->user()->IBM}} \ {{auth()->user()->name ?? auth()->user()->firstname}}</a>
                @endauth
                <a href="F7-SETCS-ELE-60-L1-01-T1" class="btn btn-info" style="color: white">Volver</a>
                <a href="/logout" class="btn" id="b3">Cerrar sesion</a>                                        
                </div>
            </div>
        </nav>
        <br>
    </div>
    <div class="table-responsive">
        <div class="table-responsive" align="center">
            @foreach ($datoshojas as $datoshoja)
            @endforeach
            <table class="table table-success table-bordered">
                <thead>
                    <tr>
                        <th colspan="33" class="table-secondary">
                            <p align="center">Formato de Send-Ahead para Serpentín TODOS LOS MODELOS</p>
                        </th>
                    </tr>
                </thead>
                @foreach ($registros as $key=>$registro)
                <form action="{{route('finalcheckSETCS606113H1T1',$registro->id)}}" method="POST">  
                @if ($registro->turno == '1' &&
                    $registro->documentoid == 'F7-SETCS-ELE-60-L1-01-1' &&
                    $registro->partetabla == 'formato' &&
                    $registro->mes == $datoshoja->mes &&
                    $registro->año == $datoshoja->año)
                    <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                    <tbody>                        
                        <tr>
                            <th colspan="2">Fecha:</th>
                            <td colspan="2">                                
                                <input type="text" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}">                                
                            </td>
                            <th colspan="2">Hora:</th>
                            <td colspan="2">
                                <input type="text" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}">
                            </td>
                            <th colspan="2">  </th>
                            <th colspan="2">Lote de Tinta </th>
                            <td colspan="4">
                                <input type="text" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}">
                            </td>
                            <th colspan="2">  </th>
                        </tr>
                        <tr>
                            <th>Operador:</th>
                            <td colspan="5">
                                <input type="text" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}">
                            </td>
                            <th colspan="18">  </th>
                        </tr>
                        <tr>
                            <th>Tecnico de setup:</th>
                            <td colspan="5">
                                <input type="text" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}">
                            </td>
                            <th colspan="4">  </th>
                            <th>Frasco # </th>
                            <td colspan="2">
                                <input type="text" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}">
                            </td>
                            <th>Viscocidad </th>
                            <td colspan="7">
                                <input type="text" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}">
                            </td>
                        </tr>
                        <tr>
                            <th>Modelo:</th>
                            <td colspan="5">
                                <input type="text" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}">
                            </td>
                            <th colspan="4">  </th>
                            <th>Peso Inicial </th>
                            <td colspan="2">
                                <input type="text" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}">
                            </td>
                            <th>Peso Final </th>
                            <th colspan="7">
                                <input type="text" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}">
                            </th>
                        </tr>
                        <tr>
                            <th colspan="9"><p align="center">Primera Pasada</p></th>
                            <th colspan="10"><p align="center">Segunda Pasada</p></th>
                        </tr>
                        <tr>
                            <td colspan="1">Impresora: </td>
                            <td colspan="1">
                                <input type="text" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}">
                            </td>
                            <td colspan="1">Serps: </td>
                            <td colspan="1">
                                <input type="text" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}">
                            </td>
                            <td colspan="1">Leads: </td>
                            <td colspan="2">
                                <input type="text" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}">
                            </td>
                            <th colspan="2">  </th>
                            <td colspan="1">Impresora: </td>
                            <td colspan="2">
                                <input type="text" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}">
                            </td>
                            <td colspan="1">Serps: </td>
                            <td colspan="2">
                                <input type="text" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}">
                            </td>
                            <td colspan="1">Leads: </td>
                            <td colspan="5">
                                <input type="text" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1">Velocidad: </td>
                            <td colspan="1">
                                <input type="text" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}">
                            </td>
                            <td colspan="1">Presion: </td>
                            <td colspan="1">
                                <input type="text" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}">
                            </td>
                            <td colspan="1">Snap-Off: </td>
                            <td colspan="2">
                                <input type="text" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}">
                            </td>
                            <th colspan="2">  </th>
                            <td colspan="1">Velocidad: </td>
                            <td colspan="2">
                                <input type="text" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}">
                            </td>
                            <td colspan="1">Presion: </td>
                            <td colspan="2">
                                <input type="text" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}">
                            </td>
                            <td colspan="1">Snap-Off: </td>
                            <td colspan="5">
                                <input type="text" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}">
                            </td>
                            <input type="text" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" hidden value="{{$registro->d23}}">
                            <input type="text" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" hidden value="{{$registro->d24}}">
                            <input type="text" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" hidden value="{{$registro->d25}}">
                            <input type="text" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" hidden value="{{$registro->d26}}">
                            <input type="text" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" hidden value="{{$registro->d27}}">
                            <input type="text" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" hidden value="{{$registro->d28}}">
                            <input type="text" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" hidden value="{{$registro->d29}}">
                            <input type="text" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" hidden value="{{$registro->d30}}">
                            <input type="text" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" hidden value="{{$registro->d31}}">
                        </tr>
                        <tr>
                            <th colspan="1">Grupo</th>                                                      
                            <th colspan="1">Numero de Tile</th>
                            <th colspan="1">Detalle de Pantalla</th>
                            <th colspan="1">Peso de Hoja con Tinta</th>
                            <th colspan="1">Peso Solicitado 1er Impresión</th>
                            <th colspan="1">Medicion de localizacion serpentin OSMa/OSMaG2
                                (Firma tecnico)</th>
                            <th colspan="1">Velocidad</th>
                            <th colspan="1">Presion</th>
                            <th colspan="1">Snap Off</th>
                            <th colspan="1"></th>
                            <th colspan="1">Numero de Tile</th>
                            <th colspan="1">Detalle de Pantalla</th>
                            <th colspan="1">Peso de Hoja con Tinta</th>
                            <th colspan="1">Peso Solicitado 1er Impresión</th>
                            <th colspan="1">Medicion de localizacion serpentin OSMa/OSMaG2
                                (Firma tecnico)</th>
                            <th colspan="1">Velocidad</th>
                            <th colspan="1">Presion</th>
                            <th colspan="1">Snap Off</th>
                        </tr>
                        @endif
                        @if ($registro->turno == '1' &&
                        $registro->documentoid == 'F7-SETCS-ELE-60-L1-01-1' &&
                        $registro->partetabla == '1-2-3' &&
                        $registro->mes == $datoshoja->mes &&
                        $registro->año == $datoshoja->año)
                        <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                        <tr>
                            <th rowspan="5">1</th>
                            <th colspan="1">1</th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}"></td>
                            <td colspan="1"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}"></td>                            
                        </tr>
                        <tr>
                            <th>2</th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}"></td>
                            <td colspan="1"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}"></td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" value="{{$registro->d23}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" value="{{$registro->d24}}"></td>
                            <td colspan="1"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" value="{{$registro->d25}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" value="{{$registro->d26}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" value="{{$registro->d27}}"></td>
                            <input type="text" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" hidden value="{{$registro->d28}}">
                            <input type="text" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" hidden value="{{$registro->d29}}">
                            <input type="text" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" hidden value="{{$registro->d30}}">
                            <input type="text" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" hidden value="{{$registro->d31}}">
                        @endif
                        </tr>
                        @if ($registro->turno == '1' &&
                        $registro->documentoid == 'F7-SETCS-ELE-60-L1-01-1' &&
                        $registro->partetabla == 'HE1-HE2-4' &&
                        $registro->mes == $datoshoja->mes &&
                        $registro->año == $datoshoja->año)
                        <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                        <tr>
                            <th>Hoja Extra 1</th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}"></td>
                            <td colspan="1"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}"></td>
                        </tr>
                        <tr>
                            <th>Hoja Extra 2</th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}"></td>
                            <td colspan="1"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}"></td>
                        </tr>
                        <tr>
                            <th rowspan="5">2</th>
                            <th colspan="1">4</th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}"></td>
                            <th colspan="1"></th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" value="{{$registro->d23}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" value="{{$registro->d24}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" value="{{$registro->d25}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" value="{{$registro->d26}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" value="{{$registro->d27}}"></td>
                            <input type="text" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" hidden value="{{$registro->d28}}">
                            <input type="text" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" hidden value="{{$registro->d29}}">
                            <input type="text" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" hidden value="{{$registro->d30}}">
                            <input type="text" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" hidden value="{{$registro->d31}}">
                        @endif
                        </tr>
                        @if ($registro->turno == '1' &&
                        $registro->documentoid == 'F7-SETCS-ELE-60-L1-01-1' &&
                        $registro->partetabla == '5-6-HE3-HE4' &&
                        $registro->mes == $datoshoja->mes &&
                        $registro->año == $datoshoja->año)
                        <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                        <tr>
                            <th>5</th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}"></td>
                            <th colspan="1"></th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}"></td>
                        </tr>
                        <tr>
                            <th>6</th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}"></td>
                            <th colspan="1"></th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}"></td>
                        </tr>
                        <tr>
                            <th>Hoja Extra 3</th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}"></td>
                            <th colspan="1"></th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}"></td>
                        </tr>
                        <tr>
                            <th>Hoja Extra 4</th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}"></td>
                            <th colspan="1"></th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" value="{{$registro->d23}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" value="{{$registro->d24}}"></td>
                            <input type="text" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" hidden value="{{$registro->d25}}">
                            <input type="text" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" hidden value="{{$registro->d26}}">
                            <input type="text" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" hidden value="{{$registro->d27}}">
                            <input type="text" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" hidden value="{{$registro->d28}}">
                            <input type="text" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" hidden value="{{$registro->d29}}">
                            <input type="text" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" hidden value="{{$registro->d30}}">
                            <input type="text" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" hidden value="{{$registro->d31}}">
                        @endif
                        </tr>
                        @if ($registro->turno == '1' &&
                        $registro->documentoid == 'F7-SETCS-ELE-60-L1-01-1' &&
                        $registro->partetabla == '7-8-9' &&
                        $registro->mes == $datoshoja->mes &&
                        $registro->año == $datoshoja->año)
                        <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                        <tr>
                            <th rowspan="5">3</th>
                            <th>7</th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}"></td>
                            <th colspan="1"></th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}"></td>
                            <td rowspan="5" colspan="1"><input type="text" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}"></td>
                        </tr>
                        <tr>
                            <th>8</th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}"></td>
                            <th colspan="1"></th>
                            <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}"></td>
                        </tr>
                        <tr>
                            <th>9</th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" value="{{$registro->d23}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" value="{{$registro->d24}}"></td>
                            <th colspan="1"></th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" value="{{$registro->d25}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" value="{{$registro->d26}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" value="{{$registro->d27}}"></td>
                            <input type="text" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" hidden value="{{$registro->d28}}">
                            <input type="text" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" hidden value="{{$registro->d29}}">
                            <input type="text" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" hidden value="{{$registro->d30}}">
                            <input type="text" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" hidden value="{{$registro->d31}}">
                        @endif
                        </tr>
                        @if ($registro->turno == '1' &&
                        $registro->documentoid == 'F7-SETCS-ELE-60-L1-01-1' &&
                        $registro->partetabla == 'HE5-HE6' &&
                        $registro->mes == $datoshoja->mes &&
                        $registro->año == $datoshoja->año)
                        <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                        <tr>
                            <th>Hoja Extra 5</th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}"></td>
                            <th colspan="1"></th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}"></td>
                        </tr>
                        <tr>
                            <th>Hoja Extra 6</th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}"></td>
                            <th colspan="1"></th>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}"></td>
                            <td colspan="1"><input type="text" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}"></td>
                            <input type="text" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" hidden value="{{$registro->d13}}">
                            <input type="text" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" hidden value="{{$registro->d14}}">
                            <input type="text" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" hidden value="{{$registro->d15}}">
                            <input type="text" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" hidden value="{{$registro->d16}}">
                            <input type="text" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" hidden value="{{$registro->d17}}">
                            <input type="text" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" hidden value="{{$registro->d18}}">
                            <input type="text" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" hidden value="{{$registro->d19}}">
                            <input type="text" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" hidden value="{{$registro->d20}}">
                            <input type="text" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" hidden value="{{$registro->d21}}">
                            <input type="text" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" hidden value="{{$registro->d22}}">
                            <input type="text" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" hidden value="{{$registro->d23}}">
                            <input type="text" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" hidden value="{{$registro->d24}}">
                            <input type="text" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" hidden value="{{$registro->d25}}">
                            <input type="text" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" hidden value="{{$registro->d26}}">
                            <input type="text" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" hidden value="{{$registro->d27}}">
                            <input type="text" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" hidden value="{{$registro->d28}}">
                            <input type="text" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" hidden value="{{$registro->d29}}">
                            <input type="text" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" hidden value="{{$registro->d30}}">
                            <input type="text" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" hidden value="{{$registro->d31}}">
                        @endif
                        @endforeach
                        </tr>
                    </tbody>
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-primary" id="miBoton">Guardar Cambios</button>
                        </form>
                </table>
            <br><br><br><br><br><br><br><br>
        </div>
</body>
</html>