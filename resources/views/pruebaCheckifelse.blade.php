<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F7-SETCS-ELE-CR-L1-01  T1</title>
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
                <a href="/logout" class="btn" id="b3">Cerrar sesion</a> 
                @endauth                       
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
                        @foreach ($registros as $key=>$registro)
                        <form action="{{route('finalcheck',$registro->id)}}" method="POST">                            
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-CR-L1-01' &&
                                $registro->partetabla == 'AL INICIO DE TURNO' &&
                                $registro->tipo == 'cumple' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    <td>                                    
                                        @if ($dia == 31 || $dia == 1 || $dia == 2)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]"  value="Cumple" {{ $registro->d1 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]" value="No Cumple" {{ $registro->d1 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]" value="No Aplica" {{ $registro->d1 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]" value="NP" {{ $registro->d1 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]" value="Cumple" disabled{{ $registro->d1 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]"  value="No Cumple" disabled{{ $registro->d1 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]"  value="No Aplica" disabled{{ $registro->d1 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]" value="NP" disabled{{ $registro->d1 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif                                                                  
                                    </td>
                                    <td>
                                        @if ($dia == 1 || $dia == 2 || $dia == 3)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]"  value="Cumple" {{ $registro->d2 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]" value="No Cumple" {{ $registro->d2 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]" value="No Aplica" {{ $registro->d2 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]" value="NP" {{ $registro->d2 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]" value="Cumple" disabled{{ $registro->d2 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]"  value="No Cumple" disabled{{ $registro->d2 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]"  value="No Aplica" disabled{{ $registro->d2 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]" value="NP" disabled{{ $registro->d2 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 2 || $dia == 3 || $dia == 4)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]"  value="Cumple" {{ $registro->d3 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]" value="No Cumple" {{ $registro->d3 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]" value="No Aplica" {{ $registro->d3 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]" value="NP" {{ $registro->d3 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]" value="Cumple" disabled{{ $registro->d3 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]"  value="No Cumple" disabled{{ $registro->d3 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]"  value="No Aplica" disabled{{ $registro->d3 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]" value="NP" disabled{{ $registro->d3 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 3 || $dia == 4 || $dia == 5)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]"  value="Cumple" {{ $registro->d4 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]" value="No Cumple" {{ $registro->d4 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]" value="No Aplica" {{ $registro->d4 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]" value="NP" {{ $registro->d4 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]" value="Cumple" disabled{{ $registro->d4 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]"  value="No Cumple" disabled{{ $registro->d4 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]"  value="No Aplica" disabled{{ $registro->d4 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]" value="NP" disabled{{ $registro->d4 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 4 || $dia == 5 || $dia == 6)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]"  value="Cumple" {{ $registro->d5 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]" value="No Cumple" {{ $registro->d5 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]" value="No Aplica" {{ $registro->d5 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]" value="NP" {{ $registro->d5 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]" value="Cumple" disabled{{ $registro->d5 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]"  value="No Cumple" disabled{{ $registro->d5 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]"  value="No Aplica" disabled{{ $registro->d5 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]" value="NP" disabled{{ $registro->d5 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 5 || $dia == 6 || $dia == 7)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]"  value="Cumple" {{ $registro->d6 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]" value="No Cumple" {{ $registro->d6 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]" value="No Aplica" {{ $registro->d6 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]" value="NP" {{ $registro->d6 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]" value="Cumple" disabled{{ $registro->d6 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]"  value="No Cumple" disabled{{ $registro->d6 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]"  value="No Aplica" disabled{{ $registro->d6 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]" value="NP" disabled{{ $registro->d6 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 6 || $dia == 7 || $dia == 8)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]"  value="Cumple" {{ $registro->d7 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]" value="No Cumple" {{ $registro->d7 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]" value="No Aplica" {{ $registro->d7 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]" value="NP" {{ $registro->d7 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]" value="Cumple" disabled{{ $registro->d7 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]"  value="No Cumple" disabled{{ $registro->d7 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]"  value="No Aplica" disabled{{ $registro->d7 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]" value="NP" disabled{{ $registro->d7 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 7 || $dia == 8 || $dia == 9)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]"  value="Cumple" {{ $registro->d8 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]" value="No Cumple" {{ $registro->d8 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]" value="No Aplica" {{ $registro->d8 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]" value="NP" {{ $registro->d8 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]" value="Cumple" disabled{{ $registro->d8 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]"  value="No Cumple" disabled{{ $registro->d8 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]"  value="No Aplica" disabled{{ $registro->d8 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]" value="NP" disabled{{ $registro->d8 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 8 || $dia == 9 || $dia == 10)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]"  value="Cumple" {{ $registro->d9 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]" value="No Cumple" {{ $registro->d9 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]" value="No Aplica" {{ $registro->d9 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]" value="NP" {{ $registro->d9 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]" value="Cumple" disabled{{ $registro->d9 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]"  value="No Cumple" disabled{{ $registro->d9 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]"  value="No Aplica" disabled{{ $registro->d9 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]" value="NP" disabled{{ $registro->d9 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>

                            @endif
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-CR-L1-01' &&
                                $registro->partetabla == 'AL INICIO DE TURNO' &&
                                $registro->tipo == 'rango' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    <td>
                                        @if ($dia == 31 || $dia == 1 || $dia == 2)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 1 || $dia == 2 || $dia == 3)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 2 || $dia == 3 || $dia == 4)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 3 || $dia == 4 || $dia == 5)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 4 || $dia == 5 || $dia == 6)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 5 || $dia == 6 || $dia == 7)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 6 || $dia == 7 || $dia == 8)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 7 || $dia == 8 || $dia == 9)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 8 || $dia == 9 || $dia == 10)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 9 || $dia == 10 || $dia == 11)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 10 || $dia == 11 || $dia == 12)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 11 || $dia == 12 || $dia == 13)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 12 || $dia == 13 || $dia == 14)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 13 || $dia == 14 || $dia == 15)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 14 || $dia == 15 || $dia == 16)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 15 || $dia == 16 || $dia == 17)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 16 || $dia == 17 || $dia == 18)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 17 || $dia == 18 || $dia == 19)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 18 || $dia == 19 || $dia == 20)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 19 || $dia == 20 || $dia == 21)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 20 || $dia == 21 || $dia == 22)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 21 || $dia == 22 || $dia == 23)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 22 || $dia == 23 || $dia == 24)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" value="{{$registro->d23}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" value="{{$registro->d23}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 23 || $dia == 24 || $dia == 25)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" value="{{$registro->d24}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" value="{{$registro->d24}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 24 || $dia == 25 || $dia == 26)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" value="{{$registro->d25}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" value="{{$registro->d25}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 25 || $dia == 26 || $dia == 27)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" value="{{$registro->d26}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" value="{{$registro->d26}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 26 || $dia == 27 || $dia == 28)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" value="{{$registro->d27}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" value="{{$registro->d27}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 27 || $dia == 28 || $dia == 29)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" value="{{$registro->d28}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" value="{{$registro->d28}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 28 || $dia == 29 || $dia == 30)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" value="{{$registro->d29}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" value="{{$registro->d29}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 29 || $dia == 30 || $dia == 31)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" value="{{$registro->d30}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" value="{{$registro->d30}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 30 || $dia == 31 || $dia == 1)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" value="{{$registro->d31}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" value="{{$registro->d31}}" disabled>
                                        @endif
                                    </td>
                                </tr>
                            @endif
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-CR-L1-01' &&
                                $registro->partetabla == 'AL INICIO DE TURNO' &&
                                $registro->tipo == 'texto' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    <td>
                                        @if ($dia == 31 || $dia == 1 || $dia == 2)
                                        <input type="text" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 1 || $dia == 2 || $dia == 3)
                                        <input type="text" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 2 || $dia == 3 || $dia == 4)
                                        <input type="text" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}" disabled>
                                        @endif
                                    </td>
                                    <td>    
                                        @if ($dia == 3 || $dia == 4 || $dia == 5)
                                        <input type="text" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 4 || $dia == 5 || $dia == 6)
                                        <input type="text" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 5 || $dia == 6 || $dia == 7)
                                        <input type="text" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 6 || $dia == 7 || $dia == 8)
                                        <input type="text" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}" disabled> 
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 7 || $dia == 8 || $dia == 9)
                                        <input type="text" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 8 || $dia == 9 || $dia == 10)
                                        <input type="text" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 9 || $dia == 10 || $dia == 11)
                                        <input type="text" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 10 || $dia == 11 || $dia == 12)
                                        <input type="text" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 11 || $dia == 12 || $dia == 13)
                                        <input type="text" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 12 || $dia == 13 || $dia == 14)
                                        <input type="text" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 13 || $dia == 14 || $dia == 15)
                                        <input type="text" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}">
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 14 || $dia == 15 || $dia == 16)
                                        <input type="text" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 15 || $dia == 16 || $dia == 17)
                                        <input type="text" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 16 || $dia == 17 || $dia == 18)
                                        <input type="text" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 17 || $dia == 18 || $dia == 19)
                                        <input type="text" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 18 || $dia == 19 || $dia == 20)
                                        <input type="text" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 19 || $dia == 20 || $dia == 21)
                                        <input type="text" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 20 || $dia == 21 || $dia == 22)
                                        <input type="text" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 21 || $dia == 22 || $dia == 23)
                                        <input type="text" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 22 || $dia == 23 || $dia == 24)
                                        <input type="text" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" value="{{$registro->d23}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" value="{{$registro->d23}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 23 || $dia == 24 || $dia == 25)
                                        <input type="text" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" value="{{$registro->d24}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" value="{{$registro->d24}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 24 || $dia == 25 || $dia == 26)
                                        <input type="text" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" value="{{$registro->d25}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" value="{{$registro->d25}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 25 || $dia == 26 || $dia == 27)
                                        <input type="text" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" value="{{$registro->d26}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" value="{{$registro->d26}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 26 || $dia == 27 || $dia == 28)
                                        <input type="text" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" value="{{$registro->d27}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" value="{{$registro->d27}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 27 || $dia == 28 || $dia == 29)
                                        <input type="text" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" value="{{$registro->d28}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" value="{{$registro->d28}}" disabled> 
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 28 || $dia == 29 || $dia == 30)
                                        <input type="text" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" value="{{$registro->d29}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" value="{{$registro->d29}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 29 || $dia == 30 || $dia == 31)
                                        <input type="text" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" value="{{$registro->d30}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" value="{{$registro->d30}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 30 || $dia == 31 || $dia == 1)
                                        <input type="text" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" value="{{$registro->d31}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" value="{{$registro->d31}}" disabled>
                                        @endif
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                        <tr>
                        <th colspan="33" class="table-secondary">
                            <p align="center">DIARIO</p>
                        </th>                              
                        </tr>
                        @foreach ($registros as $key=>$registro)                          
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-CR-L1-01' &&
                                $registro->partetabla == 'DIARIO' &&
                                $registro->tipo == 'cumple' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    <td>                                    
                                        @if ($dia == 31 || $dia == 1 || $dia == 2)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]"  value="Cumple" {{ $registro->d1 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]" value="No Cumple" {{ $registro->d1 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]" value="No Aplica" {{ $registro->d1 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]" value="NP" {{ $registro->d1 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]" value="Cumple" disabled{{ $registro->d1 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]"  value="No Cumple" disabled{{ $registro->d1 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]"  value="No Aplica" disabled{{ $registro->d1 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]" value="NP" disabled{{ $registro->d1 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif                                                                  
                                    </td>
                                    <td>
                                        @if ($dia == 1 || $dia == 2 || $dia == 3)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]"  value="Cumple" {{ $registro->d2 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]" value="No Cumple" {{ $registro->d2 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]" value="No Aplica" {{ $registro->d2 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]" value="NP" {{ $registro->d2 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]" value="Cumple" disabled{{ $registro->d2 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]"  value="No Cumple" disabled{{ $registro->d2 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]"  value="No Aplica" disabled{{ $registro->d2 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]" value="NP" disabled{{ $registro->d2 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 2 || $dia == 3 || $dia == 4)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]"  value="Cumple" {{ $registro->d3 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]" value="No Cumple" {{ $registro->d3 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]" value="No Aplica" {{ $registro->d3 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]" value="NP" {{ $registro->d3 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]" value="Cumple" disabled{{ $registro->d3 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]"  value="No Cumple" disabled{{ $registro->d3 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]"  value="No Aplica" disabled{{ $registro->d3 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]" value="NP" disabled{{ $registro->d3 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 3 || $dia == 4 || $dia == 5)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]"  value="Cumple" {{ $registro->d4 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]" value="No Cumple" {{ $registro->d4 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]" value="No Aplica" {{ $registro->d4 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]" value="NP" {{ $registro->d4 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]" value="Cumple" disabled{{ $registro->d4 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]"  value="No Cumple" disabled{{ $registro->d4 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]"  value="No Aplica" disabled{{ $registro->d4 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]" value="NP" disabled{{ $registro->d4 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 4 || $dia == 5 || $dia == 6)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]"  value="Cumple" {{ $registro->d5 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]" value="No Cumple" {{ $registro->d5 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]" value="No Aplica" {{ $registro->d5 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]" value="NP" {{ $registro->d5 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]" value="Cumple" disabled{{ $registro->d5 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]"  value="No Cumple" disabled{{ $registro->d5 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]"  value="No Aplica" disabled{{ $registro->d5 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]" value="NP" disabled{{ $registro->d5 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 5 || $dia == 6 || $dia == 7)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]"  value="Cumple" {{ $registro->d6 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]" value="No Cumple" {{ $registro->d6 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]" value="No Aplica" {{ $registro->d6 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]" value="NP" {{ $registro->d6 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]" value="Cumple" disabled{{ $registro->d6 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]"  value="No Cumple" disabled{{ $registro->d6 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]"  value="No Aplica" disabled{{ $registro->d6 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]" value="NP" disabled{{ $registro->d6 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 6 || $dia == 7 || $dia == 8)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]"  value="Cumple" {{ $registro->d7 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]" value="No Cumple" {{ $registro->d7 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]" value="No Aplica" {{ $registro->d7 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]" value="NP" {{ $registro->d7 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]" value="Cumple" disabled{{ $registro->d7 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]"  value="No Cumple" disabled{{ $registro->d7 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]"  value="No Aplica" disabled{{ $registro->d7 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]" value="NP" disabled{{ $registro->d7 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 7 || $dia == 8 || $dia == 9)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]"  value="Cumple" {{ $registro->d8 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]" value="No Cumple" {{ $registro->d8 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]" value="No Aplica" {{ $registro->d8 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]" value="NP" {{ $registro->d8 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]" value="Cumple" disabled{{ $registro->d8 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]"  value="No Cumple" disabled{{ $registro->d8 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]"  value="No Aplica" disabled{{ $registro->d8 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]" value="NP" disabled{{ $registro->d8 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 8 || $dia == 9 || $dia == 10)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]"  value="Cumple" {{ $registro->d9 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]" value="No Cumple" {{ $registro->d9 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]" value="No Aplica" {{ $registro->d9 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]" value="NP" {{ $registro->d9 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]" value="Cumple" disabled{{ $registro->d9 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]"  value="No Cumple" disabled{{ $registro->d9 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]"  value="No Aplica" disabled{{ $registro->d9 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]" value="NP" disabled{{ $registro->d9 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 9 || $dia == 10 || $dia == 11)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d10]"  value="Cumple" {{ $registro->d10 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d10]" value="No Cumple" {{ $registro->d10 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d10]" value="No Aplica" {{ $registro->d10 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d10]" value="NP" {{ $registro->d10 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d10]" value="Cumple" disabled{{ $registro->d10 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d10]"  value="No Cumple" disabled{{ $registro->d10 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d10]"  value="No Aplica" disabled{{ $registro->d10 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d10]" value="NP" disabled{{ $registro->d10 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 10 || $dia == 11 || $dia == 12)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d11]"  value="Cumple" {{ $registro->d11 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d11]" value="No Cumple" {{ $registro->d11 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d11]" value="No Aplica" {{ $registro->d11 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d11]" value="NP" {{ $registro->d11 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d11]" value="Cumple" disabled{{ $registro->d11 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d11]"  value="No Cumple" disabled{{ $registro->d11 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d11]"  value="No Aplica" disabled{{ $registro->d11 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d11]" value="NP" disabled{{ $registro->d11 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 11 || $dia == 12 || $dia == 13)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d12]"  value="Cumple" {{ $registro->d12 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d12]" value="No Cumple" {{ $registro->d12 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d12]" value="No Aplica" {{ $registro->d12 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d12]" value="NP" {{ $registro->d12 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d12]" value="Cumple" disabled{{ $registro->d12 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d12]"  value="No Cumple" disabled{{ $registro->d12 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d12]"  value="No Aplica" disabled{{ $registro->d12 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d12]" value="NP" disabled{{ $registro->d12 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 12 || $dia == 13 || $dia == 14)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d13]"  value="Cumple" {{ $registro->d13 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d13]" value="No Cumple" {{ $registro->d13 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d13]" value="No Aplica" {{ $registro->d13 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d13]" value="NP" {{ $registro->d13 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d13]" value="Cumple" disabled{{ $registro->d13 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d13]"  value="No Cumple" disabled{{ $registro->d13 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d13]"  value="No Aplica" disabled{{ $registro->d13 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d13]" value="NP" disabled{{ $registro->d13 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 13 || $dia == 14 || $dia == 15)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d14]"  value="Cumple" {{ $registro->d14 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d14]" value="No Cumple" {{ $registro->d14 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d14]" value="No Aplica" {{ $registro->d14 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d14]" value="NP" {{ $registro->d14 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d14]" value="Cumple" disabled{{ $registro->d14 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d14]"  value="No Cumple" disabled{{ $registro->d14 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d14]"  value="No Aplica" disabled{{ $registro->d14 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d14]" value="NP" disabled{{ $registro->d14 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 14 || $dia == 15 || $dia == 16)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d15]"  value="Cumple" {{ $registro->d15 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d15]" value="No Cumple" {{ $registro->d15 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d15]" value="No Aplica" {{ $registro->d15 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d15]" value="NP" {{ $registro->d15 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d15]" value="Cumple" disabled{{ $registro->d15 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d15]"  value="No Cumple" disabled{{ $registro->d15 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d15]"  value="No Aplica" disabled{{ $registro->d15 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d15]" value="NP" disabled{{ $registro->d15 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 15 || $dia == 16 || $dia == 17)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d16]"  value="Cumple" {{ $registro->d16 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d16]" value="No Cumple" {{ $registro->d16 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d16]" value="No Aplica" {{ $registro->d16 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d16]" value="NP" {{ $registro->d16 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d16]" value="Cumple" disabled{{ $registro->d16 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d16]"  value="No Cumple" disabled{{ $registro->d16 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d16]"  value="No Aplica" disabled{{ $registro->d16 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d16]" value="NP" disabled{{ $registro->d16 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 16 || $dia == 17 || $dia == 18)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d17]"  value="Cumple" {{ $registro->d17 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d17]" value="No Cumple" {{ $registro->d17 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d17]" value="No Aplica" {{ $registro->d17 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d17]" value="NP" {{ $registro->d17 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d17]" value="Cumple" disabled{{ $registro->d17 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d17]"  value="No Cumple" disabled{{ $registro->d17 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d17]"  value="No Aplica" disabled{{ $registro->d17 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d17]" value="NP" disabled{{ $registro->d17 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 17 || $dia == 18 || $dia == 19)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d18]"  value="Cumple" {{ $registro->d18 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d18]" value="No Cumple" {{ $registro->d18 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d18]" value="No Aplica" {{ $registro->d18 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d18]" value="NP" {{ $registro->d18 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d18]" value="Cumple" disabled{{ $registro->d18 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d18]"  value="No Cumple" disabled{{ $registro->d18 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d18]"  value="No Aplica" disabled{{ $registro->d18 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d18]" value="NP" disabled{{ $registro->d18 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 18 || $dia == 19 || $dia == 20)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d19]"  value="Cumple" {{ $registro->d19 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d19]" value="No Cumple" {{ $registro->d19 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d19]" value="No Aplica" {{ $registro->d19 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d19]" value="NP" {{ $registro->d19 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d19]" value="Cumple" disabled{{ $registro->d19 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d19]"  value="No Cumple" disabled{{ $registro->d19 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d19]"  value="No Aplica" disabled{{ $registro->d19 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d19]" value="NP" disabled{{ $registro->d19 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 19 || $dia == 20 || $dia == 21)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d20]"  value="Cumple" {{ $registro->d20 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d20]" value="No Cumple" {{ $registro->d20 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d20]" value="No Aplica" {{ $registro->d20 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d20]" value="NP" {{ $registro->d20 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d20]" value="Cumple" disabled{{ $registro->d20 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d20]"  value="No Cumple" disabled{{ $registro->d20 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d20]"  value="No Aplica" disabled{{ $registro->d20 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d20]" value="NP" disabled{{ $registro->d20 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 20 || $dia == 21 || $dia == 22)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d21]"  value="Cumple" {{ $registro->d21 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d21]" value="No Cumple" {{ $registro->d21 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d21]" value="No Aplica" {{ $registro->d21 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d21]" value="NP" {{ $registro->d21 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d21]" value="Cumple" disabled{{ $registro->d21 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d21]"  value="No Cumple" disabled{{ $registro->d21== 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d21]"  value="No Aplica" disabled{{ $registro->d21 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d21]" value="NP" disabled{{ $registro->d21 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 21 || $dia == 22 || $dia == 23)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d22]"  value="Cumple" {{ $registro->d22 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d22]" value="No Cumple" {{ $registro->d22 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d22]" value="No Aplica" {{ $registro->d22 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d22]" value="NP" {{ $registro->d22 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d22]" value="Cumple" disabled{{ $registro->d22 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d22]"  value="No Cumple" disabled{{ $registro->d22 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d22]"  value="No Aplica" disabled{{ $registro->d22 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d22]" value="NP" disabled{{ $registro->d22 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 22 || $dia == 23 || $dia == 24)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d23]"  value="Cumple" {{ $registro->d23 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d23]" value="No Cumple" {{ $registro->d23 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d23]" value="No Aplica" {{ $registro->d23 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d23]" value="NP" {{ $registro->d23 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d23]" value="Cumple" disabled{{ $registro->d23 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d23]"  value="No Cumple" disabled{{ $registro->d23 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d23]"  value="No Aplica" disabled{{ $registro->d23 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d23]" value="NP" disabled{{ $registro->d23 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 23 || $dia == 24 || $dia == 25)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d24]"  value="Cumple" {{ $registro->d24 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d24]" value="No Cumple" {{ $registro->d24 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d24]" value="No Aplica" {{ $registro->d24 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d24]" value="NP" {{ $registro->d24 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d24]" value="Cumple" disabled{{ $registro->d24 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d24]"  value="No Cumple" disabled{{ $registro->d24 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d24]"  value="No Aplica" disabled{{ $registro->d24 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d24]" value="NP" disabled{{ $registro->d24 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 24 || $dia == 25 || $dia == 26)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d25]"  value="Cumple" {{ $registro->d25 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d25]" value="No Cumple" {{ $registro->d25 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d25]" value="No Aplica" {{ $registro->d25 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d25]" value="NP" {{ $registro->d25 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d25]" value="Cumple" disabled{{ $registro->d25 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d25]"  value="No Cumple" disabled{{ $registro->d25 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d25]"  value="No Aplica" disabled{{ $registro->d25 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d25]" value="NP" disabled{{ $registro->d25 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 25 || $dia == 26 || $dia == 27)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d26]"  value="Cumple" {{ $registro->d26 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d26]" value="No Cumple" {{ $registro->d26 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d26]" value="No Aplica" {{ $registro->d26 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d26]" value="NP" {{ $registro->d26 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d26]" value="Cumple" disabled{{ $registro->d26 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d26]"  value="No Cumple" disabled{{ $registro->d26 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d26]"  value="No Aplica" disabled{{ $registro->d26 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d26]" value="NP" disabled{{ $registro->d26 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 26 || $dia == 27 || $dia == 28)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d27]"  value="Cumple" {{ $registro->d27 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d27]" value="No Cumple" {{ $registro->d27 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d27]" value="No Aplica" {{ $registro->d27 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d27]" value="NP" {{ $registro->d27 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d27]" value="Cumple" disabled{{ $registro->d27 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d27]"  value="No Cumple" disabled{{ $registro->d27 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d27]"  value="No Aplica" disabled{{ $registro->d27 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d27]" value="NP" disabled{{ $registro->d27 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 27 || $dia == 28 || $dia == 29)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d28]"  value="Cumple" {{ $registro->d28 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d28]" value="No Cumple" {{ $registro->d28 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d28]" value="No Aplica" {{ $registro->d28 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d28]" value="NP" {{ $registro->d28 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d28]" value="Cumple" disabled{{ $registro->d28 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d28]"  value="No Cumple" disabled{{ $registro->d28 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d28]"  value="No Aplica" disabled{{ $registro->d28 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d28]" value="NP" disabled{{ $registro->d28 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 28 || $dia == 29 || $dia == 30)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d29]"  value="Cumple" {{ $registro->d29 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d29]" value="No Cumple" {{ $registro->d29 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d29]" value="No Aplica" {{ $registro->d29 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d29]" value="NP" {{ $registro->d29 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d29]" value="Cumple" disabled{{ $registro->d29 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d29]"  value="No Cumple" disabled{{ $registro->d29 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d29]"  value="No Aplica" disabled{{ $registro->d29 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d29]" value="NP" disabled{{ $registro->d29 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td> 
                                    <td>
                                        @if ($dia == 29 || $dia == 30 || $dia == 31)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d30]"  value="Cumple" {{ $registro->d30 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d30]" value="No Cumple" {{ $registro->d30 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d30]" value="No Aplica" {{ $registro->d30 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d30]" value="NP" {{ $registro->d30 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d30]" value="Cumple" disabled{{ $registro->d30 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d30]"  value="No Cumple" disabled{{ $registro->d30 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d30]"  value="No Aplica" disabled{{ $registro->d30 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d30]" value="NP" disabled{{ $registro->d30 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 30 || $dia == 31 || $dia == 1)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d31]"  value="Cumple" {{ $registro->d31 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d31]" value="No Cumple" {{ $registro->d31 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d31]" value="No Aplica" {{ $registro->d31 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d31]" value="NP" {{ $registro->d31 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d31]" value="Cumple" disabled{{ $registro->d31 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d31]"  value="No Cumple" disabled{{ $registro->d31 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d31]"  value="No Aplica" disabled{{ $registro->d31 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d31]" value="NP" disabled {{ $registro->d31 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                </tr>
                            @endif                         
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-CR-L1-01' &&
                                $registro->partetabla == 'DIARIO' &&
                                $registro->tipo == 'rango' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    <td>
                                        @if ($dia == 31 || $dia == 1 || $dia == 2)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 1 || $dia == 2 || $dia == 3)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 2 || $dia == 3 || $dia == 4)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 3 || $dia == 4 || $dia == 5)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 4 || $dia == 5 || $dia == 6)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 5 || $dia == 6 || $dia == 7)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 6 || $dia == 7 || $dia == 8)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 7 || $dia == 8 || $dia == 9)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 8 || $dia == 9 || $dia == 10)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 9 || $dia == 10 || $dia == 11)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 10 || $dia == 11 || $dia == 12)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 11 || $dia == 12 || $dia == 13)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 12 || $dia == 13 || $dia == 14)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 13 || $dia == 14 || $dia == 15)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 14 || $dia == 15 || $dia == 16)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 15 || $dia == 16 || $dia == 17)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 16 || $dia == 17 || $dia == 18)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 17 || $dia == 18 || $dia == 19)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 18 || $dia == 19 || $dia == 20)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 19 || $dia == 20 || $dia == 21)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 20 || $dia == 21 || $dia == 22)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 21 || $dia == 22 || $dia == 23)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 22 || $dia == 23 || $dia == 24)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" value="{{$registro->d23}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" value="{{$registro->d23}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 23 || $dia == 24 || $dia == 25)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" value="{{$registro->d24}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" value="{{$registro->d24}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 24 || $dia == 25 || $dia == 26)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" value="{{$registro->d25}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" value="{{$registro->d25}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 25 || $dia == 26 || $dia == 27)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" value="{{$registro->d26}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" value="{{$registro->d26}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 26 || $dia == 27 || $dia == 28)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" value="{{$registro->d27}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" value="{{$registro->d27}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 27 || $dia == 28 || $dia == 29)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" value="{{$registro->d28}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" value="{{$registro->d28}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 28 || $dia == 29 || $dia == 30)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" value="{{$registro->d29}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" value="{{$registro->d29}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 29 || $dia == 30 || $dia == 31)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" value="{{$registro->d30}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" value="{{$registro->d30}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 30 || $dia == 31 || $dia == 1)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" value="{{$registro->d31}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" value="{{$registro->d31}}" disabled>
                                        @endif
                                    </td>
                                </tr>
                            @endif                       
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-CR-L1-01' &&
                                $registro->partetabla == 'DIARIO' &&
                                $registro->tipo == 'texto' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    <td>
                                        @if ($dia == 31 || $dia == 1 || $dia == 2)
                                        <input type="text" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 1 || $dia == 2 || $dia == 3)
                                        <input type="text" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 2 || $dia == 3 || $dia == 4)
                                        <input type="text" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}" disabled>
                                        @endif
                                    </td>
                                    <td>    
                                        @if ($dia == 3 || $dia == 4 || $dia == 5)
                                        <input type="text" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 4 || $dia == 5 || $dia == 6)
                                        <input type="text" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 5 || $dia == 6 || $dia == 7)
                                        <input type="text" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 6 || $dia == 7 || $dia == 8)
                                        <input type="text" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}" disabled> 
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 7 || $dia == 8 || $dia == 9)
                                        <input type="text" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 8 || $dia == 9 || $dia == 10)
                                        <input type="text" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 9 || $dia == 10 || $dia == 11)
                                        <input type="text" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 10 || $dia == 11 || $dia == 12)
                                        <input type="text" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 11 || $dia == 12 || $dia == 13)
                                        <input type="text" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 12 || $dia == 13 || $dia == 14)
                                        <input type="text" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 13 || $dia == 14 || $dia == 15)
                                        <input type="text" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}">
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 14 || $dia == 15 || $dia == 16)
                                        <input type="text" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 15 || $dia == 16 || $dia == 17)
                                        <input type="text" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 16 || $dia == 17 || $dia == 18)
                                        <input type="text" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 17 || $dia == 18 || $dia == 19)
                                        <input type="text" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 18 || $dia == 19 || $dia == 20)
                                        <input type="text" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 19 || $dia == 20 || $dia == 21)
                                        <input type="text" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 20 || $dia == 21 || $dia == 22)
                                        <input type="text" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 21 || $dia == 22 || $dia == 23)
                                        <input type="text" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 22 || $dia == 23 || $dia == 24)
                                        <input type="text" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" value="{{$registro->d23}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" value="{{$registro->d23}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 23 || $dia == 24 || $dia == 25)
                                        <input type="text" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" value="{{$registro->d24}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" value="{{$registro->d24}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 24 || $dia == 25 || $dia == 26)
                                        <input type="text" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" value="{{$registro->d25}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" value="{{$registro->d25}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 25 || $dia == 26 || $dia == 27)
                                        <input type="text" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" value="{{$registro->d26}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" value="{{$registro->d26}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 26 || $dia == 27 || $dia == 28)
                                        <input type="text" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" value="{{$registro->d27}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" value="{{$registro->d27}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 27 || $dia == 28 || $dia == 29)
                                        <input type="text" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" value="{{$registro->d28}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" value="{{$registro->d28}}" disabled> 
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 28 || $dia == 29 || $dia == 30)
                                        <input type="text" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" value="{{$registro->d29}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" value="{{$registro->d29}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 29 || $dia == 30 || $dia == 31)
                                        <input type="text" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" value="{{$registro->d30}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" value="{{$registro->d30}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 30 || $dia == 31 || $dia == 1)
                                        <input type="text" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" value="{{$registro->d31}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" value="{{$registro->d31}}" disabled>
                                        @endif
                                    </td>
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
                        @foreach ($registros as $key=>$registro)                          
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-CR-L1-01' &&
                                $registro->partetabla == 'NOTA' &&
                                $registro->tipo == 'cumple' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    <td>                                    
                                        @if ($dia == 31 || $dia == 1 || $dia == 2)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]"  value="Cumple" {{ $registro->d1 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]" value="No Cumple" {{ $registro->d1 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]" value="No Aplica" {{ $registro->d1 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]" value="NP" {{ $registro->d1 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]" value="Cumple" disabled{{ $registro->d1 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]"  value="No Cumple" disabled{{ $registro->d1 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]"  value="No Aplica" disabled{{ $registro->d1 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d1]" value="NP" disabled{{ $registro->d1 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif                                                                  
                                    </td>
                                    <td>
                                        @if ($dia == 1 || $dia == 2 || $dia == 3)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]"  value="Cumple" {{ $registro->d2 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]" value="No Cumple" {{ $registro->d2 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]" value="No Aplica" {{ $registro->d2 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]" value="NP" {{ $registro->d2 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]" value="Cumple" disabled{{ $registro->d2 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]"  value="No Cumple" disabled{{ $registro->d2 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]"  value="No Aplica" disabled{{ $registro->d2 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d2]" value="NP" disabled{{ $registro->d2 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 2 || $dia == 3 || $dia == 4)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]"  value="Cumple" {{ $registro->d3 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]" value="No Cumple" {{ $registro->d3 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]" value="No Aplica" {{ $registro->d3 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]" value="NP" {{ $registro->d3 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]" value="Cumple" disabled{{ $registro->d3 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]"  value="No Cumple" disabled{{ $registro->d3 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]"  value="No Aplica" disabled{{ $registro->d3 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d3]" value="NP" disabled{{ $registro->d3 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 3 || $dia == 4 || $dia == 5)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]"  value="Cumple" {{ $registro->d4 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]" value="No Cumple" {{ $registro->d4 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]" value="No Aplica" {{ $registro->d4 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]" value="NP" {{ $registro->d4 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]" value="Cumple" disabled{{ $registro->d4 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]"  value="No Cumple" disabled{{ $registro->d4 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]"  value="No Aplica" disabled{{ $registro->d4 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d4]" value="NP" disabled{{ $registro->d4 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 4 || $dia == 5 || $dia == 6)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]"  value="Cumple" {{ $registro->d5 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]" value="No Cumple" {{ $registro->d5 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]" value="No Aplica" {{ $registro->d5 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]" value="NP" {{ $registro->d5 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]" value="Cumple" disabled{{ $registro->d5 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]"  value="No Cumple" disabled{{ $registro->d5 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]"  value="No Aplica" disabled{{ $registro->d5 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d5]" value="NP" disabled{{ $registro->d5 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 5 || $dia == 6 || $dia == 7)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]"  value="Cumple" {{ $registro->d6 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]" value="No Cumple" {{ $registro->d6 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]" value="No Aplica" {{ $registro->d6 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]" value="NP" {{ $registro->d6 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]" value="Cumple" disabled{{ $registro->d6 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]"  value="No Cumple" disabled{{ $registro->d6 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]"  value="No Aplica" disabled{{ $registro->d6 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d6]" value="NP" disabled{{ $registro->d6 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 6 || $dia == 7 || $dia == 8)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]"  value="Cumple" {{ $registro->d7 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]" value="No Cumple" {{ $registro->d7 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]" value="No Aplica" {{ $registro->d7 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]" value="NP" {{ $registro->d7 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]" value="Cumple" disabled{{ $registro->d7 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]"  value="No Cumple" disabled{{ $registro->d7 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]"  value="No Aplica" disabled{{ $registro->d7 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d7]" value="NP" disabled{{ $registro->d7 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 7 || $dia == 8 || $dia == 9)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]"  value="Cumple" {{ $registro->d8 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]" value="No Cumple" {{ $registro->d8 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]" value="No Aplica" {{ $registro->d8 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]" value="NP" {{ $registro->d8 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]" value="Cumple" disabled{{ $registro->d8 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]"  value="No Cumple" disabled{{ $registro->d8 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]"  value="No Aplica" disabled{{ $registro->d8 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d8]" value="NP" disabled{{ $registro->d8 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 8 || $dia == 9 || $dia == 10)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]"  value="Cumple" {{ $registro->d9 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]" value="No Cumple" {{ $registro->d9 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]" value="No Aplica" {{ $registro->d9 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]" value="NP" {{ $registro->d9 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]" value="Cumple" disabled{{ $registro->d9 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]"  value="No Cumple" disabled{{ $registro->d9 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]"  value="No Aplica" disabled{{ $registro->d9 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d9]" value="NP" disabled{{ $registro->d9 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 9 || $dia == 10 || $dia == 11)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d10]"  value="Cumple" {{ $registro->d10 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d10]" value="No Cumple" {{ $registro->d10 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d10]" value="No Aplica" {{ $registro->d10 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d10]" value="NP" {{ $registro->d10 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d10]" value="Cumple" disabled{{ $registro->d10 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d10]"  value="No Cumple" disabled{{ $registro->d10 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d10]"  value="No Aplica" disabled{{ $registro->d10 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d10]" value="NP" disabled{{ $registro->d10 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 10 || $dia == 11 || $dia == 12)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d11]"  value="Cumple" {{ $registro->d11 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d11]" value="No Cumple" {{ $registro->d11 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d11]" value="No Aplica" {{ $registro->d11 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d11]" value="NP" {{ $registro->d11 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d11]" value="Cumple" disabled{{ $registro->d11 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d11]"  value="No Cumple" disabled{{ $registro->d11 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d11]"  value="No Aplica" disabled{{ $registro->d11 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d11]" value="NP" disabled{{ $registro->d11 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 11 || $dia == 12 || $dia == 13)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d12]"  value="Cumple" {{ $registro->d12 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d12]" value="No Cumple" {{ $registro->d12 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d12]" value="No Aplica" {{ $registro->d12 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d12]" value="NP" {{ $registro->d12 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d12]" value="Cumple" disabled{{ $registro->d12 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d12]"  value="No Cumple" disabled{{ $registro->d12 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d12]"  value="No Aplica" disabled{{ $registro->d12 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d12]" value="NP" disabled{{ $registro->d12 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 12 || $dia == 13 || $dia == 14)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d13]"  value="Cumple" {{ $registro->d13 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d13]" value="No Cumple" {{ $registro->d13 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d13]" value="No Aplica" {{ $registro->d13 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d13]" value="NP" {{ $registro->d13 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d13]" value="Cumple" disabled{{ $registro->d13 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d13]"  value="No Cumple" disabled{{ $registro->d13 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d13]"  value="No Aplica" disabled{{ $registro->d13 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d13]" value="NP" disabled{{ $registro->d13 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 13 || $dia == 14 || $dia == 15)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d14]"  value="Cumple" {{ $registro->d14 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d14]" value="No Cumple" {{ $registro->d14 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d14]" value="No Aplica" {{ $registro->d14 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d14]" value="NP" {{ $registro->d14 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d14]" value="Cumple" disabled{{ $registro->d14 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d14]"  value="No Cumple" disabled{{ $registro->d14 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d14]"  value="No Aplica" disabled{{ $registro->d14 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d14]" value="NP" disabled{{ $registro->d14 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 14 || $dia == 15 || $dia == 16)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d15]"  value="Cumple" {{ $registro->d15 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d15]" value="No Cumple" {{ $registro->d15 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d15]" value="No Aplica" {{ $registro->d15 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d15]" value="NP" {{ $registro->d15 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d15]" value="Cumple" disabled{{ $registro->d15 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d15]"  value="No Cumple" disabled{{ $registro->d15 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d15]"  value="No Aplica" disabled{{ $registro->d15 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d15]" value="NP" disabled{{ $registro->d15 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 15 || $dia == 16 || $dia == 17)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d16]"  value="Cumple" {{ $registro->d16 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d16]" value="No Cumple" {{ $registro->d16 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d16]" value="No Aplica" {{ $registro->d16 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d16]" value="NP" {{ $registro->d16 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d16]" value="Cumple" disabled{{ $registro->d16 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d16]"  value="No Cumple" disabled{{ $registro->d16 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d16]"  value="No Aplica" disabled{{ $registro->d16 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d16]" value="NP" disabled{{ $registro->d16 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 16 || $dia == 17 || $dia == 18)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d17]"  value="Cumple" {{ $registro->d17 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d17]" value="No Cumple" {{ $registro->d17 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d17]" value="No Aplica" {{ $registro->d17 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d17]" value="NP" {{ $registro->d17 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d17]" value="Cumple" disabled{{ $registro->d17 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d17]"  value="No Cumple" disabled{{ $registro->d17 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d17]"  value="No Aplica" disabled{{ $registro->d17 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d17]" value="NP" disabled{{ $registro->d17 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 17 || $dia == 18 || $dia == 19)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d18]"  value="Cumple" {{ $registro->d18 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d18]" value="No Cumple" {{ $registro->d18 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d18]" value="No Aplica" {{ $registro->d18 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d18]" value="NP" {{ $registro->d18 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d18]" value="Cumple" disabled{{ $registro->d18 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d18]"  value="No Cumple" disabled{{ $registro->d18 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d18]"  value="No Aplica" disabled{{ $registro->d18 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d18]" value="NP" disabled{{ $registro->d18 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 18 || $dia == 19 || $dia == 20)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d19]"  value="Cumple" {{ $registro->d19 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d19]" value="No Cumple" {{ $registro->d19 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d19]" value="No Aplica" {{ $registro->d19 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d19]" value="NP" {{ $registro->d19 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d19]" value="Cumple" disabled{{ $registro->d19 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d19]"  value="No Cumple" disabled{{ $registro->d19 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d19]"  value="No Aplica" disabled{{ $registro->d19 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d19]" value="NP" disabled{{ $registro->d19 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 19 || $dia == 20 || $dia == 21)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d20]"  value="Cumple" {{ $registro->d20 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d20]" value="No Cumple" {{ $registro->d20 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d20]" value="No Aplica" {{ $registro->d20 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d20]" value="NP" {{ $registro->d20 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d20]" value="Cumple" disabled{{ $registro->d20 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d20]"  value="No Cumple" disabled{{ $registro->d20 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d20]"  value="No Aplica" disabled{{ $registro->d20 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d20]" value="NP" disabled{{ $registro->d20 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 20 || $dia == 21 || $dia == 22)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d21]"  value="Cumple" {{ $registro->d21 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d21]" value="No Cumple" {{ $registro->d21 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d21]" value="No Aplica" {{ $registro->d21 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d21]" value="NP" {{ $registro->d21 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d21]" value="Cumple" disabled{{ $registro->d21 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d21]"  value="No Cumple" disabled{{ $registro->d21== 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d21]"  value="No Aplica" disabled{{ $registro->d21 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d21]" value="NP" disabled{{ $registro->d21 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 21 || $dia == 22 || $dia == 23)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d22]"  value="Cumple" {{ $registro->d22 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d22]" value="No Cumple" {{ $registro->d22 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d22]" value="No Aplica" {{ $registro->d22 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d22]" value="NP" {{ $registro->d22 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d22]" value="Cumple" disabled{{ $registro->d22 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d22]"  value="No Cumple" disabled{{ $registro->d22 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d22]"  value="No Aplica" disabled{{ $registro->d22 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d22]" value="NP" disabled{{ $registro->d22 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 22 || $dia == 23 || $dia == 24)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d23]"  value="Cumple" {{ $registro->d23 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d23]" value="No Cumple" {{ $registro->d23 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d23]" value="No Aplica" {{ $registro->d23 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d23]" value="NP" {{ $registro->d23 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d23]" value="Cumple" disabled{{ $registro->d23 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d23]"  value="No Cumple" disabled{{ $registro->d23 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d23]"  value="No Aplica" disabled{{ $registro->d23 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d23]" value="NP" disabled{{ $registro->d23 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 23 || $dia == 24 || $dia == 25)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d24]"  value="Cumple" {{ $registro->d24 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d24]" value="No Cumple" {{ $registro->d24 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d24]" value="No Aplica" {{ $registro->d24 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d24]" value="NP" {{ $registro->d24 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d24]" value="Cumple" disabled{{ $registro->d24 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d24]"  value="No Cumple" disabled{{ $registro->d24 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d24]"  value="No Aplica" disabled{{ $registro->d24 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d24]" value="NP" disabled{{ $registro->d24 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 24 || $dia == 25 || $dia == 26)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d25]"  value="Cumple" {{ $registro->d25 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d25]" value="No Cumple" {{ $registro->d25 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d25]" value="No Aplica" {{ $registro->d25 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d25]" value="NP" {{ $registro->d25 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d25]" value="Cumple" disabled{{ $registro->d25 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d25]"  value="No Cumple" disabled{{ $registro->d25 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d25]"  value="No Aplica" disabled{{ $registro->d25 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d25]" value="NP" disabled{{ $registro->d25 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 25 || $dia == 26 || $dia == 27)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d26]"  value="Cumple" {{ $registro->d26 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d26]" value="No Cumple" {{ $registro->d26 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d26]" value="No Aplica" {{ $registro->d26 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d26]" value="NP" {{ $registro->d26 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d26]" value="Cumple" disabled{{ $registro->d26 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d26]"  value="No Cumple" disabled{{ $registro->d26 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d26]"  value="No Aplica" disabled{{ $registro->d26 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d26]" value="NP" disabled{{ $registro->d26 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 26 || $dia == 27 || $dia == 28)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d27]"  value="Cumple" {{ $registro->d27 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d27]" value="No Cumple" {{ $registro->d27 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d27]" value="No Aplica" {{ $registro->d27 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d27]" value="NP" {{ $registro->d27 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d27]" value="Cumple" disabled{{ $registro->d27 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d27]"  value="No Cumple" disabled{{ $registro->d27 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d27]"  value="No Aplica" disabled{{ $registro->d27 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d27]" value="NP" disabled{{ $registro->d27 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 27 || $dia == 28 || $dia == 29)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d28]"  value="Cumple" {{ $registro->d28 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d28]" value="No Cumple" {{ $registro->d28 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d28]" value="No Aplica" {{ $registro->d28 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d28]" value="NP" {{ $registro->d28 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d28]" value="Cumple" disabled{{ $registro->d28 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d28]"  value="No Cumple" disabled{{ $registro->d28 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d28]"  value="No Aplica" disabled{{ $registro->d28 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d28]" value="NP" disabled{{ $registro->d28 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 28 || $dia == 29 || $dia == 30)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d29]"  value="Cumple" {{ $registro->d29 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d29]" value="No Cumple" {{ $registro->d29 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d29]" value="No Aplica" {{ $registro->d29 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d29]" value="NP" {{ $registro->d29 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d29]" value="Cumple" disabled{{ $registro->d29 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d29]"  value="No Cumple" disabled{{ $registro->d29 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d29]"  value="No Aplica" disabled{{ $registro->d29 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d29]" value="NP" disabled{{ $registro->d29 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td> 
                                    <td>
                                        @if ($dia == 29 || $dia == 30 || $dia == 31)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d30]"  value="Cumple" {{ $registro->d30 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d30]" value="No Cumple" {{ $registro->d30 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d30]" value="No Aplica" {{ $registro->d30 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d30]" value="NP" {{ $registro->d30 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d30]" value="Cumple" disabled{{ $registro->d30 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d30]"  value="No Cumple" disabled{{ $registro->d30 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d30]"  value="No Aplica" disabled{{ $registro->d30 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d30]" value="NP" disabled{{ $registro->d30 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                    <td>
                                        @if ($dia == 30 || $dia == 31 || $dia == 1)
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d31]"  value="Cumple" {{ $registro->d31 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d31]" value="No Cumple" {{ $registro->d31 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d31]" value="No Aplica" {{ $registro->d31 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d31]" value="NP" {{ $registro->d31 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @else
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d31]" value="Cumple" disabled{{ $registro->d31 == 'Cumple' ? 'checked' : '' }}> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d31]"  value="No Cumple" disabled{{ $registro->d31 == 'No Cumple' ? 'checked' : '' }}> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d31]"  value="No Aplica" disabled{{ $registro->d31 == 'No Aplica' ? 'checked' : '' }}> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="registro[{{$key}}][d31]" value="NP" disabled {{ $registro->d31 == 'NP' ? 'checked' : '' }}> NP
                                        </label>
                                        @endif 
                                    </td>
                                </tr>
                            @endif                         
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-CR-L1-01' &&
                                $registro->partetabla == 'NOTA' &&
                                $registro->tipo == 'rango' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    <td>
                                        @if ($dia == 31 || $dia == 1 || $dia == 2)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 1 || $dia == 2 || $dia == 3)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 2 || $dia == 3 || $dia == 4)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 3 || $dia == 4 || $dia == 5)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 4 || $dia == 5 || $dia == 6)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 5 || $dia == 6 || $dia == 7)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 6 || $dia == 7 || $dia == 8)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 7 || $dia == 8 || $dia == 9)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 8 || $dia == 9 || $dia == 10)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 9 || $dia == 10 || $dia == 11)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 10 || $dia == 11 || $dia == 12)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 11 || $dia == 12 || $dia == 13)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 12 || $dia == 13 || $dia == 14)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 13 || $dia == 14 || $dia == 15)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 14 || $dia == 15 || $dia == 16)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 15 || $dia == 16 || $dia == 17)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 16 || $dia == 17 || $dia == 18)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 17 || $dia == 18 || $dia == 19)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 18 || $dia == 19 || $dia == 20)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 19 || $dia == 20 || $dia == 21)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 20 || $dia == 21 || $dia == 22)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 21 || $dia == 22 || $dia == 23)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 22 || $dia == 23 || $dia == 24)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" value="{{$registro->d23}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" value="{{$registro->d23}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 23 || $dia == 24 || $dia == 25)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" value="{{$registro->d24}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" value="{{$registro->d24}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 24 || $dia == 25 || $dia == 26)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" value="{{$registro->d25}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" value="{{$registro->d25}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 25 || $dia == 26 || $dia == 27)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" value="{{$registro->d26}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" value="{{$registro->d26}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 26 || $dia == 27 || $dia == 28)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" value="{{$registro->d27}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" value="{{$registro->d27}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 27 || $dia == 28 || $dia == 29)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" value="{{$registro->d28}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" value="{{$registro->d28}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 28 || $dia == 29 || $dia == 30)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" value="{{$registro->d29}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" value="{{$registro->d29}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 29 || $dia == 30 || $dia == 31)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" value="{{$registro->d30}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" value="{{$registro->d30}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 30 || $dia == 31 || $dia == 1)
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" value="{{$registro->d31}}">
                                        @else
                                        <input type="tel" step="0.01" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" value="{{$registro->d31}}" disabled>
                                        @endif
                                    </td>
                                </tr>
                            @endif                         
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-CR-L1-01' &&
                                $registro->partetabla == 'NOTA' &&
                                $registro->tipo == 'texto' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    <td>
                                        @if ($dia == 31 || $dia == 1 || $dia == 2)
                                        <input type="text" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d1]" id="d1" tabindex="1" value="{{$registro->d1}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 1 || $dia == 2 || $dia == 3)
                                        <input type="text" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d2]" id="d2" tabindex="1" value="{{$registro->d2}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 2 || $dia == 3 || $dia == 4)
                                        <input type="text" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d3]" id="d3" tabindex="1" value="{{$registro->d3}}" disabled>
                                        @endif
                                    </td>
                                    <td>    
                                        @if ($dia == 3 || $dia == 4 || $dia == 5)
                                        <input type="text" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d4]" id="d4" tabindex="1" value="{{$registro->d4}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 4 || $dia == 5 || $dia == 6)
                                        <input type="text" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d5]" id="d5" tabindex="1" value="{{$registro->d5}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 5 || $dia == 6 || $dia == 7)
                                        <input type="text" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d6]" id="d6" tabindex="1" value="{{$registro->d6}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 6 || $dia == 7 || $dia == 8)
                                        <input type="text" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d7]" id="d7" tabindex="1" value="{{$registro->d7}}" disabled> 
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 7 || $dia == 8 || $dia == 9)
                                        <input type="text" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d8]" id="d8" tabindex="1" value="{{$registro->d8}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 8 || $dia == 9 || $dia == 10)
                                        <input type="text" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d9]" id="d9" tabindex="1" value="{{$registro->d9}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 9 || $dia == 10 || $dia == 11)
                                        <input type="text" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d10]" id="d10" tabindex="1" value="{{$registro->d10}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 10 || $dia == 11 || $dia == 12)
                                        <input type="text" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d11]" id="d11" tabindex="1" value="{{$registro->d11}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 11 || $dia == 12 || $dia == 13)
                                        <input type="text" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d12]" id="d12" tabindex="1" value="{{$registro->d12}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 12 || $dia == 13 || $dia == 14)
                                        <input type="text" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d13]" id="d13" tabindex="1" value="{{$registro->d13}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 13 || $dia == 14 || $dia == 15)
                                        <input type="text" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d14]" id="d14" tabindex="1" value="{{$registro->d14}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 14 || $dia == 15 || $dia == 16)
                                        <input type="text" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d15]" id="d15" tabindex="1" value="{{$registro->d15}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 15 || $dia == 16 || $dia == 17)
                                        <input type="text" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d16]" id="d16" tabindex="1" value="{{$registro->d16}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 16 || $dia == 17 || $dia == 18)
                                        <input type="text" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d17]" id="d17" tabindex="1" value="{{$registro->d17}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 17 || $dia == 18 || $dia == 19)
                                        <input type="text" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d18]" id="d18" tabindex="1" value="{{$registro->d18}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 18 || $dia == 19 || $dia == 20)
                                        <input type="text" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d19]" id="d19" tabindex="1" value="{{$registro->d19}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 19 || $dia == 20 || $dia == 21)
                                        <input type="text" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d20]" id="d20" tabindex="1" value="{{$registro->d20}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 20 || $dia == 21 || $dia == 22)
                                        <input type="text" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d21]" id="d21" tabindex="1" value="{{$registro->d21}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 21 || $dia == 22 || $dia == 23)
                                        <input type="text" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d22]" id="d22" tabindex="1" value="{{$registro->d22}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 22 || $dia == 23 || $dia == 24)
                                        <input type="text" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" value="{{$registro->d23}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d23]" id="d23" tabindex="1" value="{{$registro->d23}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 23 || $dia == 24 || $dia == 25)
                                        <input type="text" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" value="{{$registro->d24}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d24]" id="d24" tabindex="1" value="{{$registro->d24}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 24 || $dia == 25 || $dia == 26)
                                        <input type="text" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" value="{{$registro->d25}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d25]" id="d25" tabindex="1" value="{{$registro->d25}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 25 || $dia == 26 || $dia == 27)
                                        <input type="text" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" value="{{$registro->d26}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d26]" id="d26" tabindex="1" value="{{$registro->d26}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 26 || $dia == 27 || $dia == 28)
                                        <input type="text" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" value="{{$registro->d27}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d27]" id="d27" tabindex="1" value="{{$registro->d27}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 27 || $dia == 28 || $dia == 29)
                                        <input type="text" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" value="{{$registro->d28}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d28]" id="d28" tabindex="1" value="{{$registro->d28}}" disabled> 
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 28 || $dia == 29 || $dia == 30)
                                        <input type="text" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" value="{{$registro->d29}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d29]" id="d29" tabindex="1" value="{{$registro->d29}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 29 || $dia == 30 || $dia == 31)
                                        <input type="text" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" value="{{$registro->d30}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d30]" id="d30" tabindex="1" value="{{$registro->d30}}" disabled>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($dia == 30 || $dia == 31 || $dia == 1)
                                        <input type="text" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" value="{{$registro->d31}}">
                                        @else
                                        <input type="text" size='15' name="registro[{{$key}}][d31]" id="d31" tabindex="1" value="{{$registro->d31}}" disabled>
                                        @endif
                                    </td>
                                </tr>
                            @endif
                        @endforeach
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




























<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F7-SETCS-ELE-180-L1-01</title>
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
                <a href="F7-SETCS-ELE-180-L1-01-1" class="btn btn-info" style="color: white">Volver</a>
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
                        @foreach ($registros as $key=>$registro)
                        <form action="{{route('finalcheckSETCS18011',$registro->id)}}" method="POST">                            
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-180-L1-01-1' &&
                                $registro->partetabla == 'ARRIBA' &&
                                $registro->tipo == 'cumple' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                    <td>
                                        @php
                                            $fieldName = "registro[{$key}][d{$i}]";
                                            $disabled = !($dia >= $i - 1 && $dia <= $i + 1);
                                        @endphp
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}"  value="Cumple" {{ $registro->{"d{$i}"} == 'Cumple' ? 'checked' : '' }} @if($disabled) disabled @endif> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}" value="No Cumple" {{ $registro->{"d{$i}"} == 'No Cumple' ? 'checked' : '' }} @if($disabled) disabled @endif> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}" value="No Aplica" {{ $registro->{"d{$i}"} == 'No Aplica' ? 'checked' : '' }} @if($disabled) disabled @endif> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}" value="NP" {{ $registro->{"d{$i}"} == 'NP' ? 'checked' : '' }} @if($disabled) disabled @endif> NP
                                        </label>
                                    
                                    </td>
                                    @endfor
                                </tr>
                            @endif
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-180-L1-01-1' &&
                                $registro->partetabla == 'ARRIBA' &&
                                $registro->tipo == 'rango' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <td>
                                            @php
                                                $fieldName = "registro[{$key}][d{$i}]";
                                                $disabled = !($dia >= $i - 1 && $dia <= $i + 1);

                                            @endphp
                                            <input type="tel" step="0.01" size='15' name="{{ $fieldName }}" id="{{ "d{$i}" }}" tabindex="1" value="{{ $registro->{"d{$i}"} }}" @if($disabled) disabled @endif>
                            
                                        </td>
                                    @endfor
                                </tr>
                            @endif
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-180-L1-01-1' &&
                                $registro->partetabla == 'ARRIBA' &&
                                $registro->tipo == 'texto' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <td>
                                            @php
                                                $fieldName = "registro[{$key}][d{$i}]";
                                                $disabled = !($dia >= $i - 1 && $dia <= $i + 1);
                                            @endphp
                                            <input type="text" size="15" name="{{ $fieldName }}" id="{{ "d{$i}" }}" tabindex="1" value="{{ $registro->{"d{$i}"} }}" @if($disabled) disabled @endif>
                                        </td>
                                    @endfor
                                </tr>
                            @endif
                        @endforeach
                        <tr>
                            <th colspan="33" class="table-secondary">
                                <p align="center">DESPUES DE AJUSTES Y/O CAMBIO DE MODELO</p>
                            </th>
                        </tr>
                        @foreach ($registros as $key=>$registro)
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-180-L1-01-1' &&
                                $registro->partetabla == 'ABAJO' &&
                                $registro->tipo == 'cumple' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                    <td>
                                        @php
                                            $fieldName = "registro[{$key}][d{$i}]";
                                            $disabled = !($dia >= $i - 1 && $dia <= $i + 1);
                                        @endphp
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}"  value="Cumple" {{ $registro->{"d{$i}"} == 'Cumple' ? 'checked' : '' }} @if($disabled) disabled @endif> Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}" value="No Cumple" {{ $registro->{"d{$i}"} == 'No Cumple' ? 'checked' : '' }} @if($disabled) disabled @endif> No Cumple
                                        </label>
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}" value="No Aplica" {{ $registro->{"d{$i}"} == 'No Aplica' ? 'checked' : '' }} @if($disabled) disabled @endif> No Aplica
                                        </label>
                                        <label>
                                            <input type="radio" name="{{ $fieldName }}" id="{{ "d{$i}" }}" value="NP" {{ $registro->{"d{$i}"} == 'NP' ? 'checked' : '' }} @if($disabled) disabled @endif> NP
                                        </label>
                                    
                                    </td>
                                    @endfor
                                </tr>
                            @endif
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-180-L1-01-1' &&
                                $registro->partetabla == 'ABAJO' &&
                                $registro->tipo == 'rango' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <td>
                                            @php
                                                $fieldName = "registro[{$key}][d{$i}]";
                                                $disabled = !($dia >= $i - 1 && $dia <= $i + 1);

                                            @endphp
                                            <input type="tel" step="0.01" size='15' name="{{ $fieldName }}" id="{{ "d{$i}" }}" tabindex="1" value="{{ $registro->{"d{$i}"} }}" @if($disabled) disabled @endif>
                            
                                        </td>
                                    @endfor
                                </tr>
                            @endif
                            @if ($registro->turno == '1' &&
                                $registro->documentoid == 'F7-SETCS-ELE-180-L1-01-1' &&
                                $registro->partetabla == 'ABAJO' &&
                                $registro->tipo == 'texto' &&
                                $registro->mes == $datoshoja->mes &&
                                $registro->año == $datoshoja->año)
                                <input class="form-control" type="hidden" value="{{$registro->id}}" name="registro[{{$key}}][id]">
                                <tr>
<td class="fijar">{{ $registro->criterio }}</td>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <td>
                                            @php
                                                $fieldName = "registro[{$key}][d{$i}]";
                                                $disabled = !($dia >= $i - 1 && $dia <= $i + 1);
                                            @endphp
                                            <input type="text" size="15" name="{{ $fieldName }}" id="{{ "d{$i}" }}" tabindex="1" value="{{ $registro->{"d{$i}"} }}" @if($disabled) disabled @endif>
                                        </td>
                                    @endfor
                                </tr>
                            @endif
                        @endforeach
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