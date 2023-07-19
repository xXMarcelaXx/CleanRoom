<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRUEBA</title>
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css')}}" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">
    <style>
        table, th, td {
  border: 0.5px solid black;
  border-collapse: collapse;
}
    </style>
</head>

<body>

    hoja de chequeo F7-SETCS-ELE-CR-L1-01
    <!-- -------------- F7-SETCS-ELE-CR-L1-01-57  INDEX Y REVERSO  -------------------->
    <div class="table-responsive">
        <table class="table table-success table-bordered">
            <thead>
                @foreach ($datoshojas as $datoshoja)
                    @if ($datoshoja->documentoid == 'F7-SETCS-ELE-CR-L1-01')
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
                    @endif
                @endforeach
            </thead>
        </table>
        <div class="table-responsive" align="center">
            <table class="table table-success table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2">parametros turno</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                        <th>8</th>
                        <th>9</th>
                        <th>10</th>
                        <th>11</th>
                        <th>12</th>
                        <th>13</th>
                        <th>14</th>
                        <th>15</th>
                        <th>16</th>
                        <th>17</th>
                        <th>18</th>
                        <th>19</th>
                        <th>20</th>
                        <th>21</th>
                        <th>22</th>
                        <th>23</th>
                        <th>24</th>
                        <th>25</th>
                        <th>26</th>
                        <th>27</th>
                        <th>28</th>
                        <th>29</th>
                        <th>30</th>
                        <th>31</th>
                    </tr>
                    <tr>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                        <th>1</th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <th colspan="33" class="table-secondary">
                                <p align="center">Al inicio del turno</p>
                            </th>
                        </tr>


                        @foreach ($registros as $registro)
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-CR-L1-01' &&
                                $registro->partetabla == 'AL INICIO DE TURNO' &&
                                $registro->tipo == 'cumple')
                                <tr>
                                    <td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <td>
                                            @if ($registro["d{$i}"] == 'Cumple')
                                              <p style="color: green">{{ $registro["d{$i}"] }}</p>
                                            @else
                                              <p style="color: red">{{ $registro["d{$i}"] }}</p>
                                            @endif
                                        </td>
                                    @endfor
                                </tr>
                            @endif
                        @endforeach


                        @foreach ($registros as $registro)
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-CR-L1-01' &&
                                $registro->partetabla == 'AL INICIO DE TURNO' &&
                                $registro->tipo == 'rango')
                                <tr>
                                    <td>{{ $registro->criterio}}, {{$registro->valor1}}, {{$registro->valor2}}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <td>
                                            @if ($registro["d{$i}"] >= $registro->valor1 && $registro["d{$i}"] <= $registro->valor2)
                                              <p style="color: green">{{ $registro["d{$i}"] }}</p>
                                            @else
                                              <p style="color: red">{{ $registro["d{$i}"] }}</p>
                                            @endif
                                        </td>
                                    @endfor
                                </tr>
                            @endif
                        @endforeach
                        @foreach ($registros as $registro)
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-CR-L1-01' &&
                                $registro->partetabla == 'AL INICIO DE TURNO' &&
                                $registro->tipo == 'texto')
                                <tr>
                                    <td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <td>
                                            <p>{{ $registro["d{$i}"] }}</p>
                                        </td>
                                    @endfor
                                </tr>
                            @endif
                        @endforeach
                        <tr>
                            <th colspan="33" class="table-secondary">
                                <p align="center">Diario</p>
                            </th>
                        </tr>
                        @foreach ($registros as $registro)
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-CR-L1-01' &&
                                $registro->partetabla == 'DIARIO' &&
                                $registro->tipo == 'cumple')
                                <tr>
                                    <td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <td>
                                            @if ($registro["d{$i}"] == 'Cumple')
                                              <p style="color: green">{{ $registro["d{$i}"] }}</p>
                                            @else
                                              <p style="color: red">{{ $registro["d{$i}"] }}</p>
                                            @endif
                                        </td>
                                    @endfor
                                </tr>
                            @endif
                        @endforeach
                        @foreach ($registros as $registro)
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-CR-L1-01' &&
                                $registro->partetabla == 'DIARIO' &&
                                $registro->tipo == 'rango')
                                <tr>
                                    <td>{{ $registro->criterio}}, {{$registro->valor1}}, {{$registro->valor2}}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <td>
                                            @if ($registro["d{$i}"] >= $registro->valor1 && $registro["d{$i}"] <= $registro->valor2)
                                              <p style="color: green">{{ $registro["d{$i}"] }}</p>
                                            @else
                                              <p style="color: red">{{ $registro["d{$i}"] }}</p>
                                            @endif
                                        </td>
                                    @endfor
                                </tr>
                            @endif
                        @endforeach          
                        @foreach ($registros as $registro)
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-CR-L1-01' &&
                                $registro->partetabla == 'DIARIO' &&
                                $registro->tipo == 'texto')
                                <tr>
                                    <td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <td>
                                            <p>{{ $registro["d{$i}"] }}</p>
                                        </td>
                                    @endfor
                                </tr>
                            @endif
                        @endforeach
                        <tr>
                            <th colspan="33" class="table-secondary">
                                <p align="center">Nota: Durante su verificacion diaria, reemplace cualquier material
                                    que
                                    encuentre dañado</p>
                            </th>
                        </tr>
                        @foreach ($registros as $registro)
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-CR-L1-01' &&
                                $registro->partetabla == 'NOTA' &&
                                $registro->tipo == 'cumple')
                                <tr>
                                    <td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <td>
                                            @if ($registro["d{$i}"] == 'Cumple')
                                              <p style="color: green">{{ $registro["d{$i}"] }}</p>
                                            @else
                                              <p style="color: red">{{ $registro["d{$i}"] }}</p>
                                            @endif
                                        </td>
                                    @endfor
                                </tr>
                            @endif
                        @endforeach
                        @foreach ($registros as $registro)
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-CR-L1-01' &&
                                $registro->partetabla == 'NOTA' &&
                                $registro->tipo == 'rango')
                                <tr>
                                    <td>{{ $registro->criterio}}, {{$registro->valor1}}, {{$registro->valor2}}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <td>
                                            @if ($registro["d{$i}"] >= $registro->valor1 && $registro["d{$i}"] <= $registro->valor2)
                                              <p style="color: green">{{ $registro["d{$i}"] }}</p>
                                            @else
                                              <p style="color: red">{{ $registro["d{$i}"] }}</p>
                                            @endif
                                        </td>
                                    @endfor
                                </tr>
                            @endif
                        @endforeach
                        @foreach ($registros as $registro)
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-CR-L1-01' &&
                                $registro->partetabla == 'NOTA' &&
                                $registro->tipo == 'texto')
                                <tr>
                                    <td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <td>
                                            <p>{{ $registro["d{$i}"] }}</p>
                                        </td>
                                    @endfor
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
    <div style="page-break-after:always;"></div>
    <!-- --------------  REVERSO  -------------------->
    <table class="table table-success table-bordered table-striped mt-4">
        <thead>
            <tr>
                <th scope="col" rowspan="2">Fecha y hora de la incidencia</th>
                <th scope="col" rowspan="2">Descripcion de la falla</th>
                <th scope="col" rowspan="2">Se paro el proceso</th>
                <th scope="col" rowspan="2">Si es NO, explique porque y quien lo autoriza</th>
                <th scope="col" colspan="4">Liberacion auditor de calidad</th>
                <th scope="col" rowspan="2">Causa raiz asignable</th>
                <th scope="col" rowspan="2">Accion correctiva</th>
                <th scope="col">Responsable</th>
            </tr>
            <tr>
                <th scope="col">Muestreo de confirmacion</th>
                <th scope="col">Disposicion de material construido</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Nombre / firma</th>
                <th scope="col">Supv. de produccion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reversos as $reverso)
            @if ($reverso->documentoid == "F7-SETCS-ELE-CR-L1-01-57" && $reverso->turno == "1")
            <tr>
                <td>{{$reverso->fechahora}}</td>
                <td>{{$reverso->falla}}</td>
                <td>{{$reverso->proceso}}</td>
                <td>{{$reverso->porque}}</td>
                <td>{{$reverso->confirmacion}}</td>
                <td>{{$reverso->dispocision}}</td>
                <td>{{$reverso->Cantidad}}</td>
                <td>{{$reverso->nombre}}</td>
                <td>{{$reverso->causa}}</td>
                <td>{{$reverso->accion}}</td>
                <td>{{$reverso->responsable}}</td>
            </tr>                      
            @endif
            @endforeach
        </tbody>
    </table>
    <div style="page-break-after:always;"></div>

    


</body>

</html>
