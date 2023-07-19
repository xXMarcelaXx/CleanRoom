<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F7-SETCS-ELE-60-L1-01</title>
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css')}}" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
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
                <a href="operacionesTurno68" class="btn btn-info" style="color: white">Volver</a>
                <a href="/logout" class="btn" id="b3">Cerrar sesion</a>                                        
                </div>
            </div>
        </nav>
        <br>
    </div>
    <div class="table-responsive">
        <table class="table table-success table-bordered">
            <thead>
                @foreach ($datoshojas as $datoshoja)
                    @if ($datoshoja->documentoid == 'F7-SETCS-ELE-60-L1-01')
                        <tr>
                            <th rowspan="2" colspan="3" style="text-align: end">Titulo</th>
                            <th colspan="4" style="text-align: center">{{ $datoshoja->titulo }}</th>
                            <th rowspan="2" colspan="1" style="text-align: end">DocumentoID</th>
                            <th rowspan="2" colspan="2">{{ $datoshoja->documentoid }}</th>
                        </tr>
                        <tr>
                            <th colspan="4" style="text-align: center">{{ $datoshoja->subtitulo }}</th>
                        </tr>
                        <tr>
                            <th>No. de cambio</th>
                            <th>Fecha</th>
                            <th>ME/IE</th>
                            <th>{{ $datoshoja->meie }}</th>
                            <th>Area</th>
                            <th>{{ $datoshoja->area }}</th>
                            <th>Lugar</th>
                            <th>{{ $datoshoja->lugar }}</th>
                            <th>Pagina</th>
                            <th>{{ $datoshoja->pagina }}</th>
                        </tr>
                        <tr>
                            <th rowspan="2">{{ $datoshoja->numero_cambio }}</th>
                            <th>{{ $datoshoja->fecha }}</th>
                            <th>calidad</th>
                            <th>{{ $datoshoja->calidad }}</th>
                            <th>Linea</th>
                            <th>{{ $datoshoja->linea }}</th>
                            <th>Planta</th>
                            <th colspan="3">{{ $datoshoja->planta }}</th>
                        </tr>
                        <tr>
                            <th>{{ $datoshoja->revision }}</th>
                            <th>Manufactura</th>
                            <th>{{ $datoshoja->manufactura }}</th>
                            <th>Op #</th>
                            <th>{{ $datoshoja->operacion }}</th>
                            <th>Depto</th>
                            <th>{{ $datoshoja->departamento }}</th>
                            <th>No.Parte</th>
                            <th>{{ $datoshoja->numeroparte }}</th>
                        </tr>
                        <tr>
                            <th colspan="3" style="text-align: end">Mes:</th>
                            <th colspan="1">{{ $datoshoja->mes }}</th>
                            <th colspan="3" style="text-align: end">Año:</th>
                            <th colspan="3">{{ $datoshoja->año }}</th>
                        </tr>
                        <tr>
                            <th>accion</th>
                            <th>
                            @role('Admin')
                            <a href="/edit2SETCS606113H1T2/{{$datoshoja->id}}" class="btn btn-warning">Editar</a>
                            @endrole
                            </th>
                            <th colspan="30"></th>
                        </tr>
                    @endif
                @endforeach
            </thead>
        </table>

        <div class="table-responsive" align="center">
            <table class="table table-success table-bordered">
                <thead>
                    <tr>
                        <th colspan="33" class="table-secondary">
                            <p align="center">Formato de Send-Ahead para Serpentín TODOS LOS MODELOS</p>
                        </th>
                    </tr>
                </thead>
                @foreach ($registros as $registro)
                @if ($registro->turno == '2' &&
                    $registro->documentoid == 'F7-SETCS-ELE-60-L1-01-1' &&
                    $registro->partetabla == 'formato' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                    <tbody>                        
                        <tr>
                            <th colspan="2">Fecha:</th>
                            <th colspan="2">{{ $registro['d1'] }}</th>
                            <th colspan="2">Hora:</th>
                            <th colspan="2">{{ $registro['d2'] }}</th>
                            <th colspan="2">  </th>
                            <th colspan="2">Lote de Tinta </th>
                            <th colspan="4">{{ $registro['d3'] }}</th>
                            <th colspan="2">  </th>
                        </tr>
                        <tr>
                            <th>Operador:</th>
                            <th colspan="5">{{ $registro['d4'] }}</th>
                            <th colspan="18">  </th>
                        </tr>
                        <tr>
                            <th>Tecnico de setup:</th>
                            <th colspan="5">{{ $registro['d5'] }}</th>
                            <th colspan="4">  </th>
                            <th>Frasco # </th>
                            <th colspan="2">{{ $registro['d6'] }}</th>
                            <th>Viscocidad </th>
                            <th colspan="7">{{ $registro['d7'] }}</th>
                        </tr>
                        <tr>
                            <th>Modelo:</th>
                            <th colspan="5">{{ $registro['d8'] }}</th>
                            <th colspan="4">  </th>
                            <th>Peso Inicial </th>
                            <th colspan="2">{{ $registro['d9'] }}</th>
                            <th>Peso Final </th>
                            <th colspan="7">{{ $registro['d10'] }}</th>
                        </tr>
                        <tr>
                            <th colspan="9"><p align="center">Primera Pasada</p></th>
                            <th colspan="10"><p align="center">Segunda Pasada</p></th>
                        </tr>
                        <tr>
                            <td colspan="1">Impresora: </td>
                            <td colspan="1">{{ $registro['d11'] }}</td>
                            <td colspan="1">Serps: </td>
                            <td colspan="1">{{ $registro['d12'] }}</td>
                            <td colspan="1">Leads: </td>
                            <td colspan="2">{{ $registro['d13'] }}</td>
                            <th colspan="2">  </th>
                            <td colspan="1">Impresora: </td>
                            <td colspan="2">{{ $registro['d14'] }}</td>
                            <td colspan="1">Serps: </td>
                            <td colspan="2">{{ $registro['d15'] }}</td>
                            <td colspan="1">Leads: </td>
                            <td colspan="5">{{ $registro['d16'] }}</td>
                        </tr>
                        <tr>
                            <td colspan="1">Velocidad: </td>
                            <td colspan="1">{{ $registro['d17'] }}</td>
                            <td colspan="1">Presion: </td>
                            <td colspan="1">{{ $registro['d18'] }}</td>
                            <td colspan="1">Snap-Off: </td>
                            <td colspan="2">{{ $registro['d19'] }}</td>
                            <th colspan="2">  </th>
                            <td colspan="1">Velocidad: </td>
                            <td colspan="2">{{ $registro['d20'] }}</td>
                            <td colspan="1">Presion: </td>
                            <td colspan="2">{{ $registro['d21'] }}</td>
                            <td colspan="1">Snap-Off: </td>
                            <td colspan="5">{{ $registro['d22'] }}</td>
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
                    @endforeach
                        @foreach ($registros as $registro)
                        @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-60-L1-01-1' &&
                        $registro->partetabla == '1-2-3' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                        <tr>
                            <th rowspan="5">1</th>
                            <th colspan="1">1</th>
                            <td colspan="1"><p>{{ $registro['d1'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d2'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d3'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d4'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d5'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d6'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d7'] }}</p></td>
                            <td colspan="1"></td>
                            <td colspan="1"><p>{{ $registro['d8'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d9'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d10'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d11'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d12'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d13'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d14'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d15'] }}</p></td>                            
                        </tr>
                        <tr>
                            <th>2</th>
                            <td colspan="1"><p>{{ $registro['d16'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d17'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d18'] }}</p></td>
                            <td colspan="1"></td>
                            <td colspan="1"><p>{{ $registro['d19'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d20'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d21'] }}</p></td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td colspan="1"><p>{{ $registro['d22'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d23'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d24'] }}</p></td>
                            <td colspan="1"></td>
                            <td colspan="1"><p>{{ $registro['d25'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d26'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d27'] }}</p></td>
                        @endif
                        @endforeach
                        </tr>
                        @foreach ($registros as $registro)
                        @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-60-L1-01-1' &&
                        $registro->partetabla == 'HE1-HE2-4' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                        <tr>
                            <th>Hoja Extra 1</th>
                            <td colspan="1"><p>{{ $registro['d1'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d2'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d3'] }}</p></td>
                            <td colspan="1"></td>
                            <td colspan="1"><p>{{ $registro['d4'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d5'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d6'] }}</p></td>
                        </tr>
                        <tr>
                            <th>Hoja Extra 2</th>
                            <td colspan="1"><p>{{ $registro['d7'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d8'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d9'] }}</p></td>
                            <td colspan="1"></td>
                            <td colspan="1"><p>{{ $registro['d10'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d11'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d12'] }}</p></td>
                        </tr>
                        <tr>
                            <th rowspan="5">2</th>
                            <th colspan="1">4</th>
                            <td colspan="1"><p>{{ $registro['d13'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d14'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d15'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d16'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d17'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d18'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d19'] }}</p></td>
                            <th colspan="1"></th>
                            <td colspan="1"><p>{{ $registro['d20'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d21'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d22'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d23'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d24'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d25'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d26'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d27'] }}</p></td>
                        @endif
                        @endforeach
                        </tr>
                        @foreach ($registros as $registro)
                        @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-60-L1-01-1' &&
                        $registro->partetabla == '5-6-HE3-HE4' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                        <tr>
                            <th>5</th>
                            <td colspan="1"><p>{{ $registro['d1'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d2'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d3'] }}</p></td>
                            <th colspan="1"></th>
                            <td colspan="1"><p>{{ $registro['d4'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d5'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d6'] }}</p></td>
                        </tr>
                        <tr>
                            <th>6</th>
                            <td colspan="1"><p>{{ $registro['d7'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d8'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d9'] }}</p></td>
                            <th colspan="1"></th>
                            <td colspan="1"><p>{{ $registro['d10'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d11'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d12'] }}</p></td>
                        </tr>
                        <tr>
                            <th>Hoja Extra 3</th>
                            <td colspan="1"><p>{{ $registro['d13'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d14'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d15'] }}</p></td>
                            <th colspan="1"></th>
                            <td colspan="1"><p>{{ $registro['d16'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d17'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d18'] }}</p></td>
                        </tr>
                        <tr>
                            <th>Hoja Extra 4</th>
                            <td colspan="1"><p>{{ $registro['d19'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d20'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d21'] }}</p></td>
                            <th colspan="1"></th>
                            <td colspan="1"><p>{{ $registro['d22'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d23'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d24'] }}</p></td>
                        @endif
                        @endforeach
                        </tr>
                        @foreach ($registros as $registro)
                        @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-60-L1-01-1' &&
                        $registro->partetabla == '7-8-9' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                        <tr>
                            <th rowspan="5">3</th>
                            <th>7</th>
                            <td colspan="1"><p>{{ $registro['d1'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d2'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d3'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d4'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d5'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d6'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d7'] }}</p></td>
                            <th colspan="1"></th>
                            <td colspan="1"><p>{{ $registro['d8'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d9'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d10'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d11'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d12'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d13'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d14'] }}</p></td>
                            <td rowspan="5" colspan="1"><p>{{ $registro['d15'] }}</p></td>
                        </tr>
                        <tr>
                            <th>8</th>
                            <td colspan="1"><p>{{ $registro['d16'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d17'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d18'] }}</p></td>
                            <th colspan="1"></th>
                            <td colspan="1"><p>{{ $registro['d19'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d20'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d21'] }}</p></td>
                        </tr>
                        <tr>
                            <th>9</th>
                            <td colspan="1"><p>{{ $registro['d22'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d23'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d24'] }}</p></td>
                            <th colspan="1"></th>
                            <td colspan="1"><p>{{ $registro['d25'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d26'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d27'] }}</p></td>
                        @endif
                        @endforeach
                        </tr>
                        @foreach ($registros as $registro)
                        @if ($registro->turno == '2' &&
                        $registro->documentoid == 'F7-SETCS-ELE-60-L1-01-1' &&
                        $registro->partetabla == 'HE5-HE6' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                        <tr>
                            <th>Hoja Extra 5</th>
                            <td colspan="1"><p>{{ $registro['d1'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d2'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d3'] }}</p></td>
                            <th colspan="1"></th>
                            <td colspan="1"><p>{{ $registro['d4'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d5'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d6'] }}</p></td>
                        </tr>
                        <tr>
                            <th>Hoja Extra 6</th>
                            <td colspan="1"><p>{{ $registro['d7'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d8'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d9'] }}</p></td>
                            <th colspan="1"></th>
                            <td colspan="1"><p>{{ $registro['d10'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d11'] }}</p></td>
                            <td colspan="1"><p>{{ $registro['d12'] }}</p></td>
                        @endif
                        @endforeach
                        </tr>
                    </tbody>
                    
            </table>
        </div>
                    <a href="{{route('checkSETCS606113H1T2')}}" class="btn btn-primary" id="btnIndex">Chequeo Diario</a>
                    @role('Admin')
                    <a href="F7-SETCS-ELE-60-L1-01-T2/create" class="btn btn-success" id="btnIndex2">Añadir criterio</a>
                    <a href="{{route('pdfprintSETCS606113H1T2')}}" class="btn btn-danger" id="btnIndex3">Guardar PDF</a>
                    @endrole
                    <a href="/reversoSETCS606113H1T2" class="btn btn-secondary" id="btnIndex4">Reverso</a>                    
</body>
</html>
