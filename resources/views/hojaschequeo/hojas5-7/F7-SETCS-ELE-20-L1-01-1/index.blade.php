<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F7-SETCS-ELE-20-L1-01-1  T1</title>
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css')}}" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="/css/app.css" rel="stylesheet">

</head>

<body id="vistas">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <div>
        <nav class="navbar navbar-expand-lg bg-light" id="nav">
            <div class="container-fluid">
                <img src="/images/R.png" alt="" id="logoborg">
                <div>                    
                @auth                    
                <a href="" class="btn btn-info" style="color: white">IBM: {{auth()->user()->name ?? 
                auth()->user()->IBM}} \ {{auth()->user()->name ?? auth()->user()->firstname}}</a>
                <a href="operacionesTurno57" class="btn btn-info" style="color: white">Volver</a>
                <a href="/logout" class="btn" id="b3">Cerrar sesion</a> 
                @endauth                       
                </div>
            </div>
        </nav>
        <br><br><br>
    </div>
    <div class="table-responsive">
        <table class="table table-success table-bordered">
            <thead>
                @foreach ($datoshojas as $datoshoja)
                    @if ($datoshoja->documentoid == 'F7-SETCS-ELE-20-L1-01' &&
                         $datoshoja->area == 'Cuarto Limpio 1')
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
                            <a href="/edit2SETCS20/{{$datoshoja->id}}" class="btn btn-warning">Editar</a>
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
                        @role('Admin')
                        <th>Acciones</th>
                        @endrole
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
                        @role('Admin')
                        <th>...</th>
                        @endrole
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <th colspan="33" class="table-secondary">
                                <p align="center">CADA DIA (Al inicio del turno)</p>
                            </th>
                        </tr>
                        @foreach ($registros as $registro)
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-20-L1-01-1-1' &&
                                $registro->partetabla == 'AL INICIO DE TURNO' &&
                                $registro->tipo == 'cumple' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    <td>
                                        @if ($registro['d1'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d1'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d1'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d2'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d2'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d2'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d3'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d3'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d3'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d4'] == 'Cumple')
                                        <p style="color: green">{{ $registro['d4'] }}</p>
                                    @else
                                        <p style="color: red">{{ $registro['d4'] }}</p>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($registro['d5'] == 'Cumple')
                                        <p style="color: green">{{ $registro['d5'] }}</p>
                                    @else
                                        <p style="color: red">{{ $registro['d5'] }}</p>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($registro['d6'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d6'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d6'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d7'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d7'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d7'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d8'] == 'Cumple')
                                        <p style="color: green">{{ $registro['d8'] }}</p>
                                    @else
                                        <p style="color: red">{{ $registro['d8'] }}</p>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($registro['d9'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d9'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d9'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d10'] == 'Cumple')
                                        <p style="color: green">{{ $registro['d10'] }}</p>
                                    @else
                                        <p style="color: red">{{ $registro['d10'] }}</p>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($registro['d11'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d11'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d11'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d12'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d12'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d12'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d13'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d13'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d13'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d14'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d14'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d14'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d15'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d15'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d15'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d16'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d16'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d16'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d17'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d17'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d17'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d18'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d18'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d18'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d19'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d19'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d19'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d20'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d20'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d20'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d21'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d21'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d21'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d22'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d22'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d22'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d23'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d23'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d23'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d24'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d24'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d24'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d25'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d25'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d25'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d26'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d26'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d26'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d27'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d27'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d27'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d28'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d28'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d28'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d29'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d29'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d29'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d30'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d30'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d30'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d31'] == 'Cumple')
                                            <p style="color: green">{{ $registro['d31'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d31'] }}</p>
                                        @endif
                                    </td>
                                    @role('Admin')
                                    <td>
                                        <form action="{{route('F7-SETCS-ELE-20-L1-01-1-1.destroy',$registro->id)}}" method="POST">
                                        <a href="F7-SETCS-ELE-20-L1-01-1-1/{{$registro->id}}/edit" class="btn btn-warning">Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                    @endrole
                                </tr>
                            @endif
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-20-L1-01-1-1' &&
                                $registro->partetabla == 'AL INICIO DE TURNO' &&
                                $registro->tipo == 'rango' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                                <tr>
                                    <td>{{ $registro->criterio}}</td>
                                    <td>
                                        @if ($registro['d1'] >= $registro->valor1 && $registro['d1'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d1'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d1'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d2'] >= $registro->valor1 && $registro['d2'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d2'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d2'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d3'] >= $registro->valor1 && $registro['d3'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d3'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d3'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d4'] >= $registro->valor1 && $registro['d4'] <= $registro->valor2)
                                        <p style="color: green">{{ $registro['d4'] }}</p>
                                    @else
                                        <p style="color: red">{{ $registro['d4'] }}</p>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($registro['d5'] >= $registro->valor1 && $registro['d5'] <= $registro->valor2)
                                        <p style="color: green">{{ $registro['d5'] }}</p>
                                    @else
                                        <p style="color: red">{{ $registro['d5'] }}</p>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($registro['d6'] >= $registro->valor1 && $registro['d6'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d6'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d6'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d7'] >= $registro->valor1 && $registro['d7'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d7'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d7'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d8'] >= $registro->valor1 && $registro['d8'] <= $registro->valor2)
                                        <p style="color: green">{{ $registro['d8'] }}</p>
                                    @else
                                        <p style="color: red">{{ $registro['d8'] }}</p>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($registro['d9'] >= $registro->valor1 && $registro['d9'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d9'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d9'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d10'] >= $registro->valor1 && $registro['d10'] <= $registro->valor2)
                                        <p style="color: green">{{ $registro['d10'] }}</p>
                                    @else
                                        <p style="color: red">{{ $registro['d10'] }}</p>
                                    @endif
                                    </td>
                                    <td>
                                        @if ($registro['d11'] >= $registro->valor1 && $registro['d11'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d11'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d11'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d12'] >= $registro->valor1 && $registro['d12'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d12'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d12'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d13'] >= $registro->valor1 && $registro['d13'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d13'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d13'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d14'] >= $registro->valor1 && $registro['d14'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d14'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d14'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d15'] >= $registro->valor1 && $registro['d15'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d15'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d15'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d16'] >= $registro->valor1 && $registro['d16'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d16'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d16'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d17'] >= $registro->valor1 && $registro['d17'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d17'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d17'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d18'] >= $registro->valor1 && $registro['d18'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d18'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d18'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d19'] >= $registro->valor1 && $registro['d19'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d19'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d19'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d20'] >= $registro->valor1 && $registro['d20'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d20'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d20'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d21'] >= $registro->valor1 && $registro['d21'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d21'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d21'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d22'] >= $registro->valor1 && $registro['d22'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d22'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d22'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d23'] >= $registro->valor1 && $registro['d23'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d23'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d23'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d24'] >= $registro->valor1 && $registro['d24'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d24'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d24'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d25'] >= $registro->valor1 && $registro['d25'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d25'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d25'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d26'] >= $registro->valor1 && $registro['d26'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d26'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d26'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d27'] >= $registro->valor1 && $registro['d27'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d27'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d27'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d28'] >= $registro->valor1 && $registro['d28'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d28'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d28'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d29'] >= $registro->valor1 && $registro['d29'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d29'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d29'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d30'] >= $registro->valor1 && $registro['d30'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d30'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d30'] }}</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($registro['d31'] >= $registro->valor1 && $registro['d31'] <= $registro->valor2)
                                            <p style="color: green">{{ $registro['d31'] }}</p>
                                        @else
                                            <p style="color: red">{{ $registro['d31'] }}</p>
                                        @endif
                                    </td>
                                    @role('Admin')
                                    <td>
                                        <form action="{{route('F7-SETCS-ELE-20-L1-01-1-1.destroy',$registro->id)}}" method="POST">
                                        <a href="F7-SETCS-ELE-20-L1-01-1-1/{{$registro->id}}/edit" class="btn btn-warning">Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                    @endrole
                                </tr>
                            @endif
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-20-L1-01-1-1' &&
                                $registro->partetabla == 'AL INICIO DE TURNO' &&
                                $registro->tipo == 'texto' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    <td>
                                        <p>{{ $registro['d1'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d2'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d3'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d4'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d5'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d6'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d7'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d8'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d9'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d10'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d11'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d12'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d13'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d14'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d15'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d16'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d17'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d18'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d19'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d20'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d21'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d22'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d23'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d24'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d25'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d26'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d27'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d28'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d29'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d30'] }}</p>
                                    </td>
                                    <td>
                                        <p>{{ $registro['d31'] }}</p>
                                    </td>
                                    @role('Admin')
                                    <td>
                                        <form action="{{route('F7-SETCS-ELE-20-L1-01-1-1.destroy',$registro->id)}}" method="POST">
                                        <a href="F7-SETCS-ELE-20-L1-01-1-1/{{$registro->id}}/edit" class="btn btn-warning">Editar</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                    @endrole
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
            </table>
        </div><br><br><br>
                    <a href="{{route('checkSETCS20')}}" class="btn btn-primary" id="btnIndex">Chequeo Diario</a>
                    @role('Admin')
                    <a href="F7-SETCS-ELE-20-L1-01-1-1/create" class="btn btn-success" id="btnIndex2">Añadir criterio</a>
                    <a href="{{route('pdfprintSETCS20')}}" class="btn btn-danger" id="btnIndex3">Guardar PDF</a>
                    @endrole
                    <a href="/reversoSETCS20" class="btn btn-secondary" id="btnIndex4">Reverso</a>                    
</body>
</html>
